<?php
/**
 * Supply the basis for the navbar as an array.
 */
return [
    // Use for styling the menu
    "id" => "rm-menu",
    "wrapper" => null,
    "class" => "rm-default rm-mobile",

    // Here comes the menu items
    "items" => [
        [
            "text" => "Hem",
            "url" => "",
            "title" => "Första sidan, börja här.",
        ],
        [
            "text" => "Redovisning",
            "url" => "redovisning",
            "title" => "Redovisningstexter från kursmomenten.",
            "submenu" => [
                "items" => [
                    [
                        "text" => "Kmom01",
                        "url" => "redovisning/kmom01",
                        "title" => "Redovisning för kmom01.",
                    ],
                    [
                        "text" => "Kmom02",
                        "url" => "redovisning/kmom02",
                        "title" => "Redovisning för kmom02.",
                    ],
                    [
                        "text" => "Kmom03",
                        "url" => "redovisning/kmom03",
                        "title" => "Redovisning för kmom03.",
                    ],
                    [
                        "text" => "Kmom04",
                        "url" => "redovisning/kmom04",
                        "title" => "Redovisning för kmom04.",
                    ],
                    [
                        "text" => "Kmom05",
                        "url" => "redovisning/kmom05",
                        "title" => "Redovisning för kmom05.",
                    ],
                    [
                        "text" => "Kmom06",
                        "url" => "redovisning/kmom06",
                        "title" => "Redovisning för kmom06.",
                    ],
                ],
            ],
        ],
        [
            "text" => "Rapport",
            "url" => "rapport",
            "title" => "Rapporter",
            "submenu" => [
                "items" => [
                    [
                        "text" => "Utvärdering av färgval",
                        "url" => "rapport/fargschema",
                        "title" => "Utvärdering av färgval.",
                    ],
                    [
                        "text" => "Utvärdering av laddningstid",
                        "url" => "rapport/laddningstid",
                        "title" => "Utvärdering av laddningstid",
                    ],
                    [
                        "text" => "Designprinciper",
                        "url" => "rapport/designprincip",
                        "title" => "Utvärdering av designprinciper",
                    ],
                    [
                        "text" => "Tema element",
                        "url" => "rapport/designelement",
                        "title" => "Utvärdering av designelement",
                    ],
                    [
                        "text" => "Tema principer",
                        "url" => "rapport/designprinciper",
                        "title" => "Utvärdering av designprinciper",
                    ]
                ],
            ],
        ],
        [
            "text" => "Blogg",
            "url" => "blogg",
            "title" => "Dagens bild"
        ],
        [
            "text" => "Om",
            "url" => "om",
            "title" => "Om denna webbplats.",
        ],
        [
            "text" => "Styleväljare",
            "url" => "style",
            "title" => "Välj stylesheet.",
        ],
        [
            "text" => "Verktyg",
            "url" => "verktyg",
            "title" => "Verktyg och möjligheter för utveckling.",
        ],
        [
            "text" => "Testa",
            "url" => "testa",
            "title" => "Test av några grejor.",
        ]
    ],
];
