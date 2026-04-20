<?php

use App\Models\NoTelepon;

function no_telepon()
{
    $telepon = NoTelepon::first();
    return $telepon->no_telepon;
}
