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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->foreignId(column:'client_id');
            $table->foreignId(column:'menu_id');
            $table->string('name and surname');
            $table->string('adress');
            $table->string('phone');
            $table->float('price');
            $table->float('delivery price');
            $table->float('total');
            $table->timestamps();


            $table->foreing(columns:'client_id')
            ->references (columns:'id')
            ->on (table:'clients')
            ->casadeOnDelete();

            $table->foreign (columns:'menu_id')
            ->referencs(columns:'id')
            ->on(table:'menus')
            ->cascadeOnDelete();
            

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
