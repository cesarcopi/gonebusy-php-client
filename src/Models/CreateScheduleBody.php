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
class CreateScheduleBody implements JsonSerializable {
    /**
     * ID of Service being scheduled.
     * @required
     * @maps service_id
     * @var integer $serviceId public property
     */
    public $serviceId;

    /**
     * Required only when :recurs_by is 'monthly' or 'yearly' to differentiate between exact date or 'day in month/year'.  See Schedule examples.
     * @maps date_recurs_by
     * @var string $dateRecursBy public property
     */
    public $dateRecursBy;

    /**
     * List of comma-separated days of the week this window of time falls on.  If provided, at least one must be specified.
     * @var string $days public property
     */
    public $days;

    /**
     * Optional End Date of first TimeWindow, leave blank for infinitely available.  Several formats are supported: '2014-10-31', 'October 31, 2014'.
     * @maps end_date
     * @var string $endDate public property
     */
    public $endDate;

    /**
     * End Time of first TimeWindow.  Several formats are supported: '5pm', '17:00', '1700'
     * @maps end_time
     * @var string $endTime public property
     */
    public $endTime;

    /**
     * Optional frequency of recurrence as specified by :recurs_by.  E.g, :single, :every, :every_other, etc. If not provided, assumed to be :every
     * @var string $frequency public property
     */
    public $frequency;

    /**
     * Optional occurrence of frequency. E.g, :first, :2nd, :last, :2nd_to_last, etc.  If not provided, assumed to be :every
     * @var string $occurrence public property
     */
    public $occurrence;

    /**
     * One of the possible recurrence values
     * @maps recurs_by
     * @var string $recursBy public property
     */
    public $recursBy;

    /**
     * ID of Resource being scheduled.  If not provided and :user_id is not present, the default Resource of the API user is assumed to be the Resource being scheduled.  If not provided and :user_id is present, the default Resource of the User is assumed to be the Resource being Scheduled.
     * @maps resource_id
     * @var integer $resourceId public property
     */
    public $resourceId;

    /**
     * Start Date of first TimeWindow.  Several formats are supported: '2014-10-31', 'October 31, 2014'.
     * @maps start_date
     * @var string $startDate public property
     */
    public $startDate;

    /**
     * Start Time of first TimeWindow.  Several formats are supported: '9am', '09:00', '9:00', '0900'
     * @maps start_time
     * @var string $startTime public property
     */
    public $startTime;

    /**
     * Optional total number of minutes in TimeWindow.  Useful when duration of window is greater than 24 hours.
     * @maps total_minutes
     * @var integer $totalMinutes public property
     */
    public $totalMinutes;

    /**
     * ID of User to create Schedule for.  You must be authorized to manage this User Id and User must own desired Service and Resource.
     * @maps user_id
     * @var integer $userId public property
     */
    public $userId;

    /**
     * Constructor to set initial or default values of member properties
     * @param   integer           $serviceId        Initialization value for the property $this->serviceId     
     * @param   string            $dateRecursBy     Initialization value for the property $this->dateRecursBy  
     * @param   string            $days             Initialization value for the property $this->days          
     * @param   string            $endDate          Initialization value for the property $this->endDate       
     * @param   string            $endTime          Initialization value for the property $this->endTime       
     * @param   string            $frequency        Initialization value for the property $this->frequency     
     * @param   string            $occurrence       Initialization value for the property $this->occurrence    
     * @param   string            $recursBy         Initialization value for the property $this->recursBy      
     * @param   integer           $resourceId       Initialization value for the property $this->resourceId    
     * @param   string            $startDate        Initialization value for the property $this->startDate     
     * @param   string            $startTime        Initialization value for the property $this->startTime     
     * @param   integer           $totalMinutes     Initialization value for the property $this->totalMinutes  
     * @param   integer           $userId           Initialization value for the property $this->userId        
     */
    public function __construct()
    {
        if(13 == func_num_args())
        {
            $this->serviceId      = func_get_arg(0);
            $this->dateRecursBy   = func_get_arg(1);
            $this->days           = func_get_arg(2);
            $this->endDate        = func_get_arg(3);
            $this->endTime        = func_get_arg(4);
            $this->frequency      = func_get_arg(5);
            $this->occurrence     = func_get_arg(6);
            $this->recursBy       = func_get_arg(7);
            $this->resourceId     = func_get_arg(8);
            $this->startDate      = func_get_arg(9);
            $this->startTime      = func_get_arg(10);
            $this->totalMinutes   = func_get_arg(11);
            $this->userId         = func_get_arg(12);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['service_id']     = $this->serviceId;
        $json['date_recurs_by'] = $this->dateRecursBy;
        $json['days']           = $this->days;
        $json['end_date']       = $this->endDate;
        $json['end_time']       = $this->endTime;
        $json['frequency']      = $this->frequency;
        $json['occurrence']     = $this->occurrence;
        $json['recurs_by']      = $this->recursBy;
        $json['resource_id']    = $this->resourceId;
        $json['start_date']     = $this->startDate;
        $json['start_time']     = $this->startTime;
        $json['total_minutes']  = $this->totalMinutes;
        $json['user_id']        = $this->userId;

        return $json;
    }
}