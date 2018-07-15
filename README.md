Le benchmark utilise la lib PHPBenchmark pour les tests.

Le dossier `lib` contient le traitement à tester. Dans le cas présent, c'est juste des boucles ou des opérations de type `map`. Les données sont fournit sous forme de collection déjà remplies, c'est-à-dire les `array` brut pour les types primitifs, ou via un objet `Map` préremplit pour Immutable afin d'éviter de prendre en compte l'ajout de la données dans la collection.

Le benchmark en tant que tel est réalisé dans les classes du dossier `benchmarks`. Ils sont écrits comme des tests PHPUnit. Les fixtures proviennent du fichier `fixtures.data` et ont été générées aléatoirement via le script `init.php`.

Pour lancer le bencharmark il faut utiliser la commande : `vendor/bin/phpbench run benchmarks --report=exec`.

## Résultats

suite: 133eeeb5e7608e4d7d4a561891b6f41064eb46fa, date: 2018-07-15, stime: 12:21:32

<pre>
+---------------------+--------------+--------+--------+------+-----+------------+-----------------+-----------------+-----------------+-----------------+--------------+--------+------------+
| benchmark           | subject      | groups | params | revs | its | mem_peak   | best            | mean            | mode            | worst           | stdev        | rstdev | diff       |
+---------------------+--------------+--------+--------+------+-----+------------+-----------------+-----------------+-----------------+-----------------+--------------+--------+------------+
| ForEachLoopBench    | benchConsume |        | []     | 1000 | 10  | 2,060,296b | 235.150μs       | 236.962μs       | 235.759μs       | 247.591μs       | 3.596μs      | 1.52%  | 1.00x      |
| MapLambdaBench      | benchConsume |        | []     | 1000 | 10  | 2,060,856b | 397.244μs       | 398.410μs       | 398.615μs       | 399.263μs       | 0.690μs      | 0.17%  | 1.68x      |
| ImmutableBench      | benchConsume |        | []     | 1000 | 10  | 8,544,880b | 2,667,728.190μs | 2,717,098.143μs | 2,723,796.290μs | 2,750,533.968μs | 23,034.322μs | 0.85%  | 11,466.38x |
| CollectionLoopBench | benchConsume |        | []     | 1000 | 10  | 3,403,664b | 645.684μs       | 646.835μs       | 646.527μs       | 649.906μs       | 1.174μs      | 0.18%  | 2.73x      |
| MapFunctionBench    | benchConsume |        | []     | 1000 | 10  | 2,060,688b | 448.317μs       | 456.129μs       | 454.695μs       | 465.935μs       | 5.494μs      | 1.20%  | 1.92x      |
| MapDsBench          | benchConsume |        | []     | 1000 | 10  | 2,122,680b | 528.478μs       | 531.476μs       | 529.097μs       | 548.234μs       | 5.918μs      | 1.11%  | 2.24x      |
| VectorDsBench       | benchConsume |        | []     | 1000 | 10  | 1,999,472b | 390.320μs       | 390.744μs       | 390.579μs       | 391.344μs       | 0.338μs      | 0.09%  | 1.65x      |
+---------------------+--------------+--------+--------+------+-----+------------+-----------------+-----------------+-----------------+-----------------+--------------+--------+------------+
</pre>
