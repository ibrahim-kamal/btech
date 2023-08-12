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
        
        DB::insert('ALTER TABLE `products` CHANGE `id` `id` INT(11) NOT NULL AUTO_INCREMENT;');
        DB::insert('ALTER TABLE `sizes` CHANGE `id` `id` INT(11) NOT NULL AUTO_INCREMENT;');
        DB::insert('ALTER TABLE `brands` CHANGE `id` `id` INT(11) NOT NULL AUTO_INCREMENT;');
        DB::insert('ALTER TABLE `categories` CHANGE `id` `id` INT(11) NOT NULL AUTO_INCREMENT;');
        DB::insert('ALTER TABLE `colors` CHANGE `id` `id` INT(11) NOT NULL AUTO_INCREMENT;');
        DB::insert('ALTER TABLE `areas` CHANGE `id` `id` INT(11) NOT NULL AUTO_INCREMENT;');
        DB::insert('ALTER TABLE `pages` CHANGE `id` `id` INT(11) NOT NULL AUTO_INCREMENT;');
        DB::insert('ALTER TABLE `modules` CHANGE `id` `id` INT(11) NOT NULL AUTO_INCREMENT;');
        DB::insert('ALTER TABLE `salesModules` CHANGE `id` `id` INT(11) NOT NULL AUTO_INCREMENT;');
        
        
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
