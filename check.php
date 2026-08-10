<?php
$code = str_replace([':', '-', ' '], '', strtoupper($_GET['code'] ?? ''));
$codes = file('codes.txt', FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
foreach ($codes as $c) {
    if (str_replace([':', '-', ' '], '', strtoupper($c)) === $code) {
        echo 'OK';
        exit;
    }
}
echo 'NO';
?>