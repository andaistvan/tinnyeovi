<?php namespace Arteriaweb\Csoportok\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateArteriawebCsoportokSubject2 extends Migration
{
    public function up()
    {
        Schema::table('arteriaweb_csoportok_subject', function($table)
        {
            $table->renameColumn('fog_title', 'subject_title');
        });
    }
    
    public function down()
    {
        Schema::table('arteriaweb_csoportok_subject', function($table)
        {
            $table->renameColumn('subject_title', 'fog_title');
        });
    }
}
