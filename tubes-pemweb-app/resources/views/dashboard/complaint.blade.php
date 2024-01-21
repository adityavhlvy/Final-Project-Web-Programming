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
                <h2>Display Chart</h2>
                <div class="container-fluid w-50">
                    <canvas id="complaintChart"></canvas>
                </div>
                <div class="container-fluid mt-5">
                    <h2>Approved Complaints: {{ $approvedCount }}</h2>
                    <h2>Rejected Complaints: {{ $rejectedCount }}</h2>
                    <h2>Pending Complaints: {{ $pendingCount }}</h2>
                </div>
            </main>
        </div>
    </div>

    <script>
        // Access PHP variables in JavaScript
        const approvedCount = {{ $approvedCount }};
        const rejectedCount = {{ $rejectedCount }};
        const pendingCount = {{ $pendingCount }};

        // Create a chart using Chart.js
        document.addEventListener("DOMContentLoaded", function() {
            const ctx = document.getElementById('complaintChart').getContext('2d');
            const myChart = new Chart(ctx, {
                type: 'polarArea',
                data: {
                    labels: ['Approved', 'Rejected', 'Pending'],
                    datasets: [{
                        label: 'Total Complaints',
                        data: [approvedCount, rejectedCount, pendingCount],
                        backgroundColor: [
                            'rgba(54, 162, 235, 0.5)',
                            'rgba(255, 99, 132, 0.5)',
                            'rgba(255, 206, 86, 0.5)',
                            'rgba(75, 192, 192, 0.5)',
                            'rgba(153, 102, 255, 0.5)',
                        ],
                        borderColor: [
                            'rgba(54, 162, 235, 1)',
                            'rgba(255, 99, 132, 1)',
                            'rgba(255, 206, 86, 1)',
                            'rgba(75, 192, 192, 1)',
                            'rgba(153, 102, 255, 1)',
                        ],
                        borderWidth: 1
                    }]
                },
                options: {
                    scales: {
                        y: {
                            beginAtZero: true
                        }
                    }
                }
            });
        });
    </script>

    <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>

    {{-- Chart JS --}}
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
@endsection
