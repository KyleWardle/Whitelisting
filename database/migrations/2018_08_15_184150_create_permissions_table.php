<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePermissionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ems_permissions', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned()->unique();
            $table->integer('permission_level');
            $table->timestamps();
        });

        Schema::create('sd_permissions', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned()->unique();
            $table->integer('permission_level');
            $table->timestamps();
        });

        Schema::create('staff_permissions', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned()->unique();
            $table->integer('permission_level');
            $table->timestamps();
        });

        Schema::create('type_permissions', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('key');
            $table->text('description')->nullable()->default(null);
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
        Schema::dropIfExists('type_permissions');
        Schema::dropIfExists('ems_permissions');
        Schema::dropIfExists('sd_permissions');
        Schema::dropIfExists('staff_permissions');
    }
}
