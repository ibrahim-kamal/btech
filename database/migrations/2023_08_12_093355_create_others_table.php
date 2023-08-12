<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('banners', function (Blueprint $table) {
            $table->integer('id');
            $table->string('name');
            $table->string('url');
            $table->string('image');
            $table->text('code');
            $table->integer('priority');
            $table->string('page');
            $table->boolean('all');
            $table->string('side');
            $table->integer('langId')->default(1);
            $table->primary(['id' , 'langId']);
            $table->timestamps();
            $table->increments('id')->change();
        });
        Schema::create('ads', function (Blueprint $table) {
            $table->integer('id');
            $table->string('name');
            $table->string('url');
            $table->string('image');
            $table->text('code');
            $table->integer('priority');
            $table->string('page');
            $table->boolean('all');
            $table->string('side');
            $table->integer('langId')->default(1);
            $table->primary(['id' , 'langId']);
            $table->timestamps();
            $table->increments('id')->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('others');
    }
};
