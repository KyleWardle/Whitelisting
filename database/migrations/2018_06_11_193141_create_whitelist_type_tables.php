<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWhitelistTypeTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('type_whitelisting_Staff_Rank', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('key')->unsigned()->unique()->default(0);
            $table->string('description', 100)->nullable()->default(null);
            $table->softDeletes();
            $table->timestamps();
        });

        Schema::create('type_whitelisting_SD_Rank', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('key')->unsigned()->unique()->default(0);
            $table->string('description', 100)->nullable()->default(null);
            $table->softDeletes();
            $table->timestamps();
        });

        Schema::create('type_whitelisting_SD_FTO', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('key')->unsigned()->unique()->default(0);
            $table->string('description', 100)->nullable()->default(null);
            $table->softDeletes();
            $table->timestamps();
        });

        Schema::create('type_whitelisting_SD_Aviation', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('key')->unsigned()->unique()->default(0);
            $table->string('description', 100)->nullable()->default(null);
            $table->softDeletes();
            $table->timestamps();
        });

        Schema::create('type_whitelisting_SD_CID', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('key')->unsigned()->unique()->default(0);
            $table->string('description', 100)->nullable()->default(null);
            $table->softDeletes();
            $table->timestamps();
        });

        Schema::create('type_whitelisting_SD_GU', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('key')->unsigned()->unique()->default(0);
            $table->string('description', 100)->nullable()->default(null);
            $table->softDeletes();
            $table->timestamps();
        });

        Schema::create('type_whitelisting_SD_SERT', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('key')->unsigned()->unique()->default(0);
            $table->string('description', 100)->nullable()->default(null);
            $table->softDeletes();
            $table->timestamps();
        });

        Schema::create('type_whitelisting_SD_K9', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('key')->unsigned()->unique()->default(0);
            $table->string('description', 100)->nullable()->default(null);
            $table->softDeletes();
            $table->timestamps();
        });

        Schema::create('type_whitelisting_SD_HP', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('key')->unsigned()->unique()->default(0);
            $table->string('description', 100)->nullable()->default(null);
            $table->softDeletes();
            $table->timestamps();
        });

        Schema::create('type_whitelisting_SD_IA', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('key')->unsigned()->unique()->default(0);
            $table->string('description', 100)->nullable()->default(null);
            $table->softDeletes();
            $table->timestamps();
        });

        Schema::create('type_whitelisting_EMS_Rank', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('key')->unsigned()->unique()->default(0);
            $table->string('description', 100)->nullable()->default(null);
            $table->softDeletes();
            $table->timestamps();
        });

        Schema::create('type_whitelisting_EMS_FD', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('key')->unsigned()->unique()->default(0);
            $table->string('description', 100)->nullable()->default(null);
            $table->softDeletes();
            $table->timestamps();
        });

        Schema::create('type_whitelisting_EMS_Aviation', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('key')->unsigned()->unique()->default(0);
            $table->string('description', 100)->nullable()->default(null);
            $table->softDeletes();
            $table->timestamps();
        });

        Schema::create('type_whitelisting_Blacklisted', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('key')->unsigned()->unique()->default(0);
            $table->string('description', 100)->nullable()->default(null);
            $table->softDeletes();
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
        //
    }
}
