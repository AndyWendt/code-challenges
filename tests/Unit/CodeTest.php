<?php


use Challenges\Code;

class CodeTest extends \PHPUnit\Framework\TestCase
{
    /**
     * @test
     */
    public function it_instantiates_the_class()
    {
        $instance = new Code();
        $this->assertInstanceOf(Code::class, $instance);
    }
}
