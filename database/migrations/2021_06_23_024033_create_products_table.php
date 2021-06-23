<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->longText('photo')->comment('產品內容照片');
            $table->integer('product_type_id')->comment('產品種類ID');
            $table->string('product_name')->comment('產品名稱');
            $table->text('discript')->comment('產品介紹')->nullable();
            $table->string('color')->comment('產品顏色');
            $table->string('size')->comment('產品尺寸');
            $table->integer('price')->comment('產品價格');
            $table->boolean('top')->comment('是否至頂')->nullable();;
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
        Schema::dropIfExists('products');
    }
}
