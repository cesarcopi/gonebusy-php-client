<?php
/*
 * Gonebusy
 *
 * This file was automatically generated for GoneBusy Inc. by APIMATIC v2.0 ( https://apimatic.io ) on 11/18/2016
 */

namespace GonebusyLib\Controllers;

use GonebusyLib\APIException;
use GonebusyLib\APIHelper;
use GonebusyLib\Configuration;
use GonebusyLib\Models;
use GonebusyLib\Exceptions;
use GonebusyLib\Http\HttpRequest;
use GonebusyLib\Http\HttpResponse;
use GonebusyLib\Http\HttpMethod;
use GonebusyLib\Http\HttpContext;
use GonebusyLib\CustomAuthUtility;
use Unirest\Request;

/**
 * @todo Add a general description for this controller.
 */
class CategoriesController extends BaseController {

    /**
     * @var CategoriesController The reference to *Singleton* instance of this class
     */
    private static $instance;
    
    /**
     * Returns the *Singleton* instance of this class.
     * @return CategoriesController The *Singleton* instance.
     */
    public static function getInstance()
    {
        if (null === static::$instance) {
            static::$instance = new static();
        }
        
        return static::$instance;
    }

    /**
     * Return a Category by id.
     * @param  array  $options    Array with all options for search
     * @param  string     $options['authorization']     Required parameter: A valid API key, in the format 'Token API_KEY'
     * @param  string     $options['id']                Required parameter: Example: 
     * @return mixed response from the API call
     * @throws APIException Thrown if API call fails
     */
    public function getCategoryById (
                $options) 
    {
        //the base uri for api requests
        $_queryBuilder = Configuration::$BASEURI;
        
        //prepare query string for API call
        $_queryBuilder = $_queryBuilder.'/categories/{id}';

        //process optional query parameters
        $_queryBuilder = APIHelper::appendUrlWithTemplateParameters($_queryBuilder, array (
            'id'            => $this->val($options, 'id'),
            ));

        //validate and preprocess url
        $_queryUrl = APIHelper::cleanUrl($_queryBuilder);

        //prepare headers
        $_headers = array (
            'user-agent'    => 'APIMATIC 2.0',
            'Accept'        => 'application/json',
            'Authorization' => Configuration::$authorization,
            'Authorization'   => $this->val($options, 'authorization')
        );

        //append custom auth authorization headers
        CustomAuthUtility::appendCustomAuthParams($_headers);

        //call on-before Http callback
        $_httpRequest = new HttpRequest(HttpMethod::GET, $_headers, $_queryUrl);
        if($this->getHttpCallBack() != null) {
            $this->getHttpCallBack()->callOnBeforeRequest($_httpRequest);            
        }

        //and invoke the API call request to fetch the response
        $response = Request::get($_queryUrl, $_headers);

        //call on-after Http callback
        if($this->getHttpCallBack() != null) {
            $_httpResponse = new HttpResponse($response->code, $response->headers, $response->raw_body);
            $_httpContext = new HttpContext($_httpRequest, $_httpResponse);
            
            $this->getHttpCallBack()->callOnAfterRequest($_httpContext);            
        }

        //Error handling using HTTP status codes
        if ($response->code == 400) {
            throw new Exceptions\EntitiesErrorException('Bad Request', $_httpContext);
        }

        else if ($response->code == 401) {
            throw new Exceptions\EntitiesErrorException('Unauthorized/Missing Token', $_httpContext);
        }

        else if ($response->code == 403) {
            throw new Exceptions\EntitiesErrorException('Forbidden', $_httpContext);
        }

        else if ($response->code == 404) {
            throw new Exceptions\EntitiesErrorException('Not Found', $_httpContext);
        }

        else if ($response->code == 500) {
            throw new APIException('Unexpected error', $_httpContext);
        }

        else if (($response->code < 200) || ($response->code > 208)) { //[200,208] = HTTP OK
            throw new APIException("HTTP Response Not OK", $_httpContext);
        }

        $mapper = $this->getJsonMapper();

        return $mapper->map($response->body, new Models\GetCategoryByIdResponse());
    }
        
