<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="frontend/css/style.css">

    <meta name="csrf_name" content="<?= $name ?>" />
    <meta name="csrf_value" content="<?= $value ?>" />
    
    <title>GLS</title>
</head>
<body>
<section id="intro">
    <nav class="px-2 px-md-5 py-3 my-auto">
        <div class="row no-gutters">
            <ul class="d-none d-md-inline-block col-md-5 offset-md-1">
                <li class="pr-3 pr-md-0"> 
                    <a href="#">
                        <img src="frontend/img/GLS_Logo_Color_neg_CMYK_C_2013-01.png" alt="GLS Logo">
                    </a>
                </li>
            </ul>  
            <ul class="col-md-5 justify-content-end">
                <li class="pr-3 d-md-none"> 
                    <img src="frontend/img/GLS_Logo_Color_neg_CMYK_C_2013-01.png" alt="GLS Logo">
                </li>
                <li class="px-2">
                    <a href="https://www.facebook.com/GLScz/" target="_blank" rel="noopener noreferrer">
                        <img src="frontend/img/fb.png" alt="Facebook">
                    </a>
                </li>
                <li class="pr-2">
                    <a href="https://www.linkedin.com/company/glscz/" target="_blank" rel="noopener noreferrer">
                        <img src="frontend/img/linkedin.png" alt="LinkedIn">
                    </a>
                </li>
                <li class="gls-link">
                    <a class="pl-2" href="https://gls-group.eu/CZ/cs/home" target="_blank" rel="noopener noreferrer"><span class="no-wrap">www.gls-czech.com</span></a>
                </li>
            </ul>    
        </div>
    </nav>
    <div class="container">
        <div class="col-md-8">
            <div class="col-12 pb-3 pt-4">
                <h1>We deliver, <b><span class="no-wrap">we care!</span></b></h1>
            </div>
            <div class="about col-12 pb-2">
                <p>
                    V letošním roce slavíme <b>15 let na českém balíkovém trhu.</b>
                    Za tu dobu jsme vybudovali jednu z nejkvalitnějších
                    a nejsposlehlivějších přepravních sítí v České republice.
                    Za naším úspěchem stojí hlavně lidé v našem týmu, a proto
                    neustále dbáme, ab u nás byli spokojeni. Společně se také
                    již od počátku firmy aktivně věnujeme zdravotně
                    a sociálně znevýhodněným lidem. V rámci našheo celoevropského
                    programu <b>ThinkSocial</b> po celé Evropě pravidelně podporujeme
                    lokální dobročinné projekty.
                </p>
                <p>
                    Místo velkolepých oslav k 15. letům výročí GLS v Česku jsme
                    se rozhodli společně s kolegy věnovat peněžitý dar na vybrané
                    charitativní projekty. Nechal jsme všechny naše zaměstnance
                    i spolupracovníky na všech 24 depech v ČR <b>nominovat a vybrat
                    tři charitativní neziskové projkety nebo organizace</b>,
                    o kterých si myslí, že si naší podporu zaslouží.
                </p>
                <p>
                    Pomocí vašich hlasů nyný rozhodneme, jak si mezi sebe
                    tito finalisté blízcí našemu srdci rozdělí dar ve výší <b>100 000 Kč</b>.
                    Pošlete svůj hlas svému favoritovi a pomozte mu k co nejvyšší částce!
                </p>
            </div>
        <div class="col-12 text-right pb-5">
            <button class="px-4 py-2" id="thinkSocial">
                <a href="https://gls-group.eu/CZ/cs/skupina-gls/think-social" target="_blank" rel="noopener noreferrer">Think<b>Social</b></a>
            </button>
        </div>
        </div>
    </div>
