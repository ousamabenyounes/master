<?php

namespace Users\usermanageBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Company
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Users\usermanageBundle\Entity\CompanyRepository")
 */
class Company
{
  /**
     * @ORM\ManyToOne(targetEntity="state", inversedBy="companies")
     * @ORM\JoinColumn(name="state_id", referencedColumnName="id")
     */
    protected $state_entity;
    
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     * @Assert\NotBlank(message = "Please enter a valid Company name" )
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

    /**
     * @var string
     * @Assert\NotBlank(message = "Please enter a valid Address" )
     * @ORM\Column(name="address", type="string", length=255)
     */
    private $address;
    
     /**
     * @var string
     *
     * @ORM\Column(name="address2", type="string", length=255)
     */
    private $address2;

    /**
     * @var string
     * @Assert\NotBlank(message = "Please enter a valid City" )
     * @ORM\Column(name="city", type="string", length=255)
     */
    private $city;

    /**
     * @var integer
     * @Assert\NotBlank( message = "Please select a valid state" )
     * @ORM\Column( name="state_id", type="integer" )
     */
    private $state;

    /**
     * @var string
     * @Assert\NotBlank(message = "Please enter a valid Zip Code" )
     * @ORM\Column(name="zip_code", type="string", length=10)
     */
    private $zipCode;

    /**
     * @var string
     * @Assert\NotBlank(message = "Please enter a valid Phone number" )
     * @ORM\Column(name="primary_phone", type="string", length=20)
     */
    private $phone;

    /**
     * @var string
     *
     * @ORM\Column(name="secondary_phone", type="string", length=20)
     */
    private $secondary_phone;
    
    /**
     * @var integer
     *
     * @ORM\Column(name="status", type="smallint")
     */
    private $status;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="created_date", type="datetime")
     */
    private $createdDate;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="modified_date", type="datetime")
     */
    private $modifiedDate;

    
    /**
     * @var string
     * @Assert\NotBlank(message = "Please enter a valid email" )
     * @ORM\Column(name="email", type="string", length=200)
     */
    private $email;

    /**
     * @var integer
     *
     * @ORM\Column(name="state_format", type="smallint")
     */
    private $stateformat;
    
     /**
     * @var integer
     *
     * @ORM\Column(name="kr_was_clients", type="smallint")
     */
    private $kr_was_clients;
    
    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return Company
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set address
     *
     * @param string $address
     * @return Company
     */
    public function setAddress($address)
    {
        $this->address = $address;

        return $this;
    }

    /**
     * Get address
     *
     * @return string 
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Set city
     *
     * @param string $city
     * @return Company
     */
    public function setCity($city)
    {
        $this->city = $city;

        return $this;
    }

    /**
     * Get city
     *
     * @return string 
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * Set state
     *
     * @param string $state
     * @return Company
     */
    public function setState($state)
    {
        $this->state = $state;

        return $this;
    }

    /**
     * Get state
     *
     * @return string 
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * Set zipCode
     *
     * @param string $zipCode
     * @return Company
     */
    public function setZipCode($zipCode)
    {
        $this->zipCode = $zipCode;

        return $this;
    }

    /**
     * Get zipCode
     *
     * @return string 
     */
    public function getZipCode()
    {
        return $this->zipCode;
    }

    /**
     * Set phone
     *
     * @param string $phone
     * @return Company
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;

        return $this;
    }

    /**
     * Get phone
     *
     * @return string 
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * Set status
     *
     * @param integer $status
     * @return Company
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return integer 
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set createdDate
     *
     * @param \DateTime $createdDate
     * @return Company
     */
    public function setCreatedDate($createdDate)
    {
        $this->createdDate = $createdDate;

        return $this;
    }

    /**
     * Get createdDate
     *
     * @return \DateTime 
     */
    public function getCreatedDate()
    {
        return $this->createdDate;
    }

    /**
     * Set modifiedDate
     *
     * @param \DateTime $modifiedDate
     * @return Company
     */
    public function setModifiedDate($modifiedDate)
    {
        $this->modifiedDate = $modifiedDate;

        return $this;
    }

    /**
     * Get modifiedDate
     *
     * @return \DateTime 
     */
    public function getModifiedDate()
    {
        return $this->modifiedDate;
    }

    /**
     * Set address2
     *
     * @param string $address2
     * @return Company
     */
    public function setAddress2($address2)
    {
        $this->address2 = $address2;

        return $this;
    }

    /**
     * Get address2
     *
     * @return string 
     */
    public function getAddress2()
    {
        return $this->address2;
    }

    /**
     * Set secondary_phone
     *
     * @param string $secondaryPhone
     * @return Company
     */
    public function setSecondaryPhone($secondaryPhone)
    {
        $this->secondary_phone = $secondaryPhone;

        return $this;
    }

    /**
     * Get secondary_phone
     *
     * @return string 
     */
    public function getSecondaryPhone()
    {
        return $this->secondary_phone;
    }

    /**
     * Set email
     *
     * @param string $email
     * @return Company
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string 
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set stateformat
     *
     * @param integer $stateformat
     * @return Company
     */
    public function setStateformat($stateformat)
    {
        $this->stateformat = $stateformat;

        return $this;
    }

    /**
     * Get stateformat
     *
     * @return integer 
     */
    public function getStateformat()
    {
        return $this->stateformat;
    }

    /**
     * Set kr_was_clients
     *
     * @param integer $krWasClients
     * @return Company
     */
    public function setKrWasClients($krWasClients)
    {
        $this->kr_was_clients = $krWasClients;

        return $this;
    }

    /**
     * Get kr_was_clients
     *
     * @return integer 
     */
    public function getKrWasClients()
    {
        return $this->kr_was_clients;
    }



    /**
     * Set state_entity
     *
     * @param \Users\usermanageBundle\Entity\state $stateEntity
     * @return Company
     */
    public function setStateEntity(\Users\usermanageBundle\Entity\state $stateEntity = null)
    {
        $this->state_entity = $stateEntity;

        return $this;
    }

    /**
     * Get state_entity
     *
     * @return \Users\usermanageBundle\Entity\state 
     */
    public function getStateEntity()
    {
        return $this->state_entity;
    }
}
