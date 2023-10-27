<?php

namespace App;

class CoinPair
{
    private string $symbol;
    private float $priceChange;
    private float $highPrice;
    private float $lowPrice;

    public function __construct(
        string $symbol,
        float $priceChange,
        float $highPrice,
        float $lowPrice
    ) {
        $this->symbol = $symbol;
        $this->priceChange = $priceChange;
        $this->highPrice = $highPrice;
        $this->lowPrice = $lowPrice;
    }

    /**
     * @return string
     */
    public function getSymbol(): string
    {
        return $this->symbol;
    }

    /**
     * @return float
     */
    public function getPriceChange(): float
    {
        return $this->priceChange;
    }


rn float

    public function getHighPrice(): float
    {
        return $this->highPrice;
    }


turn float

    public function getLowPrice(): float
    {
        return $this->lowPrice;
    }
}