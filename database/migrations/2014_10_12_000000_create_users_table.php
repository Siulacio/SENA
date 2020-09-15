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
            $table->bigIncrements('id');
            $table->string('username')->comment('nombre usuario');
            $table->string('nombres')->comment('nombre personal');
            $table->string('email')->unique()->comment('correo');
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password')->comment('contraseña');
            $table->integer('rol')->comment('admin:1, lider:2, transversal:3, aprendiz:4');
            
            $table->rememberToken();
            $table->timestamps();

            $table->engine='InnoDB';
            $table->charset='utf8';
            $table->collation='utf8_spanish_ci';
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
