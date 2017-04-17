<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SubscribeFormPassThrough StructType
 * @subpackage Structs
 */
class SubscribeFormPassThrough extends AbstractStructBase
{
    /**
     * The WSContact
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var \StructType\WSContact
     */
    public $WSContact;
    /**
     * The SendDoubleOptIn
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var bool
     */
    public $SendDoubleOptIn;
    /**
     * The SendWelcomeMessage
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var bool
     */
    public $SendWelcomeMessage;
    /**
     * The ExternalEventIDs
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $ExternalEventIDs;
    /**
     * Constructor method for SubscribeFormPassThrough
     * @uses SubscribeFormPassThrough::setWSContact()
     * @uses SubscribeFormPassThrough::setSendDoubleOptIn()
     * @uses SubscribeFormPassThrough::setSendWelcomeMessage()
     * @uses SubscribeFormPassThrough::setExternalEventIDs()
     * @param \StructType\WSContact $wSContact
     * @param bool $sendDoubleOptIn
     * @param bool $sendWelcomeMessage
     * @param string $externalEventIDs
     */
    public function __construct(\StructType\WSContact $wSContact = null, $sendDoubleOptIn = null, $sendWelcomeMessage = null, $externalEventIDs = null)
    {
        $this
            ->setWSContact($wSContact)
            ->setSendDoubleOptIn($sendDoubleOptIn)
            ->setSendWelcomeMessage($sendWelcomeMessage)
            ->setExternalEventIDs($externalEventIDs);
    }
    /**
     * Get WSContact value
     * @return \StructType\WSContact
     */
    public function getWSContact()
    {
        return $this->WSContact;
    }
    /**
     * Set WSContact value
     * @param \StructType\WSContact $wSContact
     * @return \StructType\SubscribeFormPassThrough
     */
    public function setWSContact(\StructType\WSContact $wSContact = null)
    {
        $this->WSContact = $wSContact;
        return $this;
    }
    /**
     * Get SendDoubleOptIn value
     * @return bool
     */
    public function getSendDoubleOptIn()
    {
        return $this->SendDoubleOptIn;
    }
    /**
     * Set SendDoubleOptIn value
     * @param bool $sendDoubleOptIn
     * @return \StructType\SubscribeFormPassThrough
     */
    public function setSendDoubleOptIn($sendDoubleOptIn = null)
    {
        $this->SendDoubleOptIn = $sendDoubleOptIn;
        return $this;
    }
    /**
     * Get SendWelcomeMessage value
     * @return bool
     */
    public function getSendWelcomeMessage()
    {
        return $this->SendWelcomeMessage;
    }
    /**
     * Set SendWelcomeMessage value
     * @param bool $sendWelcomeMessage
     * @return \StructType\SubscribeFormPassThrough
     */
    public function setSendWelcomeMessage($sendWelcomeMessage = null)
    {
        $this->SendWelcomeMessage = $sendWelcomeMessage;
        return $this;
    }
    /**
     * Get ExternalEventIDs value
     * @return string|null
     */
    public function getExternalEventIDs()
    {
        return $this->ExternalEventIDs;
    }
    /**
     * Set ExternalEventIDs value
     * @param string $externalEventIDs
     * @return \StructType\SubscribeFormPassThrough
     */
    public function setExternalEventIDs($externalEventIDs = null)
    {
        // validation for constraint: string
        if (!is_null($externalEventIDs) && !is_string($externalEventIDs)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($externalEventIDs)), __LINE__);
        }
        $this->ExternalEventIDs = $externalEventIDs;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\SubscribeFormPassThrough
     */
    public static function __set_state(array $array)
    {
        return parent::__set_state($array);
    }
    /**
     * Method returning the class name
     * @return string __CLASS__
     */
    public function __toString()
    {
        return __CLASS__;
    }
}
