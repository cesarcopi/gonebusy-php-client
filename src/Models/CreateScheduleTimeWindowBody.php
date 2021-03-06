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
class CreateScheduleTimeWindowBody implements JsonSerializable {
    /**
     * List of comma-separated days of the week this window of time falls on.  If provided, at least one must be specified.
     * @required
     * @var string $days public property
     */
    public $days;

    /**
     * End Time of TimeWindow.  Several formats are supported: '5pm', '17:00', '1700'
     * @required
     * @maps end_time
     * @var string $endTime public property
     */
    public $endTime;

    /**
     * One of the possible recurrence values
     * @required
     * @maps recurs_by
     * @var string $recursBy public property
     */
    public $recursBy;

    /**
     * Start Date of TimeWindow.  Several formats are supported: '2014-10-31', 'October 31, 2014'.
     * @required
     * @maps start_date
     * @var string $startDate public property
     */
    public $startDate;

    /**
     * Start Time of TimeWindow.  Several formats are supported: '9am', '09:00', '9:00', '0900'
     * @required
     * @maps start_time
     * @var string $startTime public property
     */
    public $startTime;

    /**
     * Required only when :recurs_by is 'monthly' or 'yearly' to differentiate between exact date or 'day in month/year'.  See Schedule examples.
     * @maps date_recurs_by
     * @var string $dateRecursBy public property
     */
    public $dateRecursBy;

    /**
     * Optional End Date of TimeWindow, leave blank for infinitely available.  Several formats are supported: '2014-10-31', 'October 31, 2014'.
     * @maps end_date
     * @var string $endDate public property
     */
    public $endDate;

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
     * Optional total number of minutes in TimeWindow.  Useful when duration of window is greater than 24 hours.
     * @maps total_minutes
     * @var integer $totalMinutes public property
     */
    public $totalMinutes;

    /**
     * Constructor to set initial or default values of member properties
     * @param   string            $days             Initialization value for the property $this->days          
     * @param   string            $endTime          Initialization value for the property $this->endTime       
     * @param   string            $recursBy         Initialization value for the property $this->recursBy      
     * @param   string            $startDate        Initialization value for the property $this->startDate     
     * @param   string            $startTime        Initialization value for the property $this->startTime     
     * @param   string            $dateRecursBy     Initialization value for the property $this->dateRecursBy  
     * @param   string            $endDate          Initialization value for the property $this->endDate       
     * @param   string            $frequency        Initialization value for the property $this->frequency     
     * @param   string            $occurrence       Initialization value for the property $this->occurrence    
     * @param   integer           $totalMinutes     Initialization value for the property $this->totalMinutes  
     */
    public function __construct()
    {
        if(10 == func_num_args())
        {
            $this->days           = func_get_arg(0);
            $this->endTime        = func_get_arg(1);
            $this->recursBy       = func_get_arg(2);
            $this->startDate      = func_get_arg(3);
            $this->startTime      = func_get_arg(4);
            $this->dateRecursBy   = func_get_arg(5);
            $this->endDate        = func_get_arg(6);
            $this->frequency      = func_get_arg(7);
            $this->occurrence     = func_get_arg(8);
            $this->totalMinutes   = func_get_arg(9);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['days']           = $this->days;
        $json['end_time']       = $this->endTime;
        $json['recurs_by']      = $this->recursBy;
        $json['start_date']     = $this->startDate;
        $json['start_time']     = $this->startTime;
        $json['date_recurs_by'] = $this->dateRecursBy;
        $json['end_date']       = $this->endDate;
        $json['frequency']      = $this->frequency;
        $json['occurrence']     = $this->occurrence;
        $json['total_minutes']  = $this->totalMinutes;

        return $json;
    }
}