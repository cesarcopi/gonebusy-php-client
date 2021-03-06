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
class EntitiesBookingResponse implements JsonSerializable {
    /**
     * id of Booking
     * @var integer $id public property
     */
    public $id;

    /**
     * id of owner of Booking
     * @maps owner_id
     * @var integer $ownerId public property
     */
    public $ownerId;

    /**
     * TimeWindow corresponding to Booking
     * @maps time_window
     * @var EntitiesTimeWindowResponse $timeWindow public property
     */
    public $timeWindow;

    /**
     * user requesting Booking may include a message
     * @maps user_message
     * @var string $userMessage public property
     */
    public $userMessage;

    /**
     * status of Booking
     * @maps workflow_state
     * @var string $workflowState public property
     */
    public $workflowState;

    /**
     * Constructor to set initial or default values of member properties
     * @param   integer           $id               Initialization value for the property $this->id            
     * @param   integer           $ownerId          Initialization value for the property $this->ownerId       
     * @param   EntitiesTimeWindowResponse   $timeWindow       Initialization value for the property $this->timeWindow    
     * @param   string            $userMessage      Initialization value for the property $this->userMessage   
     * @param   string            $workflowState    Initialization value for the property $this->workflowState 
     */
    public function __construct()
    {
        if(5 == func_num_args())
        {
            $this->id             = func_get_arg(0);
            $this->ownerId        = func_get_arg(1);
            $this->timeWindow     = func_get_arg(2);
            $this->userMessage    = func_get_arg(3);
            $this->workflowState  = func_get_arg(4);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['id']             = $this->id;
        $json['owner_id']       = $this->ownerId;
        $json['time_window']    = $this->timeWindow;
        $json['user_message']   = $this->userMessage;
        $json['workflow_state'] = $this->workflowState;

        return $json;
    }
}