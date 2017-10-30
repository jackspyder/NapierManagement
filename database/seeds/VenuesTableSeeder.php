<?php

use Illuminate\Database\Seeder;

class VenuesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('venues')->insert([
            [
                'address' => '151 West George Street',
                'post_code' => 'G2 2JJ',
                'city' => 'Glasgow',
                'name' => 'Glasgow West George Street',
                'location' => '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d559.7565512089905!2d-4.257867670726901!3d55.862211751394234!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4888469e2059801f%3A0xf72fbc6dcd0974a8!2s151+W+George+St%2C+Glasgow+G2+2JJ%2C+UK!5e0!3m2!1sen!2sus!4v1509361370461" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>',
                'image' => '',
            ], //Venue One

            [
                'address' => '83 Princes Street',
                'post_code' => 'EH2 2ER',
                'city' => 'Edinburgh',
                'name' => 'Edinburgh Princes Street',
                'location' => '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2233.842719983902!2d-3.1997085839587465!3d55.952097884070696!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4887c790c2f46a9b%3A0xb641fe11a4ee65bd!2s83+Princes+St%2C+Edinburgh%2C+UK!5e0!3m2!1sen!2sus!4v1509361473721" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>',
                'image' => '',
            ], //Venue Two

            [
                'address' => '9-10 St. Andrew Square',
                'post_code' => 'EH2 2ER',
                'city' => 'Edinburgh',
                'name' => 'Edinburgh St Andrew Square',
                'location' => '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2233.842719983902!2d-3.1997085839587465!3d55.952097884070696!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4887c790c2f46a9b%3A0xb641fe11a4ee65bd!2s83+Princes+St%2C+Edinburgh%2C+UK!5e0!3m2!1sen!2sus!4v1509361473721" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>',
                'image' => '',
            ], //Venue Three

            [
                'address' => '1 Berry Street',
                'post_code' => 'AB25 1HF',
                'city' => 'Aberdeen',
                'name' => 'Aberdeen Berry Street',
                'location' => '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2164.2334409203786!2d-2.10052658392264!3d57.15016649082199!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x48840e3d72737f77%3A0x167b8575cd04b7af!2s1+Berry+St%2C+Aberdeen+AB25%2C+UK!5e0!3m2!1sen!2sus!4v1509361696057" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>',
                'image' => '',
            ], //Venue Four
        ]);
    }
}
