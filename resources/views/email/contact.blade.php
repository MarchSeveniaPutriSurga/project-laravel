<!DOCTYPE html>
<html>
<head>
    <style>
        .footer {
            text-align: center;
            padding: 20px 0;
            color: #aaaaaa;
            font-size: 12px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>Hi, {{ $name }}</h1>
        </div>
        <div class="content">
            <p>Thank you for getting in touch with us. Here is the message we received from you:</p>
            <p>{!! $message_user !!}</p>
        </div>
        <div class="footer">
            Thank you for your message.
        </div>
    </div>
</body>
</html>