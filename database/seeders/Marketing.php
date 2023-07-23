<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
class Marketing extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('marketing')->insert([
//             [
//             'name' => 'Stock Market',
//             'prize' => '14,500',
//             'img'=>'/img/Stock Market.jpg',
//             'description' => 'Learn how to trade stocks.
//              Learn the distinctions between stock and fixed-income investments.
//              Learn how to trade stocks.
//              Learn when to enter the stock market.
//              Learn about the stock market and the financial market.
//              Learn how to trade online.
//              Learn how to trade stock futures, options, and derivatives.
//              Discover the various trading approaches and how the NSE/BSE, Nifty 50, and Sensex operate'
//             ],
// [
//             'name' => 'Stock Market1111',
//             'prize' => '14,500',
//             'img'=>'Stock Market.jpg',
//             'description' => 'Learn how to trade stocks.
//              Learn the distinctions between stock and fixed-income investments.
//              Learn how to trade stocks.
//              Learn when to enter the stock market.
//              Learn about the stock market and the financial market.
//              Learn how to trade online.
//              Learn how to trade stock futures, options, and derivatives.
//              Discover the various trading approaches and how the NSE/BSE, Nifty 50, and Sensex operate'
//             ],
//             [
//             'name' => 'Stock Market1111',
//             'prize' => '14,500',
//             'img'=>'Stock Market.jpg',
//             'description' => 'Learn how to trade stocks.
//              Learn the distinctions between stock and fixed-income investments.
//              Learn how to trade stocks.
//              Learn when to enter the stock market.
//              Learn about the stock market and the financial market.
//              Learn how to trade online.
//              Learn how to trade stock futures, options, and derivatives.
//              Discover the various trading approaches and how the NSE/BSE, Nifty 50, and Sensex operate'
//             ],
            [
            'name' => 'Stock',
            'prize' => '14,500',
            'img'=>'Stock Market.jpg',
            'description' => 'Learn how to trade stocks.Learn the distinctions between stock and fixed-income investments.
            Learn how to trade stocks.
             Learn when to enter the stock market.
             Learn about the stock market and the financial market.
             Learn about the stock market and the financial market.
             Learn when to enter the stock market.
             Learn about the stock market and the financial market.
             Learn about the stock market and the financial market.
             Learn how to trade stock futures, options, and derivatives. 
             Discover the various trading approaches and how the NSE or BSE, Nifty 50, and Sensex operate            
            '
            ],
            

        ]);
    }
}
