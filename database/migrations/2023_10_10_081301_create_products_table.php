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
            $table->increments('id');
          //  $table->id();

            $table->string('name',20);
            $table->string('description',200) ;
            $table->float('price') ;
            $table->integer('stock') ;
            $table->unsignedBigInteger('category_id');
           // $table->bigInteger('user_id')->unsigned();
          //  $table->integer(column: 'category_id')->unsigned();
            $table->foreign('category_id')
                  ->references('id')
                  ->on('categories')
                 ->onDelete('restrict')
                ->onUpdate('restrict');
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
