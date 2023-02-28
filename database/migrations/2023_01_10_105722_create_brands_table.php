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
        Schema::create('brands', function (Blueprint $table) {
            $table->id();
            //bu sonradan eklendi denenmedi 
            $table->unsignedBigInteger('category_id');
            $table->string('name');
            $table->string('slug');
            $table->enum('status',[1,0])->default(0)->comment('1 = aktif , 0 = pasif');
            $table->foreign('category_id')->references('id')->on('catagories');
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
        Schema::dropIfExists('brands');
    }
};
