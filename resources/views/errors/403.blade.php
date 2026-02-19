
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>403 | Forbidden</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: 'Segoe UI', sans-serif;
            background: linear-gradient(135deg, #667eea, #764ba2);
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            color: #fff;
        }

        .container {
            text-align: center;
        }

        .error-code {
            font-size: 120px;
            font-weight: bold;
            margin: 0;
        }

        .message {
            font-size: 22px;
            margin: 10px 0 20px;
        }

        .description {
            font-size: 16px;
            opacity: 0.9;
            margin-bottom: 30px;
        }

        .btn {
            padding: 12px 25px;
            background: #fff;
            color: #764ba2;
            text-decoration: none;
            border-radius: 30px;
            font-weight: 600;
            transition: 0.3s ease;
        }

        .btn:hover {
            background: #f1f1f1;
            transform: translateY(-3px);
        }
    </style>
</head>
<body>

<div class="container">
    <h1 class="error-code">403</h1>
    <p class="message">Access Denied</p>
    <p class="description">
        Sorry, you do not have permission to access this page.
    </p>
    <a href="{{ route('dashboard') }}" class="btn">Go Back Home</a>
</div>

</body>
</html>
