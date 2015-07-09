<?php namespace ServiceMe\ServiceRequests\Models;

use Model;

/**
 * ModelHomeInsurance Model
 */
class ModelHomeInsurance extends Model
{

    /**
     * @var string The database table used by the model.
     */
    public $table = 'serviceme_servicerequests_model_home_insurances';

    /**
     * @var array Guarded fields
     */
    protected $guarded = ['*'];

    /**
     * @var array Fillable fields
     */
    protected $fillable = ['id','address','postcode','proposed_start_date',
    'estimated_year_construction',
    'number_storeys',
    'number_bathrooms',
    'number_bedrooms',
    'bedroom_size',
    'home_desc',
    'exterior_walls',
    'roof_material',
    'home_occupied',
    'strata_plan',
    'pool',
    'name',
    'dob_oldest_policy_holder',
    'entitled_no_claim',
    'any_below_ground',
    'security_devices',
    'door_security_devices',
    'window_security_devices',
    'alarm',
    'land_larger_normal',
    'had_policy_cancelled',
    'num_times_claim_declined',
    'num_claims_total',
    'num_convictions',
    'cover_storm_dmg_gates_fences',
    'cover_accidental_dmg',
    'over_50_discount',
    'carports',
    'balconies_decks',
    'verandahs',
    'euro_kitchen_appliances',
    'granite_marble_tiling',
    'large_glazed_areas',
    'plantation_shutters',
    'curved_walls',
    'ducted_aircon',
    'tennis_court',
    'inground_pool',
    'watertight',
    'new_home_under_construction',
    'under_renovation',
    'home_use',
    'mortgate',
    'insure_name_or_company',
    'num_owners_named_policy',
    'comments',
    'user_id'
    ];



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