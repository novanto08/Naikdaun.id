<?php

namespace App\Models;

class Contact
{
    private static $contacts = [
        [
            "name" => "Sandhi",
            "phone"  => "+39 3021 9390",
            "email" => "sandhi@naikdaun.id",
        ],
        [
            "name" => "Sundy",
            "phone" => "+39 3021 9390",
            "email" => "sundy@naikdaun.id",
        ],
    ];

    /**
     * method untuk mengambil semua data contact
     */
    static function get()
    {
        return collect(self::$contacts);
    }
}
