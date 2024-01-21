@extends('layouts.mainlayout')

@section('content')
<section class="container user-profile-section mt-2">
    <h1>My Profile</h1>
    <p>Welcome, {{ Auth::user()->name }}!</p>
    <form class="my-5" action="/update" method="POST">
        @csrf
        <div class="mb-3">
            <label for="address" class="form-label">Address</label>
            <input type="text" class="form-control" id="address" value="{{ Auth::user()->address }}">
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" value="{{ Auth::user()->email }}">
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</section>
<section class="container mt-5 user-complaints-section">
    <h2>My Complaints</h2>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">NIK</th>
                <th scope="col">Category</th>
                <th scope="col">Complaint</th>
                <th scope="col">Address</th>
                <th scope="col">Status</th>
                <th scope="col">Progress</th>
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
                </tr>
            @endforeach
        </tbody>
    </table>
</section>


@endsection
