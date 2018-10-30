# php-7
# Užduotis 1

# Pamėginkime sukurti f-ją kuri keltų įvestą skaičių į tekstinį lauką kvadratu ir duomenis atvaizduotų html‘e.

# Užduotis 2

Parašykite f-ją kuri kuri suskaičiuotų skaičiaus faktorialą. Padarykite įvedimo lauką, įvedus skaičių turi būti išvedamas to skaičiaus faktorialas.

# Užduotis 3

Parašykite f-ją kuri tikrintų ar metai yra keliamieji. Funkcijai paduodamas vienas parametras, metai, funckija gražina boolean tipo kintamąjį t.y. ar metai keliamieji ar ne.

# Užduotis 4

Sukurkite f-ja skirtą puslapio <head> </head> daliai atvaizduoti. Funkcijai turi būti title, bazinis css kelias (kelias iki css failų) ir css failų masyvas (sąrašas su css failais).

# Užduotis 5

Projektų puslapyje sukurkite rikiavimo galimybę: pagal datą, pavadinimą, kainą, metus.

Paspaudus ant pavadinimo turi surikiuoti didėjimo tvarka, dar kartą paspaudus turi surikiuoti

mažėjimo tvarka (modifikuoti praeitos paskaitos paskutinę užduotį).



# Užduotis 6

Sukurkite tinklapį iš 2 skirtingų puslapių pagal faile content.php pateiktą informaciją. 
Pridėjus papildomus duomenis tinklapyje turi atsirasti ši informacija. 
Galerijai panaudokite bootstrap įrankius. Galerijai, meniu ir tekstų atvaizdavimui sukurkite f-jas. Puslapyje turi būti atvaizduotos naujienos.
Paveikslėlius panaudokite savo atitinkamai
Pagal GET užklausą turėtų būti sužinoma, kuris puslapis buvo užklaustas,

pvz. galite turėti funkcijas:

outputGallery(array $galleryData): void
outputMenu(array $menu, int $activePageId): void
outputNews(array $news): void
outputContent(array $pageData): void


https://getbootstrap.com/docs/3.3/getting-started/

content.php:

<?php
$content = [
        1 => [
                'name' => 'Apie mus',
                'text' => '<p>Klaipėdos universitetas – tai daugiasritis, į tarptautinius akademinius tinklus integruotas nacionalinis ir Baltijos regiono jūros mokslų ir studijų lyderis, kultūros paveldo puoselėtojas ir mokymosi visą gyvenimą centras.</p>
                            <p>Klaipėdos universitetas įsteigtas 1991 m. sausio 1 d. Savo veiklą jis pradėjo turėdamas tris fakultetus, o 25-ąjį jubiliejų pasitinka išaugęs į 4 fakultetus: Humanitarinių ir ugdymo mokslų, Jūros technologjų ir gamtos mokslų, Socialinių ir Sveikatos mokslų; 1 studijų (Tęstinių studijų] ir 1 mokslo (Baltijos regiono istorijos ir archeologijos] institutus, Menų akademiją. Sparčiai augančiame universitete studijuoja apie 4500 studentų. Šioje Alma Mater studijas yra baigę daugiau nei 32 500 absolventų, kurių gretose yra mokslo daktarai, Seimo ir Vyriausybės nariai, stambių įmonių vadovai, inžinieriai, mokytojai, solistai ir teatralai.</p>',
                'image' => 'universitetas.jpg',
                'gallery' => [
                        'students.jpg',
                        'students2.jpg'
                ]
        ],
        2 => [
                'name' => 'Struktūra',
                'text' => '<p>Klaipėdos universiteto Taryba yra kolegialus Klaipėdos universiteto valdymo organas. Taryba vadovaujasi Lietuvos Respublikos Mokslo ir studijų įstatymu, Lietuvos Respublikos  teisės aktais, Universiteto statutu ir Tarybos darbo reglamentu. Taryba tvirtina universiteto viziją ir misiją, Rektoriaus pateiktą strateginį veiklos planą, svarsto ir tvirtina Rektoriaus teikiamus universiteto struktūros pertvarkos planus, nustato universiteto Rektoriaus rinkimų viešo konkurso būdu organizavimo tvarką, renka, skiria į pareigas ir atleidžia iš jų Rektorių, nustato universiteto lėšų ir turto valdymo, naudojimo ir disponavimo jais tvarką, svarsto ir tvirtina svarbiausius su tuo susijusius sprendimus, rūpinasi parama universitetui bei atlieka kitas funkcijas. Universiteto Taryba sudaroma 5 metams iš 9 narių.</p>',
                'image' => 'structure.jpg',
                'gallery' => [
                        'students3.jpg',
                        'students4.jpg'
                ]
        ],
];

$news=[
        '2016-12-16' => [
                'name'=>'Naujienos pavadinimas',
                'text'=>'Naujienos tekstas ilgas',
                'description'=>'Naujienos trumpas aprašymas'
        ],
        '2016-12-14' => [
                'name'=>'Naujienos pavadinimas',
                'text'=>'Naujienos tekstas ilgas',
                'description'=>'Naujienos trumpas aprašymas'
        ]
            
];
$menu = [['id' => 1, 'text' => 'Apie mus'], ['id' => 2, 'text' => 'Struktūra']];
