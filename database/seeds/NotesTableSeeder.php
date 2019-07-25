<?php

use Illuminate\Database\Seeder;

class NotesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param =[
            // 'id' => 0,
            'note' => 'テスト',
            'date' => 'yesterday',
        ];

        DB::table('notes')->insert($param);

        $param =[
            // 'id' => 1,
            'note' => 'テスト1',
            'date' => 'today',
        ];

        DB::table('notes')->insert($param);

        $param =[
            // 'id' => 2,
            'note' => 'テスト2',
            'date' => 'tomorrow',
        ];

        DB::table('notes')->insert($param);
        
    }
}
