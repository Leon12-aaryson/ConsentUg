<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page Not Found - ConsentUg</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body class="bg-gray-100">
    <div class="min-h-screen flex items-center justify-center">
        <div class="max-w-xl w-full px-4">
            <div class="text-center">
                <h1 class="text-9xl font-bold text-primary">404</h1>
                <p class="text-2xl font-semibold text-gray-800 mt-4">Page Not Found</p>
                <p class="text-gray-600 mt-2">Sorry, we couldn't find the page you're looking for.</p>
                <div class="mt-8">
                    <a href="{{ url('/') }}" class="inline-block bg-primary text-white px-6 py-3 rounded-lg hover:bg-primary-dark transition-colors">
                        Back to Home
                    </a>
                </div>
                <img src="{{ asset('images/404-illustration.svg') }}" alt="404 Illustration" class="mx-auto mt-12 w-full max-w-md">
            </div>
        </div>
    </div>
</body>
</html>
