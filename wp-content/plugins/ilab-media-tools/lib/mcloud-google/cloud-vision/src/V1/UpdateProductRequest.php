<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/vision/v1/product_search_service.proto

namespace MediaCloud\Vendor\Google\Cloud\Vision\V1;
use MediaCloud\Vendor\Google\Protobuf\Internal\GPBType;
use MediaCloud\Vendor\Google\Protobuf\Internal\RepeatedField;
use MediaCloud\Vendor\Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for the `UpdateProduct` method.
 *
 * Generated from protobuf message <code>google.cloud.vision.v1.UpdateProductRequest</code>
 */
class UpdateProductRequest extends \MediaCloud\Vendor\Google\Protobuf\Internal\Message
{
    /**
     * Required. The Product resource which replaces the one on the server.
     * product.name is immutable.
     *
     * Generated from protobuf field <code>.google.cloud.vision.v1.Product product = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $product = null;
    /**
     * The [FieldMask][google.protobuf.FieldMask] that specifies which fields
     * to update.
     * If update_mask isn't specified, all mutable fields are to be updated.
     * Valid mask paths include `product_labels`, `display_name`, and
     * `description`.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 2;</code>
     */
    private $update_mask = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \MediaCloud\Vendor\Google\Cloud\Vision\V1\Product $product
     *           Required. The Product resource which replaces the one on the server.
     *           product.name is immutable.
     *     @type \MediaCloud\Vendor\Google\Protobuf\FieldMask $update_mask
     *           The [FieldMask][google.protobuf.FieldMask] that specifies which fields
     *           to update.
     *           If update_mask isn't specified, all mutable fields are to be updated.
     *           Valid mask paths include `product_labels`, `display_name`, and
     *           `description`.
     * }
     */
    public function __construct($data = NULL) { \MediaCloud\Vendor\GPBMetadata\Google\Cloud\Vision\V1\ProductSearchService::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The Product resource which replaces the one on the server.
     * product.name is immutable.
     *
     * Generated from protobuf field <code>.google.cloud.vision.v1.Product product = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \MediaCloud\Vendor\Google\Cloud\Vision\V1\Product|null
     */
    public function getProduct()
    {
        return $this->product;
    }

    public function hasProduct()
    {
        return isset($this->product);
    }

    public function clearProduct()
    {
        unset($this->product);
    }

    /**
     * Required. The Product resource which replaces the one on the server.
     * product.name is immutable.
     *
     * Generated from protobuf field <code>.google.cloud.vision.v1.Product product = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \MediaCloud\Vendor\Google\Cloud\Vision\V1\Product $var
     * @return $this
     */
    public function setProduct($var)
    {
        GPBUtil::checkMessage($var, \MediaCloud\Vendor\Google\Cloud\Vision\V1\Product::class);
        $this->product = $var;

        return $this;
    }

    /**
     * The [FieldMask][google.protobuf.FieldMask] that specifies which fields
     * to update.
     * If update_mask isn't specified, all mutable fields are to be updated.
     * Valid mask paths include `product_labels`, `display_name`, and
     * `description`.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 2;</code>
     * @return \MediaCloud\Vendor\Google\Protobuf\FieldMask|null
     */
    public function getUpdateMask()
    {
        return $this->update_mask;
    }

    public function hasUpdateMask()
    {
        return isset($this->update_mask);
    }

    public function clearUpdateMask()
    {
        unset($this->update_mask);
    }

    /**
     * The [FieldMask][google.protobuf.FieldMask] that specifies which fields
     * to update.
     * If update_mask isn't specified, all mutable fields are to be updated.
     * Valid mask paths include `product_labels`, `display_name`, and
     * `description`.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 2;</code>
     * @param \MediaCloud\Vendor\Google\Protobuf\FieldMask $var
     * @return $this
     */
    public function setUpdateMask($var)
    {
        GPBUtil::checkMessage($var, \MediaCloud\Vendor\Google\Protobuf\FieldMask::class);
        $this->update_mask = $var;

        return $this;
    }

}
