<?php namespace ServiceMe\ServiceRequests\Models;

use Model;

/**
 * ModelUserProfile Model
 */
class ModelUserProfile extends Model
{

    /**
     * @var string The database table used by the model.
     */
    public $table = 'serviceme_servicerequests_model_user_profiles';

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