<?php

require_once __DIR__ . "/vendor/autoload.php";

#Objects
    #
        $doctype = doctype("H");
        $html = html("Len");
        #Html Tag Content
            $head = head();
            #Head Tag Content
                $charset = meta("CUTF-8");
                $viewport = meta("Nviewport cwidth=device-width,initial-scale=1.0");
                $title = title(null,"Document");
                $fonts = lk("Hhttps://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;700&family=Inter:wght@300;500;900&display=swap Rstylesheet");
                $style = style();
                $vars = vars([
                    "bitcoin-orange" => "#f7931a",
                    "soft-orange" => "#ffe9d5",
                    "secondary-blue" => "#1a9af7",
                    "soft-blue" => "#E7F5FF",
                    "warm-black" => "#201E1C",
                    "black" => "#282623",
                    "grey" => "#BABABA",
                    "off-white" => "#FAF8F7",
                    "just-white" => "#fff"
                ]);
            #
            $body = body();
            #body Tag Content
                $header = hdr();
                $img = img("S./assets/img/logo.svg Aphoto");
                $div = div("Cheader--title-container");
                $h1 = h1(null,"Lorem ipsum dolor sit amet, consectetur adipiscing elit.");
                $p = p(
                    null,
                    "Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                    Nullam vulputate enim dolor, a imperdiet sapien viverra eu."
                );
                $span = span();
                $a = a("H# Cheader--button","conoce nuestros planes".$span->tag());
                $main = main();
                $section_0 = section();
                $section_1 = section();
                $section_2 = section();
                $section_3 = section();
                $footer = footer();
            #
        #
        #Css
        #
            $unvSltr = sltr("*",["0border-box","10","20"]);
            $htmlStyle = sltr("html",["362.5%","4'DM Sans', sans-serif"]);
            $headerStyle = sltr("header",[
                "8relative",
                "9flex",
                "Acolumn",
                "Bcenter",
                "C100%",
                "D320px",
                "E334px",
                "Fcenter",
                "Jlinear-gradient(207.8deg, #201E1C 16.69%, #F7931A 100%)"
            ]);
            $HimgStyle = sltr("header img",[
                "C150px","D24px","G60px","Hcenter"
            ]);
            $htc = sltr(".header--title-container",[
                "C90%",
                "D288px",
                "I900px",
                "E218px",
                "G40px",
                "Fcenter",
                "Hcenter"
            ]);
            $htch = sltr(".header--title-container h1",[
                "32.4rem",
                "5bold",
                "62.6rem",
                "7var(--just-white)"
            ]);
            $htcp = sltr(".header--title-container p",[
                "G25px",
                "31.4rem",
                "5500",
                "61.8rem",
                "7var(--soft-orange)"
            ]);
            $htchb = sltr(".header--title-container .header--button",[
                "8absolute",
                "K270px",
                "Qcalc(50% - 118px)",
                "9block",
                "G35px",
                "215px",
                "C229px",
                "E48px",
                "Lvar(--off-white)",
                "M0px 4px 8px rgba(89, 73, 30, 0.16)",
                "Nnone",
                "O5px",
                "31.4rem",
                "5bold",
                "Pnone",
                "7var(--black)"
            ]);
            $hbs = sltr(".header--button span",[
                "9inline-block",
                "C13px",
                "E8px",
                "R10px",
                "Surl('./assets/icons/down-arrow.svg')"
            ]);
        #
    #
#Setters
    #
        $style->setContent([
            $vars->create(),
            $unvSltr->create(),
            $htmlStyle->create(),
            $headerStyle->create(),
            $HimgStyle->create(),
            $htc->create(),
            $htch->create(),
            $htcp->create(),
            $htchb->create(),
            $hbs->create()
        ]);
        $head->setContent([
            $charset->tag(),
            $viewport->tag(),
            $title->tag(),
            $fonts->tag(),
            $style->tag()
        ]);
        $div->setContent([
            $h1->tag(),
            $p->tag(),
            $a->tag()
        ]);
        $header->setContent([
            $img->tag(),
            $div->tag()
        ]);
        $main->setContent([
            $section_0->tag(),
            $section_1->tag(),
            $section_2->tag(),
            $section_3->tag()
        ]);
        $body->setContent([
            $header->tag(),
            $main->tag(),
            $footer->tag()
        ]);
        $html->setContent([
            $head->tag(),
            $body->tag()
        ]);
    #
#Print
    #
        echo $doctype->tag();
        echo $html->tag();
    #