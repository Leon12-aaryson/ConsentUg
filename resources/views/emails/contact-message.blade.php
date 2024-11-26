<!DOCTYPE html>
<html>

<head>
    <title>New Contact Message</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            color: #333;
        }
        .container {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
        }
        .header {
            background-color: #f8f9fa;
            padding: 20px;
            margin-bottom: 20px;
            border-radius: 5px;
        }
        .content {
            background-color: #ffffff;
            padding: 20px;
            border-radius: 5px;
            border: 1px solid #dee2e6;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="header">
            <h2>New Contact Form Message</h2>
            <p>You have received a new message from the Consent Uganda contact form.</p>
        </div>
        <div class="content">
            <p><strong>Name:</strong> {{ $messageData['name'] }}</p>
            <p><strong>Email:</strong> {{ $messageData['email'] }}</p>
            <p><strong>Message:</strong></p>
            <p style="white-space: pre-wrap;">{{ $messageData['message'] }}</p>
        </div>
    </div>
</body>

</html>
