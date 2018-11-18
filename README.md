Le benchmark utilise la lib PHPBenchmark pour les tests.

Le dossier `lib` contient le traitement à tester. Dans le cas présent, c'est juste des boucles ou des opérations de type `map`. Les données sont fournit sous forme de collection déjà remplies, c'est-à-dire les `array` brut pour les types primitifs, ou via un objet `Map` préremplit pour Immutable afin d'éviter de prendre en compte l'ajout de la données dans la collection.

Le benchmark en tant que tel est réalisé dans les classes du dossier `benchmarks`. Ils sont écrits comme des tests PHPUnit. Les fixtures proviennent du fichier `fixtures.data` et ont été générées aléatoirement via le script `init.php`.

Pour lancer le bencharmark il faut utiliser la commande : `vendor/bin/phpbench run benchmarks --report=exec`.

## Résultats

suite: 133eeeb5e7608e4d7d4a561891b6f41064eb46fa, date: 2018-07-15, stime: 12:21:32

<pre>
+---------------------+--------------+--------+--------+------+-----+------------+-------------+-------------+-------------+-------------+----------+--------+--------+
| benchmark           | subject      | groups | params | revs | its | mem_peak   | best        | mean        | mode        | worst       | stdev    | rstdev | diff   |
+---------------------+--------------+--------+--------+------+-----+------------+-------------+-------------+-------------+-------------+----------+--------+--------+
| ForEachLoopBench    | benchConsume |        | []     | 1000 | 10  | 2,074,680b | 240.168μs   | 240.564μs   | 240.287μs   | 241.315μs   | 0.395μs  | 0.16%  | 1.00x  |
| MapLambdaBench      | benchConsume |        | []     | 1000 | 10  | 2,075,224b | 404.502μs   | 405.837μs   | 405.162μs   | 411.999μs   | 2.079μs  | 0.51%  | 1.69x  |
| SpatieTypedBench    | benchConsume |        | []     | 1000 | 10  | 2,135,568b | 5,955.965μs | 5,986.222μs | 5,969.932μs | 6,062.486μs | 32.457μs | 0.54%  | 24.88x |
| ImmutableBench      | benchConsume |        | []     | 1000 | 10  | 2,950,992b | 1,654.740μs | 1,659.960μs | 1,657.240μs | 1,666.793μs | 4.172μs  | 0.25%  | 6.90x  |
| CollectionLoopBench | benchConsume |        | []     | 1000 | 10  | 3,424,552b | 663.443μs   | 664.620μs   | 664.356μs   | 665.698μs   | 0.726μs  | 0.11%  | 2.76x  |
| MapFunctionBench    | benchConsume |        | []     | 1000 | 10  | 2,075,072b | 441.722μs   | 443.674μs   | 442.598μs   | 446.695μs   | 1.754μs  | 0.40%  | 1.84x  |
| MapDsBench          | benchConsume |        | []     | 1000 | 10  | 2,137,080b | 492.341μs   | 494.229μs   | 492.954μs   | 496.577μs   | 1.561μs  | 0.32%  | 2.05x  |
| VectorDsBench       | benchConsume |        | []     | 1000 | 10  | 2,013,840b | 387.889μs   | 388.189μs   | 388.102μs   | 388.812μs   | 0.252μs  | 0.06%  | 1.61x  |
+---------------------+--------------+--------+--------+------+-----+------------+-------------+-------------+-------------+-------------+----------+--------+--------+
</pre>
