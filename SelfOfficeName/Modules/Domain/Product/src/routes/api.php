<?php

use Illuminate\Support\Facades\Route;
use Selfofficename\Modules\Domain\Product\Http\Controllers\ProductController;

Route::group(['prefix' => 'product'],function ($route)  {
    $route->get('', [ProductController::class, 'index']);
});

