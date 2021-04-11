<?php

require_once __DIR__ . "/vendor/autoload.php";

doctype();
html("Les",[
    head(null,[
        meta("CUTF-8"),
        cls(meta("Nviewport cwidth=device-width,_initial-scale=1.0")),
        lk("Hhttps://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;700&family=Inter:wght@300;500&display=swap Rstylesheet"),
        cls(lk("Rshortcut_icon H./assets/icons/batata.svg")),
        title(null,"Batatabit")
    ]),
    body(null,[
        hdr(null,[
            cls(img("S./assets/img/logo.svg ALogo_Principal_Header")),
            div("Cheader--title-container",[
                h1(null,"La próxima revolución en el intercambio de criptomonedas."),
                p("Cheader-p","Batatabit te ayuda a navegar entre los diferentes precios y tendencias."),
                a("H#plans Cheader--button",["Conoce Nuestros Planes",span()])
            ])
        ]),
        main(null,[
            section("Cmain-exchange-container",[
                div("CbackgroundImg"),
                div("Cmain-exchange-container--title",[
                    h2(null,""),
                    p()
                ]),
                section("Cmain-tables-container",div())
            ]),
            section(),
            section(),
            section()
        ]),
        footer()
    ])
]);