<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::insert('ALTER TABLE `banners` CHANGE `id` `id` INT(11) NOT NULL AUTO_INCREMENT;');
        DB::insert('ALTER TABLE `ads` CHANGE `id` `id` INT(11) NOT NULL AUTO_INCREMENT;');
        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
};
