<?php namespace Malak\Repeater\Models;

use Model;

/**
 * Model
 */
class Slider extends Model
{
    use \October\Rain\Database\Traits\Validation;


    /**
     * @var string table in the database used by the model.
     */
    public $table = 'malak_repeater_slider';

    /**
     * @var array rules for validation.
     */
    public $rules = [
    ];

    public $jsonable = ['repeater'];


}
