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
            $table->unsignedBigInteger('cate_id'); 
            $table->foreign('cate_id')->references('id')->on('categories');
            $table->string('prod_name');
			$table->string('short_desc');
            $table->string('long_desc');		  
            $table->string('prod_img');
            $table->string('multi_img');
            $table->string('main_price');
            $table->string('dis_price');
            $table->string('status'); 
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
        Schema::dropIfExists('products');
    }
};
