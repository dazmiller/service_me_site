<?php namespace ServiceMe\ServiceRequests\Models;

use Model;
use \October\Rain\Database\Traits\Validation;
/**
 * model_RealEstate Model
 */
class ModelRealEstate extends Model
{


    /**
     * @var string The database table used by the model.
     */
    public $table = 'serviceme_servicerequests_model__real_estates';

    /**
     * @var array Guarded fields
     */
    protected $guarded = ['*'];

    /**
     * @var array Fillable fields
     */
    protected $fillable = ['title', 'comments','postcode','newestablished','minbeds','maxbeds','minprice','maxprice','bathrooms','parking','landsize','livecloseto','liveawayfrom','outdoorfeatures','indoorfeatures','propertytype'];


    protected $jsonable = ['livecloseto','liveawayfrom','outdoorfeatures','indoorfeatures','propertytype'];


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