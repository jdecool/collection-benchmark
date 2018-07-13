<?php

use Innmind\Immutable\Map;

/**
 * @BeforeMethods({"setUp"})
 */
class ImmutableBench
{
    private $data;
    private $consumer;

    public function setUp()
    {
        $this->consumer = new Bench\Immutable();
        $data = unserialize(file_get_contents(__DIR__.'/../fixtures.data'));

        $map = new Map('int', 'int');
        foreach ($data as $k => $v) {
            $map = $map->put($k, $v);
        }

        $this->data = $map;
    }

    /**
     * @Revs(1000)
     * @Iterations(10)
     */
    public function benchConsume()
    {
       $this->consumer->square($this->data);
    }
}
