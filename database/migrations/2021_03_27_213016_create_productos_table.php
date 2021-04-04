<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('productos', function (Blueprint $table) {
            $table->id();
            $table->string('name', 20);
            $table->string('id_company', 20);
            $table->string('type_category', 20);
            $table->decimal('cost', 8,2);
            $table->string('cost_delivery');
            $table->string('type_delivery', 50);
            $table->integer('qualification');
            $table->string('description');
            $table->string('city_company', 20);
            $table->integer('quantity');
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
        Schema::dropIfExists('productos');
    }
}
