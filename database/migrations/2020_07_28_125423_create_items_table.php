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
            $table->bigInteger('stall_id')->unsigned();
            $table->integer('user_id')->unsigned();
            $table->integer('subcategory_id')->unsigned();
            $table->integer('views')->default(0);
            $table->boolean('status')->default(0);
            $table->boolean('is_approve')->default(0);
            $table->boolean('stock')->default(1);
            $table->string('title');
            $table->string('slug');
            $table->string('model');
            $table->decimal('price', 8, 2);
            $table->decimal('ship_dhaka', 8, 2)->default(60);
            $table->decimal('ship_bd', 8, 2)->default(130);
            $table->string('offer');
            $table->string('img')->default('item.png');
            $table->string('img1')->default(null);
            $table->string('img2')->default(null);
            $table->string('img3')->default(null);
            $table->string('img4')->default(null);
            $table->text('description')->nullable();
            $table->integer('feature_id');
            $table->string('subcategory')->nullable();
            $table->json('features');
            $table->foreign('stall_id')
                ->references('id')
                ->on('stalls')
                ->onDelete('cascade');
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
