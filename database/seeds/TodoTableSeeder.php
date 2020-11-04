<?php

use Illuminate\Database\Seeder;

class TodoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i = 1; $i <= 10; $i++)
        {
            DB::table('users')->insert([
                'name' => "ユーザー$i",
                'email' => "hoge+$i@test.com",
                'password' => bcrypt('password'),                                
            ]);
        }
        for($i = 1; $i <= 100; $i++)
        {
            $j = ($i - 1) / 10 + 1;
            $j = (int)($j);
            DB::table('todos')->insert([
                'title' => "タスク$i",
                'due_date' => date('Y-m-d'),
                'status' => 0,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'user_id' => $j,
            ]);
        }
    }
}