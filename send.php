<?php
session_start(); // ✅ potrzebne do CSRF

// Autoload Composera
require __DIR__ . '/vendor/autoload.php';

// Import klas
use Dotenv\Dotenv;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Wczytanie pliku .env
$dotenv = Dotenv::createImmutable(__DIR__);
$dotenv->load();

// Ustaw nagłówek JSON
header('Content-Type: application/json; charset=utf-8');

// 🔒 CSRF: sprawdzenie tokena
$token = $_POST['csrf_token'] ?? '';
if (!$token || !hash_equals($_SESSION['csrf_token'] ?? '', $token)) {
  http_response_code(403); // Forbidden
  echo json_encode([
    'success' => false,
    'message' => 'Nieprawidłowy token CSRF'
  ]);
  exit;
}

$honeypot = $_POST['phone'] ?? '';
if (!empty($honeypot)) {
  http_response_code(400); // Bad Request
  echo json_encode([
    'success' => false,
    'message' => 'Formularz odrzucony'
  ]);
  exit;
}

$mail = new PHPMailer(true);

try {
  // Dane z formularza + escapowanie
  $subject = htmlspecialchars($_POST['subject'] ?? '', ENT_QUOTES, 'UTF-8');
  $name    = htmlspecialchars($_POST['name'] ?? '', ENT_QUOTES, 'UTF-8');
  $email   = filter_var($_POST['email'] ?? '', FILTER_VALIDATE_EMAIL) ?: '';
  $message = htmlspecialchars($_POST['message'] ?? '', ENT_QUOTES, 'UTF-8');

  // SMTP config
  $mail->isSMTP();
  $mail->Host       = $_ENV['SMTP_HOST'];
  $mail->SMTPAuth   = true;
  $mail->Username   = 'kontakt@rbk-events.pl';
  $mail->Password   = $_ENV['SMTP_PASSWORD'];
  $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
  $mail->Port       = 465;

  $mail->CharSet = 'UTF-8';
  $mail->Encoding = 'base64';

  // Nadawca i odbiorcy
  $mail->setFrom('kontakt@rbk-events.pl', 'RBK Events');
  $mail->addAddress('kontakt@rbk-events.pl');

  // Treść
  $mail->isHTML(false);
  $mail->Subject = $subject;
  $mail->Body    = "Email: $email\nData i miejsce: $name\n\n$message";

  $mail->send();

  http_response_code(200);
  echo json_encode(['success' => true, 'message' => 'Wiadomość wysłana']);
} catch (Exception $e) {
  http_response_code(500);
  echo json_encode(['success' => false, 'message' => 'Błąd: ' . $mail->ErrorInfo]);
}
