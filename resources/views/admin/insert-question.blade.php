<!DOCTYPE html>
<html>
<head>
    <title>Insert Question</title>
    <link rel="stylesheet" href="{{ asset('css/admin.css') }}">
</head>
<body>
    <header>
        <h1>Quiz App</h1>
        <nav>
            <a href="#leaderboard">Leaderboard</a>
            <a href="{{route('admin.dashboard')}}">Dashboard</a>
        </nav>
    </header>
    <div class="container">
        <h1>Insert Question</h1>
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        <form action="{{ route('admin.store-question') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="question_id">Question ID:</label>
                <input type="text" name="question_id" class="form-control" value="{{ $formattedId }}" disabled>
            </div>
            <div class="form-group">
                <label for="option_a">Question</label>
                <div class="input-group">
                    <input type="text" name="question" class="form-control" required>
                </div>
            </div>
            <div class="form-group">
                <label for="option_a">Option A:</label>
                <div class="input-group">
                    <input type="text" name="option_a" class="form-control" required>
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <input type="radio" name="correct_option" value="option_a" required>
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label for="option_b">Option B:</label>
                <div class="input-group">
                    <input type="text" name="option_b" class="form-control" required>
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <input type="radio" name="correct_option" value="option_b" required>
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label for="option_c">Option C:</label>
                <div class="input-group">
                    <input type="text" name="option_c" class="form-control" required>
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <input type="radio" name="correct_option" value="option_c" required>
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label for="option_d">Option D:</label>
                <div class="input-group">
                    <input type="text" name="option_d" class="form-control" required>
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <input type="radio" name="correct_option" value="option_d" required>
                        </div>
                    </div>
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Insert Question</button>
        </form>
        

    </div>
</body>
</html>
