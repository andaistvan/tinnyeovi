<?php namespace Arteriaweb\Csoportok\Models;

use Model;

/**
 * Model
 */
class Team extends Model
{
    use \October\Rain\Database\Traits\Validation;
    
    /*
     * Disable timestamps by default.
     * Remove this line if timestamps are defined in the database table.
     */
    public $timestamps = false;

    /*
     * Validation
     */
    public $rules = [
    ];

    /**
     * @var string The database table used by the model.
     */
    public $table = 'arteriaweb_csoportok_teams';

    protected $jsonable = ['hetfo', 'kedd', 'szerda', 'csutortok', 'pentek'];
    
    public $attachOne = [
        'csoport_foto' => 'System\Models\File'
    ];
    
}