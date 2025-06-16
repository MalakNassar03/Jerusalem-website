<?php namespace Malak\AboutUs\Models;

use Model;

/**
 * Model
 */
class AboutUs extends Model
{
    use \October\Rain\Database\Traits\Validation;


    /**
     * @var string table in the database used by the model.
     */
    public $table = 'malak_aboutus_data';

    /**
     * @var array rules for validation.
     */
    public $rules = [
    ];
     public $attachOne = [
       'Image' => \System\Models\File::class
     ];
}
