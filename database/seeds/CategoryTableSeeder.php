<?php

use Illuminate\Database\Seeder;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('category')->insert([
          'name' => 'Tehno_monitor',
          'description' => 'Tehno Monitor',
          'created_at' => now(),
          'updated_at' => now(),
        ]);
        DB::table('category')->insert([
          'name' => 'Consultanță',
          'description' => 'Consultanță',
          'created_at' => now(),
          'updated_at' => now(),
        ]);
        DB::table('category')->insert([
          'name' => 'Biotehnologii',
          'description' => 'Biotehnologii',
          'parent_id' => '2',
          'created_at' => now(),
          'updated_at' => now(),
        ]);
        DB::table('category')->insert([
          'name' => 'Economie',
          'description' => 'Economie',
          'parent_id' => '2',
          'created_at' => now(),
          'updated_at' => now(),
        ]);
        DB::table('category')->insert([
          'name' => 'Inteligență Artificială',
          'description' => 'Inteligență Artificială',
          'parent_id' => '2',
          'created_at' => now(),
          'updated_at' => now(),
        ]);
        $this->command->info('Default Category Added.');
    }
}
