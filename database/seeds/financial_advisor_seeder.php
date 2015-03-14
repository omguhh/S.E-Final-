<?php

use Illuminate\Database\Seeder;

class FA_seeder extends Seeder{

    public function run()
    {
        // Uncomment the below to wipe the table clean before populating
        DB::table('financial_advisor')->delete();
        $projects = array(
            ['fa_id' => 'ayesha','fa_name' => 'ayesha sheriff', 'fa_email'=>'ayesha@gmail.com',
                'fa_address'=>'IC','fa_phone'=>'505989098','fa_rating'=>'4-star','years_experience'=>'16','certificate'=>'Dubai',
                'user_id'=>'101','fa_password'=>'ayesha123'],

            ['fa_id' => 'bobdylan','fa_name' => 'Bob Dylan', 'fa_email'=>'bobby@gmail.com',
                'fa_address'=>'TN,USA','fa_phone'=>'125989098','fa_rating'=>'5-star','years_experience'=>'20','certificate'=>'US',
                'user_id'=>'111','fa_password'=>'bob123'],

            ['fa_id' => 'grahamcandy','fa_name' => 'Graham Candy', 'fa_email'=>'GC@gmail.com',
                'fa_address'=>'BUFFALO,USA','fa_phone'=>'505912098','fa_rating'=>'3-star','years_experience'=>'12','certificate'=>'US',
                'user_id'=>'119','fa_password'=>'baloon123'],
        );
        // Uncomment the below to run the seeder
        DB::table('financial_advisor')->insert($projects);
    }
}