    /**
     * Create a Category
     * @param  array  $options    Array with all options for search
     * @param  string                 $options['authorization']            Required parameter: A valid API key, in the format 'Token API_KEY'
     * @param  Models\CreateCategoryBody $options['createCategoryBody']       Required parameter: the content of the request
     * @return mixed response from the API call
     * @throws APIException Thrown if API call fails
     */
    public function createCategory (
                $options) 
    {
        //the base uri for api requests
        $_queryBuilder = Configuration::$BASEURI;
        
        //prepare query string for API call
        $_queryBuilder = $_queryBuilder.'/categories/new';

        //validate and preprocess url
        $_queryUrl = APIHelper::cleanUrl($_queryBuilder);

        //prepare headers
        $_headers = array (
            'user-agent'         => 'APIMATIC 2.0',
            'Accept'             => 'application/json',
            'content-type'       => 'application/json; charset=utf-8',
            'Authorization' => Configuration::$authorization,
            'Authorization'        => $this->val($options, 'authorization')
        );

        //append custom auth authorization headers
        CustomAuthUtility::appendCustomAuthParams($_headers);

        //call on-before Http callback
        $_httpRequest = new HttpRequest(HttpMethod::POST, $_headers, $_queryUrl);
        if($this->getHttpCallBack() != null) {
            $this->getHttpCallBack()->callOnBeforeRequest($_httpRequest);            
        }

        //and invoke the API call request to fetch the response
        $response = Request::post($_queryUrl, $_headers, Request\Body::Json($this->val($options, 'create_category_body')));

        //call on-after Http callback
        if($this->getHttpCallBack() != null) {
            $_httpResponse = new HttpResponse($response->code, $response->headers, $response->raw_body);
            $_httpContext = new HttpContext($_httpRequest, $_httpResponse);
            
            $this->getHttpCallBack()->callOnAfterRequest($_httpContext);            
        }

        //Error handling using HTTP status codes
        if ($response->code == 400) {
            throw new Exceptions\EntitiesErrorException('Bad Request', $_httpContext);
        }

        else if ($response->code == 401) {
            throw new Exceptions\EntitiesErrorException('Unauthorized/Missing Token', $_httpContext);
        }

        else if ($response->code == 403) {
            throw new Exceptions\EntitiesErrorException('Forbidden', $_httpContext);
        }

        else if ($response->code == 422) {
            throw new Exceptions\EntitiesErrorException('Unprocessable Entity', $_httpContext);
        }

        else if ($response->code == 500) {
            throw new APIException('Unexpected error', $_httpContext);
        }

        else if (($response->code < 200) || ($response->code > 208)) { //[200,208] = HTTP OK
            throw new APIException("HTTP Response Not OK", $_httpContext);
        }

        $mapper = $this->getJsonMapper();

        return $mapper->map($response->body, new Models\CreateCategoryResponse());
    }
        
    /**
     * Return list of Categories.
     * @param  array  $options    Array with all options for search
     * @param  string      $options['authorization']     Required parameter: A valid API key, in the format 'Token API_KEY'
     * @param  integer     $options['page']              Optional parameter: Page offset to fetch.
     * @param  integer     $options['perPage']           Optional parameter: Number of results to return per page.
     * @param  integer     $options['userId']            Optional parameter: Retrieve Categories of all services provided by this User Id.  You must be authorized to manage this User Id.
     * @return mixed response from the API call
     * @throws APIException Thrown if API call fails
     */
    public function getCategories (
                $options) 
    {
        //the base uri for api requests
        $_queryBuilder = Configuration::$BASEURI;
        
        //prepare query string for API call
        $_queryBuilder = $_queryBuilder.'/categories';

        //process optional query parameters
        APIHelper::appendUrlWithQueryParameters($_queryBuilder, array (
            'page'          => $this->val($options, 'page', 1),
            'per_page'      => $this->val($options, 'perPage', 10),
            'user_id'       => $this->val($options, 'userId'),
        ));

        //validate and preprocess url
        $_queryUrl = APIHelper::cleanUrl($_queryBuilder);

        //prepare headers
        $_headers = array (
            'user-agent'    => 'APIMATIC 2.0',
            'Accept'        => 'application/json',
            'Authorization' => Configuration::$authorization,
            'Authorization'   => $this->val($options, 'authorization')
        );

        //append custom auth authorization headers
        CustomAuthUtility::appendCustomAuthParams($_headers);

        //call on-before Http callback
        $_httpRequest = new HttpRequest(HttpMethod::GET, $_headers, $_queryUrl);
        if($this->getHttpCallBack() != null) {
            $this->getHttpCallBack()->callOnBeforeRequest($_httpRequest);            
        }

        //and invoke the API call request to fetch the response
        $response = Request::get($_queryUrl, $_headers);

        //call on-after Http callback
        if($this->getHttpCallBack() != null) {
            $_httpResponse = new HttpResponse($response->code, $response->headers, $response->raw_body);
            $_httpContext = new HttpContext($_httpRequest, $_httpResponse);
            
            $this->getHttpCallBack()->callOnAfterRequest($_httpContext);            
        }

        //Error handling using HTTP status codes
        if ($response->code == 400) {
            throw new Exceptions\EntitiesErrorException('Bad Request', $_httpContext);
        }

        else if ($response->code == 401) {
            throw new Exceptions\EntitiesErrorException('Unauthorized/Missing Token', $_httpContext);
        }

        else if ($response->code == 403) {
            throw new Exceptions\EntitiesErrorException('Forbidden', $_httpContext);
        }

        else if ($response->code == 500) {
            throw new APIException('Unexpected error', $_httpContext);
        }

        else if (($response->code < 200) || ($response->code > 208)) { //[200,208] = HTTP OK
            throw new APIException("HTTP Response Not OK", $_httpContext);
        }

        $mapper = $this->getJsonMapper();

        return $mapper->map($response->body, new Models\GetCategoriesResponse());
    }
        


    /**
	 * Array access utility method
     * @param  array          $arr         Array of values to read from
     * @param  string         $key         Key to get the value from the array
     * @param  mixed|null     $default     Default value to use if the key was not found
     * @return mixed
     */
    private function val($arr, $key, $default = NULL)
    {
        if(isset($arr[$key])) {
            return is_bool($arr[$key]) ? var_export($arr[$key], true) : $arr[$key];
        }
        return $default;
    }

}