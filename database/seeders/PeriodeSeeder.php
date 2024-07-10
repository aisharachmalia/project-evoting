<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PeriodeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       
            // masukkan data ke database
            DB::table('voting_periode')->insert([
                'periode'=>'2024-2025'
                ]);
    }
    }

