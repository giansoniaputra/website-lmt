<?php

use App\Models\NoTelepon;

function no_telepon()
{
    $telepon = NoTelepon::first();
    return $telepon->no_telepon;
}

function short_text($text)
{
    $hasil = substr($text, 0, 50) . " ...";

    return $hasil;
}
