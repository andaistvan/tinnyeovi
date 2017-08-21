<?php namespace Arteriaweb\Dokumentumok\Models;

use Model;

/**
 * Model
 */
class Dokumentum extends Model
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
    public $table = 'arteriaweb_dokumentumok_';

    public $attachOne =[
        'pdf_upload' => 'System\Models\File',
        'pdf_mediafinder' => 'System\Models\File'
    ];
}
