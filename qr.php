<?php
require_once './vendor/autoload.php';

try {
  ini_set('display_errors', 0);
  error_log('URL: ' . $_POST['url'] . PHP_EOL, 3, './php.log');
  $qrCode = new Endroid\QrCode\QrCode($_POST['url']);
  // header('Content-Type: '.$qrCode->getContentType());
  echo $qrCode->writeDataUri();
} catch (\Throwable $e) {
  error_log($e->getMessage() . PHP_EOL, 3, './php.log');
}
