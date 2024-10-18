<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="{{ asset('css/admin.css') }}">
</head>
<body>
    <header>
        <h1>Quiz App</h1>
        <nav>
            <a href="#leaderboard">Leaderboard</a>
            <a href="{{route('admin.insert-question')}}">Add Question</a>
            <a href="{{route('admin.logout')}}">Logout</a>
        </nav>
    </header>
    <div class="container">
        <h1>Admin Dashboard</h1>
        <div class="dashboard">
            <div class="box">
                <h2>Total Users</h2>
                <p>{{ $totalUsers }}</p>
            </div>
            <div class="box">
                <h2>Box 2</h2>
                <p>Content for box 2</p>
            </div>
            <div class="box">
                <h2>Box 3</h2>
                <p>Content for box 3</p>
            </div>
            <div class="box">
                <h2>Box 4</h2>
                <p>Content for box 4</p>
            </div>
        </div>
    </div>
  
</body>
</html>
