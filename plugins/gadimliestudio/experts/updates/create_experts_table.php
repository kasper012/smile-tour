<?php namespace Gadimliestudio\Experts\Updates;

use Schema;
use October\Rain\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

class CreateExpertsTable extends Migration
{
    public function up()
    {
        Schema::create('gadimliestudio_experts_experts', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');

            $table->text('name')->nullable();
            
            $table->text('profile_img')->nullable();
            $table->text('post')->nullable();
            $table->text('socials')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('gadimliestudio_experts_experts');
    }
}
