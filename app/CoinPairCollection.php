<?php

namespace App;

class CoinPairCollection
{
    private array $coins;

    public function __construct($coins = [])
    {
        $this->coins = $coins;
    }

    public function get(string $symbol): ?CoinPair
    {
        return ($this->coins[$symbol]) ?? null;
    }

    /**
     * @return CoinPair[]
     */
    public function list(): array
    {
        return $this->coins;
    }

}