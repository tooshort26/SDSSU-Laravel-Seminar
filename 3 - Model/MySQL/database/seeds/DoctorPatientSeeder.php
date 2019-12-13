<?php

use App\Doctor;
use App\Patient;
use Illuminate\Database\Seeder;

class DoctorPatientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory('App\Doctor', 10)->create();
        factory('App\Patient', 10)->create();

        $doctors = Doctor::all();
        Patient::all()->each(function ($patient) use ($doctors) {
        	$patient->doctors()->attach(
        		$doctors->random(rand(1, 3))->pluck('id')->toArray()
        	);
        });
    }
}
