<?php

namespace App\Http\Controllers;

use App\Models\Complaint;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class ComplaintController extends Controller
{
    public function index()
    {
        return view('laporan.index', [
            'title' => 'Pengaduan'
        ]);
    }

    // public function indexHome()
    // {
    //     $complaints = Complaint::all();
    //     $categories = Complaint::distinct()->pluck('category')->all();
    //     return view('home', [
    //         'complaints' => $complaints,
    //         'categories' => $categories,
    //     ]);
    // }

    public function indexHome()
    {
        $complaints = Complaint::all();
        $categories = Complaint::distinct()->pluck('category')->all();
        $totalComplaints = count($complaints);

        $categoryCounts = [];
        foreach ($categories as $category) {
            $categoryCount = Complaint::where('category', $category)->count();
            $categoryPercentage = ($categoryCount / $totalComplaints) * 100;

            $categoryCounts[$category] = [
                'count' => $categoryCount,
                'percentage' => $categoryPercentage,
            ];
        }

        return view('home', [
            'complaints' => $complaints,
            'categories' => $categories,
            'categoryCounts' => $categoryCounts,
        ]);
    }


    public function store(Request $request)
    {
        Session::flash('success', 'Data berhasil disimpan');

        $complaintData = $request->validate([
            'category' => 'required',
            'description' => 'required',
            'address' => 'required',
            'file' => 'file|file|max:1024'
        ]);

        if ($request->file('file')) {
            $complaintData['file'] = $request->file('file')->store('complaint-file');
        }

        $user = Auth::user(); // Get the authenticated user
        $complaintData['nik'] = $user->nik; // Assign the authenticated user's nik

        Complaint::create($complaintData);

        return redirect('/');
    }

    public function adminIndex()
    {
        $complaints = Complaint::all();
        return view('dashboard.index', [
            'complaints' => $complaints
        ]);
    }

    public function profileIndex()
    {
        $userNik = Auth::user()->nik;
        $complaints = Complaint::where('nik', $userNik)->get();
        return view('profile', [
            'complaints' => $complaints
        ]);
    }

    public function chart()
    {
        $approvedCount = Complaint::where('status', 'approved')->count();
        $rejectedCount = Complaint::where('status', 'rejected')->count();
        $pendingCount = Complaint::where('status', 'pending')->count();

        return view('dashboard.complaint', [
            'approvedCount' => $approvedCount,
            'rejectedCount' => $rejectedCount,
            'pendingCount' => $pendingCount,
        ]);
    }

    public function updateStatus(Request $request)
    {
        $complaintId = $request->input('complaint_id');
        $status = $request->input('status');
        $progress = $request->input('progress');

        $complaintData = Complaint::find($complaintId);
        if ($complaintData) {
            $complaintData->status = $status;
            $complaintData->progress = $progress;
            $complaintData->save();
        }

        return redirect('/dashboard');
    }
}
