<?php

echo '<pre>';
print_r(
    [
        "FrontEnd" => 
        [
            0 => "HTML",
            1 => "CSS",
            "JS" =>
            [
                "Vuejs" => 
                [
                    2 => "v2",
                    3 => "v3"
                ],
                0 => "Reactjs",
                1 => "svelte"
            ]
        ]
        ,
        "Backend" => 
        [
            0 => "PHP",
            1 => "MySql",
            2 => "security"

        ],
        0 => "Git",
        1 => "Github",
        "Testing" => 
        [
            0 => "Unit Testing",
            1 => "End To End",
            2 => "Integration"
        ]
    ]
);
echo '</pre>';