Utvärdering av webbplatsers laddningstid
=======================
Den här rapporten utvärderar 3 webbplatsers laddningstid med syftet att ge förslag på
åtgärder för att förbättra användarens upplevelse vid sidladdning.

Urval
-----------------------
Det ligger i allmänhetens intresse att på ett enkelt sätt kunna få tillgång till information om vädret. Därför kan det vara intressant att observera
hur snabbt offentliga organisationer levererar sådan information via sina webbsidor.

Som objekt för undersökningen valdes webbplatserna för de officiella väderinstituten i Danmark, Norge och Sverige. Deras respektive webbplatser är
[dmi.dk](https://www.dmi.dk/ "DMI"), [yr.no](https://www.yr.no/ "MI/YR") och
[smhi.se](https://www.smhi.se/ "SMHI").


Metod
-----------------------
Varje webbplats har utvärderats med hjälp av verktygen PageSpeed Insights (PSI) och Devtools i webbläsaren Firefox Developer's Edition.

På varje webbplats  valdes tre olika sidor ut; en startsida, en sida med varningar och en sida med prognoser för orten Skagen.

På varje undersida noterades poäng och förslag på förbättringsmöjligheter ifrån Pagespeed Insights.

Dessutom dokumenterades för varje undersida genomsnitten av laddningstid, antalet resurser och sidans totala storlek utifrån tre sidladdningar.


Resultat
-----------------------
All data som har uppmätts finns i följande [kalkylark](https://docs.google.com/spreadsheets/d/1fUhKWBmcPgLpATRMeWhXeBXSCJLFFrGzrksqX_L3S24/edit?usp=sharing "Data för utvärdering av laddningstid").

#### dmi.dk [(länk)](https://www.dmi.dk/ "DMI")

[FIGURE src="image/rapport/05_laddningstid/dmi.png?w=600" caption="Danmarks Meteorologiske Institut"]

DMI:s sidor fick ett PSI-betyg från 23 - 75 på desktop och 11 - 32 på mobil. Av de tre webbplatserna fick DMI lägst resultat i PSI.

Genomsnitten för laddningstiderna hamnade mellan cirka 14 och 20 sekunder på desktop och 9 till 12 sekunder på mobil. Storleken på överförd data låg på 1.3 MB på prognossidan för mobil upp till 3.69 MB för startsidan på desktop.

De åtgärder som enligt PSI skulle ge störst förbättring i sidladdning är att aktivera textkomprimering och ta bort resurser som blockerar renderingen. Genom att komprimera text med till exempel gzip och leverera den allra viktigaste JavaScripten och CSS-koden inline skulle det alltså gå att snabba upp sidladdningen.


#### yr.no [(länk)](https://www.yr.no/ "MI/YR")

[FIGURE src="image/rapport/05_laddningstid/yr.png?w=600" caption="Yr -- ett samarbete mellan NRK och Meteorologisk institutt"]

Yr.no fick bäst betyg på PSI där alla sidor låg nära 100 poäng med undantag för Prognos-sidan som tilldelades 69 poäng.

Laddningstiderna hamnade mellan cirka 2,5 till 8,5 sekunder. Storleken på överförd data var betydligt lägre än hos grannländernas sidor. Sidorna för start och varningar överförde under 1 MB medan prognossidan hamnade på 1.02 MB på desktop och 1.21 MB på mobil.

Även om Yr.no generellt har bra resultat vid laddning föreslår PSI några förbättringar.

Att använda rätt storlek för alla bilder, göra dem responsiva samt leverera bilderna i modernare format (JPEG 2000, JPEG XR, and WebP) skulle kunna göra laddningen ännu snabbare.

Det skulle även hjälpa att ladda icke synliga bilder efter hand som de hamnar inom webbläsarens fönster.

På samma sätt skulle CSS kunna laddas efter hand som den behövs.


#### smhi.se [(länk)](https://www.smhi.se/ "SMHI")

[FIGURE src="image/rapport/05_laddningstid/smhi.png?w=600" caption="Sveriges meteorologiska och hydrologiska institut"]

Sidorna på smhi.se fick en PSI-poäng mellan 63 - 80 på desktop och 19 - 42 på mobil.

Laddingstiderna varierade mellan över 20 sekunder för starstidan på desktop och 4,56 sekunder för varningssidan på mobil. Startsidan har därmed längst laddningstid av alla de sidor som undersökts. Den har också störst mängd överförd data på 3.92 MB i desktp och 4.13 MB i mobil. Det bör noteras att 4,13 MB för en enkel sidladdning på mobil är i tyngsta laget.

De viktigaste åtgärderna som föreslås av PSI verkar liksom hos yr.no vara att leverera bilder i modernare format och ladda dem efter hand som de behövs.

Det föreslås även att eliminera blockerande resurser. Att leverera en del JavaScript och CSS inline och ladda resten efter hand som det behövs skulle kunna förkorta laddningstiden.


Analys
-----------------------
Utifrån den här lilla studiens resultat verkar framförallt två principer för optimering av laddningstid vara värda att lyfta fram.

Den första principen är att komprimera resurserna så att de bara tar upp så mycket plats som behövs. Exempel på detta kan vara att göra bilder responsiva och använda moderna format så att bilden blir lagom stor för olika skärmstorlekar och inte tar upp mer data än nödvändigt. Samma sak kan göras genom att komprimera textresurser.

Den andra principen handlar om att leverera de allra mest nödvändiga resurserna först och sen leverera ytterligare resurser efter hand. Det kan göras genom inline JavaScript och CSS vid den initiala laddningen som sedan kompletteras med externa resurser. Bilder kan också levereras efter hand som de hamnar inom webbläsarens fönster.

I den här landskampen vinner Norges Yr.no med råge. Yr.no har överlägset kortast laddningstid och minst mängd överförd data. Det finns inte mycket att förbättra där. Värt att uppmärksamma är Yrs landningssida på mobil som nästan enbart innehåller ett sökformulär. Den typen av minimalism är förmodligen en bättre väg att gå än att överbelasta mobilsurfarna med i situationen förmodligen onödig data.

Smhi.se har högre poäng i PSI-mätningarna än dmi.dk men då de också har undersidan med den längsta laddningstiden och kastar 4,13 MB data på mobilanvändarna får de dela andraplatsen med dmi.dk.

Min personliga uppfattning är att om en sida tar mer än ett par, tre sekunder att ladda så känns det segt. Ofta får jag då känslan av att utvecklarna har försökt trycka in för mycket information och för mycket "flash" på alltför liten yta. Den enda sidan av de undersökta som klarar mitt gränsvärde är egentligen Yrs starstida på mobil, men deras andra sidor ligger inte så långt efter. DMI och SMHI ligger ofta långt över gränsvärdet när de närmar sig 20 sekunder. Det verkar dock som att tiden till interaktion är mycket kortare, det mesta ser ut att vara laddat efter 5-6 sekunder. Den upplevda snabbheten behöver inte vara samma som den som uppmätta. Dock upplever jag Yr som mycket snabbare än de andra två.


Övrigt
-----------------------

Författare: Olof Johansson