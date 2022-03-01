<?php

namespace Database\Seeders;

use App\Models\Person;
use Illuminate\Database\Seeder;

class PeopleTableSeeder extends Seeder
{
    /**
     * 人員テーブルのシーダー
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // レコードを１０件作成する
        Person::factory()->count(10)->create();
    }
}
