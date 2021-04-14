<?php

require_once __DIR__ . "/vendor/autoload.php";

doctype();
html("Les",[
    head(null,[
        meta("CUTF-8"),
        cls(meta("Nviewport cwidth=device-width,_initial-scale=1.0")),
        lk("Hhttps://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;700&family=Inter:wght@300;500&display=swap Rstylesheet"),
        cls(lk("Rshortcut_icon H./assets/icons/batata.svg")),
        title(null,"Batatabit"),
        style(null,[
            vars([
                "bitcoin-orange" => "#f7931a",
                "soft-orange" => "#ffe9d5",
                "secondary-blue" => "#1a9af7",
                "soft-blue" => "#e7f5ff",
                "warm-black" => "#201e1c",
                "black" => "#282623",
                "grey" => "#bababa",
                "off-white" => "#FAF8F7",
                "just-white" => "#fff"
            ]),
            sltr("*",["0border-box","10","20"]),
            sltr("html",["362.5%","4'DM Sans', sans-serif"]),
            sltr("header",[
                "8relative","9flex","Acolumn",
                "Bcenter","C100%","D320px","E334px","Fcenter"
            ])
        ])
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
            section("Cmain-product-detail",[
                span("Cproduct-detail--batata-logo"),
                div("Cproduct-detail--title",[
                    h2(null,"Creamos un producto sin comparaci&oacute;n."),
                    p(null,"Confiable y diseñado para su uso diario.")
                ]),
                section("Cproduct-cards--container",[
                    article("Cproduct-detail--card",[
                        span("Cclock"),
                        p("Cproduct--card-title","Tiempo real"),
                        p("Cproduct--card-body","Nuestra API toma infomaci&oacute;n minuto a minuto sobre las tasas que m&aacute;s determinan el comportamiento.")
                    ])
                ])
            ]),
            section("Cbitcoin-img-container",[
                h2(null,"Con&oacute;celo hoy.")
            ]),
            section("Iplans Cmain-plans-container",[
                div("Cplans--title",[
                    h2(null,"Escoge el plan que mejor se ajuste a ti."),
                    p(null,"Cualquier plan te da acceso completo a nuestra plataforma.")
                ]),
                section("Cplans-container--slider",
                    article("Cplans-container--card",[
                        p("Crecommended","Recomendado"),
                        div("Cplan-info-container",[
                            h3("Cplan-card-title","Pago Anual"),
                            p("Cplan-card--price",[
                                span(null,"$"),
                                " 99"
                            ]),
                            p("Cplan-card--saving","* Ahorras $129 comparado al plan mensual."),
                            button("Cplan-card--ca",[
                                "Escoger este",
                                span()
                            ])
                        ])
                    ])
                )
            ])
        ]),
        footer(null,[
            section("Cleft",ul(null,[
                li(null,a("H#","Linkedin")),
                li(null,a("H#","Crunchbase")),
                li(null,a("H#","Hackernews"))
            ])),
            section("Cright",cls(img("S./assets/img/logo-footer.svg ALogo*de*Batatabit*2020"),"*"))
        ])
    ])
]);