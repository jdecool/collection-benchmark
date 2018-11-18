<?php

declare(strict_types=1);

/**
 * @BeforeMethods({"setUp"})
 */
class SpatieTypedBench
{
    private $data;
    private $consumer;

    public function setUp()
    {
        $this->data = unserialize(file_get_contents(__DIR__.'/../fixtures.data'));
        $this->consumer = new Bench\SpatieTyped();
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
