<?php

use Illuminate\Database\Seeder;

class CommentsTableSeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory('App\Comment', 10)->create();
    }
}
