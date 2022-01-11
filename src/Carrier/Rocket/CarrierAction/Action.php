<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: rocket.proto

namespace Carrier\Rocket\CarrierAction;

use UnexpectedValueException;

/**
 * Protobuf type <code>rocket.CarrierAction.Action</code>
 */
class Action
{
    /**
     * Generated from protobuf enum <code>TRACK = 0;</code>
     */
    const TRACK = 0;
    /**
     * Generated from protobuf enum <code>GET_ALL_RATES = 1;</code>
     */
    const GET_ALL_RATES = 1;
    /**
     * Generated from protobuf enum <code>SUBMIT_SHIPMENT = 2;</code>
     */
    const SUBMIT_SHIPMENT = 2;
    /**
     * Generated from protobuf enum <code>ADDRESS_VALIDATE = 3;</code>
     */
    const ADDRESS_VALIDATE = 3;

    private static $valueToName = [
        self::TRACK => 'TRACK',
        self::GET_ALL_RATES => 'GET_ALL_RATES',
        self::SUBMIT_SHIPMENT => 'SUBMIT_SHIPMENT',
        self::ADDRESS_VALIDATE => 'ADDRESS_VALIDATE',
    ];

    public static function name($value)
    {
        if (!isset(self::$valueToName[$value])) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no name defined for value %s', __CLASS__, $value));
        }
        return self::$valueToName[$value];
    }


    public static function value($name)
    {
        $const = __CLASS__ . '::' . strtoupper($name);
        if (!defined($const)) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no value defined for name %s', __CLASS__, $name));
        }
        return constant($const);
    }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Action::class, \Carrier\Rocket\CarrierAction_Action::class);
