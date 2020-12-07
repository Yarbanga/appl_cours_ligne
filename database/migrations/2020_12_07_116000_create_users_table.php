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
            $table->id();
            $table->string('nom');
            $table->string('prenom');
            $table->date('date_naiss');
            $table->string('email')->unique();
            $table->string('ville');
            $table->string('ecole');
            $table->string('genre');
            $table->string('tel');
            $table->string('pays');
            $table->string('classe');
            $table->string('photo')->nullable();
            $table->boolean('is_admin')->nullable(); 
            $table->string('password');
            $table->timestamp('email_verified_at')->nullable();
            $table->bigInteger('classe_id')->unsigned()->nullable();
			$table->foreign('classe_id')
				  ->references('id')
				  ->on('classes')
				  ->onDelete('restrict')
				  ->onUpdate('restrict');
            $table->rememberToken();
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
        Schema::table('users', function(Blueprint $table) {
			$table->dropForeign('users_classe_id_foreign');
		});

        Schema::dropIfExists('users');
    }
}
