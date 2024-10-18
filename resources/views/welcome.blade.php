<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quiz App</title>
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
</head>
<body>
    <header>
        <h1>Quiz App</h1>
        <nav>
            <a href="#leaderboard">Leaderboard</a>
            <a href="{{route('login')}}">Login</a>
            <a href="{{route('register')}}">Sign Up</a>
        </nav>
    </header>
    <div class="main-content">
        <h1>Test Your Knowledge Now!</h1>
        <h2>Join the best quizzes and challenge your skills</h2>
        <button onclick="startQuiz()">Start Quiz</button>
    </div>

    <script>
        function startQuiz() {
            // Add your quiz start logic here
            alert('Quiz started!');
        }
    </script>
</body>
</html>
