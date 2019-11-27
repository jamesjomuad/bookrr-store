<?php namespace Bookrr\Store\Models;

use Model;

/**
 * Shop Model
 */
class Shop extends Model
{
    /**
     * @var string The database table used by the model.
     */
    public $table = 'bookrr_store_shops';

    /**
     * @var array Guarded fields
     */
    protected $guarded = ['*'];

    /**
     * @var array Fillable fields
     */
    protected $fillable = [];

    /**
     * @var array Relations
     */
    public $hasOne = [];
    public $hasMany = [];
    public $belongsTo = [];
    public $belongsToMany = [];
    public $morphTo = [];
    public $morphOne = [];
    public $morphMany = [];
    public $attachOne = [];
    public $attachMany = [];
}
