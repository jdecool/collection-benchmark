<?php

$data = range(0, (int)($argv[1] ?? 1000));

file_put_contents('fixtures.data', serialize($data));
