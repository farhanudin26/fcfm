<?php

error_reporting(E_ALL);
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');

echo "<h1>Laravel Index Diagnostic</h1>";

$basePath = dirname(__DIR__);

echo "<p><strong>Laravel Root:</strong> "
    . htmlspecialchars($basePath)
    . "</p>";

echo "<hr>";

/*
|--------------------------------------------------------------------------
| Error Handler
|--------------------------------------------------------------------------
*/

set_error_handler(function ($severity, $message, $file, $line) {

    echo "<div style='background:#ffecec;border:1px solid #ff0000;padding:15px;margin:10px 0;'>";

    echo "<strong style='color:red;'>PHP ERROR</strong><br><br>";

    echo "<strong>Message:</strong><br>";
    echo htmlspecialchars($message);

    echo "<br><br>";

    echo "<strong>File:</strong><br>";
    echo htmlspecialchars($file);

    echo "<br><br>";

    echo "<strong>Line:</strong><br>";
    echo htmlspecialchars($line);

    echo "</div>";

    return false;
});


/*
|--------------------------------------------------------------------------
| 1. Composer
|--------------------------------------------------------------------------
*/

echo "<h2>1. Composer Autoload</h2>";

try {

    require $basePath . '/vendor/autoload.php';

    echo "<p style='color:green;font-weight:bold;'>
        ✓ Composer autoload berhasil
    </p>";

} catch (Throwable $e) {

    echo "<h3 style='color:red;'>✗ Composer ERROR</h3>";

    echo "<pre>";
    echo htmlspecialchars($e->getMessage());
    echo "</pre>";

    exit;
}


/*
|--------------------------------------------------------------------------
| 2. Laravel Application
|--------------------------------------------------------------------------
*/

echo "<h2>2. Laravel Application</h2>";

try {

    $app = require_once $basePath . '/bootstrap/app.php';

    echo "<p style='color:green;font-weight:bold;'>
        ✓ Laravel Application berhasil dibuat
    </p>";

} catch (Throwable $e) {

    echo "<h3 style='color:red;'>✗ Laravel Application ERROR</h3>";

    echo "<pre>";
    echo htmlspecialchars($e->getMessage());
    echo "</pre>";

    echo "<pre>";
    echo htmlspecialchars($e->getTraceAsString());
    echo "</pre>";

    exit;
}


/*
|--------------------------------------------------------------------------
| 3. HTTP Kernel
|--------------------------------------------------------------------------
*/

echo "<h2>3. HTTP Kernel</h2>";

try {

    $kernel = $app->make(
        Illuminate\Contracts\Http\Kernel::class
    );

    echo "<p style='color:green;font-weight:bold;'>
        ✓ HTTP Kernel berhasil dibuat
    </p>";

} catch (Throwable $e) {

    echo "<h3 style='color:red;'>✗ HTTP Kernel ERROR</h3>";

    echo "<pre>";
    echo htmlspecialchars($e->getMessage());
    echo "</pre>";

    echo "<pre>";
    echo htmlspecialchars($e->getTraceAsString());
    echo "</pre>";

    exit;
}


/*
|--------------------------------------------------------------------------
| 4. Capture Request
|--------------------------------------------------------------------------
*/

echo "<h2>4. Request Capture</h2>";

try {

    $request = Illuminate\Http\Request::capture();

    echo "<p style='color:green;font-weight:bold;'>
        ✓ Request berhasil dibuat
    </p>";

    echo "<p><strong>Request URI:</strong> "
        . htmlspecialchars($request->getRequestUri())
        . "</p>";

    echo "<p><strong>Method:</strong> "
        . htmlspecialchars($request->method())
        . "</p>";

} catch (Throwable $e) {

    echo "<h3 style='color:red;'>✗ Request ERROR</h3>";

    echo "<pre>";
    echo htmlspecialchars($e->getMessage());
    echo "</pre>";

    exit;
}


