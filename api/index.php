<?php

// Load autoload bawaan composer
require __DIR__ . '/../vendor/autoload.php';

// Jalankan aplikasi Laravel
$app = require_once __DIR__ . '/../bootstrap/app.php';

// Tangani request yang masuk
$kernel = $app->make(Illuminate\Contracts\Http\Kernel::class);

$response = $kernel->handle(
    $request = Illuminate\Http\Request::capture()
);

$response->send();

$kernel->terminate($request, $response);
