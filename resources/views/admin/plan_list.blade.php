@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Plans</h1>
    <a href="{{ route('plans.create') }}" class="btn btn-primary">Add Plan</a>
    <table class="table">
        <thead>
            <tr>
                <th>Plan</th>
                <th>Service Type</th>
                <th>Amount (KES)</th>
                <th>Queue</th>
                <th>Session Time</th>
                <th>Bytes Quota</th>
                <th>Status</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($plans as $plan)
            <tr>
                <td>{{ $plan->plan }}</td>
                <td>{{ $plan->service_type }}</td>
                <td>{{ $plan->amount }}</td>
                <td>{{ $plan->queue }}</td>
                <td>{{ $plan->session_time }}</td>
                <td>{{ $plan->bytes_quota }}</td>
                <td>{{ $plan->status }}</td>
                <td>
                    <!-- Add edit and delete actions -->
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
