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
            ])
        #
    ]

);