</section>
<section id="rules">
    <div class="container pt-3">
        <div class="text-center col-12 py-3">
            <h1 class="m-0"><b>Jak probíhá hlasování</b></h1>
        </div>
        <div class="row text-center">
            <div class="col-12 col-md-4 pb-2">
                <img class="img-fluid w-50" src="frontend/img/1.png" alt="Jedna">
                <div class="w-75 d-inline-block">
                    <p>
                        <b>Tři finalisty</b> nominovali a svými 
                        hlasování vybírali sami
                        zaměstnanci a spolupracovníci
                        GLS z celé České republiky.
                    </p>
                    <p>
                        Finální rozhodnutí o výši podpory
                        pro jednotlivé organizace
                        <b>je nyní na vás.</b>
                    </p>
                </div>
            </div>
            <div class="col-12 col-md-4 pb-2">
                <img class="img-fluid w-50" src="frontend/img/2.png" alt="Dva">
                <div class="w-75 d-inline-block">
                    <p>
                        Hlasování probíhá
                        <b>do 30. září</b>. Hlasovat můžete
                        pouze jednou, a to zadáním
                        platné <b>e-mailové adresy</b>.
                    </p>
                </div>
            </div>
            <div class="col-12 col-md-4 pb-5">
                <img class="img-fluid w-50" src="frontend/img/3.png" alt="Tri">
                <div class="w-75 d-inline-block">
                    <p>
                        Částku <b>100 000 Kč</b>
                        rozdělíme mezi tři vybrané
                        projekty poměrově podle
                        procentuálního počtu hlasů.
                    </p>
                </div>
            </div>
        </div>
    </div>
    <hr class="srdce">
</section>
<section id="project-kapka">
    <div class="container pt-3 pb-md-5">
        <div class="row no-gutters">
            <div class="col-md-8">
                <div class="col-12 text-center text-md-left pb-md-3">
                    <h2 class="m-0"><b>Kapka naděje</b></h2>
                </div>
                <div class="col-12">
                    <div class="text-center py-3 d-md-none">
                        <div class="rounded-img">
                            <img src="frontend/img/Vendula_Pizingerov .png" alt="">
                        </div>
                    </div>  
                    <p>
                        Již od roku 2000 pomáhá Nadační fond Kapka naděje zachraňovat
                        <b>dětské pacienty s poruchou krvetvorby, nádorovými onemocněními
                        a ty, jejichž léčba vyžaduje transplantaci kostní dřeně.</b> Naším cílem 
                        je zlepšovat vybavenost českých nemocnic a přispět ke zlepšení psychické
                        pohody léčených dětí i jejich rodičů.
                    </p>
                    <p>
                        V současné době pomáháme ve více než 45 nemocnicích po celé České republice.
                        Za 20 let svého působení financoval Nadační fond Kapka naděje nákup
                        více než 500 lékařských přístrojů, realizoval více než 200 projektů v oblasti
                        psychosociální péče a podpořil 3 vědecké výzkumy v oboru hematologie a onkologie.
                    </p>
                </div>
            </div>
            <div class="col-md-4 d-none d-md-inline-block">            
                <div class="rounded-img">
                    <img class="" src="frontend/img/Vendula_Pizingerov .png" alt="">
                </div>
            </div>
        </div>
    </div>
    </div>
        <div class="pl-3 pb-3 pb-md-5 container">
        <div class="commentary p-3">
            <div class="row no-gutters">
                <div>
                    <div class="rounded-img-small float-left mr-3">
                        <img src="frontend/img/Jan.jpg" alt="">
                    </div>
                    <p class="font-italic font-weight-light text-justify text-md-right">
                        „Kapka naděje je organizace podporující děti, která se o svěřené prostředky dobře 
                        postará a věnuje je tak, kde je potřeba. A takovou organizaci vždy rád podpořím,
                        protože pokud nebudeme naše děti od narození chránit a vychovávat, kdo zde 
                        jednou bude pro nás?“
                    </p>
                    <p class="text-md-right">
                       <small>- Jan Zvolský, Kurýr (depo GLS Karlovy Vary)</small>
                    </p>
                </div>
                <div class="col-6 offset-md-6 col-md-3 text-center text-md-right">
                    <button class="more"><a target="_blank" rel="noopener noreferrer" href="https://www.kapkanadeje.cz/">Více o projektu</a></button>
                </div>
                <div class="col-6 col-md-3 text-center">
                    <button class="vote" id="vote_1"><a href="#popup">Hlasovat</a></button>
                </div>
            </div>
        </div>
    </div>
