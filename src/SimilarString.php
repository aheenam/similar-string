<?php

namespace Aheenam\SimilarString;

class SimilarString
{
    /**
     * returns a collection of the words in $collection ordered
     * by their similarity to $word.
     *
     * @param string                         $word
     * @param \Illuminate\Support\Collection $collection
     *
     * @return void
     */
    public function orderBySimilarity($word, $collection)
    {
        return collect($collection)
            ->sortByDesc(function ($item) use ($word) {
                return (new Dice())($word, $item);
            })
            ->values()
            ->all();
    }

    /**
     * returns the best match of a given collection.
     *
     * @param string                         $word
     * @param \Illuminate\Support\Collection $collection
     *
     * @return string
     */
    public function findMostSimilar($word, $collection)
    {
        return collect($this->orderBySimilarity($word, $collection))->first();
    }
}
