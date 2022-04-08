<?php namespace Gadimliestudio\States\Updates;

use Schema;
use October\Rain\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

class CreateStatesTable extends Migration
{
    public function up()
    {
        Schema::create('gadimliestudio_states_states', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');

            $table->text('title')->nullable();
            
            $table->text('image')->nullable();
            $table->text('images')->nullable();

            $table->text('description')->nullable();
            $table->text('excerpt')->nullable();
            $table->text('faq')->nullable();

            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('gadimliestudio_states_states');
    }
}
