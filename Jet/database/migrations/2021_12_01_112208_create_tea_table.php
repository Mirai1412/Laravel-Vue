<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTeaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tea', function (Blueprint $table) {
            $table->id();
            $table->string('image');
            $table->foreignId('type_id')
            ->constrained()
            ->onDelete('cascade');
            $table->string('name');
            $table->unsignedDecimal('price', $precision = 10, $scale = 2);
            $table->year('text');
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
        Schema::dropIfExists('tea');
    }
}
