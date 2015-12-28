<?php
namespace App\Teamsflare\Transformers;

abstract class Transformer
{
    /**
     * Transform a collection of projects!
     *
     * @param $items
     * @return array
     */
    public function transformCollection($items)
    {
        return array_map([$this, 'transform'], $items);
    }

    public abstract function transform($item);
}