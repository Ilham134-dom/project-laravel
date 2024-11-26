<?php

use App\Models\DigitalIdentity;

Route::get('/digital-identities', function () {
    $identities = DigitalIdentity::all();
    return view('digital_identities.index', compact('identities'));
});

