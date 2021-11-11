<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: ups.proto

namespace Carrier\Ups;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 *地址
 *
 * Generated from protobuf message <code>ups.Address</code>
 */
class Address extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string address_line1 = 1;</code>
     */
    protected $address_line1 = '';
    /**
     * Generated from protobuf field <code>string address_line2 = 2;</code>
     */
    protected $address_line2 = '';
    /**
     * Generated from protobuf field <code>string address_line3 = 3;</code>
     */
    protected $address_line3 = '';
    /**
     * Generated from protobuf field <code>string city = 4;</code>
     */
    protected $city = '';
    /**
     * Generated from protobuf field <code>string state = 5;</code>
     */
    protected $state = '';
    /**
     * Generated from protobuf field <code>string postal_code = 6;</code>
     */
    protected $postal_code = '';
    /**
     * Generated from protobuf field <code>string country_code = 7;</code>
     */
    protected $country_code = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $address_line1
     *     @type string $address_line2
     *     @type string $address_line3
     *     @type string $city
     *     @type string $state
     *     @type string $postal_code
     *     @type string $country_code
     * }
     */
    public function __construct($data = NULL) {
        \Carrier\Ups\Ups::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string address_line1 = 1;</code>
     * @return string
     */
    public function getAddressLine1()
    {
        return $this->address_line1;
    }

    /**
     * Generated from protobuf field <code>string address_line1 = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setAddressLine1($var)
    {
        GPBUtil::checkString($var, True);
        $this->address_line1 = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string address_line2 = 2;</code>
     * @return string
     */
    public function getAddressLine2()
    {
        return $this->address_line2;
    }

    /**
     * Generated from protobuf field <code>string address_line2 = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setAddressLine2($var)
    {
        GPBUtil::checkString($var, True);
        $this->address_line2 = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string address_line3 = 3;</code>
     * @return string
     */
    public function getAddressLine3()
    {
        return $this->address_line3;
    }

    /**
     * Generated from protobuf field <code>string address_line3 = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setAddressLine3($var)
    {
        GPBUtil::checkString($var, True);
        $this->address_line3 = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string city = 4;</code>
     * @return string
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * Generated from protobuf field <code>string city = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setCity($var)
    {
        GPBUtil::checkString($var, True);
        $this->city = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string state = 5;</code>
     * @return string
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * Generated from protobuf field <code>string state = 5;</code>
     * @param string $var
     * @return $this
     */
    public function setState($var)
    {
        GPBUtil::checkString($var, True);
        $this->state = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string postal_code = 6;</code>
     * @return string
     */
    public function getPostalCode()
    {
        return $this->postal_code;
    }

    /**
     * Generated from protobuf field <code>string postal_code = 6;</code>
     * @param string $var
     * @return $this
     */
    public function setPostalCode($var)
    {
        GPBUtil::checkString($var, True);
        $this->postal_code = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string country_code = 7;</code>
     * @return string
     */
    public function getCountryCode()
    {
        return $this->country_code;
    }

    /**
     * Generated from protobuf field <code>string country_code = 7;</code>
     * @param string $var
     * @return $this
     */
    public function setCountryCode($var)
    {
        GPBUtil::checkString($var, True);
        $this->country_code = $var;

        return $this;
    }

}

