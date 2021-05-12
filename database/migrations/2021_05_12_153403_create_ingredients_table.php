<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIngredientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ingredients', function (Blueprint $table) {
            $table->id();
            $table->string('ingredient');
            $table->integer('stock_level');
            $table->timestamps();
        });

        DB::table('ingredients')->insert([
            ['ingredient' => 'Coffee', 'stock_level' => 500],
            ['ingredient' => 'Milk', 'stock_level' => 1000],
            ['ingredient' => 'Sugar', 'stock_level' => 500],
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ingredients');
    }
}
