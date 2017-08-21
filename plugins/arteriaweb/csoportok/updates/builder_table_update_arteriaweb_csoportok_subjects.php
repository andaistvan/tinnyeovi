<?php namespace Arteriaweb\Csoportok\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateArteriawebCsoportokSubjects extends Migration
{
    public function up()
    {
        Schema::rename('arteriaweb_csoportok_subject', 'arteriaweb_csoportok_subjects');
    }
    
    public function down()
    {
        Schema::rename('arteriaweb_csoportok_subjects', 'arteriaweb_csoportok_subject');
    }
}
