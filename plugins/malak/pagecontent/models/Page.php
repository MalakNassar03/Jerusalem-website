<?php namespace Malak\PageContent\Models;

use Model;

class Page extends Model
{
    public $table = 'malak_pagecontent_pages';

    // Tell October to JSON‐encode these columns
    public $jsonable = ['feature_blocks','history','staff'];

    // Allow mass-assignment
    protected $fillable = [
        'slug','title','feature_blocks','history','staff'
    ];
}
