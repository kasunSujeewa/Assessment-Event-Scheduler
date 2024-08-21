<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f9f9f9;
            margin: 0;
            padding: 20px;
            color: #333;
        }
        .container {
            background-color: #ffffff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            max-width: 600px;
            margin: auto;
        }
        .header {
            background-color: #4CAF50;
            color: white;
            padding: 10px;
            text-align: center;
            border-radius: 8px 8px 0 0;
        }
        .content {
            padding: 20px;
            line-height: 1.6;
        }
        .button {
            display: inline-block;
            padding: 10px 20px;
            margin-top: 20px;
            color: white;
            background-color: #4CAF50;
            text-decoration: none;
            border-radius: 5px;
        }
        .footer {
            margin-top: 20px;
            font-size: 12px;
            text-align: center;
            color: #777;
        }
        .signature {
            font-style: italic;
            margin-top: 10px;
            color: #555;
        }
    </style>
</head>
<body>
<div class="container">
    <div class="header">
        <h2>{{$title}}</h2>
    </div>
    <div class="content">
        {{-- <p>Hello {{ $name }},</p> --}}
        <p>This is a reminder for your upcoming event scheduled at <strong>{{ $start_time }}</strong>.</p>
        <p>Please make sure to be on time.</p>
        {{-- <a href="{{ $url }}" class="button">View Event Details</a> --}}
        <p class="signature">Assessment Team</p>
    </div>
    <div class="footer">
        <p>&copy; {{ date('Y') }} Student Managment System. All rights reserved.</p>
    </div>
</div>
</body>
</html>
