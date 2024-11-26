<?php

use App\Models\DigitalIdentity;

Route::get('/digital-identities', function () {
    return DigitalIdentity::all();
});
