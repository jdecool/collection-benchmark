Le benchmark utilise la lib PHPBenchmark pour les tests.

Le dossier `lib` contient le traitement à tester. Dans le cas présent, c'est juste des boucles ou des opérations de type `map`. Les données sont fournit sous forme de collection déjà remplies, c'est-à-dire les `array` brut pour les types primitifs, ou via un objet `Map` préremplit pour Immutable afin d'éviter de prendre en compte l'ajout de la données dans la collection.

Le benchmark en tant que tel est réalisé dans les classes du dossier `benchmarks`. Ils sont écrits comme des tests PHPUnit. Les fixtures proviennent du fichier `fixtures.data` et ont été générées aléatoirement via le script `init.php`.

Pour lancer le bencharmark il faut utiliser la commande : `vendor/bin/phpbench run benchmarks --report=exec`.

## Résultats

suite: 133eeea80f183c651f2b501c1ca159b9fb3b6982, date: 2018-07-14, stime: 15:09:38

<pre>
+---------------------+--------------+--------+--------+------+-----+------------+-----------------+-----------------+-----------------+-----------------+---------+--------+-----------+
| benchmark           | subject      | groups | params | revs | its | mem_peak   | best            | mean            | mode            | worst           | stdev   | rstdev | diff      |
+---------------------+--------------+--------+--------+------+-----+------------+-----------------+-----------------+-----------------+-----------------+---------+--------+-----------+
| ForEachLoopBench    | benchConsume |        | []     | 1    | 1   | 2,060,048b | 610.000μs       | 610.000μs       | 610.000μs       | 610.000μs       | 0.000μs | 0.00%  | 1.50x     |
| MapLambdaBench      | benchConsume |        | []     | 1    | 1   | 2,060,608b | 407.000μs       | 407.000μs       | 407.000μs       | 407.000μs       | 0.000μs | 0.00%  | 1.00x     |
| ImmutableBench      | benchConsume |        | []     | 1    | 1   | 8,544,760b | 2,691,577.000μs | 2,691,577.000μs | 2,691,577.000μs | 2,691,577.000μs | 0.000μs | 0.00%  | 6,613.21x |
| CollectionLoopBench | benchConsume |        | []     | 1    | 1   | 3,403,408b | 22,342.000μs    | 22,342.000μs    | 22,342.000μs    | 22,342.000μs    | 0.000μs | 0.00%  | 54.89x    |
| MapFunctionBench    | benchConsume |        | []     | 1    | 1   | 2,060,440b | 952.000μs       | 952.000μs       | 952.000μs       | 952.000μs       | 0.000μs | 0.00%  | 2.34x     |
+---------------------+--------------+--------+--------+------+-----+------------+-----------------+-----------------+-----------------+-----------------+---------+--------+-----------+
</pre>
