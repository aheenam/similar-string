<?php
namespace Aheenam\SimilarString\Test;

use PHPUnit\Framework\TestCase;
use Aheenam\SimilarString\SimilarString;

class SimilarStringTest extends TestCase
{
    /** @test */
    public function it_orders_strings_by_similarity()
    {
        $ordered = (new SimilarString)->orderBySimilarity('nacht', ['night', 'abcde', 'lacht']);

        $this->assertEquals(['lacht', 'night', 'abcde'], $ordered);
    }

    /** @test */
    public function it_returns_the_best_match()
    {
        $this->assertEquals('lacht', (new SimilarString)->findMostSimilar('nacht', ['night', 'abcde', 'lacht']));
    }
}
