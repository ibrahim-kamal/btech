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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name' , 255);
            $table->text('images');
            $table->boolean('active');
            $table->integer('number');
            $table->integer('langId');
            $table->double('discount');
            $table->double('price');
            $table->double('oldPrice');
            $table->boolean('outOfStock');
            $table->string('image' , 255);
            $table->string('thumb' , 255);
            $table->text('description');
            $table->string('code' , 255)->index();
            $table->integer('brandId')->index();
            $table->integer('catId')->index();
            $table->timestamps();
        });
        Schema::create('sizes', function (Blueprint $table) {
            $table->id();
            $table->string('name' , 255);
            $table->boolean('active');
            $table->timestamps();
        });
        Schema::create('brands', function (Blueprint $table) {
            $table->id();
            $table->string('name' , 255);
            $table->boolean('active');
            $table->timestamps();
        });
        Schema::create('categories', function (Blueprint $table) {
            $table->id();
            $table->string('name' , 255);
            $table->integer('parent');
            $table->boolean('active');
            $table->timestamps();
        });
        Schema::create('colors', function (Blueprint $table) {
            $table->id();
            $table->string('name' , 255);
            $table->string('code' , 255);
            $table->boolean('active');
            $table->timestamps();
        });

        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->double('price');
            $table->double('discount');
            $table->double('code');
            $table->string('paymentType')->index();
            $table->string('status')->index();
            $table->string('paymentstatus')->index();
            $table->string('paymentType')->index();
            $table->integer('userId')->index();
            $table->integer('AgentId')->index();
            $table->integer('addressId');
            $table->timestamps();
        });
        Schema::create('Purchases', function (Blueprint $table) {
            $table->id();
            $table->double('price');
            $table->double('code');
            $table->double('discount');
            $table->string('paymentType');
            $table->string('paymentstatus');
            $table->integer('AgentId');
            $table->timestamps();
        });
        Schema::create('OrderDetails', function (Blueprint $table) {
            $table->id();
            $table->integer('productId');
            $table->integer('Qty');
            $table->integer('orderId');
            $table->double('unitprice');
            $table->double('total');
            $table->timestamps();
        });
        Schema::create('PurchaseDetails', function (Blueprint $table) {
            $table->id();
            $table->integer('productId');
            $table->integer('Qty');
            $table->integer('PurchaseId');
            $table->double('unitprice');
            $table->double('total');
            $table->timestamps();
        });
        Schema::create('customerAddress', function (Blueprint $table) {
            $table->id();
            $table->integer('userId');
            $table->integer('CountryId');
            $table->integer('CityId');
            $table->integer('areaId');
            $table->String('address');
            $table->String('street');
            $table->String('gps');
            $table->integer('floor');
            $table->integer('buliding');
            $table->integer('apartment ');
            $table->timestamps();
        });
        Schema::create('areas', function (Blueprint $table) {
            $table->id();
            $table->integer('parent');
            $table->string('name');
            $table->timestamps();
        });
        Schema::create('productSize', function (Blueprint $table) {
            $table->id();
            $table->integer('sizeId');
            $table->integer('colorId');
            $table->integer('number');
            $table->double('price');
            $table->double('discount');
            $table->timestamps();
        });
        Schema::create('pages', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('slug');
            $table->string('url');
            $table->boolean('header');
            $table->boolean('footer');
            $table->integer('parent');
            $table->text('description');
            $table->text('content');
            $table->timestamps();
        });
        Schema::create('modules', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('slug');
            $table->string('url');
            $table->integer('parent');
            $table->timestamps();
        });
        Schema::create('salesModules', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('slug');
            $table->string('url');
            $table->integer('parent');
            $table->timestamps();
        });
        Schema::create('adminPermission', function (Blueprint $table) {
            $table->id();
            $table->string('moduleId');
            $table->string('adminId');
            $table->timestamps();
        });
        Schema::create('salesPermission', function (Blueprint $table) {
            $table->id();
            $table->string('moduleId');
            $table->string('adminId');
            $table->timestamps();
        });


    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('databases');
    }
};
