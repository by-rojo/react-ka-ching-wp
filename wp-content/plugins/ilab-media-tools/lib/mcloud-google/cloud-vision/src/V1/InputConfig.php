<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/vision/v1/image_annotator.proto

namespace MediaCloud\Vendor\Google\Cloud\Vision\V1;
use MediaCloud\Vendor\Google\Protobuf\Internal\GPBType;
use MediaCloud\Vendor\Google\Protobuf\Internal\RepeatedField;
use MediaCloud\Vendor\Google\Protobuf\Internal\GPBUtil;

/**
 * The desired input location and metadata.
 *
 * Generated from protobuf message <code>google.cloud.vision.v1.InputConfig</code>
 */
class InputConfig extends \MediaCloud\Vendor\Google\Protobuf\Internal\Message
{
    /**
     * The Google Cloud Storage location to read the input from.
     *
     * Generated from protobuf field <code>.google.cloud.vision.v1.GcsSource gcs_source = 1;</code>
     */
    private $gcs_source = null;
    /**
     * File content, represented as a stream of bytes.
     * Note: As with all `bytes` fields, protobuffers use a pure binary
     * representation, whereas JSON representations use base64.
     * Currently, this field only works for BatchAnnotateFiles requests. It does
     * not work for AsyncBatchAnnotateFiles requests.
     *
     * Generated from protobuf field <code>bytes content = 3;</code>
     */
    private $content = '';
    /**
     * The type of the file. Currently only "application/pdf", "image/tiff" and
     * "image/gif" are supported. Wildcards are not supported.
     *
     * Generated from protobuf field <code>string mime_type = 2;</code>
     */
    private $mime_type = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \MediaCloud\Vendor\Google\Cloud\Vision\V1\GcsSource $gcs_source
     *           The Google Cloud Storage location to read the input from.
     *     @type string $content
     *           File content, represented as a stream of bytes.
     *           Note: As with all `bytes` fields, protobuffers use a pure binary
     *           representation, whereas JSON representations use base64.
     *           Currently, this field only works for BatchAnnotateFiles requests. It does
     *           not work for AsyncBatchAnnotateFiles requests.
     *     @type string $mime_type
     *           The type of the file. Currently only "application/pdf", "image/tiff" and
     *           "image/gif" are supported. Wildcards are not supported.
     * }
     */
    public function __construct($data = NULL) { \MediaCloud\Vendor\GPBMetadata\Google\Cloud\Vision\V1\ImageAnnotator::initOnce();
        parent::__construct($data);
    }

    /**
     * The Google Cloud Storage location to read the input from.
     *
     * Generated from protobuf field <code>.google.cloud.vision.v1.GcsSource gcs_source = 1;</code>
     * @return \MediaCloud\Vendor\Google\Cloud\Vision\V1\GcsSource|null
     */
    public function getGcsSource()
    {
        return $this->gcs_source;
    }

    public function hasGcsSource()
    {
        return isset($this->gcs_source);
    }

    public function clearGcsSource()
    {
        unset($this->gcs_source);
    }

    /**
     * The Google Cloud Storage location to read the input from.
     *
     * Generated from protobuf field <code>.google.cloud.vision.v1.GcsSource gcs_source = 1;</code>
     * @param \MediaCloud\Vendor\Google\Cloud\Vision\V1\GcsSource $var
     * @return $this
     */
    public function setGcsSource($var)
    {
        GPBUtil::checkMessage($var, \MediaCloud\Vendor\Google\Cloud\Vision\V1\GcsSource::class);
        $this->gcs_source = $var;

        return $this;
    }

    /**
     * File content, represented as a stream of bytes.
     * Note: As with all `bytes` fields, protobuffers use a pure binary
     * representation, whereas JSON representations use base64.
     * Currently, this field only works for BatchAnnotateFiles requests. It does
     * not work for AsyncBatchAnnotateFiles requests.
     *
     * Generated from protobuf field <code>bytes content = 3;</code>
     * @return string
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * File content, represented as a stream of bytes.
     * Note: As with all `bytes` fields, protobuffers use a pure binary
     * representation, whereas JSON representations use base64.
     * Currently, this field only works for BatchAnnotateFiles requests. It does
     * not work for AsyncBatchAnnotateFiles requests.
     *
     * Generated from protobuf field <code>bytes content = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setContent($var)
    {
        GPBUtil::checkString($var, False);
        $this->content = $var;

        return $this;
    }

    /**
     * The type of the file. Currently only "application/pdf", "image/tiff" and
     * "image/gif" are supported. Wildcards are not supported.
     *
     * Generated from protobuf field <code>string mime_type = 2;</code>
     * @return string
     */
    public function getMimeType()
    {
        return $this->mime_type;
    }

    /**
     * The type of the file. Currently only "application/pdf", "image/tiff" and
     * "image/gif" are supported. Wildcards are not supported.
     *
     * Generated from protobuf field <code>string mime_type = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setMimeType($var)
    {
        GPBUtil::checkString($var, True);
        $this->mime_type = $var;

        return $this;
    }

}
