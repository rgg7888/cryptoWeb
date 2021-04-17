<?php 

require_once __DIR__ . "/vendor/autoload.php";

echo implode("",

    [
        #Estilos Base
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
        #
        #Header
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
        #
        #Main
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
        #
        #Table
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
            ]),
        #
        #Main Product Detail
            sltr(".main-product-detail",[
                "8relative","C100%","D320px",
                "Eauto","220px 10px","Lvar(--warm-black)"
            ]),
            sltr(".product-detail--batata-logo",[
                "8absolute","C40px","E25px",
                "Surl('./assets/icons/batata.svg')",
                "K-10px","Qcalc(50% - 20px)"
            ]),
            sltr(".product-detail--title",[
                "C90%","D288px","Eauto","10 auto",
                "G50px","Fcenter"
            ]),
            sltr(".product-detail--title h2",[
                "V20px","32.4rem","5bold",
                "62.6rem","7var(--just-white)"
            ]),
            sltr(".product-detail--title p",[
                "V20px","31.4rem","5500",
                "61.8rem","7#808080"
            ]),
        #
        #product-cards--container
            /*sltr(".product-cards--container",[
                "9block"
            ]),*/
        #
        #Product Detail Card
            sltr(".product-detail--card",[
                "C90%","D288px","I400px",
                "E150px","115px auto",
                "215px","Lvar(--black)",
                "O5px","M0 4px 8px rgba(0, 0, 0, 0.16)"
            ]),
            sltr(".product-detail--card .clock",[
                "C20px","9inline-block","E20px",
                "V10px","Surl('./assets/icons/clock.svg')",
                "Xcover","Ycenter","Zno-repeat"
            ]),
            sltr(".product-detail--card .eye",[
                "C20px","9inline-block","E20px",
                "V10px","Surl('./assets/icons/eye.svg')",
                "Xcover","Ycenter","Zno-repeat"
            ]),
            sltr(".product-detail--card .price",[
                "C20px","9inline-block","E20px",
                "V10px","Surl('./assets/icons/dollar-sign.svg')",
                "Xcover","Ycenter","Zno-repeat"
            ]),
            sltr(".product-detail--card .ready",[
                "C20px","9inline-block","E20px",
                "V10px","Surl('./assets/icons/check-circle.svg')",
                "Xcover","Ycenter","Zno-repeat"
            ]),
            sltr(".product--card-title",[
                "V15px","31.8rem","5bold",
                "61.8rem","7var(--just-white)"
            ]),
            sltr(".product--card-body",[
                "31.4rem","5500","61.8rem",
                "7#808080"
            ]),
        #
        #conocelo hoy section
            sltr(".bitcoin-img-container",[
                "C100%","D320px","E50vh",
                "Surl('./assets/img/bitcoinbaby2x.jpg')",
                "Xcover","Ycenter","Zno-repeat",
                "Fcenter"
            ]),
            sltr(".bitcoin-img-container h2",[
                "T60px","32.4rem","5bold",
                "62.6rem","7var(--just-white)"
            ]),
        #
        #main plans container
            sltr(".main-plans-container",[
                "C100%","D320px","U70px",
                "Fcenter"
            ]),
            sltr(".plans--title",[
                "C90%","D288px","Eauto",
                "10 auto","V50px"
            ]),
            sltr(".plans--title h2",[
                "T50px","32.4rem","5bold",
                "62.6rem","7var(--black)"
            ]),
            sltr(".plans--title p",[
                "T30px","31.4rem","5500",
                "61.8rem","7#757575"
            ]),
        #
        #plans container card
            unirStyles([
                sltr(".plans-container--card",[
                    "8relative","C70%","D230px",
                    "I300px","E250px","150px auto 0",
                    "20 15px","Lvar(--just-white)",
                    "O15px","M0 4px 8px rgba(89, 73, 30, 0.16)"
                ]),
                sltr2(".plans-container--card",[
                    "0center"
                ])
            ]),
        #
        #recommended
            sltr(".recommended",[
                "8absolute","C120px","E31px",
                "Qcalc(50% - 60px)","K-15px",
                "31.2rem","26px","Lvar(--bitcoin-orange)",
                "O8px","7var(--just-white)"
            ]),
        #
        #plan card title
            sltr(".plan-card--title",[
                "T30px","31.4rem","5700",
                "61.8rem","7var(--black)"
            ]),
        #
        #plan card price
            sltr(".plan-card--price",[
                "25px 0","35.2rem","5bold",
                "65.3rem","7var(--black)"
            ]),
        #
        #plan car price span
            unirStyles([
                sltr(".plan-card--price span",[
                    "31.2rem","5bold"
                ]),
                sltr2(".plan-card--price span",[
                    "1super"
                ])
            ]),
        #
        #plan card saving
            sltr(".plan-card--saving",[
                "31.2rem","7#757575"
            ]),
        #
        #plan card ca
            sltr(".plan-card--ca",[
                "C150px","E48px","G20px",
                "L#faf8f7","N2px solid var(--bitcoin-orange)",
                "O4px","31.4rem","5bold","61.8rem",
                "7var(--black)","4'DM Sans', sans-serif"
            ]),
        #
        #plan card ca span
            unirStyles([
                sltr(".plan-card--ca span",[
                    "9inline-block","C20px",
                    "E20px","Surl('./assets/icons/orange-right-arrow.svg')"
                ]),
                sltr2(".plan-card--ca span",[
                    "1text-bottom",
                ])
            ]),
        #
        #plan container slider
            sltr(".plans-container--slider",[
                "9flex","E316px"
            ])
        #
        #footer
        #
        #footer section 
        #
        #footer left ul
        #
        #left li
        #
        #left a
        #
    ]

);