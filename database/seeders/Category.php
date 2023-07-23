<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
class Category extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            ['name'=>'Business',             
            ],
            ['name'=>'Marketing',             
            ],
            ['name'=>'Social Media',
            ],
            ['name'=>'E-Commerce',
            ],
            ['name'=>'Finance',
            ],
            ['name'=>'Fund Raising',
            ],
            ['name'=>'E-Commerce',
            ],
            ['name'=>'Personal Finance',
            ],
            ['name'=>'Sales',
            ],
                       

        ]);
        //
    }
}
