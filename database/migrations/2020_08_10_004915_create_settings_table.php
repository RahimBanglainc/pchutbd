<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('settings', function (Blueprint $table) {
            $table->id();
            $table->string('site_name')->default();
            $table->string('head_img')->default();
            $table->string('foo_img')->default();
            $table->string('fb')->default('https://fb.me');
            $table->string('instra')->default('https://instragram.com');
            $table->string('youtube')->default('https://youtube.com');
            $table->string('pinterest')->default('https://www.pinterest.com/');
            $table->string('app')->default('#');
            $table->string('copyright')->default('Copyright © PCHUTBD.com');
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
        Schema::dropIfExists('settings');
    }
}
