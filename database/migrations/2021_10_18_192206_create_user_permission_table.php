<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserPermissionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_permission_groups', function (Blueprint $table) {
            $table->id();
            $table->text('name');
            $table->integer('allow_write');
            $table->integer('allow_comment');
            $table->integer('ban_users');
            $table->integer('delete_users');
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
        Schema::dropIfExists('user_permission_groups');
    }
}
