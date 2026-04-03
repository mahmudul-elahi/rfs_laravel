<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $subjectLine }}</title>
</head>

<body style="margin: 0; padding: 0; background-color: #f4f7fb; font-family: Arial, sans-serif; color: #1f2937;">
    <div style="padding: 32px 16px;">
        <div
            style="max-width: 680px; margin: 0 auto; background-color: #ffffff; border: 1px solid #e5e7eb; border-radius: 18px; overflow: hidden;">
            <div style="padding: 24px 28px; background-color: #0f172a; color: #ffffff;">
                <div style="font-size: 12px; text-transform: uppercase; letter-spacing: 1px; color: #cbd5e1;">Reply From
                    RSF ISRAEL AV</div>
                <h1 style="margin: 10px 0 0; font-size: 24px; line-height: 1.3;">{{ $subjectLine }}</h1>
            </div>

            <div style="padding: 28px;">
                <p style="margin-top: 0;">Hello {{ $recipientName }},</p>

                <div style="font-size: 15px; line-height: 1.8; color: #374151; white-space: pre-line;">
                    {{ $messageBody }}</div>
            </div>
        </div>
    </div>
</body>

</html>
