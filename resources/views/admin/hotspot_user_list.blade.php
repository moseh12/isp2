<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotspot User List</title>
    <link rel="stylesheet" href="path/to/bootstrap.css"> <!-- Add Bootstrap CSS -->
</head>
<body>

    <div class="container mt-5">
        <h1>Hotspot User List</h1>
        <div class="mb-3">
            <a href="{{ route('admin.user.create') }}" class="btn btn-primary">Add User</a>
        </div>

        <table class="table table-striped">
            <thead>
                <tr>
                    <th>SL</th>
                    <th>Username</th>
                    <th>Password</th>
                    <th>Phone Number</th>
                    <th>Remaining MB</th>
                    <th>Expire Date</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @if($users->isEmpty())
                    <tr>
                        <td colspan="7" class="text-center">No Users available</td>
                    </tr>
                @else
                    @foreach($users as $key => $user)
                        <tr>
                            <td>{{ $key + 1 }}</td>
                            <td>{{ $user->username }}</td>
                            <td>{{ $user->password }}</td>
                            <td>{{ $user->phone_number }}</td>
                            <td>{{ $user->remaining_mb }}</td>
                            <td>{{ $user->expire_date }}</td>
                            <td>
                                <a href="{{ route('admin.user.edit', $user->id) }}" class="btn btn-warning btn-sm">Edit</a>
                                <form action="{{ route('admin.user.destroy', $user->id) }}" method="POST" style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this user?');">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                @endif
            </tbody>
        </table>
    </div>

    <script src="path/to/bootstrap.bundle.js"></script> <!-- Add Bootstrap JS -->
</body>
</html>
