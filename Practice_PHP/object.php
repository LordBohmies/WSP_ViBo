<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Functions</title>
        <link type='text/css' rel='stylesheet' href='style.css'/>
    </head>
    <body>
        <img src="http://i1061.photobucket.com/albums/t480/ericqweinstein/php-logo_zps408c82d7.png"/>
        <div class="header"><h1>
            <?php
             $welcome = "Let's get started with Objects!";
             echo $welcome;
             ?>
         </h1></div>
         <p>För att skapa effektiva och återanvändingsbara lösningar så använder vi ofta objekt. På så vis kan man ännu tydligare kapsla in olika delar av ett program så att det inte stör andra delar av programmet. En utvecklare kan arbeta med en viss typ av objekt utan att känna dess kod, det kan räcka med att utvecklaren känner till hur han skall kommunicera med objektet.</p>
         <p>Låt oss låtsas att människor programmerade objekt. Vi tänker bort den fria viljan och förmågan att agera självständigt. Som "objekt" har vi människor då egenskaper: Vikt, längd, hårfärg etc. Vi har också förmågor: Vi kan röra kroppsdelar, tala, skriva etc. En sådan "människa" skulle sedan kunna styras med kommandon: "Person A: Gå framåt tio steg", utan att vi behöver bry oss om hur varje steg ska tas. Alltså är förmågan att böja benen på rätt sätt inbyggda funktioner i objektet.</p>
         <p>Användning av objekt gör också så att olika delar av ett program kan återanvända andra sammanhang, vilket sparar tid och fota ökar kodens kvalitet. Uppdelning av programmet i mindre separata moduler hjälper till att förebygga buggar, inte minst om det kombineras med att man som utvecklare också skriver tester till dem. Det är annars lätt att en ny bugg uppstår då man åtgärdar en gammal, men sådant märker man alltså om det finns automatiserade tester.</p>
         <h5>FUNKTIONER ÄR BRA!</h5>
            <?php
            /*-------------------- First ---------------------*/
            /*
            // Ett första enklare exempel där vi tänker oss att sidor på webben beskrivs.
            $webpage1 = new StdClass();         // Inbyggd klass i PHP.
            $webpage1->name = "PHP";
            $webpage1->url = "http://php.net/";
            $webpage1->rank = 5;
            */
            // Vi har skapat oss ett objekt och gett det två dynamiska egenskaper.
            /*------------------------------------------------*/
            /*----------------- Skapa Klassen ----------------*/
            /*
            // Det vore bättre att bygga en klass för webbsidor och lägga in egenskaperna när objekt skapas.
            // Vi börjar med att deklarera egenskaperna och ger klassen en konstruktor.
            // Konstruktor (Constructor) = Funktion som körs automatiskt när objekt skapas.
            class webpage {

                // Vad webbsidan heter.
                // @var $name string
                public $name;

                // Adressen till webbsidan.
                // @var $url string
                public $url;

                // Ranking av webbsidan (0-5).
                // @var $rank int
                public $rank;

                // Detta är konstruktorn, dess namn börjar med två _ (underscore)
                // följt av ordet construct.
                public function__construct($name, $url, $rank) {
                    $this->name = $name;
                    $this->url  = $url;
                    $this->rank = $rank;
                }

                // Function för print av länk.
                public function getLink() {
                    return "<a href=\"{$this->url}\"{$this->name}</a>";
                }
            }
            */
            /*------------------------------------------------*/
            /*---------------- Använda klassen ---------------*/
            /*
            $php_net = new webpage("PHP", "http://php.net", 5);
            $example = new webpage("Exempel", "http://", 3);

            echo $php_net->name;                                    // "PHP"
            echo "<a href=\"{$example->url}\"{$example->name}</a>"; // Länk

            // Förenklad print av länk
            echo $php_net->getLink();
            */
            ?>
    </body>
</html>
