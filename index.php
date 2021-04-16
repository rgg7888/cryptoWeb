<?php

require_once __DIR__ . "/vendor/autoload.php";

doctype();
html("Les",[
    head(null,[
        meta("CUTF-8"),
        cls(meta("Nviewport cwidth=device-width,_initial-scale=1.0")),
        lk("Hhttps://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;700&family=Inter:wght@300;500&display=swap Rstylesheet"),
        cls(lk("Rshortcut_icon H./assets/icons/batata.svg")),
        title(null,"Project 01 -> Batatabit"),
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
                "Bcenter","C100%","D320px","E334px",
                "Fcenter","Jlinear-gradient(207.8deg,#201E1C 16.69%, #F7931A 100%)"
            ]),
            sltr("header img",[
                "C150px","E24px","G40px","Hcenter"
            ]),
            sltr(".header--title-container",[
                "C90%","D288px","I900px","E218px",
                "G50px","Fcenter","Hcenter"
            ]),
            sltr(".header--title-container h1",[
                "32.4rem","5bold","62.6rem","7var(--just-white)"
            ]),
            sltr(".header--title-container p",[
                "G25px","31.4rem","5500","61.8rem",
                "7var(--soft-orange)"
            ]),
            sltr(".header--title-container .header--button",[
                "8absolute","K270px","9block","G35px",
                "215px","C229px","E48px","Lvar(--off-white)",
                "M0px 4px 8px rgba(89, 73, 30, 0.16)","Nnone",
                "O5px","31.4rem","5bold","Pnone","7var(--black)",
                "Qcalc(50% - 118px)"
            ]),
            sltr(".header--button span",[
                "9inline-block","C13px","E8px",
                "R10px","Surl('./assets/icons/down-arrow.svg')"
            ]),
            sltr("main",[
                "C100%","Eauto","Lvar(--off-white)"
            ]),
            sltr(".main-exchange-container",[
                "C100%","Eauto","T80px","U30px",
                "Fcenter"
            ]),
            sltr(".main-exchange-container--title",[
                "C90%","D288px","I900px","10 auto"
            ]),
            sltr(".main-exchange-container .backgroundImg",[
                "C200px","E200px","10 auto","V50px",
                "Surl('./assets/img/bitcoin.svg')",
                "Xcover","Ycenter","Zno-repeat"
            ]),
            sltr(".main-exchange-container h2",[
                "V30px","32.4rem","5bold","62.6rem",
                "7var(--black)"
            ]),
            sltr(".main-exchange-container p",[
                "V30px","31.4rem","5500","61.6rem",
                "7#757575"
            ]),
            sltr(".main-currency-table",[
                "C70%","D235px","I500px","E360px",
                "10 auto","4'Inter', sans-serif"
            ]),
            sltr(".main-currency-table .currency-table--title",[
                "V15px","31.8rem","5bold","62.3rem",
                "7var(--bitcoin-orange)"
            ]),
            sltr(".currency-table--container",[
                "C90%","D230px","I300px","E250px",
                "10 auto"
            ]),
            sltr(".currency-table--container table",[
                "C100%","E100%"
            ]),
            sltr(".currency-table--container td",[
                "C50%","31.6rem","5500","61.9rem",
                "7var(--grey)","Lvar(--just-white)",
                "Fcenter"
            ]),
            sltr(".currency-table--container .table__top-left",[
                "O15px 0 0 0"
            ]),
            sltr(".currency-table--container .table__top-right",[
                "O0 15px 0 0"
            ]),
            sltr(".currency-table--container .table__bottom-left",[
                "O0 0 0 15px"
            ]),
            sltr(".currency-table--container .table__bottom-right",[
                "O0 0 15px 0"
            ]),
            sltr(".currency-table--container .table__right",[
                "31.4rem","5normal","61.7rem","7#757575"
            ]),
            sltr(".currency-table--container .down",[
                "9inline-block","C15px","E15px","R10px",
                "Surl('./assets/icons/trending-down.svg')",
                "Xcover","Ycenter","Zno-repeat"
            ]),
            sltr(".currency-table--container .up",[
                "9inline-block","C15px","E15px","R10px",
                "Surl('./assets/icons/trending-up.svg')",
                "Xcover","Ycenter","Zno-repeat"
            ]),
            sltr(".currency-table--date",[
                "C190px","E30px","10 auto",
                "G15px","28px","Lvar(--soft-orange)",
                "O8px"
            ]),
            sltr(".currency-tale--date p, .commision-table--date p",[
                "31.2rem","61.5rem","7var(--warm-black)",
                "5300"
            ])
        ])
    ]),
    body(null,[
        hdr(null,[
            cls(img("S./assets/img/logo.svg ALogo_Principal_Header")),
            div("Cheader--title-container",[
                h1(null,["La próxima revolución en el intercambio de criptomonedas.",
                "<br>Project 01 - FRONTEND"]),
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
                            cls(td("Ctable__top-right*table__right",["$1.96",span("Cdown")]),"*")
                        ]),
                        tr(null,[
                            td(null,"Ethereum"),
                            td("Ctable__right",["$0.07",span("Cup")])
                        ]),
                        tr(null,[
                            td(null,"Ripple"),
                            td("Ctable__right",["$2.17",span("Cdown")])
                        ]),
                        tr(null,[
                            td("Ctable__bottom-left","Stellar"),
                            cls(td("Ctable__bottom-right*table__right",["$4.96",span("Cup")]),"*")
                        ])
                    ])),
                    div("Ccurrency-table--date",p(null,[
                        b(null,"Actualizado: "),
                        "Abril 11 4:53"
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