<?php
if (!function_exists('generateUuid')) {
    function generateUuid(): string
    {
        return Illuminate\Support\Str::uuid()->toString();
    }
}
