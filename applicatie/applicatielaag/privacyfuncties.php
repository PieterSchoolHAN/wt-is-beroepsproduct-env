<?php
 require_once '../datalaag/db_functies.php';

 // Deze functie genereert de privacyverklaring
 function genereerPrivacyverklaring() {
    $tekst = "";
    $tekst .= "<h2>Privacyverklaring</h2>
    <p>In deze Privacyverklaring voor profielen worden onze praktijken, waaronder je keuzes, uitgelegd met
        betrekking tot de verzameling, het gebruik en de openbaarmaking van bepaalde gegevens, waaronder je
        persoonsgegevens, in verband met de Fletnix-dienst.</p>
    <h3>Verzameling van gegevens</h3>
    <ul>
        <li>Gegevens die je aan ons verstrekt: We verzamelen gegevens die je aan ons verstrekt, waaronder:</li>
        <li>
            <ul>
                <li>je naam, e-mailadres, betaalmiddel(en), telefoonnummer en andere identificerende elementen die
                    je
                    mogelijk gebruikt (zoals een naam in de game). We verzamelen deze gegevens op diverse manieren,
                    onder meer wanneer je ze invoert tijdens het gebruik van onze dienst, contact hebt met onze
                    klantenservice of deelneemt aan enquêtes of marketingpromoties;</li>
                <li>gegevens wanneer je ervoor kiest om beoordelingen te geven, je voorkeuren te verstrekken, je
                    accountinstellingen op te geven (met inbegrip van voorkeuren die zijn ingesteld in het gedeelte
                    'Account' van onze website) of ons op een andere manier gegevens te verstrekken via onze dienst
                    of
                    op een andere locatie.</li>
            </ul>
        </li>
        <li>Gegevens die we automatisch verzamelen: We verzamelen gegevens over jou en je gebruik van onze dienst
            en over je interactie met ons en onze advertenties, alsmede gegevens over je netwerk, netwerkapparaten
            en computer of andere Fletnix-compatibele apparaten waarop je onze dienst gebruikt (zoals gameconsoles,
            smart-tv's, mobiele apparaten, settopboxen en andere apparaten voor streaming media). Deze gegevens
            omvatten:</li>
        <li>
            <ul>
                <li>je gebruik van de Fletnix-dienst, waaronder selectie van titels, series die je hebt gekeken,
                    zoekopdrachten en activiteit in Fletnix Games;</li>
                <li>je interacties met onze e-mails en tekstberichten en met onze berichten via onze kanalen voor
                    push-
                    en onlineberichten;</li>
                <li>details over je interactie met onze klantenservice, zoals de datum, het tijdstip en de reden
                    waarom
                    je contact met ons hebt opgenomen, transcripties van de chatsessies en, als je ons belt, je
                    telefoonnummer en opgenomen gesprekken;</li>
                <li>apparaat-id's of andere unieke id's, waaronder voor netwerkapparaten en apparaten in je
                    wifinetwerk
                    die compatibel zijn met Fletnix;
                </li>
                <li>opnieuw instelbare apparaat-id's (ook wel advertentie-id's genoemd), zoals op mobiele apparaten,
                    tablets en apparaten voor streaming media die dergelijke id's bevatten (zie het onderstaande
                    gedeelte 'Cookies en internetadvertenties' voor meer informatie);</li>
                <li>apparaat- en software-eigenschappen (zoals type en configuratie), informatie over de verbinding,
                    met
                    inbegrip van type (wifi, mobiel), statistieken over bekeken pagina's, doorverwijzende bron
                    (bijvoorbeeld doorverwijzings-URL's), IP-adres (dat je algemene locatie aangeeft),
                    browsergegevens
                    en standaardgegevens uit het weblogboek.</li>
            </ul>
        </li>
    </ul>
    <h3>Gebruik van gegevens</h3>
    <p>We gebruiken de gegevens om onze diensten en marketingactiviteiten te leveren, te analyseren, te beheren, te
        verbeteren en te personaliseren, doorverwijzingen van leden te beheren, je registratie, bestellingen en
        betalingen te verwerken en met je te communiceren over deze en andere onderwerpen. We gebruiken deze
        gegevens bijvoorbeeld om:</p>
    <ul>
        <li>je geografische locatie te bepalen, gelokaliseerde content te bieden, je aangepaste en gepersonaliseerde
            suggesties te geven voor series en films die je volgens ons interessant zult vinden, je internetprovider
            te bepalen om je te ondersteunen bij het oplossen van netwerkproblemen (we gebruiken ook samengevoegde
            gegevens van internetproviders voor operationele en zakelijke doeleinden), en snel en efficiënt te
            kunnen reageren op vragen en verzoeken;</li>
        <li>onze systemen te beschermen, fraude te voorkomen en de veiligheid van Fletnix-accounts te helpen
            beschermen;</li>
        <li>onze doelgroep te analyseren en inzicht hierin te krijgen, onze dienst te verbeteren (waaronder het
            gebruik van onze gebruikersinterface en de prestaties van onze dienst) en de selectie en de levering van
            content en aanbevelingsalgoritmen te optimaliseren;</li>
    </ul>
    <h3>Beveiliging</h3>
    <p>
        We nemen redelijke administratieve, logische, fysieke en bestuursmaatregelen om je persoonsgegevens te
        beschermen tegen verlies, diefstal en ongeautoriseerde toegang, gebruik en wijzigingen. Deze maatregelen
        zijn bedoeld om een beveiligingsniveau te bieden dat past bij de risico's rond de verwerking van je
        persoonsgegevens.
    </p>
    <h3>Kinderen</h3>
    <p>Je moet minimaal achttien jaar zijn om je te abonneren op de Fletnix-dienst. Minderjarigen mogen de dienst
        alleen gebruiken met de betrokkenheid, onder het toezicht en na goedkeuring van een ouder of voogd.
    </p>
    <h3>Wijzigingen in deze Privacyverklaring</h3>
    <p>We werken deze Privacyverklaring regelmatig bij om te kunnen blijven voldoen aan wijzigingen in de
        juridische, wettelijke en operationele vereisten. We kondigen dergelijke wijzigingen (inclusief de
        ingangsdatum) aan in overeenstemming met de wet. Als je de Fletnix-dienst blijft gebruiken nadat deze
        updates van kracht zijn geworden, betekent dit dat je deze wijzigingen erkent en (zoals van toepassing)
        accepteert. Als je wijzigingen van deze Privacyverklaring niet wilt erkennen of accepteren, kun je het
        gebruik van de Fletnix-dienst stopzetten.</p>";
    return $tekst;
 }
 ?>