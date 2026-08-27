<?php

echo "<h1>Laravel File Checker</h1>";

$basePath = dirname(__DIR__);

echo "<p><strong>Laravel Root:</strong> " . htmlspecialchars($basePath) . "</p>";

echo "<hr>";

/*
|--------------------------------------------------------------------------
| Daftar file penting Laravel
|--------------------------------------------------------------------------
*/

$files = [
    // Laravel Entry Point
    'public/index.php',

    // Bootstrap
    'bootstrap/app.php',

    // Environment
    '.env',

    // Composer
    'composer.json',
    'vendor/autoload.php',

    // Configuration
    'config/app.php',
    'config/database.php',
    'config/filesystems.php',

    // Routes
    'routes/web.php',
    'routes/console.php',

    // Framework
    'artisan',

    // Storage
    'storage/framework',
    'storage/logs',

    // Bootstrap cache
    'bootstrap/cache',
];

/*
|--------------------------------------------------------------------------
| Fungsi pengecekan
|--------------------------------------------------------------------------
*/

function checkPath($basePath, $path)
{
    $fullPath = $basePath . DIRECTORY_SEPARATOR . $path;

    if (file_exists($fullPath)) {
        return [
            'status' => true,
            'message' => 'OK',
            'path' => $fullPath
        ];
    }

    return [
        'status' => false,
        'message' => 'MISSING',
        'path' => $fullPath
    ];
}

/*
|--------------------------------------------------------------------------
| Tampilkan hasil
|--------------------------------------------------------------------------
*/

$missing = 0;

echo "<h2>File & Folder Check</h2>";

echo "<table border='1' cellpadding='8' cellspacing='0'>";
echo "<tr>";
echo "<th>Status</th>";
echo "<th>Path</th>";
echo "<th>Full Path</th>";
echo "</tr>";

foreach ($files as $file) {

    $result = checkPath($basePath, $file);

    if ($result['status']) {
        echo "<tr>";
        echo "<td style='color:green;font-weight:bold;'>✓ OK</td>";
        echo "<td>" . htmlspecialchars($file) . "</td>";
        echo "<td>" . htmlspecialchars($result['path']) . "</td>";
        echo "</tr>";
    } else {
        $missing++;

        echo "<tr>";
        echo "<td style='color:red;font-weight:bold;'>✗ MISSING</td>";
        echo "<td>" . htmlspecialchars($file) . "</td>";
        echo "<td>" . htmlspecialchars($result['path']) . "</td>";
        echo "</tr>";
    }
}

echo "</table>";

echo "<hr>";

if ($missing === 0) {

    echo "<h2 style='color:green;'>✓ Semua file/folder penting ditemukan.</h2>";

} else {

    echo "<h2 style='color:red;'>✗ Ditemukan {$missing} file/folder yang hilang.</h2>";

}

/*
|--------------------------------------------------------------------------
| PHP Version
|--------------------------------------------------------------------------
*/

echo "<hr>";

echo "<h2>PHP Information</h2>";

echo "<strong>PHP Version:</strong> " . PHP_VERSION . "<br>";
echo "<strong>PHP SAPI:</strong> " . php_sapi_name() . "<br>";

/*
|--------------------------------------------------------------------------
| PHP Extensions
|--------------------------------------------------------------------------
*/

echo "<h2>PHP Extensions</h2>";

$extensions = [
    'ctype',
    'curl',
    'dom',
    'fileinfo',
    'mbstring',
    'openssl',
    'pcre',
    'pdo',
    'session',
    'tokenizer',
    'xml',
];

echo "<table border='1' cellpadding='8' cellspacing='0'>";
echo "<tr>";
echo "<th>Status</th>";
echo "<th>Extension</th>";
echo "</tr>";

