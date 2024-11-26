<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>404 Page Not Found</title>
    <link rel="stylesheet" href="{{ asset('css/404.css') }}">
</head>
<body>
    <div class="error-container">
        <h1>404</h1>
        <p>Oups! The page you're looking for isn't here.</p>
        <a href="{{ route('home') }}">Go Back Home</a>
    </div>
</body>
</html>
