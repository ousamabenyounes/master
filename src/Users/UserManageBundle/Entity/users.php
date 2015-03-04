<?php

namespace Users\UserManageBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * users
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Users\UserManageBundle\Entity\usersRepository")
 */
class users
{
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
     * @Assert\NotBlank()
     * @ORM\Column(name="username", type="string", length=50)
     */
    private $username;

    /**
     * @var string
     * @Assert\NotBlank( )
     * @ORM\Column(name="password", type="string", length=50)
     */
    private $password;

    /**
     * @var integer
     *
     * @ORM\Column(name="user_type", type="smallint")
     */
    private $userType;

    /**
     * @var integer
     *
     * @ORM\Column(name="status", type="smallint")
     */
    private $status;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="created_on", type="datetime")
     */
    private $createdOn;

    /**
     * @var string
     *
     * @ORM\Column(name="created_by", type="string", length=255)
     */
    private $createdBy;

    /**
     * @var string
     *
     * @ORM\Column(name="first_name", type="string", length=50)
     */
    private $firstName;

    /**
     * @var string
     *
     * @ORM\Column(name="last_name", type="string", length=50)
     */
    private $lastName;

    /**
     * @var string
     *
     * @ORM\Column(name="salutation", type="string", length=10)
     */
    private $salutation;

    /**
     * @var integer
     *
     * @ORM\Column(name="account_type", type="smallint", nullable = true)
     */
    private $accountType;

    /**
     * @var integer
     *
     * @ORM\Column(name="is_test_account", type="smallint",  nullable = true)
     */
    private $isTestAccount;

    /**
     * @var string
     *
     * @ORM\Column(name="title", type="string", length=50, nullable =true )
     */
    private $title;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=200, nullable =true )
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="email2", type="string", length=200, nullable =true )
     */
    private $email2;

    /**
     * @var string
     *
     * @ORM\Column(name="primary_phone", type="string", length=20, nullable =true )
     */
    private $primaryPhone;

    /**
     * @var string
     *
     * @ORM\Column(name="phone2", type="string", length=20, nullable =true )
     */
    private $phone2;

    /**
     * @var integer
     *
     * @ORM\Column(name="account_id", type="smallint" , nullable =true )
     */
    private $accountId;

    /**
     * @var integer
     *
     * @ORM\Column(name="reseller_id", type="smallint", nullable =true )
     */
    private $resellerId;


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
     * Set username
     *
     * @param string $username
     * @return users
     */
    public function setUsername($username)
    {
        $this->username = $username;

        return $this;
    }

    /**
     * Get username
     *
     * @return string 
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * Set password
     *
     * @param string $password
     * @return users
     */
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Get password
     *
     * @return string 
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set userType
     *
     * @param integer $userType
     * @return users
     */
    public function setUserType($userType)
    {
        $this->userType = $userType;

        return $this;
    }

    /**
     * Get userType
     *
     * @return integer 
     */
    public function getUserType()
    {
        return $this->userType;
    }

    /**
     * Set status
     *
     * @param integer $status
     * @return users
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
     * Set createdOn
     *
     * @param \DateTime $createdOn
     * @return users
     */
    public function setCreatedOn($createdOn)
    {
        $this->createdOn = $createdOn;

        return $this;
    }

    /**
     * Get createdOn
     *
     * @return \DateTime 
     */
    public function getCreatedOn()
    {
        return $this->createdOn;
    }

    /**
     * Set createdBy
     *
     * @param string $createdBy
     * @return users
     */
    public function setCreatedBy($createdBy)
    {
        $this->createdBy = $createdBy;

        return $this;
    }

    /**
     * Get createdBy
     *
     * @return string 
     */
    public function getCreatedBy()
    {
        return $this->createdBy;
    }

    /**
     * Set firstName
     *
     * @param string $firstName
     * @return users
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;

        return $this;
    }

    /**
     * Get firstName
     *
     * @return string 
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * Set lastName
     *
     * @param string $lastName
     * @return users
     */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;

        return $this;
    }

    /**
     * Get lastName
     *
     * @return string 
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * Set salutation
     *
     * @param string $salutation
     * @return users
     */
    public function setSalutation($salutation)
    {
        $this->salutation = $salutation;

        return $this;
    }

    /**
     * Get salutation
     *
     * @return string 
     */
    public function getSalutation()
    {
        return $this->salutation;
    }

    /**
     * Set accountType
     *
     * @param integer $accountType
     * @return users
     */
    public function setAccountType($accountType)
    {
        $this->accountType = $accountType;

        return $this;
    }

    /**
     * Get accountType
     *
     * @return integer 
     */
    public function getAccountType()
    {
        return $this->accountType;
    }

    /**
     * Set isTestAccount
     *
     * @param integer $isTestAccount
     * @return users
     */
    public function setIsTestAccount($isTestAccount)
    {
        $this->isTestAccount = $isTestAccount;

        return $this;
    }

    /**
     * Get isTestAccount
     *
     * @return integer 
     */
    public function getIsTestAccount()
    {
        return $this->isTestAccount;
    }

    /**
     * Set title
     *
     * @param string $title
     * @return users
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title
     *
     * @return string 
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set email
     *
     * @param string $email
     * @return users
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
     * Set email2
     *
     * @param string $email2
     * @return users
     */
    public function setEmail2($email2)
    {
        $this->email2 = $email2;

        return $this;
    }

    /**
     * Get email2
     *
     * @return string 
     */
    public function getEmail2()
    {
        return $this->email2;
    }

    /**
     * Set primaryPhone
     *
     * @param string $primaryPhone
     * @return users
     */
    public function setPrimaryPhone($primaryPhone)
    {
        $this->primaryPhone = $primaryPhone;

        return $this;
    }

    /**
     * Get primaryPhone
     *
     * @return string 
     */
    public function getPrimaryPhone()
    {
        return $this->primaryPhone;
    }

    /**
     * Set phone2
     *
     * @param string $phone2
     * @return users
     */
    public function setPhone2($phone2)
    {
        $this->phone2 = $phone2;

        return $this;
    }

    /**
     * Get phone2
     *
     * @return string 
     */
    public function getPhone2()
    {
        return $this->phone2;
    }

    /**
     * Set accountId
     *
     * @param integer $accountId
     * @return users
     */
    public function setAccountId($accountId)
    {
        $this->accountId = $accountId;

        return $this;
    }

    /**
     * Get accountId
     *
     * @return integer 
     */
    public function getAccountId()
    {
        return $this->accountId;
    }

    /**
     * Set resellerId
     *
     * @param integer $resellerId
     * @return users
     */
    public function setResellerId($resellerId)
    {
        $this->resellerId = $resellerId;

        return $this;
    }

    /**
     * Get resellerId
     *
     * @return integer 
     */
    public function getResellerId()
    {
        return $this->resellerId;
    }
}
