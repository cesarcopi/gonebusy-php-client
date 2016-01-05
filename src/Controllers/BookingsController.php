<?php
/*
 * GoneBusy
 *
 * This file was automatically generated for GoneBusy Inc. by APIMATIC BETA v2.0 on 01/05/2016
 */

namespace GoneBusyLib\Controllers;

use GoneBusyLib\APIException;
use GoneBusyLib\APIHelper;
use GoneBusyLib\Configuration;
use Unirest\Unirest;
class BookingsController {
    /**
	 * Array access utility method
     * @param  array          $arr         Array of values to read from
     * @param  string         $key         Key to get the value from the array
     * @param  mixed|null     $default     Default value to use if the key was not found */
    private function val($arr, $key, $default = NULL)
    {
        if(isset($arr[$key])) {
            return is_bool($arr[$key]) ? var_export($arr[$key], true) : $arr[$key];
        }
        return $default;
    }

    /**
     * Return list of Bookings.
     * @param  array  $options    Array with all options for search
     * @param  string          $options['apiKey']       Required parameter: Valid API Key for your GoneBusy account (edit in top nav)
     * @param  int|null        $options['page']         Optional parameter: Page offset to fetch.
     * @param  int|null        $options['perPage']      Optional parameter: Number of results to return per page.
     * @param  string|null     $options['states']       Optional parameter: Comma-separated list of Booking states to retrieve only Bookings in those states.  Leave blank to retrieve all Bookings.
     * @param  int|null        $options['userId']       Optional parameter: Retrieve Bookings owned only by this User Id.  You must be authorized to manage this User Id.
     * @return mixed response from the API call*/
    public function getBookings (
                $options) 
    {
        //the base uri for api requests
        $queryBuilder = Configuration::$BASEURI;
        
        //prepare query string for API call
        $queryBuilder = $queryBuilder.'/bookings';

        //process optional query parameters
        APIHelper::appendUrlWithQueryParameters($queryBuilder, array (
            'api_key'  => $this->val($options, 'apiKey'),
            'page'     => $this->val($options, 'page', 1),
            'per_page' => $this->val($options, 'perPage', 10),
            'states'   => $this->val($options, 'states'),
            'user_id'  => $this->val($options, 'userId'),
        ));

        //validate and preprocess url
        $queryUrl = APIHelper::cleanUrl($queryBuilder);

        //prepare headers
        $headers = array (
            'user-agent'    => 'APIMATIC 2.0',
            'Accept'        => 'application/json'
        );

        //prepare API request
        $request = Unirest::get($queryUrl, $headers);

        //and invoke the API call request to fetch the response
        $response = Unirest::getResponse($request);

        //Error handling using HTTP status codes
        if ($response->code == 401) {
            throw new APIException('Unauthorized/Missing Token', 401);
        }

        else if ($response->code == 403) {
            throw new APIException('Forbidden', 403);
        }

        else if ($response->code == 404) {
            throw new APIException('Not Found', 404);
        }

        else if ($response->code == 500) {
            throw new APIException('Unexpected error', 500);
        }

        else if (($response->code < 200) || ($response->code > 206)) { //[200,206] = HTTP OK
            throw new APIException("HTTP Response Not OK", $response->code);
        }

        return $response->body;
    }
        
    /**
     * Create a Booking with params
     * @param  CreateBookingBody     $createBookingBody       Required parameter: the content of the request
     * @return mixed response from the API call*/
    public function createBooking (
                $createBookingBody) 
    {
        //the base uri for api requests
        $queryBuilder = Configuration::$BASEURI;
        
        //prepare query string for API call
        $queryBuilder = $queryBuilder.'/bookings/new';

        //validate and preprocess url
        $queryUrl = APIHelper::cleanUrl($queryBuilder);

        //prepare headers
        $headers = array (
            'user-agent'        => 'APIMATIC 2.0',
            'Accept'            => 'application/json',
            'content-type'      => 'application/json; charset=utf-8'
        );

        //prepare API request
        $request = Unirest::post($queryUrl, $headers, json_encode($createBookingBody));

        //and invoke the API call request to fetch the response
        $response = Unirest::getResponse($request);

        //Error handling using HTTP status codes
        if ($response->code == 400) {
            throw new APIException('Bad Request', 400);
        }

        else if ($response->code == 401) {
            throw new APIException('Unauthorized/Missing Token', 401);
        }

        else if ($response->code == 403) {
            throw new APIException('Forbidden', 403);
        }

        else if ($response->code == 422) {
            throw new APIException('Unprocessable Entity', 422);
        }

        else if ($response->code == 500) {
            throw new APIException('Unexpected error', 500);
        }

        else if (($response->code < 200) || ($response->code > 206)) { //[200,206] = HTTP OK
            throw new APIException("HTTP Response Not OK", $response->code);
        }

        return $response->body;
    }
        
