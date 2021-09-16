<?php

namespace App\Models;

class Socmed
{
    private static $socmeds = [
        [
            "name" => "Isntagram",
            "url" => "https://www.instagram.com/naikdaun.id/",

            // gunakan class icon bootstrap v5
            "icon" => "bi bi-instagram"
        ]
    ];

    /**
     * method untuk mengambil semua data social media
     */
    static function get()
    {
        return collect(self::$socmeds);
    }
}
