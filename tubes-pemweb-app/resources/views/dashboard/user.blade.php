@extends('layouts.mainlayout')

@section('content')
<section class="container mt-5 user-registered-section">
    <h1>User Registered</h1>
    <!-- Display user complaints -->
    <table class="table">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">NIK</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Address</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($totalUser as $user)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $user->nik }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->address }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</section>
@endsection
