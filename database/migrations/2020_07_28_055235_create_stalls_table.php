<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStallsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stalls', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id')->unsigned();
            $table->integer('item_limit')->default(1);
            $table->boolean('status')->default(false);
            $table->date('item_exp')->nullable();
            $table->string('type')->nullable();
            $table->string('name');
            $table->string('slug');
            $table->string('phone');
            $table->string('email')->nullable();
            $table->string('web')->nullable();
            $table->string('fax')->nullable();
            $table->string('person_name')->nullable();
            $table->string('hotline1')->nullable();
            $table->string('hotline2')->nullable();
            $table->string('business')->nullable();
            $table->text('address');
            $table->string('area')->nullable();
            $table->string('city');
            $table->string('country')->default('Bangladesh');
            $table->string('img')->default('picture.jpg');
            $table->integer('postcode')->nullable();
            $table->text('about')->nullable();
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
        Schema::dropIfExists('stalls');
    }
}
