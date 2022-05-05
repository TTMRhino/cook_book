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
        Schema::create('recipe', function (Blueprint $table) {
            $table->id();
            $table->string('ingredients', 300);
            $table->longText('recipe', 3000);
            $table->foreignUuid('user_id');
            $table->string('image')->nullable($value = true);
            $table->integer('rating')->default(0);
            $table->boolean('moderated')->default(false);        
            $table->timestamps($precision = 0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('recipe');
    }
};
