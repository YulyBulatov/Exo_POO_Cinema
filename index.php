<h1>Cinéma</h1>

<p>Vous avez en charge de gérer différentes entités autour de la thématique du cinéma.Les films seront caractérisés par leur titre, leur date de sortie en France, leur  durée (en minutes) ainsi que leur réalisateur (unique, avec nom, prénom, sexe et date de naissance). Un résumé du film (synopsis)  pourra  éventuellement être  renseigné.  Chaque  film  est  caractérisé  par  un  seul  genre cinématographique (science-fiction, aventure, action, ...).Votre application devra recenser également les acteurs de chacun des films. On désire connaître le nom, le prénom, le sexe et la date de naissance de l’acteur ainsi que le rôle (nom du personnage) joué par l’acteur dans le(s) film(s) concerné(s).Il serait intéressant d'utiliser la notion d'héritage entre classes dans cet exercice. A vous de le mettre en place correctement !Attention, le rôle (par exemple James Bond) ne doit être instancié qu'une seule fois (dans la mesure où ce rôle a été incarné par plusieurs acteurs.)On doit pouvoir :Lister la liste des acteurs ayant incarné un rôle précis (ex: les acteurs ayant joué le rôle de Batman : Michael Keaton, Val Kilmer, George Clooney, ...)Lister  le  casting  d'un  film  (dans  le  film  Star  Wars  Episode  IV,  Han  Solo  a  été  incarné  par Harrison Ford, Luke Skywalker a été incarné par Mark Hamill, ...)Lister  les  films  par  genre  (exemple  :  le  genre SF  est  associé  à  X  films  :  Star  Wars,  Blade Runner, ...)Lister la filmographie d'un acteur (dans quels films a-t-il joué ?)Lister la filmographie d'un réalisateur (quels sont les films qu'a réalisé ce réalisateur ?)</p>

<h2>Résultat</h2>

<?php

spl_autoload_register(function ($class_name) {

    require_once $class_name . '.php';

});

$Lucas = new Realisateur("Lucas", "George", "masculin", "1944-05-14");
$sf = new Genre("Science-fiction");

$Star_Wars_IV = new Film("Star Wars: Episode IV - A New Hope", "1977-05-01",121,$Lucas,"La guerre civile fait rage entre l'Empire galactique et l'Alliance rebelle. Capturée par les troupes de choc de l'Empereur menées par le sombre et impitoyable Dark Vador, la princesse Leia Organa dissimule les plans de l'Etoile Noire.", $sf);

$mark_hammil = new Acteur("Hammil", "Mark", "masculin", "1951-09-25");
$harrison_ford = new Acteur("Ford", "Harrison", "masculin", "1942-07-13");
$carrie_fisher = new Acteur("Fisher", "Carrie", "feminin", "1956-10-21");

$luke_Skywalker = new Personnage("Luke Skywalker");
$han_Solo = new Personnage("Han Solo");
$leia_Organa = new Personnage("Leia Organa");

$acteurs_sw_IV = [$mark_hammil, $harrison_ford, $carrie_fisher];
$personnages_sw_IV = [$luke_Skywalker, $han_Solo, $leia_Organa];

$casting_sw_IV = new Casting($Star_Wars_IV, $acteurs_sw_IV, $personnages_sw_IV);

$Howard = new Realisateur("Howard", "Ron", "masculin", "1954-03-01");

$Solo_sw = new Film ("Solo: A Star Wars Story", "2018-05-10", 135, $Howard, "In a galaxy where hyperfuel is in high demand, Han Solo gets involved in a large-scale heist within the criminal underworld and meets individuals who change his life.", $sf);

$alden_ehrenreich = new Acteur("Ehrenreich", "Alden", "masculin", "1989-11-22");
$emilia_clarke = new Acteur("Clarke", "Emilia", "feminin", "1986-10-23");
$donald_glover = new Acteur("Glover", "Donald", "masculin", "1983-09-25");

$qi_ra = new Personnage("Qi'ra");
$lando_calrissian = new Personnage("Lando Calrissian");

$acteurs_Solo_sw = [$alden_ehrenreich, $emilia_clarke, $donald_glover];
$personnages_Solo_sw = [$han_Solo, $qi_ra, $lando_calrissian];

$casting_Solo_sw = new Casting($Solo_sw, $acteurs_Solo_sw, $personnages_Solo_sw);

$drame = new Genre("Drame");

$Rush = new Film ("Rush", "2013-09-25", 122, $Howard, "James Hunt and Niki Lauda, two extremely skilled Formula One racers, have an intense rivalry with each other. However, it is their enmity that pushes them to their limits.", $drame);

$daniel_bruhl = new Acteur("Brühl", "Daniel", "masculin", "1978-06-16");
$chris_hemsworth = new Acteur("Hemsworth", "Chris", "masculin", "1983-10-11");

$niki_lauda = new Personnage("Niki Lauda");
$james_hunt = new Personnage("James Hunt");

$acteurs_Rush = [$daniel_bruhl, $chris_hemsworth];
$personnages_Rush = [$niki_lauda, $james_hunt];

$casting_Rush = new Casting($Rush, $acteurs_Rush, $personnages_Rush);

$au_coeur_de_l_ocean = new Film ("Au cœur de l'océan", "2015-12-09", 121, $Howard, "The crew of a whaling ship encounter a huge albino bull sperm whale, which tests their resilience and beliefs. They are pushed to their limits to survive out there in the sea.", $drame);

$cillian_murphy = new Acteur("Murphy", "Cillian", "masculin", "1976-05-25");

$owen_chase = new Personnage("Owen Chase");
$matthew_joy = new Personnage("Matthew Joy");

$acteurs_au_coeur_de_l_ocean = [$chris_hemsworth, $cillian_murphy];
$personnages_au_coeur_de_l_ocean = [$owen_chase, $matthew_joy];

$casting_au_coeur_de_l_ocean = new Casting($au_coeur_de_l_ocean, $acteurs_au_coeur_de_l_ocean, $personnages_au_coeur_de_l_ocean);

echo $Star_Wars_IV->getResume();

echo "<br>";

$han_Solo->afficherActeurs();

echo "<br>";

$casting_sw_IV->afficherCasting();

echo "<br>";

$sf->afficherFilmsdeGenre();

echo "<br>";

$chris_hemsworth->afficherFilmographie();

echo "<br>";

$Howard->afficherFilmographie();



