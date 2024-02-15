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
        Schema::create('cartoons', function (Blueprint $table) {
            $table->id();
            $table->string('title', 100);
            $table->integer('years');
            $table->string('author', 100);
            $table->string('illustrator', 32);
            $table->string('publisher', 32);
            $table->string('genre', 32);
            $table->integer('edition_number');
            $table->decimal('value',10,2);
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
        Schema::dropIfExists('cartoons');
    }
};
