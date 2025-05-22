<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Bem-vindo ao Meu Kumbu</title>
</head>
<body style="font-family: Arial, sans-serif; background-color: #f9f9f9; margin: 0; padding: 0;">
    <table width="100%" cellpadding="0" cellspacing="0">
        <tr>
            <td align="center" style="padding: 20px;">
                <table width="600" cellpadding="0" cellspacing="0" style="background-color: #ffffff; border-radius: 8px; overflow: hidden; box-shadow: 0 0 10px rgba(0,0,0,0.05);">
                    <tr>
                        <td style="background-color: #0049bf; padding: 20px; text-align: center; color: #ffffff;">
                            <h1 style="margin: 0; font-size: 24px;">Meu Kumbu</h1>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <img src="https://via.placeholder.com/600x200?text=Bem-vindo+ao+Meu+Kumbu" alt="Bem-vindo" style="width: 100%; display: block;">
                        </td>
                    </tr>
                    <tr>
                        <td style="padding: 30px;">
                            <h2 style="color: #333;">Olá, {{ $user->name }}!</h2>
                            <p style="font-size: 16px; color: #555;">Que bom que você chegou <span style="color: #0049bf;">💜</span></p>
                            <p style="font-size: 16px; color: #555;">
                                É com muita alegria que damos boas-vindas a você no <strong>Meu Kumbu</strong>! A sua jornada rumo a uma vida financeira mais organizada começa agora.
                            </p>
                            <p style="font-size: 16px; color: #555;">
                                Sua conta foi criada com sucesso e esperamos que você aproveite ao máximo todos os nossos recursos 😊
                            </p>
                            <p style="font-size: 16px; color: #555;">
                                Para comemorar sua chegada, preparamos uma oferta especial:
                            </p>
                          {{--   <div style="margin: 20px 0; background-color: #F3E5F5; padding: 20px; border-radius: 8px; text-align: center;">
                                <h3 style="color: #6A1B9A; margin: 0 0 10px;">Kumbu Premium em</h3>
                                <p style="font-size: 24px; margin: 0;"><strong>12x de R$19,90</strong></p>
                                <p style="margin: 5px 0;">ou à vista por R$199,90</p>
                            </div> --}}
                            <div style="text-align: center;">
                                <a href="https://meukumbu.com/oferta-premium" style="background-color: #FFB300; color: #000; padding: 12px 20px; text-decoration: none; font-weight: bold; border-radius: 6px;">Saber Mais</a>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td style="background-color: #eeeeee; text-align: center; padding: 15px; font-size: 12px; color: #777;">
                            © 2025 Meu Kumbu. Todos os direitos reservados.
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
</body>
</html>
