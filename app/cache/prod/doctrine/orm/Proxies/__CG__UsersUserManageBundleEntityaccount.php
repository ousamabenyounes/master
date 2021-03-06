<?php

namespace Proxies\__CG__\Users\UserManageBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class account extends \Users\UserManageBundle\Entity\account implements \Doctrine\ORM\Proxy\Proxy
{
    /**
     * @var \Closure the callback responsible for loading properties in the proxy object. This callback is called with
     *      three parameters, being respectively the proxy object to be initialized, the method that triggered the
     *      initialization process and an array of ordered parameters that were passed to that method.
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setInitializer
     */
    public $__initializer__;

    /**
     * @var \Closure the callback responsible of loading properties that need to be copied in the cloned object
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setCloner
     */
    public $__cloner__;

    /**
     * @var boolean flag indicating if this object was already initialized
     *
     * @see \Doctrine\Common\Persistence\Proxy::__isInitialized
     */
    public $__isInitialized__ = false;

    /**
     * @var array properties to be lazy loaded, with keys being the property
     *            names and values being their default values
     *
     * @see \Doctrine\Common\Persistence\Proxy::__getLazyProperties
     */
    public static $lazyPropertiesDefaults = array();



    /**
     * @param \Closure $initializer
     * @param \Closure $cloner
     */
    public function __construct($initializer = null, $cloner = null)
    {

        $this->__initializer__ = $initializer;
        $this->__cloner__      = $cloner;
    }







