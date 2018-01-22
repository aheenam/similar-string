<?php

namespace Aheenam\SimilarString;

class Dice
{
    /**
     * Returns the Dice coefficient of two given strings.
     *
     * @return float
     */
    public function __invoke($word, $comparison)
    {
        $wordBigrams = $this->bigrams($word);
        $comparisonBigrams = $this->bigrams($comparison);

        return (2 * $wordBigrams->intersect($comparisonBigrams)->count())
            / ($wordBigrams->count() + $comparisonBigrams->count());
    }

    /**
     * Returns a collection of bigrams of the given word.
     *
     * @param string $word
     *
     * @return Collection
     */
    public function bigrams($word)
    {
        $bigrams = collect([]);
        $wordLength = strlen($word);

        for ($i = 0; $i + 1 < $wordLength; $i++) {
            $bigrams->push($word[$i].$word[$i + 1]);
        }

        return $bigrams;
    }
}
