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
            $table->string('name',100);
            $table->integer('price');
            $table->text('intro');
            $table->text('content');
            $table->tinyInteger('status')->default('1')->comment('1: Show - 2: Hide');
            $table->tinyInteger('featured')->default('1')->comment('1: Outstanding - 2: Unoutstanding');
            $table->string('image');
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
