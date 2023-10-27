<?php

namespace App;

class Application
{
    private CoinPairCollection $pairCollection;

    public function run()
    {
        $this->pairCollection = Api\Binance::get();

        while (true) {
            echo "enter coin pair\n";
            $choice = readline();
            if (strlen($choice) <= 3) {
                $choice = strtoupper($choice) . 'BTC';
            }
            echo ($this->pairCollection->get(strtoupper($choice))) ?? 'No such coin';
            echo "\n";
        }
    }

}