/*
|--------------------------------------------------------------------------
| 5. Kernel Handle
|--------------------------------------------------------------------------
*/

echo "<h2>5. Kernel Handle</h2>";

try {

    $response = $kernel->handle($request);

    echo "<p style='color:green;font-weight:bold;'>
        ✓ Kernel handle berhasil
    </p>";

    echo "<p><strong>Status:</strong> "
        . $response->getStatusCode()
        . "</p>";

} catch (Throwable $e) {

    echo "<h3 style='color:red;'>✗ KERNEL HANDLE ERROR</h3>";

    echo "<p><strong>Message:</strong></p>";

    echo "<pre>";
    echo htmlspecialchars($e->getMessage());
    echo "</pre>";

    echo "<p><strong>File:</strong></p>";

    echo "<pre>";
    echo htmlspecialchars($e->getFile());
    echo "</pre>";

    echo "<p><strong>Line:</strong></p>";

    echo "<pre>";
    echo htmlspecialchars($e->getLine());
    echo "</pre>";

    echo "<p><strong>Stack Trace:</strong></p>";

    echo "<pre>";
    echo htmlspecialchars($e->getTraceAsString());
    echo "</pre>";

    exit;
}


/*
|--------------------------------------------------------------------------
| 6. Response Send
|--------------------------------------------------------------------------
*/

echo "<h2>6. Response Send</h2>";

try {

    echo "<p>
        Sebelum menjalankan \$response->send()
    </p>";

    $response->send();

    echo "<p style='color:green;font-weight:bold;'>
        ✓ response->send() berhasil
    </p>";

} catch (Throwable $e) {

    echo "<h3 style='color:red;'>✗ RESPONSE SEND ERROR</h3>";

    echo "<p><strong>Message:</strong></p>";

    echo "<pre>";
    echo htmlspecialchars($e->getMessage());
    echo "</pre>";

    echo "<p><strong>File:</strong></p>";

    echo "<pre>";
    echo htmlspecialchars($e->getFile());
    echo "</pre>";

    echo "<p><strong>Line:</strong></p>";

    echo "<pre>";
    echo htmlspecialchars($e->getLine());
    echo "</pre>";

    echo "<p><strong>Stack Trace:</strong></p>";

    echo "<pre>";
    echo htmlspecialchars($e->getTraceAsString());
    echo "</pre>";

    exit;
}


/*
|--------------------------------------------------------------------------
| 7. Kernel Terminate
|--------------------------------------------------------------------------
*/

echo "<h2>7. Kernel Terminate</h2>";

try {

    $kernel->terminate($request, $response);

    echo "<p style='color:green;font-weight:bold;'>
        ✓ kernel->terminate() berhasil
    </p>";

} catch (Throwable $e) {

    echo "<h3 style='color:red;'>✗ KERNEL TERMINATE ERROR</h3>";

    echo "<p><strong>Message:</strong></p>";

    echo "<pre>";
    echo htmlspecialchars($e->getMessage());
    echo "</pre>";

    echo "<p><strong>File:</strong></p>";

    echo "<pre>";
    echo htmlspecialchars($e->getFile());
    echo "</pre>";

    echo "<p><strong>Line:</strong></p>";

    echo "<pre>";
    echo htmlspecialchars($e->getLine());
    echo "</pre>";

    echo "<p><strong>Stack Trace:</strong></p>";

    echo "<pre>";
    echo htmlspecialchars($e->getTraceAsString());
    echo "</pre>";

    exit;
}


/*
|--------------------------------------------------------------------------
| DONE
|--------------------------------------------------------------------------
*/

echo "<hr>";

echo "<h1 style='color:green;'>
    ✓ SEMUA PROSES INDEX.PHP BERHASIL
</h1>";

echo "<p>
    Tidak ditemukan error pada Composer, Laravel Bootstrap,
    Kernel Handle, Response Send, maupun Kernel Terminate.
</p>";

?>
