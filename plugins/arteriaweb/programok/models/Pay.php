<?php namespace Arteriaweb\Programok\Models;

use Model;

/**
 * Model
 */
class Pay extends Model
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
    public $table = 'arteriaweb_programok_pays';

    protected $dateFormat = 'Y.m.d. H:i';
}