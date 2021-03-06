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
class EntitiesTimeWindowResponse implements JsonSerializable {
    /**
     * date_recurs_by
     * @maps date_recurs_by
     * @var string $dateRecursBy public property
     */
    public $dateRecursBy;

    /**
     * array of days of week TimeWindow falls on
     * @var array $days public property
     */
    public $days;

    /**
     * end date
     * @maps end_date
     * @var string $endDate public property
     */
    public $endDate;

    /**
     * end time
     * @maps end_time
     * @var string $endTime public property
     */
    public $endTime;

    /**
     * frequency
     * @var string $frequency public property
     */
    public $frequency;

    /**
     * id of TimeWindow
     * @var integer $id public property
     */
    public $id;

    /**
     * true is available, false is unavailable
     * @var bool $negation public property
     */
    public $negation;

    /**
     * occurrence
     * @var string $occurrence public property
     */
    public $occurrence;

    /**
     * recurs by
     * @maps recurs_by
     * @var string $recursBy public property
     */
    public $recursBy;

    /**
     * start date
     * @maps start_date
     * @var string $startDate public property
     */
    public $startDate;

    /**
     * start time
     * @maps start_time
     * @var string $startTime public property
     */
    public $startTime;

    /**
     * total minutes spanned
     * @maps total_minutes
     * @var integer $totalMinutes public property
     */
    public $totalMinutes;

    /**
     * Constructor to set initial or default values of member properties
     * @param   string            $dateRecursBy     Initialization value for the property $this->dateRecursBy  
     * @param   array             $days             Initialization value for the property $this->days          
     * @param   string            $endDate          Initialization value for the property $this->endDate       
     * @param   string            $endTime          Initialization value for the property $this->endTime       
     * @param   string            $frequency        Initialization value for the property $this->frequency     
     * @param   integer           $id               Initialization value for the property $this->id            
     * @param   bool              $negation         Initialization value for the property $this->negation      
     * @param   string            $occurrence       Initialization value for the property $this->occurrence    
     * @param   string            $recursBy         Initialization value for the property $this->recursBy      
     * @param   string            $startDate        Initialization value for the property $this->startDate     
     * @param   string            $startTime        Initialization value for the property $this->startTime     
     * @param   integer           $totalMinutes     Initialization value for the property $this->totalMinutes  
     */
    public function __construct()
    {
        if(12 == func_num_args())
        {
            $this->dateRecursBy   = func_get_arg(0);
            $this->days           = func_get_arg(1);
            $this->endDate        = func_get_arg(2);
            $this->endTime        = func_get_arg(3);
            $this->frequency      = func_get_arg(4);
            $this->id             = func_get_arg(5);
            $this->negation       = func_get_arg(6);
            $this->occurrence     = func_get_arg(7);
            $this->recursBy       = func_get_arg(8);
            $this->startDate      = func_get_arg(9);
            $this->startTime      = func_get_arg(10);
            $this->totalMinutes   = func_get_arg(11);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['date_recurs_by'] = $this->dateRecursBy;
        $json['days']           = $this->days;
        $json['end_date']       = $this->endDate;
        $json['end_time']       = $this->endTime;
        $json['frequency']      = $this->frequency;
        $json['id']             = $this->id;
        $json['negation']       = $this->negation;
        $json['occurrence']     = $this->occurrence;
        $json['recurs_by']      = $this->recursBy;
        $json['start_date']     = $this->startDate;
        $json['start_time']     = $this->startTime;
        $json['total_minutes']  = $this->totalMinutes;

        return $json;
    }
}