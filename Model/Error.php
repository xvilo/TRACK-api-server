<?php
/**
 * Error
 *
 * PHP version 5
 *
 * @category Class
 * @package  Xvilo\Track\ApiServer\Model
 * @author   OpenAPI Generator team
 * @link     https://github.com/openapitools/openapi-generator
 */

/**
 * TRACK API Specification
 *
 * No description provided (generated by Openapi Generator https://github.com/openapitools/openapi-generator)
 *
 * The version of the OpenAPI document: 1.0.0
 * 
 * Generated by: https://github.com/openapitools/openapi-generator.git
 *
 */

/**
 * NOTE: This class is auto generated by the openapi generator program.
 * https://github.com/openapitools/openapi-generator
 * Do not edit the class manually.
 */

namespace Xvilo\Track\ApiServer\Model;

use Symfony\Component\Validator\Constraints as Assert;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\SerializedName;

/**
 * Class representing the Error model.
 *
 * @package Xvilo\Track\ApiServer\Model
 * @author  OpenAPI Generator team
 */
class Error 
{
        /**
     * @var int
     * @SerializedName("code")
     * @Assert\NotNull()
     * @Assert\Type("int")
     * @Type("int")
     */
    protected $code;

    /**
     * @var string
     * @SerializedName("message")
     * @Assert\NotNull()
     * @Assert\Type("string")
     * @Type("string")
     */
    protected $message;

    /**
     * Constructor
     * @param mixed[] $data Associated array of property values initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->code = isset($data['code']) ? $data['code'] : null;
        $this->message = isset($data['message']) ? $data['message'] : null;
    }

    /**
     * Gets code.
     *
     * @return int
     */
    public function getCode(): int
    {
        return $this->code;
    }

    /**
     * Sets code.
     *
     * @param int $code
     *
     * @return $this
     */
    public function setCode(int $code)
    {
        $this->code = $code;

        return $this;
    }

    /**
     * Gets message.
     *
     * @return string
     */
    public function getMessage(): string
    {
        return $this->message;
    }

    /**
     * Sets message.
     *
     * @param string $message
     *
     * @return $this
     */
    public function setMessage(string $message)
    {
        $this->message = $message;

        return $this;
    }
}


