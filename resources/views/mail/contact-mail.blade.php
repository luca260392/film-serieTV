<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact mail</title>
</head>
<body style="margin: 0; padding: 0; font-family: Arial, sans-serif; background-color: #f5f5f5;">
    <div style="max-width: 600px; margin: 25px auto; padding: 40px 20px; background-color: #ffffff; border-radius: 8px; box-shadow: 0 2px 4px rgba(0,0,0,0.1);">
        <!-- Header -->
        <div style="text-align: center; margin-bottom: 30px;">
            <h1 style="font-size: 24px; font-weight: bold; color: #000000; margin: 0;">M263</h1>
            <p style="color: #666666; margin-top: 10px;">Nuova richiesta ricevuta</p>
        </div>

        <!-- Divider -->
        <div style="height: 2px; background-color: #000000; margin: 20px 0;"></div>

        <!-- Content -->
        <div style="padding: 20px 0;">
            <p style="color: #333333; font-size: 16px; line-height: 1.5; margin-bottom: 20px;">Un utente ha suggerito un nuovo film:</p>

            <div style="background-color: #f8f8f8; padding: 20px; border-radius: 4px;">
                <div style="margin-bottom: 15px;">
                    <strong style="color: #000000; display: block; margin-bottom: 5px;">Titolo</strong>
                    <p style="color: #333333; margin: 0;">{{$title}}</p>
                </div>

                <div style="margin-bottom: 15px;">
                    <strong style="color: #000000; display: block; margin-bottom: 5px;">Regista</strong>
                    <p style="color: #333333; margin: 0;">{{$director}}</p>
                </div>

                <div>
                    <strong style="color: #000000; display: block; margin-bottom: 5px;">Trama</strong>
                    <p style="color: #333333; margin: 0; line-height: 1.6;">{{$description}}</p>
                </div>
            </div>
        </div>

        <!-- Footer -->
        <div style="margin-top: 30px; padding-top: 20px; border-top: 2px solid #000000; text-align: center;">
            <p style="color: #666666; font-size: 14px; margin: 0;">© 2024 M263. Tutti i diritti riservati.</p>
        </div>
    </div>
</body>
</html>