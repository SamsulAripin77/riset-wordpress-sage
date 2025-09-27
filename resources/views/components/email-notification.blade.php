@props([
    'name' => 'Nama Pengirim',
    'email' => 'email@example.com',
    'message' => 'Ini adalah contoh pesan.'
])

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pesan Baru dari Website</title>
</head>
<body style="margin: 0; padding: 0; background-color: #F3F4F6; font-family: sans-serif;">
    <table width="100%" border="0" cellpadding="0" cellspacing="0" style="background-color: #F3F4F6;">
        <tr>
            <td align="center">
                <table width="600" border="0" cellpadding="0" cellspacing="0" style="max-width: 600px; margin: 20px auto; background-color: #FFFFFF; border-radius: 8px; overflow: hidden; box-shadow: 0 4px 10px rgba(0,0,0,0.1);">
                    
                    <!-- Header -->
                    <tr>
                        <td style="background-color: #065F46; padding: 20px 30px;">
                            <h1 style="margin: 0; color: #FFFFFF; font-size: 24px; font-weight: 600;">
                                Pesan Baru dari Website
                            </h1>
                        </td>
                    </tr>

                    <!-- Content -->
                    <tr>
                        <td style="padding: 40px 30px; color: #111827;">
                            <h2 style="margin-top: 0; margin-bottom: 20px; color: #111827; font-size: 20px;">Anda Menerima Pesan Baru</h2>
                            <p style="margin-bottom: 15px; line-height: 1.6;">Berikut adalah detail pesan yang dikirimkan melalui formulir kontak di website Anda:</p>
                            
                            <div style="border-top: 1px solid #E5E7EB; padding-top: 20px;">
                                <p style="margin: 5px 0; line-height: 1.6;"><strong>Nama:</strong><br>{{ $name }}</p>
                                <p style="margin: 15px 0; line-height: 1.6;"><strong>Email:</strong><br><a href="mailto:{{ $email }}" style="color: #065F46; text-decoration: none;">{{ $email }}</a></p>
                                <p style="margin: 15px 0 0; line-height: 1.6;"><strong>Pesan:</strong></p>
                                <div style="background-color: #F3F4F6; border-radius: 4px; padding: 15px; color: #1F2937; line-height: 1.6;">
                                    {!! nl2br(e($message)) !!}
                                </div>
                            </div>
                        </td>
                    </tr>

                    <!-- Footer -->
                    <tr>
                        <td style="background-color: #1F2937; padding: 20px 30px; text-align: center;">
                            <p style="margin: 0; color: #F3F4F6; font-size: 12px;">
                                &copy; {{ date('Y') }} {{ get_bloginfo('name') }}. All rights reserved.
                            </p>
                        </td>
                    </tr>

                </table>
            </td>
        </tr>
    </table>
</body>
</html>
