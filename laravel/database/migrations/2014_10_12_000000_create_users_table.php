<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements("user_id");
            $table->string('user_name');
            $table->string('user_email',100)->unique();
            $table->string('user_password');
            $table->integer('user_type_id')->nullable();
            $table->integer('group_id')->nullable(true);
            $table->integer('faculty_id')->nullable();

            $table->string('status')->default("");
            $table->rememberToken();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
