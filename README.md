# Webova-kalkulacka
Webová kalkulačka, která v index.php má html a javascript a v math.php probíhá zpracování vstupu a výpočet. +Klávesnice nabindovaná na tlačitka.

V jazyce HTML jsem vytvořil kostru kalkulačky.
Poté jsem pomocí jazyku javascript a s použitím Ajaxu odeslal řetězec "veta", v které je nahráno co uživatel zadal (např. "15 + 2 * 3").
Tento řetězec Ajax odeslal na serverové rozhraní, kde si to převzalo php a vypočítalo to. To jsem dokázal tak, že jsem si řetězec rozdělil na pole a poté for loopem prohledával jednotlivé části pole a hledal jsem operátory. Když jsem nějaký operátor našel, tak jsem použil daný operátor na předešlou a následující část pole. (předchozí a následující index i-1, i+1).
Nemám ošetřenou přednost násobení a dělení, ale to bych zvládl upravit. Udělal bych to pomocí 2 for loopů, první by vyhledával násebení a dělení a čísla vynásobil a vydělil. Poté bych druhým for loopem vyhledal sčítání a odčítání a čísla, v již upraveném poli a čísla sečetl a odečetl.
Poté se vysledek pošle zpátky do Ajaxu a v Ajaxu jsem to zobrazil.
V javascriptu jsem vytvořil 3 funkce.
Funkce pridejCislo přidává jednotlivé části rovnice.
Funkce poslatData vytvoří Ajax a pošle rovnici na server a poté dostane výsledek, který zobrazí.
Funkce smazat odstraní zatím napsané věci.
Nakonec jsem v javascriptu přiřadil ke zmáčknutí jednotlivých kláves tlačítka, rovná se je Enter a vymazání je Delete.
Jako poslední krok jsem vytvořil style.css kde jsem trochu zkrášlil vzhled kalkulačky.
