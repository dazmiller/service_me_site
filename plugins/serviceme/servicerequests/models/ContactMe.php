<?php namespace ServiceMe\ServiceRequests\Models;

use Model;

/**
 * ContactMe Model
 */
class ContactMe extends Model
{

    /**
     * @var string The database table used by the model.
     */
    public $table = 'serviceme_servicerequests_contact_mes';

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