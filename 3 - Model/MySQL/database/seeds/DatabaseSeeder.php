<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
    	$this->call([
    		SampleSeeder::class,
    		RelationSeeder::class,
            PostSeeder::class,
            CommentSeeder::class,
            DoctorPatientSeeder::class,
    	]);
    }
}
