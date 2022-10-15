<?php

use Illuminate\Support\Facades\Route;
use ZenCoreSpA\UI\Http\Controllers\UiController;

Route::get('/ui', UiController::class)
    ->name('ui.get');
