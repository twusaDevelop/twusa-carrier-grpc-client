<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: fedex.proto

namespace Carrier\Fedex;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * 客户参考
 *
 * Generated from protobuf message <code>fedex.CustomerReferences</code>
 */
class CustomerReferences extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.fedex.CustomerReferences.CustomerReferenceType customer_reference_type = 1;</code>
     */
    protected $customer_reference_type = 0;
    /**
     * Generated from protobuf field <code>string value = 2;</code>
     */
    protected $value = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $customer_reference_type
     *     @type string $value
     * }
     */
    public function __construct($data = NULL) {
        \Carrier\Fedex\Fedex::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.fedex.CustomerReferences.CustomerReferenceType customer_reference_type = 1;</code>
     * @return int
     */
    public function getCustomerReferenceType()
    {
        return $this->customer_reference_type;
    }

    /**
     * Generated from protobuf field <code>.fedex.CustomerReferences.CustomerReferenceType customer_reference_type = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setCustomerReferenceType($var)
    {
        GPBUtil::checkEnum($var, \Carrier\Fedex\CustomerReferences\CustomerReferenceType::class);
        $this->customer_reference_type = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string value = 2;</code>
     * @return string
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * Generated from protobuf field <code>string value = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setValue($var)
    {
        GPBUtil::checkString($var, True);
        $this->value = $var;

        return $this;
    }

}
