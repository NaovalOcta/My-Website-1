<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>New Contact Message</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            line-height: 1.6;
            color: #333;
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
        }

        .header {
            background: linear-gradient(135deg, #f97316, #ea580c);
            color: white;
            padding: 30px;
            border-radius: 10px 10px 0 0;
            text-align: center;
        }

        .content {
            background: #f9fafb;
            padding: 30px;
            border: 1px solid #e5e7eb;
            border-top: none;
        }

        .field {
            margin-bottom: 20px;
        }

        .label {
            font-weight: bold;
            color: #6b7280;
            font-size: 12px;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        .value {
            margin-top: 5px;
            padding: 15px;
            background: white;
            border-radius: 8px;
            border: 1px solid #e5e7eb;
        }

        .message-content {
            white-space: pre-wrap;
        }

        .footer {
            text-align: center;
            padding: 20px;
            color: #9ca3af;
            font-size: 12px;
        }
    </style>
</head>

<body>
    <div class="header">
        <h1 style="margin: 0;">📩 New Contact Message</h1>
        <p style="margin: 10px 0 0;">NaovalDev Portfolio Website</p>
    </div>

    <div class="content">
        <div class="field">
            <div class="label">From</div>
            <div class="value">{{ $name }} ({{ $email }})</div>
        </div>

        <div class="field">
            <div class="label">Subject</div>
            <div class="value">{{ $subject }}</div>
        </div>

        <div class="field">
            <div class="label">Message</div>
            <div class="value message-content">{{ $message }}</div>
        </div>
    </div>

    <div class="footer">
        <p>This message was sent from your portfolio contact form.</p>
        <p>Reply directly to this email to respond to {{ $name }}.</p>
    </div>
</body>

</html>
