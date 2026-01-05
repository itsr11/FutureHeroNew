<?php

use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Route;

Artisan::command('inspire', function () {
    $this->comment(Illuminate\Foundation\Inspiring::quote());
})->purpose('Display an inspiring quote');