    /**
     * 
     * @return array
     */
    public function __sleep()
    {
        if ($this->__isInitialized__) {
            return array('__isInitialized__', '' . "\0" . 'Users\\UserManageBundle\\Entity\\account' . "\0" . 'id', '' . "\0" . 'Users\\UserManageBundle\\Entity\\account' . "\0" . 'name', '' . "\0" . 'Users\\UserManageBundle\\Entity\\account' . "\0" . 'address', '' . "\0" . 'Users\\UserManageBundle\\Entity\\account' . "\0" . 'address2', '' . "\0" . 'Users\\UserManageBundle\\Entity\\account' . "\0" . 'city', 'state_entity', '' . "\0" . 'Users\\UserManageBundle\\Entity\\account' . "\0" . 'stateId', '' . "\0" . 'Users\\UserManageBundle\\Entity\\account' . "\0" . 'zipCode', '' . "\0" . 'Users\\UserManageBundle\\Entity\\account' . "\0" . 'primaryPhone', '' . "\0" . 'Users\\UserManageBundle\\Entity\\account' . "\0" . 'secondaryPhone', '' . "\0" . 'Users\\UserManageBundle\\Entity\\account' . "\0" . 'status', '' . "\0" . 'Users\\UserManageBundle\\Entity\\account' . "\0" . 'createdDate', '' . "\0" . 'Users\\UserManageBundle\\Entity\\account' . "\0" . 'modifiedDate', '' . "\0" . 'Users\\UserManageBundle\\Entity\\account' . "\0" . 'email', '' . "\0" . 'Users\\UserManageBundle\\Entity\\account' . "\0" . 'stateFormat', '' . "\0" . 'Users\\UserManageBundle\\Entity\\account' . "\0" . 'krWasClients', '' . "\0" . 'Users\\UserManageBundle\\Entity\\account' . "\0" . 'resellerId', '' . "\0" . 'Users\\UserManageBundle\\Entity\\account' . "\0" . 'logo', '' . "\0" . 'Users\\UserManageBundle\\Entity\\account' . "\0" . 'file', '' . "\0" . 'Users\\UserManageBundle\\Entity\\account' . "\0" . 'themeSetting');
        }

        return array('__isInitialized__', '' . "\0" . 'Users\\UserManageBundle\\Entity\\account' . "\0" . 'id', '' . "\0" . 'Users\\UserManageBundle\\Entity\\account' . "\0" . 'name', '' . "\0" . 'Users\\UserManageBundle\\Entity\\account' . "\0" . 'address', '' . "\0" . 'Users\\UserManageBundle\\Entity\\account' . "\0" . 'address2', '' . "\0" . 'Users\\UserManageBundle\\Entity\\account' . "\0" . 'city', 'state_entity', '' . "\0" . 'Users\\UserManageBundle\\Entity\\account' . "\0" . 'stateId', '' . "\0" . 'Users\\UserManageBundle\\Entity\\account' . "\0" . 'zipCode', '' . "\0" . 'Users\\UserManageBundle\\Entity\\account' . "\0" . 'primaryPhone', '' . "\0" . 'Users\\UserManageBundle\\Entity\\account' . "\0" . 'secondaryPhone', '' . "\0" . 'Users\\UserManageBundle\\Entity\\account' . "\0" . 'status', '' . "\0" . 'Users\\UserManageBundle\\Entity\\account' . "\0" . 'createdDate', '' . "\0" . 'Users\\UserManageBundle\\Entity\\account' . "\0" . 'modifiedDate', '' . "\0" . 'Users\\UserManageBundle\\Entity\\account' . "\0" . 'email', '' . "\0" . 'Users\\UserManageBundle\\Entity\\account' . "\0" . 'stateFormat', '' . "\0" . 'Users\\UserManageBundle\\Entity\\account' . "\0" . 'krWasClients', '' . "\0" . 'Users\\UserManageBundle\\Entity\\account' . "\0" . 'resellerId', '' . "\0" . 'Users\\UserManageBundle\\Entity\\account' . "\0" . 'logo', '' . "\0" . 'Users\\UserManageBundle\\Entity\\account' . "\0" . 'file', '' . "\0" . 'Users\\UserManageBundle\\Entity\\account' . "\0" . 'themeSetting');
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (account $proxy) {
                $proxy->__setInitializer(null);
                $proxy->__setCloner(null);

                $existingProperties = get_object_vars($proxy);

                foreach ($proxy->__getLazyProperties() as $property => $defaultValue) {
                    if ( ! array_key_exists($property, $existingProperties)) {
                        $proxy->$property = $defaultValue;
                    }
                }
            };

        }
    }

    /**
     * 
     */
    public function __clone()
    {
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', array());
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load()
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', array());
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __isInitialized()
    {
        return $this->__isInitialized__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitialized($initialized)
    {
        $this->__isInitialized__ = $initialized;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitializer(\Closure $initializer = null)
    {
        $this->__initializer__ = $initializer;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __getInitializer()
    {
        return $this->__initializer__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setCloner(\Closure $cloner = null)
    {
        $this->__cloner__ = $cloner;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific cloning logic
     */
    public function __getCloner()
    {
        return $this->__cloner__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     * @static
     */
    public function __getLazyProperties()
    {
        return self::$lazyPropertiesDefaults;
    }

    
    /**
     * {@inheritDoc}
     */
    public function getId()
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getId();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getId', array());

        return parent::getId();
    }

    /**
     * {@inheritDoc}
     */
    public function setName($name)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setName', array($name));

        return parent::setName($name);
    }

    /**
     * {@inheritDoc}
     */
    public function getName()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getName', array());

        return parent::getName();
    }

    /**
     * {@inheritDoc}
     */
    public function setAddress($address)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAddress', array($address));

        return parent::setAddress($address);
    }

    /**
     * {@inheritDoc}
     */
    public function getAddress()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAddress', array());

        return parent::getAddress();
    }

    /**
     * {@inheritDoc}
     */
    public function setAddress2($address2)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAddress2', array($address2));

        return parent::setAddress2($address2);
    }

    /**
     * {@inheritDoc}
     */
    public function getAddress2()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAddress2', array());

        return parent::getAddress2();
    }

    /**
     * {@inheritDoc}
     */
    public function setCity($city)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCity', array($city));

        return parent::setCity($city);
    }

    /**
     * {@inheritDoc}
     */
    public function getCity()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCity', array());

        return parent::getCity();
    }

    /**
     * {@inheritDoc}
     */
    public function setStateId($stateId)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setStateId', array($stateId));

        return parent::setStateId($stateId);
    }

    /**
     * {@inheritDoc}
     */
    public function getStateId()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getStateId', array());

        return parent::getStateId();
    }

    /**
     * {@inheritDoc}
     */
    public function setZipCode($zipCode)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setZipCode', array($zipCode));

        return parent::setZipCode($zipCode);
    }

    /**
     * {@inheritDoc}
     */
    public function getZipCode()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getZipCode', array());

        return parent::getZipCode();
    }

    /**
     * {@inheritDoc}
     */
    public function setPrimaryPhone($primaryPhone)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPrimaryPhone', array($primaryPhone));

        return parent::setPrimaryPhone($primaryPhone);
    }

    /**
     * {@inheritDoc}
     */
    public function getPrimaryPhone()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPrimaryPhone', array());

        return parent::getPrimaryPhone();
    }

    /**
     * {@inheritDoc}
     */
    public function setSecondaryPhone($secondaryPhone)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSecondaryPhone', array($secondaryPhone));

        return parent::setSecondaryPhone($secondaryPhone);
    }

    /**
     * {@inheritDoc}
     */
    public function getSecondaryPhone()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSecondaryPhone', array());

        return parent::getSecondaryPhone();
    }

    /**
     * {@inheritDoc}
     */
    public function setStatus($status)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setStatus', array($status));

        return parent::setStatus($status);
    }

    /**
     * {@inheritDoc}
     */
    public function getStatus()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getStatus', array());

        return parent::getStatus();
    }

    /**
     * {@inheritDoc}
     */
    public function setCreatedDate($createdDate)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCreatedDate', array($createdDate));

        return parent::setCreatedDate($createdDate);
    }

    /**
     * {@inheritDoc}
     */
    public function getCreatedDate()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCreatedDate', array());

        return parent::getCreatedDate();
    }

    /**
     * {@inheritDoc}
     */
    public function setModifiedDate($modifiedDate)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setModifiedDate', array($modifiedDate));

        return parent::setModifiedDate($modifiedDate);
    }

    /**
     * {@inheritDoc}
     */
    public function getModifiedDate()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getModifiedDate', array());

        return parent::getModifiedDate();
    }

    /**
     * {@inheritDoc}
     */
    public function setEmail($email)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setEmail', array($email));

        return parent::setEmail($email);
    }

    /**
     * {@inheritDoc}
     */
    public function getEmail()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEmail', array());

        return parent::getEmail();
    }

    /**
     * {@inheritDoc}
     */
    public function setStateFormat($stateFormat)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setStateFormat', array($stateFormat));

        return parent::setStateFormat($stateFormat);
    }

    /**
     * {@inheritDoc}
     */
    public function getStateFormat()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getStateFormat', array());

        return parent::getStateFormat();
    }

    /**
     * {@inheritDoc}
     */
    public function setKrWasClients($krWasClients)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setKrWasClients', array($krWasClients));

        return parent::setKrWasClients($krWasClients);
    }

    /**
     * {@inheritDoc}
     */
    public function getKrWasClients()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getKrWasClients', array());

        return parent::getKrWasClients();
    }

    /**
     * {@inheritDoc}
     */
    public function setResellerId($resellerId)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setResellerId', array($resellerId));

        return parent::setResellerId($resellerId);
    }

    /**
     * {@inheritDoc}
     */
    public function getResellerId()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getResellerId', array());

        return parent::getResellerId();
    }

    /**
     * {@inheritDoc}
     */
    public function setStateEntity(\Users\UserManageBundle\Entity\state $stateEntity = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setStateEntity', array($stateEntity));

        return parent::setStateEntity($stateEntity);
    }

    /**
     * {@inheritDoc}
     */
    public function getStateEntity()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getStateEntity', array());

        return parent::getStateEntity();
    }

    /**
     * {@inheritDoc}
     */
    public function setLogo($logo)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLogo', array($logo));

        return parent::setLogo($logo);
    }

    /**
     * {@inheritDoc}
     */
    public function getLogo()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLogo', array());

        return parent::getLogo();
    }

    /**
     * {@inheritDoc}
     */
    public function setFile(\Symfony\Component\HttpFoundation\File\UploadedFile $file = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setFile', array($file));

        return parent::setFile($file);
    }

    /**
     * {@inheritDoc}
     */
    public function getFile()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFile', array());

        return parent::getFile();
    }

    /**
     * {@inheritDoc}
     */
    public function getUploadRootDir($id, $usertype)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUploadRootDir', array($id, $usertype));

        return parent::getUploadRootDir($id, $usertype);
    }

    /**
     * {@inheritDoc}
     */
    public function getUploadDir($id, $usertype)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUploadDir', array($id, $usertype));

        return parent::getUploadDir($id, $usertype);
    }

    /**
     * {@inheritDoc}
     */
    public function upload($file, $id, $usertype)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'upload', array($file, $id, $usertype));

        return parent::upload($file, $id, $usertype);
    }

    /**
     * {@inheritDoc}
     */
    public function setThemeSetting($themeSetting)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setThemeSetting', array($themeSetting));

        return parent::setThemeSetting($themeSetting);
    }

    /**
     * {@inheritDoc}
     */
    public function getThemeSetting()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getThemeSetting', array());

        return parent::getThemeSetting();
    }

}
