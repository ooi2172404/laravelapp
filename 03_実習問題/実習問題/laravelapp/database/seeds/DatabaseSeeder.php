<?php
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
   public function run()
   {
       //$this->call(RestdataTableSeeder::class);
       $this->call(PeopleTableSeeder::class);
       //$this->call(SubjectTableSeeder::class);
   }
}
