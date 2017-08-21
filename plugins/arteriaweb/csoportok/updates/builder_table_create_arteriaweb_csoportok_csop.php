<?php namespace Arteriaweb\Csoportok\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateArteriawebCsoportokCsop extends Migration
{
    public function up()
    {
        Schema::create('arteriaweb_csoportok_csop', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('title');
            $table->string('slug')->nullable();
            $table->string('pedagogus_1')->nullable();
            $table->string('pedagogus_2')->nullable();
            $table->string('dajka')->nullable();
            $table->string('ped_asszisztens')->nullable();
            $table->text('description')->nullable();
            $table->text('hetfo')->nullable();
            $table->text('kedd')->nullable();
            $table->text('szerda')->nullable();
            $table->text('csutortok')->nullable();
            $table->text('pentek')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('arteriaweb_csoportok_csop');
    }
}
