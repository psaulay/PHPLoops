<?php
$datas = [
    "students" => [
        [
            "firstname" => "DURON",
            "lastname" => "Stacy",
            "address" => [
                "street" => "rue de l'ACS",
                "numero" => "12",
                "zipcode" => 39000,
                "city" => "Lons-le-Saunier",
                "country" => "France"
            ]
        ],
        [
            "firstname" => "SAULEY",
            "lastname" => "Pierre",
            "address" => [
                "street" => "rue de fedora",
                "zipcode" => 39100,
                "city" => "Dole",
                "country" => "France"
            ]
        ],
        [
            "firstname" => "CARREY",
            "lastname" => "Raphaël",
            "address" => [
                "street" => "boulevard de l'ES6",
                "numero" => "42",
                "zipcode" => 39100,
                "city" => "Dole",
                "country" => "France"
            ]
        ],
        
    ],
    "coachs" => [
        [
            "firstname" => "LOUIS",
            "lastname" => "Morgane",
            "skills" => [
                "design", "wireframing", "frontend", "photoshop"
            ],
            "birthdate" => new DateTime('1990-10-10')
        ],
        [
            "firstname" => "TOURNIER",
            "lastname" => "Anthony",
            "skills" => [
                "pas design", "php", "backend", "linux"
            ],
            "birthdate" => new DateTime('1990-10-20')
        ]
    ]
]
?>
