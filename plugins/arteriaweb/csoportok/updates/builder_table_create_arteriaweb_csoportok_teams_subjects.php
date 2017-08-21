<?php namespace Arteriaweb\Csoportok\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateArteriawebCsoportokTeamsSubjects extends Migration
{
    public function up()
    {
        Schema::create('arteriaweb_csoportok_teams_subjects', function($table)
        {
            $table->engine = 'InnoDB';
            $table->integer('team_id');
            $table->integer('subject_id');
            $table->primary(['team_id','subject_id']);
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('arteriaweb_csoportok_teams_subjects');
    }
}
