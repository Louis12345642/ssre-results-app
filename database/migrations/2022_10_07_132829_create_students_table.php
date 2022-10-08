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
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->string('Full_Name');
            $table->decimal('index_number')->unique();
            $table->decimal('Full_Marks');
            // $table->tinyInteger('Physics');
            // $table->tinyInteger('Mathmatices');
            // $table->tinyInteger('English');
            // $table->tinyInteger('biology');
            // $table->tinyInteger('Chemistry');
            // $table->tinyInteger('Aditional-math');
            // $table->tinyInteger('Agriculture');
            // $table->tinyInteger('CRE');
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
        Schema::dropIfExists('students');
    }
};
