<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GuestSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       
        \App\Models\Guest::create([
             'name'=>'田中　太郎',
             'tel'=>'00012345678',
             'mail'=>'abcd@e',
            
            
        ]);
    
    }
}
