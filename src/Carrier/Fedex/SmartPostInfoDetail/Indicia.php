<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: fedex.proto

namespace Carrier\Fedex\SmartPostInfoDetail;

use UnexpectedValueException;

/**
 * 指示类型
 *
 * Protobuf type <code>fedex.SmartPostInfoDetail.Indicia</code>
 */
class Indicia
{
    /**
     * Generated from protobuf enum <code>MEDIA_MAIL = 0;</code>
     */
    const MEDIA_MAIL = 0;
    /**
     * Generated from protobuf enum <code>PARCEL_RETURN = 1;</code>
     */
    const PARCEL_RETURN = 1;
    /**
     * Generated from protobuf enum <code>PARCEL_SELECT = 2;</code>
     */
    const PARCEL_SELECT = 2;
    /**
     * Generated from protobuf enum <code>PRESORTED_BOUND_PRINTED_MATTER = 3;</code>
     */
    const PRESORTED_BOUND_PRINTED_MATTER = 3;
    /**
     * Generated from protobuf enum <code>PRESORTED_STANDARD = 4;</code>
     */
    const PRESORTED_STANDARD = 4;

    private static $valueToName = [
        self::MEDIA_MAIL => 'MEDIA_MAIL',
        self::PARCEL_RETURN => 'PARCEL_RETURN',
        self::PARCEL_SELECT => 'PARCEL_SELECT',
        self::PRESORTED_BOUND_PRINTED_MATTER => 'PRESORTED_BOUND_PRINTED_MATTER',
        self::PRESORTED_STANDARD => 'PRESORTED_STANDARD',
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
class_alias(Indicia::class, \Carrier\Fedex\SmartPostInfoDetail_Indicia::class);

