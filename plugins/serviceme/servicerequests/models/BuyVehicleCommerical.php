<?php namespace ServiceMe\ServiceRequests\Models;

use Model;
use \October\Rain\Database\Traits\Validation;
/**
 * buy_vehicle_commerical Model
 */
class BuyVehicleCommerical extends Model
{

    /**
     * @var string The database table used by the model.
     */
    public $table = 'serviceme_servicerequests_buy_vehicle_commericals';

    /**
     * @var array Guarded fields
     */
    protected $guarded = ['*'];


    public $rules = [
        'make'  => 'required',
        'type' => 'required'
    ];


    /**
     * @var array Fillable fields
     */
    protected $fillable = ['id','type','keywords','added_extras','make','model','year','certified','body_type','price','transmission','kilometres','colours','fuel_type','fuel_economy','drive_type','lifestyle','seats','doors','engine_size_min','engine_size_max','cylinders','engine_type','induction_turbo','power_min','power_max','tow_braked_min','tow_braked_max','ancap_safety_rating','green_star_rating','p_plate_approved','dealer_postcodes','dealer_distance'];


    protected $jsonable = ['type','make','body_type','certified','colours','fuel_type','fuel_economy','drive_type','lifestyle','doors','induction_turbo','transmission'];


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