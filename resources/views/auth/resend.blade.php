<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register - Simple Blog</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            padding-top: 60px;
        }
    </style>
</head>

<body>

    @if (session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
    @endif

    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <div class="card shadow-sm p-4 mt-3" style="max-width: 400px; margin: auto; border-radius: 10px;">
        <h5 class="text-center mb-3">Повторная отправка письма</h5>
        <form action="{{ route('resend.verification') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="email" class="form-label">Введите ваш email:</label>
                <input type="email" name="email" class="form-control" placeholder="example@email.com" required>
            </div>
            <button type="submit" class="btn btn-primary w-49">Отправить заново</button>
            <a href="{{ route('loginPage') }}" class="btn btn-secondary w-50">Login</a>
        </form>
    </div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
