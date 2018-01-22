<?php
namespace Aheenam\SimilarString\Test;

use Aheenam\SimilarString\Dice;

use PHPUnit\Framework\TestCase;

class DiceTest extends TestCase
{
    /** @test */
    public function it_creates_bigrams()
    {
        $this->assertCount(4, (new Dice)->bigrams('night'));
    }

    /** @test */
    public function it_can_calculate_the_dice()
    {
        $this->assertEquals(0.25, (new Dice)('night', 'nacht'));
        $this->assertEquals(1, (new Dice)('abcd', 'abcd'));
        $this->assertEquals(0, (new Dice)('asdf', 'qwerty'));
    }
}
