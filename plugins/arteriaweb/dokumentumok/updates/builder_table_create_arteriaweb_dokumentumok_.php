<?php namespace Arteriaweb\Dokumentumok\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateArteriawebDokumentumok extends Migration
{
    public function up()
    {
        Schema::create('arteriaweb_dokumentumok_', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('name');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('arteriaweb_dokumentumok_');
    }
}
