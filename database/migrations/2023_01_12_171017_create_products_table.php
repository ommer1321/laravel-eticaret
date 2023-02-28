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
            $table->unsignedBigInteger('category_id');
            $table->string('name');
            $table->string('slug');
            $table->string('brand');

            $table->longText('small_description');
            $table->longText('description');
            $table->string('meta_title');

            $table->longText('meta_description');
            $table->longText('meta_keywords');
            $table->integer('original_price');
            $table->integer('selling_price');
            $table->integer('quantity');

            $table->enum('trend',['1','0'])->default('0')->comment('1 = aktif ,0 = passif ');
            $table->enum('status',['1','0'])->default('0')->comment('1 = aktif ,0 = passif ');
     

            $table->foreign('category_id')->references('id')->on('catagories')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
};
