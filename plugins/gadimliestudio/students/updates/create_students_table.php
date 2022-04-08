<?php namespace Gadimliestudio\Students\Updates;

use Schema;
use October\Rain\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

class CreateStudentsTable extends Migration
{
    public function up()
    {
        Schema::create('gadimliestudio_students_students', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');

            $table->text('name')->nullable();
            
            $table->text('profile_img')->nullable();
            $table->text('info')->nullable();
            $table->text('about')->nullable();

            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('gadimliestudio_students_students');
    }
}
