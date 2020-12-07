<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClasseLessonTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('classe_lesson', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('classe_id')->unsigned();
			$table->bigInteger('lesson_id')->unsigned();
			$table->foreign('classe_id')->references('id')->on('classes')
						->onDelete('restrict')
						->onUpdate('restrict');

			$table->foreign('lesson_id')->references('id')->on('lessons')
						->onDelete('restrict')
						->onUpdate('restrict');
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
        Schema::table('classe_lesson', function(Blueprint $table) {
			$table->dropForeign('classe_lesson_classe_id_foreign');
			$table->dropForeign('post_tag_lesson_id_foreign');
		});

        Schema::dropIfExists('classe_lesson');
    }
}