</section>
<div id="popup" class="popup px-1">
    <div class="popup-content px-3 py-4">
        <div class="row no-gutters">
            <div class="col-12 no-padding">
                <a href="#" class="close-btn">X</a>
            </div>
            <div class="col-12 no-padding text-center">
                <h6 class="popup-text" id="popup-text">Vyplňte prosím svou <b>e-mail adresu:</b></h6>
            </div>
            <div class="alert alert-danger col-12 no-padding text-center my-2" id="popup-error-alert" role="alert">
                This is a danger alert—check it out!
            </div>
            <div class="alert alert-success col-12 no-padding text-center my-2" id="popup-success-alert" role="alert">
                Váš hlas byl odeslán!
            </div>
            <div class="col-12 no-padding">
                    <div class="col-12 no-padding pt-3 pb-4">
                        <input class="w-100 p-1" type="email" id="email_input">
                    </div>
                    <div class="col-12 no-padding text-center">
                        <button class="px-4 py-3" id="button_vote"><b>Odeslat hlas</b></button>
                    </div>
                    <div class="col-12 no-padding text-center">
                        <button class="px-4 py-3 vote" id="button_close"><b><a href="#">Zavřít</a></b></button>
                    </div>
            </div>
        </div>
    </div>
</div>
<div id="cover"></div>
<section id="project-centrum">
    <div class="container pt-3 pb-md-5">
        <div class="row no-gutters">
            <div class="col-md-4 d-none d-md-inline-block">            
                <div class="rounded-img">
                    <img class="" src="frontend/img/Dětské centrum Jihlava.jpg" alt="">
                </div>
            </div>
            <div class="col-md-8 text-md-right">
                <div class="m-0 col-12 text-center text-md-left pb-md-3">
                    <h2><b>Dětské centrum Jihlava</b></h2>
                </div>
                <div class="text-center py-3 d-md-none">
                    <div class="rounded-img">
                        <img src="frontend/img/Dětské centrum Jihlava.jpg" alt="">
                    </div>
                </div>  
                <p>
                    Jsme zařízením, které poskytuje komplexní péči dětem do tří let věku. 
                    Jedná se o děti, jejichž rodiny se o ně nemohou, neumí, či v krajním případě nechtějí starat. 
                    Poskytujeme také krátkodobě tzv. "úlevné pobyty" dětem, které mají různé kombinované vady a onemocnění, která kladou 
                    velké nároky v péči na jejich rodiny.
                </p>
                <p>
                    Společně s dětmi prožíváme jejich radosti, foukáme jejich bolístky a v rámci jejich věku nebo zdravotních omezení 
                    je seznamujeme se světem. Je na nás dospělých, abychom jim pomohli rozsvítit jejich hvězdu, 
                    která možná nezářila při narození tak jasně!
                </p>
            </div>
        </div>
    </div>
    <div class="pr-3 pb-3 pb-md-5 container">
        <div class="commentary p-3">
            <div class="row no-gutters">
                <div>
                    <div class="rounded-img-small float-right ml-3">
                        <img src="frontend/img/Pavel.jpg" alt="">
                    </div>
                    <p class="font-italic font-weight-light text-justify">
                        „Pomáháme po celé Evropě, ale nezapomínáme ani na regionální projekty v České republice, mezi něž patří mj. Dětské centrum v Jihlavě. 
                        Účast ve finále hlasování potvrzuje stálost podpory našich spolupracovníků tomuto odbornému zařízení s dlouholetou tradicí.
                        Můj hlas tentokrát zůstává na Vysočině, která je sídlem centrály české GLS a mým domovem.“
                    </p>
                    <p>
                       <small>- Pavel Včela, Division Manager GLS Czech republic</small>
                    </p>
                </div>

                    <div class="col-6 col-md-3 text-center">
                        <button class="more"><a href="https://www.detske-centrum-ji.cz/" target="_blank" rel="noopener noreferrer">Více o projektu</a></button>
                    </div>
                    <div class="col-6 col-md-3 text-center text-md-left">
                        <button class="vote" id="vote_2"><a href="#popup">Hlasovat</a></button>
                    </div>
            </div>
        </div>
    </div>
