Tema med fokus på designprinciper
=======================
Tanken med temat är framförallt att utforska olika möjligheter för att skapa en känsla av djup.
Några andra principer som har studerats är rörelse, repetition och hierarki.

Här är en [länk till temat](http://www.student.bth.se/~oljh19/dbwebb-kurser/design/me/redovisa/htdocs/rapport/designprinciper?style=kmom06-designprinciper).

Djup/Perspektiv
-----------------------
För att få lite mer känsla av djup och flera dimensioner har bakgrundsbilder använts i body och många element har försetts med skuggor.

Elementet `body` har bakgrundsbilder från sidan [gradientmagic](https://www.gradientmagic.com/). Själva `body`har en bakgrundsbild med `background-attachment: fixed;` och 
`body::before` har en bakgrund med `opacity: .5;`. På så sätt skapas en  enklare form av parallax-effekt där den ena bakgrundsbilden rör sig vid scrollning medan den andra står stilla.

Artikel-element, sidomenyer, header och footer har fått `box-shadow` vilket kan ge en illusion av att de befinner sig strax ovanför bakgrunden.

Texten i menyer och footer har fått en del `text-shadow` vilket också skapar djup.

Knapparna i navbaren har tilldelats `box-shadow` med `inset` så att skuggan hamnar på insidan. Tanken är att ge knapparna ett lite mer tredimensionellt utseende.

Rörelse
-----------------------
CSS-klasserna `.previous` och `.next` har fått `font-style: italic;` i syfte att skapa en känsla av rörelse mot nästa eller föregående artikel.
Möjligtvis skulle även de diagonala linjerna i bakgrunden kunna få ögat att röra sig
mer över sidan.

Repetition/variation
-----------------------
Ett exempel på repetition är att samma font används för både rubriker och länkarna i header, sidomenyer och footer. För att ändå få in lite variation har länkarna i de olika elementen stylats på olika sätt. Detta skapar en enhetlighet inom de olika sektionerna och särskiljer dem gentemot varandra.

Hierarki
-----------------------
För att förtydliga hierarkin på sidan har headern försetts med mer styling och färg, medan sidomenyerna har lite mindre styling. Footern har fått en mörk färg för att markera att den befinner sig i botten av sidan.

Symmetri och grid
-----------------------
När temat skissades upp framkom att artikelelement och sidomenyer inte passade in i gridet. Detta visade sig bero på att de hade försetts med padding. Efter att ha tilldelats egenskapen `box-sizing: border-box` hamnade elementen på plats i gridet. Gridet underlättar för att skapa symmetri i designen vilket besökare kan uppleva som behagligt.


Källor
-----------------------
Som referens för designprinciper har artikeln [Design Elements & Principles](https://www.canva.com/learn/design-elements-principles/) använts.