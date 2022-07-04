<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/api/expr/v1beta1/value.proto

namespace MediaCloud\Vendor\Google\Api\Expr\V1beta1;
use MediaCloud\Vendor\Google\Protobuf\Internal\GPBType;
use MediaCloud\Vendor\Google\Protobuf\Internal\RepeatedField;
use MediaCloud\Vendor\Google\Protobuf\Internal\GPBUtil;

/**
 * Represents a CEL value.
 * This is similar to `google.protobuf.Value`, but can represent CEL's full
 * range of values.
 *
 * Generated from protobuf message <code>google.api.expr.v1beta1.Value</code>
 */
class Value extends \MediaCloud\Vendor\Google\Protobuf\Internal\Message
{
    protected $kind;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $null_value
     *           Null value.
     *     @type bool $bool_value
     *           Boolean value.
     *     @type int|string $int64_value
     *           Signed integer value.
     *     @type int|string $uint64_value
     *           Unsigned integer value.
     *     @type float $double_value
     *           Floating point value.
     *     @type string $string_value
     *           UTF-8 string value.
     *     @type string $bytes_value
     *           Byte string value.
     *     @type \MediaCloud\Vendor\Google\Api\Expr\V1beta1\EnumValue $enum_value
     *           An enum value.
     *     @type \MediaCloud\Vendor\Google\Protobuf\Any $object_value
     *           The proto message backing an object value.
     *     @type \MediaCloud\Vendor\Google\Api\Expr\V1beta1\MapValue $map_value
     *           Map value.
     *     @type \MediaCloud\Vendor\Google\Api\Expr\V1beta1\ListValue $list_value
     *           List value.
     *     @type string $type_value
     *           A Type value represented by the fully qualified name of the type.
     * }
     */
    public function __construct($data = NULL) { \MediaCloud\Vendor\GPBMetadata\Google\Api\Expr\V1Beta1\Value::initOnce();
        parent::__construct($data);
    }

    /**
     * Null value.
     *
     * Generated from protobuf field <code>.google.protobuf.NullValue null_value = 1;</code>
     * @return int
     */
    public function getNullValue()
    {
        return $this->readOneof(1);
    }

    /**
     * Null value.
     *
     * Generated from protobuf field <code>.google.protobuf.NullValue null_value = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setNullValue($var)
    {
        GPBUtil::checkEnum($var, \MediaCloud\Vendor\Google\Protobuf\NullValue::class);
        $this->writeOneof(1, $var);

        return $this;
    }

    /**
     * Boolean value.
     *
     * Generated from protobuf field <code>bool bool_value = 2;</code>
     * @return bool
     */
    public function getBoolValue()
    {
        return $this->readOneof(2);
    }

    /**
     * Boolean value.
     *
     * Generated from protobuf field <code>bool bool_value = 2;</code>
     * @param bool $var
     * @return $this
     */
    public function setBoolValue($var)
    {
        GPBUtil::checkBool($var);
        $this->writeOneof(2, $var);

        return $this;
    }

    /**
     * Signed integer value.
     *
     * Generated from protobuf field <code>int64 int64_value = 3;</code>
     * @return int|string
     */
    public function getInt64Value()
    {
        return $this->readOneof(3);
    }

    /**
     * Signed integer value.
     *
     * Generated from protobuf field <code>int64 int64_value = 3;</code>
     * @param int|string $var
     * @return $this
     */
    public function setInt64Value($var)
    {
        GPBUtil::checkInt64($var);
        $this->writeOneof(3, $var);

        return $this;
    }

    /**
     * Unsigned integer value.
     *
     * Generated from protobuf field <code>uint64 uint64_value = 4;</code>
     * @return int|string
     */
    public function getUint64Value()
    {
        return $this->readOneof(4);
    }

    /**
     * Unsigned integer value.
     *
     * Generated from protobuf field <code>uint64 uint64_value = 4;</code>
     * @param int|string $var
     * @return $this
     */
    public function setUint64Value($var)
    {
        GPBUtil::checkUint64($var);
        $this->writeOneof(4, $var);

        return $this;
    }

    /**
     * Floating point value.
     *
     * Generated from protobuf field <code>double double_value = 5;</code>
     * @return float
     */
    public function getDoubleValue()
    {
        return $this->readOneof(5);
    }

    /**
     * Floating point value.
     *
     * Generated from protobuf field <code>double double_value = 5;</code>
     * @param float $var
     * @return $this
     */
    public function setDoubleValue($var)
    {
        GPBUtil::checkDouble($var);
        $this->writeOneof(5, $var);

        return $this;
    }

    /**
     * UTF-8 string value.
     *
     * Generated from protobuf field <code>string string_value = 6;</code>
     * @return string
     */
    public function getStringValue()
    {
        return $this->readOneof(6);
    }

    /**
     * UTF-8 string value.
     *
     * Generated from protobuf field <code>string string_value = 6;</code>
     * @param string $var
     * @return $this
     */
    public function setStringValue($var)
    {
        GPBUtil::checkString($var, True);
        $this->writeOneof(6, $var);

        return $this;
    }

    /**
     * Byte string value.
     *
     * Generated from protobuf field <code>bytes bytes_value = 7;</code>
     * @return string
     */
    public function getBytesValue()
    {
        return $this->readOneof(7);
    }

    /**
     * Byte string value.
     *
     * Generated from protobuf field <code>bytes bytes_value = 7;</code>
     * @param string $var
     * @return $this
     */
    public function setBytesValue($var)
    {
        GPBUtil::checkString($var, False);
        $this->writeOneof(7, $var);

        return $this;
    }

    /**
     * An enum value.
     *
     * Generated from protobuf field <code>.google.api.expr.v1beta1.EnumValue enum_value = 9;</code>
     * @return \MediaCloud\Vendor\Google\Api\Expr\V1beta1\EnumValue
     */
    public function getEnumValue()
    {
        return $this->readOneof(9);
    }

    /**
     * An enum value.
     *
     * Generated from protobuf field <code>.google.api.expr.v1beta1.EnumValue enum_value = 9;</code>
     * @param \MediaCloud\Vendor\Google\Api\Expr\V1beta1\EnumValue $var
     * @return $this
     */
    public function setEnumValue($var)
    {
        GPBUtil::checkMessage($var, \MediaCloud\Vendor\Google\Api\Expr\V1beta1\EnumValue::class);
        $this->writeOneof(9, $var);

        return $this;
    }

    /**
     * The proto message backing an object value.
     *
     * Generated from protobuf field <code>.google.protobuf.Any object_value = 10;</code>
     * @return \MediaCloud\Vendor\Google\Protobuf\Any
     */
    public function getObjectValue()
    {
        return $this->readOneof(10);
    }

    /**
     * The proto message backing an object value.
     *
     * Generated from protobuf field <code>.google.protobuf.Any object_value = 10;</code>
     * @param \MediaCloud\Vendor\Google\Protobuf\Any $var
     * @return $this
     */
    public function setObjectValue($var)
    {
        GPBUtil::checkMessage($var, \MediaCloud\Vendor\Google\Protobuf\Any::class);
        $this->writeOneof(10, $var);

        return $this;
    }

    /**
     * Map value.
     *
     * Generated from protobuf field <code>.google.api.expr.v1beta1.MapValue map_value = 11;</code>
     * @return \MediaCloud\Vendor\Google\Api\Expr\V1beta1\MapValue
     */
    public function getMapValue()
    {
        return $this->readOneof(11);
    }

    /**
     * Map value.
     *
     * Generated from protobuf field <code>.google.api.expr.v1beta1.MapValue map_value = 11;</code>
     * @param \MediaCloud\Vendor\Google\Api\Expr\V1beta1\MapValue $var
     * @return $this
     */
    public function setMapValue($var)
    {
        GPBUtil::checkMessage($var, \MediaCloud\Vendor\Google\Api\Expr\V1beta1\MapValue::class);
        $this->writeOneof(11, $var);

        return $this;
    }

    /**
     * List value.
     *
     * Generated from protobuf field <code>.google.api.expr.v1beta1.ListValue list_value = 12;</code>
     * @return \MediaCloud\Vendor\Google\Api\Expr\V1beta1\ListValue
     */
    public function getListValue()
    {
        return $this->readOneof(12);
    }

    /**
     * List value.
     *
     * Generated from protobuf field <code>.google.api.expr.v1beta1.ListValue list_value = 12;</code>
     * @param \MediaCloud\Vendor\Google\Api\Expr\V1beta1\ListValue $var
     * @return $this
     */
    public function setListValue($var)
    {
        GPBUtil::checkMessage($var, \MediaCloud\Vendor\Google\Api\Expr\V1beta1\ListValue::class);
        $this->writeOneof(12, $var);

        return $this;
    }

    /**
     * A Type value represented by the fully qualified name of the type.
     *
     * Generated from protobuf field <code>string type_value = 15;</code>
     * @return string
     */
    public function getTypeValue()
    {
        return $this->readOneof(15);
    }

    /**
     * A Type value represented by the fully qualified name of the type.
     *
     * Generated from protobuf field <code>string type_value = 15;</code>
     * @param string $var
     * @return $this
     */
    public function setTypeValue($var)
    {
        GPBUtil::checkString($var, True);
        $this->writeOneof(15, $var);

        return $this;
    }

    /**
     * @return string
     */
    public function getKind()
    {
        return $this->whichOneof("kind");
    }

}

