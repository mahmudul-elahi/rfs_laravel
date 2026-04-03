<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Contact Form Submission</title>
</head>

<body style="margin: 0; padding: 0; background-color: #eef2f6; font-family: Arial, sans-serif; color: #102033;">
    <div style="padding: 32px 16px;">
        <div style="max-width: 680px; margin: 0 auto;">
            <div
                style="background: linear-gradient(135deg, #0f172a 0%, #16324f 100%); border-radius: 24px 24px 0 0; padding: 28px 32px; color: #ffffff;">
                <table role="presentation" style="width: 100%; border-collapse: collapse;">
                    <tr>
                        <td style="vertical-align: top;">
                            <div
                                style="display: inline-block; font-size: 12px; letter-spacing: 1.4px; text-transform: uppercase; color: #c8d6e5; padding: 6px 10px; border: 1px solid rgba(255,255,255,0.18); border-radius: 999px;">
                                Website Inquiry
                            </div>
                            <h1
                                style="margin: 18px 0 10px; font-size: 30px; line-height: 1.2; font-weight: 700; color: #ffffff;">
                                New Contact Form Submission
                            </h1>
                        </td>
                    </tr>
                </table>
            </div>

            <div
                style="background-color: #ffffff; border: 1px solid #d9e3ee; border-top: 0; border-radius: 0 0 24px 24px; overflow: hidden; box-shadow: 0 18px 45px rgba(15, 23, 42, 0.08);">
                <div style="padding: 28px 32px 12px;">
                    <table role="presentation" style="width: 100%; border-collapse: separate; border-spacing: 0 14px;">
                        <tr>
                            <td style="width: 50%; padding-right: 7px; vertical-align: top;">
                                <div
                                    style="background-color: #f8fafc; border: 1px solid #e2e8f0; border-radius: 18px; padding: 16px 18px;">
                                    <div
                                        style="font-size: 12px; letter-spacing: 1px; text-transform: uppercase; color: #64748b; margin-bottom: 8px;">
                                        Full Name</div>
                                    <div style="font-size: 18px; line-height: 1.4; font-weight: 700; color: #0f172a;">
                                        {{ $email->full_name }}</div>
                                </div>
                            </td>
                            <td style="width: 50%; padding-left: 7px; vertical-align: top;">
                                <div
                                    style="background-color: #f8fafc; border: 1px solid #e2e8f0; border-radius: 18px; padding: 16px 18px;">
                                    <div
                                        style="font-size: 12px; letter-spacing: 1px; text-transform: uppercase; color: #64748b; margin-bottom: 8px;">
                                        Company</div>
                                    <div style="font-size: 18px; line-height: 1.4; font-weight: 700; color: #0f172a;">
                                        {{ $email->company_name }}</div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td style="width: 50%; padding-right: 7px; vertical-align: top;">
                                <div
                                    style="background-color: #f8fafc; border: 1px solid #e2e8f0; border-radius: 18px; padding: 16px 18px;">
                                    <div
                                        style="font-size: 12px; letter-spacing: 1px; text-transform: uppercase; color: #64748b; margin-bottom: 8px;">
                                        Email Address</div>
                                    <div style="font-size: 16px; line-height: 1.6; font-weight: 700; color: #0f172a;">
                                        {{ $email->email }}</div>
                                </div>
                            </td>
                            <td style="width: 50%; padding-left: 7px; vertical-align: top;">
                                <div
                                    style="background-color: #f8fafc; border: 1px solid #e2e8f0; border-radius: 18px; padding: 16px 18px;">
                                    <div
                                        style="font-size: 12px; letter-spacing: 1px; text-transform: uppercase; color: #64748b; margin-bottom: 8px;">
                                        Phone Number</div>
                                    <div style="font-size: 16px; line-height: 1.6; font-weight: 700; color: #0f172a;">
                                        {{ $email->phone }}</div>
                                </div>
                            </td>
                        </tr>
                    </table>
                </div>

                <div style="padding: 8px 32px 32px;">
                    <div
                        style="border-radius: 22px; background: linear-gradient(180deg, #f8fafc 0%, #f1f5f9 100%); border: 1px solid #dce5ef; padding: 24px;">
                        <div
                            style="font-size: 12px; letter-spacing: 1px; text-transform: uppercase; color: #64748b; margin-bottom: 12px;">
                            Message Details</div>
                        <div style="font-size: 16px; line-height: 1.8; color: #1e293b; white-space: pre-line;">
                            {{ $email->details }}</div>
                    </div>
                </div>

                <div style="padding: 0 32px 28px;">
                    <div
                        style="border-top: 1px solid #e2e8f0; padding-top: 18px; font-size: 13px; line-height: 1.7; color: #64748b;">
                        Replying to this email should go directly to <strong
                            style="color: #0f172a;">{{ $email->email }}</strong>.
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
