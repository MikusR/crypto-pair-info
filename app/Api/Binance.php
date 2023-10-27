<?php

namespace App\Api;

use App\CoinPair;
use App\CoinPairCollection;

class Binance
{
    public static function get(): CoinPairCollection
    {
        $json = json_decode(
            file_get_contents(
                "https://api4.binance.com/api/v3/ticker/24hr"
            )
        );

        $coinPairs = [];
        foreach ($json as $pair) {
            $coinPairs[$pair->symbol] = new CoinPair(
                $pair->symbol,
                $pair->priceChange,
                $pair->highPrice,
                $pair->lowPrice
            );
        }
        return new CoinPairCollection($coinPairs);
    }

}