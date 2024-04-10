<body>
    <h1>Users</h1>
    <ul>
        @foreach ($users as $user)
            <li>{{ $user->name }}</li>
        @endforeach
    </ul>
    <a href="{{ route('users.create') }}">Create User</a>
</body>
