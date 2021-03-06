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
class EntitiesAvailabilityResponse implements JsonSerializable {
    /**
     * id of Service
     * @var integer $id public property
     */
    public $id;

    /**
     * id of owner of Service
     * @maps owner_id
     * @var integer $ownerId public property
     */
    public $ownerId;

    /**
     * array of Resource ids and available time slots
     * @var EntitiesResourceAvailabilities[] $resources public property
     */
    public $resources;

    /**
     * Constructor to set initial or default values of member properties
     * @param   integer           $id          Initialization value for the property $this->id       
     * @param   integer           $ownerId     Initialization value for the property $this->ownerId  
     * @param   array             $resources   Initialization value for the property $this->resources
     */
    public function __construct()
    {
        if(3 == func_num_args())
        {
            $this->id        = func_get_arg(0);
            $this->ownerId   = func_get_arg(1);
            $this->resources = func_get_arg(2);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['id']        = $this->id;
        $json['owner_id']  = $this->ownerId;
        $json['resources'] = $this->resources;

        return $json;
    }
}