    /**
     * Return a Booking by id.
     * @param  array  $options    Array with all options for search
     * @param  string     $options['apiKey']      Required parameter: Valid API Key for your GoneBusy account (edit in top nav)
     * @param  string     $options['id']          Required parameter: TODO: type description here
     * @return mixed response from the API call*/
    public function getBookingById (
                $options) 
    {
        //the base uri for api requests
        $queryBuilder = Configuration::$BASEURI;
        
        //prepare query string for API call
        $queryBuilder = $queryBuilder.'/bookings/{id}';

        //process optional query parameters
        APIHelper::appendUrlWithTemplateParameters($queryBuilder, array (
            'id'      => $this->val($options, 'id'),
            ));

        //process optional query parameters
        APIHelper::appendUrlWithQueryParameters($queryBuilder, array (
            'api_key' => $this->val($options, 'apiKey'),
        ));

        //validate and preprocess url
        $queryUrl = APIHelper::cleanUrl($queryBuilder);

        //prepare headers
        $headers = array (
            'user-agent'    => 'APIMATIC 2.0',
            'Accept'        => 'application/json'
        );

        //prepare API request
        $request = Unirest::get($queryUrl, $headers);

        //and invoke the API call request to fetch the response
        $response = Unirest::getResponse($request);

        //Error handling using HTTP status codes
        if ($response->code == 400) {
            throw new APIException('Bad Request', 400);
        }

        else if ($response->code == 401) {
            throw new APIException('Unauthorized/Missing Token', 401);
        }

        else if ($response->code == 403) {
            throw new APIException('Forbidden', 403);
        }

        else if ($response->code == 404) {
            throw new APIException('Not Found', 404);
        }

        else if ($response->code == 500) {
            throw new APIException('Unexpected error', 500);
        }

        else if (($response->code < 200) || ($response->code > 206)) { //[200,206] = HTTP OK
            throw new APIException("HTTP Response Not OK", $response->code);
        }

        return $response->body;
    }
        
    /**
     * Update a Booking by id
     * @param  array  $options    Array with all options for search
     * @param  string                    $options['id']                            Required parameter: TODO: type description here
     * @param  UpdateBookingByIdBody     $options['updateBookingByIdBody']         Required parameter: the content of the request
     * @return mixed response from the API call*/
    public function updateBookingById (
                $options) 
    {
        //the base uri for api requests
        $queryBuilder = Configuration::$BASEURI;
        
        //prepare query string for API call
        $queryBuilder = $queryBuilder.'/bookings/{id}';

        //process optional query parameters
        APIHelper::appendUrlWithTemplateParameters($queryBuilder, array (
            'id'                        => $this->val($options, 'id'),
            ));

        //validate and preprocess url
        $queryUrl = APIHelper::cleanUrl($queryBuilder);

        //prepare headers
        $headers = array (
            'user-agent'              => 'APIMATIC 2.0',
            'Accept'                  => 'application/json',
            'content-type'            => 'application/json; charset=utf-8'
        );

        //prepare API request
        $request = Unirest::put($queryUrl, $headers, json_encode($updateBookingByIdBody));

        //and invoke the API call request to fetch the response
        $response = Unirest::getResponse($request);

        //Error handling using HTTP status codes
        if ($response->code == 400) {
            throw new APIException('Bad Request', 400);
        }

        else if ($response->code == 401) {
            throw new APIException('Unauthorized/Missing Token', 401);
        }

        else if ($response->code == 403) {
            throw new APIException('Forbidden', 403);
        }

        else if ($response->code == 404) {
            throw new APIException('Not Found', 404);
        }

        else if ($response->code == 422) {
            throw new APIException('Unprocessable Entity', 422);
        }

        else if ($response->code == 500) {
            throw new APIException('Unexpected error', 500);
        }

        else if (($response->code < 200) || ($response->code > 206)) { //[200,206] = HTTP OK
            throw new APIException("HTTP Response Not OK", $response->code);
        }

        return $response->body;
    }
        
    /**
     * Cancel a Booking by id
     * @param  array  $options    Array with all options for search
     * @param  string     $options['apiKey']      Required parameter: Valid API Key for your GoneBusy account (edit in top nav)
     * @param  string     $options['id']          Required parameter: TODO: type description here
     * @return mixed response from the API call*/
    public function cancelBookingById (
                $options) 
    {
        //the base uri for api requests
        $queryBuilder = Configuration::$BASEURI;
        
        //prepare query string for API call
        $queryBuilder = $queryBuilder.'/bookings/{id}';

        //process optional query parameters
        APIHelper::appendUrlWithTemplateParameters($queryBuilder, array (
            'id'      => $this->val($options, 'id'),
            ));

        //process optional query parameters
        APIHelper::appendUrlWithQueryParameters($queryBuilder, array (
            'api_key' => $this->val($options, 'apiKey'),
        ));

        //validate and preprocess url
        $queryUrl = APIHelper::cleanUrl($queryBuilder);

        //prepare headers
        $headers = array (
            'user-agent'    => 'APIMATIC 2.0',
            'Accept'        => 'application/json'
        );

        //prepare API request
        $request = Unirest::delete($queryUrl, $headers);

        //and invoke the API call request to fetch the response
        $response = Unirest::getResponse($request);

        //Error handling using HTTP status codes
        if ($response->code == 400) {
            throw new APIException('Bad Request', 400);
        }

        else if ($response->code == 401) {
            throw new APIException('Unauthorized/Missing Token', 401);
        }

        else if ($response->code == 403) {
            throw new APIException('Forbidden', 403);
        }

        else if ($response->code == 404) {
            throw new APIException('Not Found', 404);
        }

        else if ($response->code == 500) {
            throw new APIException('Unexpected error', 500);
        }

        else if (($response->code < 200) || ($response->code > 206)) { //[200,206] = HTTP OK
            throw new APIException("HTTP Response Not OK", $response->code);
        }

        return $response->body;
    }
        
}