<?php

namespace App\Models;


class Team
{
    private static $teams = [
        [
            "name" => "Sandhi",
            "division" => "Desing Graphic",
            "avatar" => "/assets/img/teams/sandhi.jpg",
        ],
        [
            "name" => "Ita",
            "division" => "Desing Graphic",
            "avatar" => "/assets/img/teams/ita.jpg",
        ],
        [
            "name" => "Sundy",
            "division" => "Desing Graphic",
            "avatar" => "/assets/img/teams/sundy.jpg",
        ],
        [
            "name" => "risqi",
            "division" => "Desing Graphic",
            "avatar" => "/assets/img/teams/risqi.jpg",
        ],
        [
            "name" => "sandy tunggara",
            "division" => "Desing Graphic",
            "avatar" => "/assets/img/teams/sandy_tunggara.jpg",
        ],
        [
            "name" => "eksal",
            "division" => "Desing Graphic",
            "avatar" => "/assets/img/teams/eksal.jpg",
        ],
        [
            "name" => "vivid",
            "division" => "Desing Graphic",
            "avatar" => "/assets/img/teams/vivid.jpg",
        ],
        [
            "name" => "andre",
            "division" => "Desing Graphic",
            "avatar" => "/assets/img/teams/andre.jpg",
        ],
    ];

    static function get()
    {
        return collect(self::$teams);
    }
}
