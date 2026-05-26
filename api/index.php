<?php

// 1. Aktifkan pelaporan error ekstrem
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// 2. Siapkan wadah temporary karena Vercel Read-Only
$tmpStorage = '/tmp/storage';
$directories = [
    $tmpStorage . '/framework/views',
    $tmpStorage . '/framework/cache/data',
    $tmpStorage . '/framework/sessions',
    $tmpStorage . '/logs',
];

foreach ($directories as $dir) {
    if (!is_dir($dir)) {
        mkdir($dir, 0755, true);
    }
}

// 3. Paksa Laravel menjauhi folder bawaan
putenv("VIEW_COMPILED_PATH={$tmpStorage}/framework/views");
putenv('SESSION_DRIVER=cookie');
putenv('CACHE_DRIVER=array');
putenv('LOG_CHANNEL=stderr');

// 4. PENJEBAK ERROR: Pastikan Composer berhasil jalan di Vercel
if (!file_exists(__DIR__ . '/../vendor/autoload.php')) {
    die("<h1>🚨 ERROR FATAL: Folder Vendor Hilang!</h1><p>Vercel gagal menjalankan 'composer install'.</p>");
}

// 5. Panggil mesin utama
require __DIR__ . '/../public/index.php';