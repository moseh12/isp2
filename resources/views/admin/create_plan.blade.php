@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Add Plan</h1>
    <form action="{{ route('plans.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="plan">Plan</label>
            <input type="text" name="plan" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="service_type">Service Type</label>
            <input type="text" name="service_type" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="amount">Amount (KES)</label>
            <input type="number" name="amount" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="queue">Queue</label>
            <input type="text" name="queue" class="form-control">
        </div>
        <div class="form-group">
            <label for="session_time">Session Time</label>
            <input type="text" name="session_time" class="form-control">
        </div>
        <div class="form-group">
            <label for="bytes_quota">Bytes Quota</label>
            <input type="number" name="bytes_quota" class="form-control">
        </div>
        <div class="form-group">
            <label for="status">Status</label>
            <input type="text" name="status" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary">Add Plan</button>
    </form>
</div>
@endsection
