<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Lista;
use Database\Factories\ListasFactory;
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
        \App\Models\User::factory(5)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // seeder hardcoded
        /* Lista::create([
                'titulo' => 'Laravel Senior Developer', 
                'tags' => 'laravel, javascript',
                'empresa' => 'Acme Corp',
                'local' => 'Boston, MA',
                'email' => 'email1@email.com',
                'website' => 'https://www.acme.com',
                'descricao' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam minima et illo reprehenderit quas possimus voluptas repudiandae cum expedita, eveniet aliquid, quam illum quaerat consequatur! Expedita ab consectetur tenetur delensiti?'
            ]);
        
        Lista::create([   
          'titulo' => 'Full-Stack Engineer',
          'tags' => 'laravel, backend ,api',
          'empresa' => 'Stark Industries',
          'local' => 'New York, NY',
          'email' => 'email2@email.com',
          'website' => 'https://www.starkindustries.com',
          'descricao' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam minima et illo reprehenderit quas possimus voluptas repudiandae cum expedita, eveniet aliquid, quam illum quaerat consequatur! Expedita ab consectetur tenetur delensiti?'
        ]); */

        // ultilizando ListasFactory.php
        \App\Models\Lista::factory(6)->create();

    }
}
