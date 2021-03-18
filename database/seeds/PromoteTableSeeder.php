<?php

use Illuminate\Database\Seeder;

use App\Promote;

class PromoteTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Promote::truncate();
        
        Promote::create(['name' => 'Website / Blog']);
        Promote::create(['name' => 'Newsletter / Mail Marketing']);
        Promote::create(['name' => 'Social Media']);
        Promote::create(['name' => 'Others']);
    }
}
