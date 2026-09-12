<?php
namespace App\Services;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\PHPMailer;
class MailService
{
    public function sendActivationEmail(string $email , string $fullName , string $activationCode): bool {
        $mail = new PHPMailer(true);

        try {
            // SMTP configuration
            $mail->isSMTP();
            $mail->Host = $_ENV['MAIL_HOST'];
            $mail->SMTPAuth = true;
            $mail->Username = $_ENV['MAIL_USERNAME'];
            $mail->Password = $_ENV['MAIL_PASSWORD'];
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
            $mail->Port = (int) $_ENV['MAIL_PORT'];

            // Sender
            $mail->setFrom(
                $_ENV['MAIL_FROM_ADDRESS'],
                $_ENV['MAIL_FROM_NAME']
            );

            // Recipient
            $mail->addAddress($email, $fullName);

            // Email content
            $mail->isHTML(true);
            $mail->Subject = 'فعال سازی حساب کاربری TeachLine';

            $activationLink = base_url(
                '/activate?code=' . urlencode($activationCode)
            );

            $mail->Body = "
                <h2>سلام {$fullName}</h2>
                <p>برای فعال سازی حساب کاربری خود روی لینک زیر کلیک کنید:</p>
                <p>
                    <a href=\"{$activationLink}\">
                        فعال سازی حساب
                    </a>
                </p>
                <p>کد فعال سازی شما: {$activationCode}</p>
            ";

            $mail->AltBody =
                "سلام {$fullName}\n\n" .
                "برای فعال سازی حساب خود از لینک زیر استفاده کنید:\n" .
                "{$activationLink}\n\n" .
                "کد فعال سازی: {$activationCode}";

            $mail->send();

            return true;
        } catch (Exception $e) {
            return false;
        }
    }
}