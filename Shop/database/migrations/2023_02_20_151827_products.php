<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->integer('no');
            $table->string('name',50);
            $table->string('slug');
            $table->string('image');
            $table->string('price');
            $table->string('size');
            $table->string('color');
            $table->text('description');
            $table->integer('status');
            $table->boolean('show_hide');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
