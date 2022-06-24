<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Person;

class PeopleTableSeeder extends Seeder
{
    public function run()
    {
        /*$param = [
            'name' => 'taro',
            'mail' => 'taro@yamada.jp',
            'age' => 12,
        ];
        DB::table('people')->insert($param);

        $param = [
            'name' => 'hanako',
            'mail' => 'hanako@flower.jp',
            'age' => 34,
        ];
        DB::table('people')->insert($param);

        $param = [
            'name' => 'sachiko',
            'mail' => 'sachiko@happy.jp',
            'age' => 56,
        ];
        DB::table('people')->insert($param);*/

        factory(Person::class, 50)->create();//今回は50個のテストデータを作成
    }
}
