<?php

namespace App\Models;

class Work
{
    // buat "id" dengan type integer berurut "asc" || increment
    private static $works = [
        [
            "id" => 1,
            "title" => "BNI",
            "slug" => "work-1",
            "description" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde asperiores adipisci officiis, obcaecati voluptatum alias molestiae quasi placeat autem debitis impedit aliquam dolorem libero, voluptas, fugit consectetur voluptatem voluptatibus necessitatibus tenetur sunt ut eveniet expedita! Voluptate, quis possimus? Doloremque perferendis sint, harum architecto numquam explicabo illo voluptates natus unde quod!",
            "team" => "Kiagoos Raihan, Yudith Halim, Mahdi Albart",
            "graphic_design" => "Kiagoos Raihan, Yudith Halim, Mahdi Albart",
            "video_production" => "Studio Teras Belakang",
            "production" => "Studio Teras Belakang",
            "hero_image" => "assets/bni/HeroBNI.jpg",
            "images" => [
                [
                    "file_type" => "image",
                    "src" => "assets/bni/BNI1.jpg",
                ],
                [
                    "file_type" => "image",
                    "src" => "assets/bni/BNI2.jpg",
                ],
                [
                    "file_type" => "image",
                    "src" => "assets/bni/BNI3.jpg",
                ],
            ],
        ],
        [
            "id" => 2,
            "title" => "Samsung",
            "slug" => "work-2",
            "description" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde asperiores adipisci officiis, obcaecati voluptatum alias molestiae quasi placeat autem debitis impedit aliquam dolorem libero, voluptas, fugit consectetur voluptatem voluptatibus necessitatibus tenetur sunt ut eveniet expedita! Voluptate, quis possimus? Doloremque perferendis sint, harum architecto numquam explicabo illo voluptates natus unde quod!",
            "team" => "Kiagoos Raihan, Yudith Halim, Mahdi Albart",
            "graphic_design" => "Kiagoos Raihan, Yudith Halim, Mahdi Albart",
            "video_production" => "Studio Teras Belakang",
            "production" => "Studio Teras Belakang",
            "hero_image" => "assets/samsung/Samsunggif.gif",
            "images" => [
                [
                    "file_type" => "video",
                    "src" => "assets/samsung/SamsungVideo.mp4"
                ],
            ],
        ],
        [
            "id" => 3,
            "title" => "BTPN",
            "slug" => "work-3",
            "description" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde asperiores adipisci officiis, obcaecati voluptatum alias molestiae quasi placeat autem debitis impedit aliquam dolorem libero, voluptas, fugit consectetur voluptatem voluptatibus necessitatibus tenetur sunt ut eveniet expedita! Voluptate, quis possimus? Doloremque perferendis sint, harum architecto numquam explicabo illo voluptates natus unde quod!",
            "team" => "Kiagoos Raihan, Yudith Halim, Mahdi Albart",
            "graphic_design" => "Kiagoos Raihan, Yudith Halim, Mahdi Albart",
            "video_production" => "Studio Teras Belakang",
            "production" => "Studio Teras Belakang",
            "hero_image" => "assets/btpn/BTPNHERO.jpg",
            "images" => [
                [
                    "file_type" => "image",
                    "src" => "assets/btpn/BTPN1.jpg",
                ],
                [
                    "file_type" => "image",
                    "src" => "assets/btpn/BTPN2.jpg",
                ],
            ],
        ],
        [
            "id" => 4,
            "title" => "Vidoran",
            "slug" => "work-4",
            "description" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde asperiores adipisci officiis, obcaecati voluptatum alias molestiae quasi placeat autem debitis impedit aliquam dolorem libero, voluptas, fugit consectetur voluptatem voluptatibus necessitatibus tenetur sunt ut eveniet expedita! Voluptate, quis possimus? Doloremque perferendis sint, harum architecto numquam explicabo illo voluptates natus unde quod!",
            "team" => "Kiagoos Raihan, Yudith Halim, Mahdi Albart",
            "graphic_design" => "Kiagoos Raihan, Yudith Halim, Mahdi Albart",
            "video_production" => "Studio Teras Belakang",
            "production" => "Studio Teras Belakang",
            "hero_image" => "/assets/vidoran/HEROVIDORAN.gif",
            "images" => [
                [
                    "file_type" => "video",
                    "src" => "assets/vidoran/VideoVidoran.mp4",
                ],
            ],
        ],
        [
            "id" => 5,
            "title" => "Tupperware",
            "slug" => "work-5",
            "description" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde asperiores adipisci officiis, obcaecati voluptatum alias molestiae quasi placeat autem debitis impedit aliquam dolorem libero, voluptas, fugit consectetur voluptatem voluptatibus necessitatibus tenetur sunt ut eveniet expedita! Voluptate, quis possimus? Doloremque perferendis sint, harum architecto numquam explicabo illo voluptates natus unde quod!",
            "team" => "Kiagoos Raihan, Yudith Halim, Mahdi Albart",
            "graphic_design" => "Kiagoos Raihan, Yudith Halim, Mahdi Albart",
            "video_production" => "Studio Teras Belakang",
            "production" => "Studio Teras Belakang",
            "hero_image" => "assets/tupperware/TUPPERWAREHERO.jpg",
            "images" => [
                [
                    "file_type" => "image",
                    "src" => "assets/tupperware/TUPPERWARE1.jpg",
                ],
                [
                    "file_type" => "image",
                    "src" => "assets/tupperware/TUPPERWARE2.jpg",
                ],
                [
                    "file_type" => "image",
                    "src" => "assets/tupperware/TUPPERWARE3.jpg",
                ],
                [
                    "file_type" => "image",
                    "src" => "assets/tupperware/TUPPERWARE4.jpg",
                ],
            ],
        ],
        [
            "id" => 6,
            "title" => "Sasa",
            "slug" => "work-6",
            "description" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde asperiores adipisci officiis, obcaecati voluptatum alias molestiae quasi placeat autem debitis impedit aliquam dolorem libero, voluptas, fugit consectetur voluptatem voluptatibus necessitatibus tenetur sunt ut eveniet expedita! Voluptate, quis possimus? Doloremque perferendis sint, harum architecto numquam explicabo illo voluptates natus unde quod!",
            "team" => "Kiagoos Raihan, Yudith Halim, Mahdi Albart",
            "graphic_design" => "Kiagoos Raihan, Yudith Halim, Mahdi Albart",
            "video_production" => "Studio Teras Belakang",
            "production" => "Studio Teras Belakang",
            "hero_image" => "assets/sasa/HeroSasa.gif",
            "images" => [
                [
                    "file_type" => "image",
                    "src" => "assets/sasa/SASA2.jpg",
                ],
                [
                    "file_type" => "image",
                    "src" => "assets/sasa/SASA3.jpg",
                ],
                [
                    "file_type" => "image",
                    "src" => "assets/sasa/SASA4.jpg",
                ],
                [
                    "file_type" => "video",
                    "src" => "assets/sasa/SASA5.mp4",
                ],
            ],
        ],
        [
            "id" => 7,
            "title" => "Daihatsu",
            "slug" => "work-7",
            "description" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde asperiores adipisci officiis, obcaecati voluptatum alias molestiae quasi placeat autem debitis impedit aliquam dolorem libero, voluptas, fugit consectetur voluptatem voluptatibus necessitatibus tenetur sunt ut eveniet expedita! Voluptate, quis possimus? Doloremque perferendis sint, harum architecto numquam explicabo illo voluptates natus unde quod!",
            "team" => "Kiagoos Raihan, Yudith Halim, Mahdi Albart",
            "graphic_design" => "Kiagoos Raihan, Yudith Halim, Mahdi Albart",
            "video_production" => "Studio Teras Belakang",
            "production" => "Studio Teras Belakang",
            "hero_image" => "assets/daihatsu/DAIHATSU2.jpg",
            "images" => [
                [
                    "file_type" => "image",
                    "src" => "assets/daihatsu/DAIHATSU3.jpg",
                ],
                [
                    "file_type" => "image",
                    "src" => "assets/daihatsu/DAIHATSU4.jpg",
                ],
            ],
        ],
        [
            "id" => 8,
            "title" => "Cimb Niaga",
            "slug" => "work-8",
            "description" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde asperiores adipisci officiis, obcaecati voluptatum alias molestiae quasi placeat autem debitis impedit aliquam dolorem libero, voluptas, fugit consectetur voluptatem voluptatibus necessitatibus tenetur sunt ut eveniet expedita! Voluptate, quis possimus? Doloremque perferendis sint, harum architecto numquam explicabo illo voluptates natus unde quod!",
            "team" => "Kiagoos Raihan, Yudith Halim, Mahdi Albart",
            "graphic_design" => "Kiagoos Raihan, Yudith Halim, Mahdi Albart",
            "video_production" => "Studio Teras Belakang",
            "production" => "Studio Teras Belakang",
            "hero_image" => "assets/cimb/CIMB65HERO.gif",
            "images" => [
                [
                    "file_type" => "video",
                    "src" => "assets/cimb/cimb_niaga.mp4",
                ],
            ],
        ],
        [
            "id" => 9,
            "title" => "Mandiri",
            "slug" => "work-9",
            "description" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde asperiores adipisci officiis, obcaecati voluptatum alias molestiae quasi placeat autem debitis impedit aliquam dolorem libero, voluptas, fugit consectetur voluptatem voluptatibus necessitatibus tenetur sunt ut eveniet expedita! Voluptate, quis possimus? Doloremque perferendis sint, harum architecto numquam explicabo illo voluptates natus unde quod!",
            "team" => "Kiagoos Raihan, Yudith Halim, Mahdi Albart",
            "graphic_design" => "Kiagoos Raihan, Yudith Halim, Mahdi Albart",
            "video_production" => "Studio Teras Belakang",
            "production" => "Studio Teras Belakang",
            "hero_image" => "assets/mandiri/TaspenHero.jpg",
            "images" => [
                [
                    "file_type" => "image",
                    "src" => "assets/mandiri/Taspen1.jpg",
                ],
            ],
        ],
        [
            "id" => 10,
            "title" => "Viva",
            "slug" => "work-10",
            "description" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde asperiores adipisci officiis, obcaecati voluptatum alias molestiae quasi placeat autem debitis impedit aliquam dolorem libero, voluptas, fugit consectetur voluptatem voluptatibus necessitatibus tenetur sunt ut eveniet expedita! Voluptate, quis possimus? Doloremque perferendis sint, harum architecto numquam explicabo illo voluptates natus unde quod!",
            "team" => "Kiagoos Raihan, Yudith Halim, Mahdi Albart",
            "graphic_design" => "Kiagoos Raihan, Yudith Halim, Mahdi Albart",
            "video_production" => "Studio Teras Belakang",
            "production" => "Studio Teras Belakang",
            "hero_image" => "assets/viva/vivahero.gif",
            "images" => [
                [
                    "file_type" => "image",
                    "src" => "assets/viva/VIVA1.jpg",
                ],
                [
                    "file_type" => "image",
                    "src" => "assets/viva/VIVA2.jpg",
                ],
                [
                    "file_type" => "image",
                    "src" => "assets/viva/VIVA3.jpg",
                ],
                [
                    "file_type" => "image",
                    "src" => "assets/viva/VIVA4.jpg",
                ],
                [
                    "file_type" => "image",
                    "src" => "assets/viva/VIVA5.jpg",
                ],
            ],
        ],
        [
            "id" => 11,
            "title" => "Yoyic",
            "slug" => "work-11",
            "description" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde asperiores adipisci officiis, obcaecati voluptatum alias molestiae quasi placeat autem debitis impedit aliquam dolorem libero, voluptas, fugit consectetur voluptatem voluptatibus necessitatibus tenetur sunt ut eveniet expedita! Voluptate, quis possimus? Doloremque perferendis sint, harum architecto numquam explicabo illo voluptates natus unde quod!",
            "team" => "Kiagoos Raihan, Yudith Halim, Mahdi Albart",
            "graphic_design" => "Kiagoos Raihan, Yudith Halim, Mahdi Albart",
            "video_production" => "Studio Teras Belakang",
            "production" => "Studio Teras Belakang",
            "hero_image" => "assets/yoyic/YoyicHero.gif",
            "images" => [
                [
                    "file_type" => "video",
                    "src" => "assets/yoyic/YoyicV1.mp4",
                ],
                [
                    "file_type" => "video",
                    "src" => "assets/yoyic/YoyicV2.mp4",
                ],
                [
                    "file_type" => "video",
                    "src" => "assets/yoyic/YoyicV3.mp4",
                ],
            ],
        ],
        [
            "id" => 12,
            "title" => "GMI",
            "slug" => "work-12",
            "description" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde asperiores adipisci officiis, obcaecati voluptatum alias molestiae quasi placeat autem debitis impedit aliquam dolorem libero, voluptas, fugit consectetur voluptatem voluptatibus necessitatibus tenetur sunt ut eveniet expedita! Voluptate, quis possimus? Doloremque perferendis sint, harum architecto numquam explicabo illo voluptates natus unde quod!",
            "team" => "Kiagoos Raihan, Yudith Halim, Mahdi Albart",
            "graphic_design" => "Kiagoos Raihan, Yudith Halim, Mahdi Albart",
            "video_production" => "Studio Teras Belakang",
            "production" => "Studio Teras Belakang",
            "hero_image" => "assets/gmi/GMIHERO.jpg",
            "images" => [
                [
                    "file_type" => "image",
                    "src" => "assets/gmi/GMI1.jpg",
                ],
                [
                    "file_type" => "image",
                    "src" => "assets/gmi/GMI2.jpg",
                ],
                [
                    "file_type" => "image",
                    "src" => "assets/gmi/GMI3.jpg",
                ],
                [
                    "file_type" => "image",
                    "src" => "assets/gmi/GMI4.jpg",
                ],
                [
                    "file_type" => "image",
                    "src" => "assets/gmi/GMI5.jpg"
                ]
            ],
        ],
    ];

    /**
     * Method untuk mengambil semua data works
     */
    static function get()
    {
        return collect(self::$works);
    }

    /**
     * Method untuk mencari data works
     */
    static function find($slug)
    {
        $works = static::get();
        return $works->firstWhere('slug', $slug);
    }

    /**
     * method untuk mencari data
     * jika tidak ada redirect ke 404
     */
    static function findOrFail($slug)
    {
        $works = static::get();
        $work = $works->firstWhere('slug', $slug);

        if (empty($work)) {
            return abort(404);
        }

        return $work;
    }
}
