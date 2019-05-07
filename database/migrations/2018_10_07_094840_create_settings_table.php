<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->increments('id');
            $table->string('title')->default('themar');
            $table->string('title_icon')->nullable();
            $table->string('logo');
            $table->longText('text_below_logo');
            $table->string('phone');
            $table->string('whatsapp');
            $table->string('email');
            $table->string('facebook_contact');
            $table->string('twitter_contact');
            $table->string('google_contact');
            $table->string('instagram_contact');
            $table->string('about_us_image');

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
