@extends('layouts.mainlayout')

@section('content')
    <div class="container-fluid mt-5 dashboard-section">
        <div class="row">
            @include('partials.sidebar')
            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
                <div
                    class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                    <h1 class="h2">Dashboard</h1>
                </div>

                <h2>Section title</h2>
                <div class="table-responsive-sm">
                    <table class="table table-striped table-sm">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">NIK</th>
                                <th scope="col">Category</th>
                                <th scope="col">Complaint</th>
                                <th scope="col">Address</th>
                                <th scope="col">Status</th>
                                <th scope="col">Progress</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($complaints as $complaint)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $complaint->nik }}</td>
                                    <td>{{ $complaint->category }}</td>
                                    <td>{{ $complaint->description }}</td>
                                    <td>{{ $complaint->address }}</td>
                                    <td>{{ $complaint->status }}</td>
                                    <td>{{ $complaint->progress }}</td>
                                    <td>
                                        {{-- <form action="/updateComplaint" method="POST">
                                            @csrf
                                            <input type="hidden" name="complaint_id" value="{{ $complaint->id }}">
                                            <select class="form-select" name="status">
                                                <option value="pending">Pending</option>
                                                <option value="approved">Approved</option>
                                                <option value="rejected">Rejected</option>
                                            </select>
                                            <select class="form-select" name="progress">
                                                <option value="on-progress">On Progress</option>
                                                <option value="finished">Finished</option>
                                            </select>
                                            <button class="btn btn-sm btn-primary mt-2" type="submit">Update</button>
                                        </form> --}}
                                        <form action="/updateComplaint" method="POST">
                                            @csrf
                                            <input type="hidden" name="complaint_id" value="{{ $complaint->id }}">

                                            <label for="status">Status</label>
                                            <select class="form-select" name="status">
                                                <option value="pending" {{ $complaint->status == 'pending' ? 'selected' : '' }}>Pending</option>
                                                <option value="approved" {{ $complaint->status == 'approved' ? 'selected' : '' }}>Approved</option>
                                                <option value="rejected" {{ $complaint->status == 'rejected' ? 'selected' : '' }}>Rejected</option>
                                            </select>

                                            <label for="progress">Progress</label>
                                            <select class="form-select" name="progress">
                                                <option value="on-progress" {{ $complaint->progress == 'on-progress' ? 'selected' : '' }}>On Progress</option>
                                                <option value="finished" {{ $complaint->progress == 'finished' ? 'selected' : '' }}>Finished</option>
                                            </select>

                                            <button class="btn btn-sm btn-primary mt-2" type="submit">Update</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </main>
        </div>
    </div>
@endsection
