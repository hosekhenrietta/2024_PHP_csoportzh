# Webprogramozás -- PHP csoportzhn 2024

## Tudnivalók

1. A feladat beküldésével **az alább leírtakat megértettnek és elfogadottnak tekintjük** annak a nevében, aki a megoldást beküldte.

    ```txt
    Kijelentem, hogy ez a megoldás a saját munkám. Nem másoltam vagy 
    használtam harmadik féltől származó megoldásokat. Nem továbbítottam 
    megoldást hallgatótársaimnak, és nem is tettem közzé. Az Eötvös Loránd 
    Tudományegyetem Hallgatói Követelményrendszere (ELTE szervezeti és 
    működési szabályzata, II. Kötet, 74/C. §) kimondja, hogy mindaddig, 
    amíg egy hallgató egy másik hallgató munkáját - vagy legalábbis annak 
    jelentős részét - saját munkájaként mutatja be, az fegyelmi vétségnek számít. 
    A fegyelmi vétség legsúlyosabb következménye a hallgató elbocsátása az egyetemről.
    ```

2. A terminálban a `php -S localhost:1234` paranccsal tudtok szervert indítani.  

3. Töltsd le a `starter.zip` kezdőcsomagot. A mappákon belül a feladatokat az`index.php` állományban oldd meg!

4. A feladatok végeztével tömörítsd be a megoldásokat tartalmazó mappát (zip), és töltsd fel a Canvasre!

5. A feladatok megoldására **40 perc** áll rendelkezésre **+ 10 perc** az egyéb adminisztrációra (feladatok elolvasása, struktúra kialakítása, feltöltés).

6. A zh-hoz bármilyen írott segédanyag használható, azaz az órai munkák és a gyakorlati videók anyaga is. Zh közbeni humán segítség használata tilos!

## Feladatok

1. **Roxforti diákok névsora (4 pont)** A Roxfort egyes diákjainak névsora adott egy PHP adatszerkezetben.
    - a\. (2 pont) Jelenítsd meg a diákok nevét és a patrónusát egy táblázatban!
    - b\. (1 pont) A Táblázat alá írd ki a legtöbb karakterből álló patrónust!

2. **Felvétel a Roxfortba (6 pont)** Készíts egy regisztációs felületet, ahol meg tudsz adni egy nevet, email címet és ki tudsz választani egy roxforti házat.
    - a\. (2 pont) Validáld a nevet: `legyen kitöltve - elég csak ezt validálni, kis és nagybetűkre, arra hogy két szóbol áll-e, nem kell figyelni` 
    - b\. (2 pont) Validáld a házat: `ki van-e választva valami és az helyes-e`
    - c\. (1 pont) A form legyen állapottartó!
    - d\. (1 pont) Az elküldés gombra kattintva, ha valami nincs helyesen kitöltve, jelenjenek meg a hibaüzenetek bárhol az oldalon.

