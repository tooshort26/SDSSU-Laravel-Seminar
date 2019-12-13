<?php

use App\Relation;
use App\Sample;
use Illuminate\Database\Seeder;

class RelationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Sample::all()->each(function ($sample) {
        	Relation::create([
				'sample_id' => $sample->id,
				'title'     => 'Sample Title' . $sample->id
        	]);
        });

    }
}
