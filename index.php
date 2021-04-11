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
                    h2(null,"Visibilizamos todas las tasas de cambio."),
                    p(null,"Traemos informaci&oacute;n en tiempo real de las casas de cambio y las monedas m&aacute; importantes del mundo.")
                ]),
                section("Cmain-tables-container",
                div("Cmain-currency-table",[
                    p("Ccurrency-table--title","Monedas"),
                    div("Ccurrency-table--container",
                    table(null,[
                        tr(null,[
                            td("Ctable__top-left","Bitcoin"),
                            cls(td("Ctable__top-right*table__right","$1.96"),"*")
                        ]),
                        tr(null,[
                            td(null,"Ethereum"),
                            td("Ctable__right","$0.07")
                        ]),
                        tr(null,[
                            td(null,"Ripple"),
                            td("Ctable__right","$2.17")
                        ]),
                        tr(null,[
                            td("Ctable__bottom-left","Stellar"),
                            cls(td("Ctable__bottom-right*table__right","$4.96"),"*")
                        ])
                    ])),
                    div("Ccurrency-table--date",p(null,[
                        b(null,"Actualizado: "),
                        "4/11/2021 4:53 PM"
                    ]))
                ]))
            ]),
            section(),
            section(),
            section()
        ]),
        footer()
    ])
]);