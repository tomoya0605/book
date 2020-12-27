<?php
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class ReadersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::table('readers')->truncate();
        DB::table('readers')->insert([ [
            'name' => '山田　太郎',
            'school_number' => '1234567',
            'admission_year' => '2018',
            'department_id' => 0,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
            ]
        ]);
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
}