</section>
<section id="project-fond">
    <div class="container pt-3">
        <div class="row no-gutters">
            <div class="col-md-8">
                <div class="m-0 col-12 text-center text-md-left pb-md-3">
                    <h2 class="m-0"><b>Nadační fond Josefa Zimovčáka</b></h2>
                    <h2><span class="no-wrap">Na kole dětem</span></h2>
                </div>
                <div class="col-12">
                    <div class="text-center py-3 d-md-none">
                        <div class="rounded-img">
                            <img src="frontend/img/Josef Zimov.jpg" alt="">
                        </div>
                    </div>  
                    <p>
                        Vznikl na podporu onkologicky nemocných dětí v roce 2010
                        jako benefiční součást sportovní projektu Na kole dětem. Cílenými aktivitami
                        se snaží rozšířit možnosti solidarity, tolik potřebné finančí pomoci
                        a podpory dětí v boji proti zákeřnému onemocnění.
                    </p>
                    <p>
                        Svojí činností se především zaměřuje na sportovní aktivity a zajištení 
                        rekondičních pobytů, které usnadňují dětem a jejich rodičům 
                        překonávat traumata způsobená těžkou nemocí.
                    </p>
                </div>
            </div>
            <div class="col-md-4 d-none d-md-inline-block">            
                <div class="rounded-img">
                    <img class="" src="frontend/img/Josef Zimov.jpg" alt="">
                </div>
            </div>
        </div>
    </div>
    <div class="pl-3 pb-3 container">
        <div class="commentary p-3">
            <div class="row no-gutters">
                <div>
                    <div class="rounded-img-small float-left mr-3">
                        <img src="frontend/img/Iveta.jpg" alt="">
                    </div>
                    <p class="font-italic font-weight-light text-justify text-md-right">
                        „Projekt Na kole dětem jsem vybrala z toho důvodu, že svojí podporu cílí
                        na onkologicky nemocné děti a prostředky se snaží vybírat aktivně pomocí sportu.
                        Za veškerou námahu a karamboly, které Pepa Zimovčák při své cyklotour vytrpí,
                        si tento nadační fond můj hlas zaslouží.“
                    </p>
                    <p class="text-right">
                       <small>- Iveta Bednaříková, Vedoucí zákaznického centra GLS</small>
                    </p>
                </div>
                    <div class="col-6 offset-md-6 col-md-3 text-center text-md-right">
                        <button class="more"><a href="https://www.nakoledetem.cz/" target="_blank" rel="noopener noreferrer">Více o projektu</a></button>
                    </div>
                    <div class="col-6 col-md-3 text-center">
                        <button class="vote" id="vote_3"><a href="#popup">Hlasovat</a></button>
                    </div>
            </div>
        </div>
    </div>
    <hr class="srdce">
