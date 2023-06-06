<?php
/**
 * CreateFungibleTokenTransactionRequestFromAddressWithoutFeePriorityRI
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  kocetestpack
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Vaultody
 *
 * Vaultody
 *
 * The version of the OpenAPI document: 2023-04-20
 * Contact: developers@vaultody.com
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 6.5.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace kocetestpack\Model;

use \ArrayAccess;
use \kocetestpack\ObjectSerializer;

/**
 * CreateFungibleTokenTransactionRequestFromAddressWithoutFeePriorityRI Class Doc Comment
 *
 * @category Class
 * @package  kocetestpack
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class CreateFungibleTokenTransactionRequestFromAddressWithoutFeePriorityRI implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'CreateFungibleTokenTransactionRequestFromAddressWithoutFeePriorityRI';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'note' => 'string',
        'recipient' => '\kocetestpack\Model\CreateFungibleTokenTransactionRequestFromAddressWithoutFeePriorityRIRecipientInner[]',
        'sender' => '\kocetestpack\Model\CreateSingleTransactionRequestFromAddressWithoutFeePriorityRISender',
        'token_type_specific_data' => '\kocetestpack\Model\CreateFungibleTokenTransactionRequestFromAddressWithoutFeePriorityRIS',
        'transaction_request_id' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'note' => null,
        'recipient' => null,
        'sender' => null,
        'token_type_specific_data' => null,
        'transaction_request_id' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'note' => false,
		'recipient' => false,
		'sender' => false,
		'token_type_specific_data' => false,
		'transaction_request_id' => false
    ];

    /**
      * If a nullable field gets set to null, insert it here
      *
      * @var boolean[]
      */
    protected array $openAPINullablesSetToNull = [];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of nullable properties
     *
     * @return array
     */
    protected static function openAPINullables(): array
    {
        return self::$openAPINullables;
    }

    /**
     * Array of nullable field names deliberately set to null
     *
     * @return boolean[]
     */
    private function getOpenAPINullablesSetToNull(): array
    {
        return $this->openAPINullablesSetToNull;
    }

    /**
     * Setter - Array of nullable field names deliberately set to null
     *
     * @param boolean[] $openAPINullablesSetToNull
     */
    private function setOpenAPINullablesSetToNull(array $openAPINullablesSetToNull): void
    {
        $this->openAPINullablesSetToNull = $openAPINullablesSetToNull;
    }

    /**
     * Checks if a property is nullable
     *
     * @param string $property
     * @return bool
     */
    public static function isNullable(string $property): bool
    {
        return self::openAPINullables()[$property] ?? false;
    }

    /**
     * Checks if a nullable property is set to null.
     *
     * @param string $property
     * @return bool
     */
    public function isNullableSetToNull(string $property): bool
    {
        return in_array($property, $this->getOpenAPINullablesSetToNull(), true);
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'note' => 'note',
        'recipient' => 'recipient',
        'sender' => 'sender',
        'token_type_specific_data' => 'tokenTypeSpecificData',
        'transaction_request_id' => 'transactionRequestId'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'note' => 'setNote',
        'recipient' => 'setRecipient',
        'sender' => 'setSender',
        'token_type_specific_data' => 'setTokenTypeSpecificData',
        'transaction_request_id' => 'setTransactionRequestId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'note' => 'getNote',
        'recipient' => 'getRecipient',
        'sender' => 'getSender',
        'token_type_specific_data' => 'getTokenTypeSpecificData',
        'transaction_request_id' => 'getTransactionRequestId'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$openAPIModelName;
    }


    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->setIfExists('note', $data ?? [], null);
        $this->setIfExists('recipient', $data ?? [], null);
        $this->setIfExists('sender', $data ?? [], null);
        $this->setIfExists('token_type_specific_data', $data ?? [], null);
        $this->setIfExists('transaction_request_id', $data ?? [], null);
    }

    /**
    * Sets $this->container[$variableName] to the given data or to the given default Value; if $variableName
    * is nullable and its value is set to null in the $fields array, then mark it as "set to null" in the
    * $this->openAPINullablesSetToNull array
    *
    * @param string $variableName
    * @param array  $fields
    * @param mixed  $defaultValue
    */
    private function setIfExists(string $variableName, array $fields, $defaultValue): void
    {
        if (self::isNullable($variableName) && array_key_exists($variableName, $fields) && is_null($fields[$variableName])) {
            $this->openAPINullablesSetToNull[] = $variableName;
        }

        $this->container[$variableName] = $fields[$variableName] ?? $defaultValue;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['recipient'] === null) {
            $invalidProperties[] = "'recipient' can't be null";
        }
        if ($this->container['sender'] === null) {
            $invalidProperties[] = "'sender' can't be null";
        }
        if ($this->container['token_type_specific_data'] === null) {
            $invalidProperties[] = "'token_type_specific_data' can't be null";
        }
        if ($this->container['transaction_request_id'] === null) {
            $invalidProperties[] = "'transaction_request_id' can't be null";
        }
        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets note
     *
     * @return string|null
     */
    public function getNote()
    {
        return $this->container['note'];
    }

    /**
     * Sets note
     *
     * @param string|null $note Represents an optional note to add a free text in, explaining or providing additional detail on the transaction request.
     *
     * @return self
     */
    public function setNote($note)
    {
        if (is_null($note)) {
            throw new \InvalidArgumentException('non-nullable note cannot be null');
        }
        $this->container['note'] = $note;

        return $this;
    }

    /**
     * Gets recipient
     *
     * @return \kocetestpack\Model\CreateFungibleTokenTransactionRequestFromAddressWithoutFeePriorityRIRecipientInner[]
     */
    public function getRecipient()
    {
        return $this->container['recipient'];
    }

    /**
     * Sets recipient
     *
     * @param \kocetestpack\Model\CreateFungibleTokenTransactionRequestFromAddressWithoutFeePriorityRIRecipientInner[] $recipient Defines the destination for the transaction, i.e. the recipient(s).
     *
     * @return self
     */
    public function setRecipient($recipient)
    {
        if (is_null($recipient)) {
            throw new \InvalidArgumentException('non-nullable recipient cannot be null');
        }
        $this->container['recipient'] = $recipient;

        return $this;
    }

    /**
     * Gets sender
     *
     * @return \kocetestpack\Model\CreateSingleTransactionRequestFromAddressWithoutFeePriorityRISender
     */
    public function getSender()
    {
        return $this->container['sender'];
    }

    /**
     * Sets sender
     *
     * @param \kocetestpack\Model\CreateSingleTransactionRequestFromAddressWithoutFeePriorityRISender $sender sender
     *
     * @return self
     */
    public function setSender($sender)
    {
        if (is_null($sender)) {
            throw new \InvalidArgumentException('non-nullable sender cannot be null');
        }
        $this->container['sender'] = $sender;

        return $this;
    }

    /**
     * Gets token_type_specific_data
     *
     * @return \kocetestpack\Model\CreateFungibleTokenTransactionRequestFromAddressWithoutFeePriorityRIS
     */
    public function getTokenTypeSpecificData()
    {
        return $this->container['token_type_specific_data'];
    }

    /**
     * Sets token_type_specific_data
     *
     * @param \kocetestpack\Model\CreateFungibleTokenTransactionRequestFromAddressWithoutFeePriorityRIS $token_type_specific_data token_type_specific_data
     *
     * @return self
     */
    public function setTokenTypeSpecificData($token_type_specific_data)
    {
        if (is_null($token_type_specific_data)) {
            throw new \InvalidArgumentException('non-nullable token_type_specific_data cannot be null');
        }
        $this->container['token_type_specific_data'] = $token_type_specific_data;

        return $this;
    }

    /**
     * Gets transaction_request_id
     *
     * @return string
     */
    public function getTransactionRequestId()
    {
        return $this->container['transaction_request_id'];
    }

    /**
     * Sets transaction_request_id
     *
     * @param string $transaction_request_id Represents a unique identifier of the transaction request (the request sent to make a transaction), which helps in identifying which callback and which `referenceId` concern that specific transaction request.
     *
     * @return self
     */
    public function setTransactionRequestId($transaction_request_id)
    {
        if (is_null($transaction_request_id)) {
            throw new \InvalidArgumentException('non-nullable transaction_request_id cannot be null');
        }
        $this->container['transaction_request_id'] = $transaction_request_id;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset): bool
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed|null
     */
    #[\ReturnTypeWillChange]
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value): void
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset): void
    {
        unset($this->container[$offset]);
    }

    /**
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize()
    {
       return ObjectSerializer::sanitizeForSerialization($this);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


