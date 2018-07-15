<?php

use Ds\Map;

/**
 * @BeforeMethods({"setUp"})
 */
class MapDsBench
{
    private $data;
    private $consumer;

    public function setUp()
    {
        $this->consumer = new Bench\MapDs();
        $data = unserialize(file_get_contents(__DIR__.'/../fixtures.data'));

        $map = new Map();
        foreach ($data as $k => $v) {
            $map->put($k, $v);
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
