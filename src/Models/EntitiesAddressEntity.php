<?php 
/*
 * Gonebusy
 *
 * This file was automatically generated for GoneBusy Inc. by APIMATIC v2.0 ( https://apimatic.io ) on 11/18/2016
 */

namespace GonebusyLib\Models;

use JsonSerializable;

/**
 * @todo Write general description for this model
 */
class EntitiesAddressEntity implements JsonSerializable {
    /**
     * city of Address
     * @var string $city public property
     */
    public $city;

    /**
     * country of Address
     * @var string $country public property
     */
    public $country;

    /**
     * country code of Address
     * @maps country_code
     * @var string $countryCode public property
     */
    public $countryCode;

    /**
     * latitude of Address
     * @var string $latitude public property
     */
    public $latitude;

    /**
     * line 1 of Address
     * @var string $line1 public property
     */
    public $line1;

    /**
     * line 2 of Address
     * @var string $line2 public property
     */
    public $line2;

    /**
     * longitude of Address
     * @var string $longitude public property
     */
    public $longitude;

    /**
     * postal code of Address
     * @maps postal_code
     * @var string $postalCode public property
     */
    public $postalCode;

    /**
     * province of Address
     * @var string $province public property
     */
    public $province;

    /**
     * state of Address
     * @var string $state public property
     */
    public $state;

    /**
     * Constructor to set initial or default values of member properties
     * @param   string            $city           Initialization value for the property $this->city        
     * @param   string            $country        Initialization value for the property $this->country     
     * @param   string            $countryCode    Initialization value for the property $this->countryCode 
     * @param   string            $latitude       Initialization value for the property $this->latitude    
     * @param   string            $line1          Initialization value for the property $this->line1       
     * @param   string            $line2          Initialization value for the property $this->line2       
     * @param   string            $longitude      Initialization value for the property $this->longitude   
     * @param   string            $postalCode     Initialization value for the property $this->postalCode  
     * @param   string            $province       Initialization value for the property $this->province    
     * @param   string            $state          Initialization value for the property $this->state       
     */
    public function __construct()
    {
        if(10 == func_num_args())
        {
            $this->city         = func_get_arg(0);
            $this->country      = func_get_arg(1);
            $this->countryCode  = func_get_arg(2);
            $this->latitude     = func_get_arg(3);
            $this->line1        = func_get_arg(4);
            $this->line2        = func_get_arg(5);
            $this->longitude    = func_get_arg(6);
            $this->postalCode   = func_get_arg(7);
            $this->province     = func_get_arg(8);
            $this->state        = func_get_arg(9);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['city']         = $this->city;
        $json['country']      = $this->country;
        $json['country_code'] = $this->countryCode;
        $json['latitude']     = $this->latitude;
        $json['line1']        = $this->line1;
        $json['line2']        = $this->line2;
        $json['longitude']    = $this->longitude;
        $json['postal_code']  = $this->postalCode;
        $json['province']     = $this->province;
        $json['state']        = $this->state;

        return $json;
    }
}