<?php namespace Gadimlie\Tours\Updates;

use Schema;
use October\Rain\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

class CreateToursTable extends Migration
{
    public function up()
    {
        Schema::create('gadimlie_tours_tours', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');

            $table->text('title')->nullable();
            $table->int('price')->nullable();
            
            $table->text('type')->nullable();
            $table->text('image')->nullable();

            $table->text('location')->nullable();
            $table->text('duration')->nullable();

            $table->text('max_people')->nullable();

            $table->text('min_age')->nullable();
            $table->text('language')->nullable();
            $table->text('starts')->nullable();
            $table->text('finish')->nullable();
            $table->text('meeting_point')->nullable();
            $table->text('pickup')->nullable();

            $table->text('description')->nullable();
            $table->text('short_description')->nullable();

            $table->text('included')->nullable();
            $table->text('excluded')->nullable();
            $table->text('iternary')->nullable();
            $table->text('images')->nullable();

            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('gadimlie_tours_tours');
    }
}