foreach ($extensions as $extension) {

    if (extension_loaded($extension)) {

        echo "<tr>";
        echo "<td style='color:green;font-weight:bold;'>✓ Loaded</td>";
        echo "<td>" . htmlspecialchars($extension) . "</td>";
        echo "</tr>";

    } else {

        echo "<tr>";
        echo "<td style='color:red;font-weight:bold;'>✗ Missing</td>";
        echo "<td>" . htmlspecialchars($extension) . "</td>";
        echo "</tr>";

    }
}

echo "</table>";

/*
|--------------------------------------------------------------------------
| APP_KEY
|--------------------------------------------------------------------------
*/

echo "<h2>Environment Check</h2>";

$envFile = $basePath . '/.env';

if (file_exists($envFile)) {

    echo "<p style='color:green;font-weight:bold;'>✓ .env ditemukan</p>";

    $envContent = file_get_contents($envFile);

    if (preg_match('/^APP_KEY=(.+)$/m', $envContent, $matches)) {

        $appKey = trim($matches[1]);

        if (!empty($appKey)) {

            echo "<p style='color:green;font-weight:bold;'>✓ APP_KEY tersedia</p>";

        } else {

            echo "<p style='color:red;font-weight:bold;'>✗ APP_KEY kosong</p>";

        }

    } else {

        echo "<p style='color:red;font-weight:bold;'>✗ APP_KEY tidak ditemukan</p>";

    }

} else {

    echo "<p style='color:red;font-weight:bold;'>✗ .env tidak ditemukan</p>";

}

/*
|--------------------------------------------------------------------------
| Composer Autoload Test
|--------------------------------------------------------------------------
*/

echo "<h2>Composer Autoload Test</h2>";

$autoload = $basePath . '/vendor/autoload.php';

if (file_exists($autoload)) {

    echo "<p style='color:green;font-weight:bold;'>✓ vendor/autoload.php ditemukan</p>";

    try {

        require_once $autoload;

        echo "<p style='color:green;font-weight:bold;'>✓ Composer autoload berhasil dijalankan</p>";

    } catch (Throwable $e) {

        echo "<p style='color:red;font-weight:bold;'>✗ Composer autoload ERROR</p>";

        echo "<pre>";
        echo htmlspecialchars($e->getMessage());
        echo "</pre>";
    }

} else {

    echo "<p style='color:red;font-weight:bold;'>✗ vendor/autoload.php tidak ditemukan</p>";

}

/*
|--------------------------------------------------------------------------
| Laravel Bootstrap Test
|--------------------------------------------------------------------------
*/

echo "<h2>Laravel Bootstrap Test</h2>";

$appFile = $basePath . '/bootstrap/app.php';

if (file_exists($appFile) && file_exists($autoload)) {

    try {

        require_once $appFile;

        echo "<p style='color:green;font-weight:bold;'>✓ bootstrap/app.php berhasil dipanggil</p>";

    } catch (Throwable $e) {

        echo "<p style='color:red;font-weight:bold;'>✗ Laravel Bootstrap ERROR</p>";

        echo "<pre>";
        echo htmlspecialchars($e->getMessage());
        echo "</pre>";
    }

} else {

    echo "<p style='color:red;font-weight:bold;'>✗ Tidak dapat melakukan bootstrap test</p>";

}

echo "<hr>";

echo "<h3>Selesai.</h3>";

$composer = json_decode(file_get_contents($basePath . '/composer.json'), true);
echo "<p>Laravel version constraint: " . htmlspecialchars($composer['require']['laravel/framework'] ?? '-') . "</p>";
echo "<p>PHP version constraint: " . htmlspecialchars($composer['require']['php'] ?? '-') . "</p>";


$logFile = $basePath . '/storage/logs/laravel.log';
if (file_exists($logFile)) {
    $lines = file($logFile);
    $lastLines = array_slice($lines, -100); // 100 baris terakhir
    echo "<pre style='background:#eee;padding:10px;overflow:auto;'>";
    echo htmlspecialchars(implode('', $lastLines));
    echo "</pre>";
} else {
    echo "<p>laravel.log tidak ditemukan di server.</p>";
}

?>
