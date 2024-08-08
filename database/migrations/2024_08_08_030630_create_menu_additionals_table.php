<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMenuAdditionalsTable extends Migration
{
    public function up()
    {
        Schema::create('menu_additionals', function (Blueprint $table) {
            $table->id();
            $table->foreignId('menu_id')->constrained('menus')->onDelete('cascade');
            $table->foreignId('additional_id')->constrained('additionals')->onDelete('cascade');
            $table->timestamps();

            $table->unique(['menu_id', 'additional_id']); // Menambahkan unique constraint
        });
    }

    public function down()
    {
        Schema::dropIfExists('menu_additionals');
    }
}
