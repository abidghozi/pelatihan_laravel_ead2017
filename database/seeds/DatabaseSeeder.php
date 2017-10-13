<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $list = config('permission-list');
        foreach ($list as $key => $value) {
            foreach ($value as $x) {
                Permission::create(["name" => $x." ".$key]);
            }
        }

    }
}