</section>
<section id="results">
    <div class="container pt-3 text-center w-100 pb-3 pb-md-5">
        <div class="row no-gutters d-md-none">
            <div class="col-12">
                <h4 class="d-md-none"><b>Rozdělili jste:</b></h4>
                <h3 class="d-none d-md-block"><b>Rozdělili jste:</b></h3>
            </div>
            <div class="col-12">
                <p class="numbers m-0"><?= $votes_count ?></p>
            </div>
            <div class="pb-4 col-12 pb-md-0">
                <h5 class="d-md-none">hlasů</h5>
                <h4 class="d-none d-md-block">hlasů</h4>
            </div>
            <div class="col-12">
                <h4 class="d-md-none">
                    <b>
                    Na věnování svého
                    <span class="no-wrap">hlasu máte ještě:</span>   
                    </b>
                </h4>
                <h3 class="d-none d-md-block">
                    <b>
                    Na věnování svého
                    <span class="no-wrap">hlasu máte ještě:</span>                    
                    </b>
                </h3>
            </div>
            <div class="col-12"><p class="numbers m-0">50</p></div>
            <div class="col-12"><h5 class="d-md-none">dní</h5></div> 
            <div><h4 class="d-none d-md-block">dní</h4></div> 
        </div>
        <div class="d-none d-md-block">
            <div class="row no-gutters">
                <div class="col-5 offset-1 my-auto">
                    <h3><b>Rozdělili jste:</b></h3>
                </div>
                <div class="col-5">
                    <h3>
                        <b>
                        Na věnování svého
                        <span class="no-wrap">hlasu máte ještě:</span>                    
                        </b>
                    </h3>
                </div>
                <div class="col-5 offset-1">
                    <p class="numbers m-0"><?= $votes_count ?></p>
                </div>
                <div class="col-5">
                    <p class="numbers m-0">50</p>
                </div>
                <div class="col-5 offset-1">
                    <h4>hlasů</h4>
                </div>
                <div class="col-5">
                    <h4>dní</h4>
                </div> 
            </div>
        </div>
    </div>
</section>
<section id="footer">
    <footer class="pt-3 py-md-5">
        <div class="container text-left height-lg">
            <div class="pb-3 pb-md-5 text-center text-md-left">
                <h4 class="pb-3 d-md-none"><b>Sdílejte projekt se známými</b></h4>
                <h5 class="d-md-none"> - dejte jim o možnosti pomáhat vědět na Facebooku!</h5>
                <h3 class="d-none d-md-block"><b>Sdílejte projekt se známými</b></h4>
                <h4 class="d-none d-md-block"> - dejte jim o možnosti pomáhat vědět na Facebooku!</h5>
            </div>
            <div class="w-100 text-center text-md-left">
                <button id="fb-root" class="px-4 py-2">
                    <a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=http%3A%2F%2Fpomahame.gls-czech.cz%2F&amp;src=sdkpreparse" class="fb-xfbml-parse-ignore">Sdílejte na profilu</a>
                </button>
            </div>
        </div>
        <div class="d-none d-md-block container text-left">
            <div class="font-weight-light">
                <div class="row no-gutters">
                    <div class="my-auto"> Ve spolupráci s komunikační agenturou</div> 
                    <div class="" style="width: auto; height: 50px;">
                        <a href="https://allmedia4u.cz/"><img class="mw-100 mh-100" src="frontend/img/allmedia_logo_white_Kreslicí plátno 1.png" alt=""></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="d-md-none">
            <img class="img-fluid" src="frontend/img/15_let_1800x3000_transparentn¡.png" alt="">
        </div>
        <div class="container d-md-none align-text-bottom">
            <div class="font-weight-light pb-2">
                <div class="row no-gutters">
                    <div class="my-auto"><small>Ve spolupráci s komunikační agenturou</small></div> 
                    <div class="my-auto" style="width: 110px; height: auto;">
                        <a href="https://allmedia4u.cz/"><img class="mw-100 mh-100" src="frontend/img/allmedia_logo_white_Kreslicí plátno 1.png" alt=""></a>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</section>
<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/cs_CZ/sdk.js#xfbml=1&version=v7.0&appId=568770667084818&autoLogAppEvents=1" nonce="tEdcbfw6"></script>
<script src="frontend/js/vote.js"></script>
</body>
</html>
