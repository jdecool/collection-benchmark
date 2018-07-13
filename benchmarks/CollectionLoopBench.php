<?php

/**
 * @BeforeMethods({"setUp"})
 */
class CollectionLoopBench
{
    private $data;
    private $consumer;

    public function setUp()
    {
        $fixtures = unserialize(file_get_contents(__DIR__.'/../fixtures.data'));

        $this->data = collect($fixtures);
        $this->consumer = new Bench\CollectionLoop();
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
