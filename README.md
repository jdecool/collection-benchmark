Le benchmark utilise la lib PHPBenchmark pour les tests.

Le dossier `lib` contient le traitement à tester. Dans le cas présent, c'est juste des boucles ou des opérations de type `map`. Les données sont fournit sous forme de collection déjà remplies, c'est-à-dire les `array` brut pour les types primitifs, ou via un objet `Map` préremplit pour Immutable afin d'éviter de prendre en compte l'ajout de la données dans la collection.

Le benchmark en tant que tel est réalisé dans les classes du dossier `benchmarks`. Ils sont écrits comme des tests PHPUnit. Les fixtures proviennent du fichier `fixtures.data` et ont été générées aléatoirement via le script `init.php`.

Pour lancer le bencharmark il faut utiliser la commande : `vendor/bin/phpbench run benchmarks --report=exec`.
