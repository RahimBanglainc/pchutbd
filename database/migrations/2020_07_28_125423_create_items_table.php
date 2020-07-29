<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('items', function (Blueprint $table) {
            $table->id();
            $table->integer('stall_id')->unsigned();
            $table->integer('user_id')->unsigned();
            $table->boolean('status')->default(1);
            $table->boolean('is_approve')->default(0);
            $table->string('title');
            $table->string('slug');
            $table->string('model');
            $table->decimal('price', 8, 2);
            $table->string('offer');
            $table->string('img')->default('item.png');
            $table->text('description')->nullable();
            $table->integer('feature_id');
            $table->string('category')->nullable();
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
        Schema::dropIfExists('items');
    }
}
