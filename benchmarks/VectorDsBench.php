<?php

use Ds\Vector;

/**
 * @BeforeMethods({"setUp"})
 */
class VectorDsBench
{
    private $data;
    private $consumer;

    public function setUp()
    {
        $this->consumer = new Bench\VectorDs();
        $data = unserialize(file_get_contents(__DIR__.'/../fixtures.data'));

        $vector = new Vector();
        foreach ($data as $k => $v) {
            $vector->push($v);
        }

        $this->data = $vector;
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
