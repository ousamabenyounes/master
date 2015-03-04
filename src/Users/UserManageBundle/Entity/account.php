<?php

namespace Users\UserManageBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\Mapping\PrePersist;
use Doctrine\ORM\Event\PreUpdateEventArgs;
use Symfony\Component\Validator\Constraints as Assert;
use Users\UsermanageBundle\Entity\state;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\Filesystem\Filesystem;
use Symfony\Component\Filesystem\Exception\IOExceptionInterface;
use Doctrine\Common\Collections\ArrayCollection;
/**
 * account
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Users\UserManageBundle\Entity\accountRepository")
 */
class account
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
     *
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="address", type="string", length=255)
     */
    private $address;

    /**
     * @var string
     *
     * @ORM\Column(name="address2", type="string", length=255, nullable =true )
     */
    private $address2;

    /**
     * @var string
     *
     * @ORM\Column(name="city", type="string", length=100)
     */
    private $city;

	 /**
     * @ORM\ManyToOne(targetEntity="state", inversedBy="Account")
     * @ORM\JoinColumn(name="state_id", referencedColumnName="id" )
     */
     protected $state_entity;
	
    /**
     * @var integer
     * @ORM\ManyToOne(targetEntity="state", inversedBy="Account")
     * @ORM\JoinColumn(name="state_id", referencedColumnName="id")
     * @ORM\Column(name="state_id", type="integer")
     */
    private $stateId;

    /**
     * @var string
     *
     * @ORM\Column(name="zip_code", type="string", length=10)
     */
    private $zipCode;

    /**
     * @var string
     *
     * @ORM\Column(name="primary_phone", type="string", length=20)
     */
    private $primaryPhone;

    /**
     * @var string
     *
     * @ORM\Column(name="secondary_phone", type="string", length=20, nullable = true)
     */
    private $secondaryPhone;

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
     * @ORM\Column(name="modified_date", type="datetime", nullable = true)
     */
    private $modifiedDate;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=200)
     */
    private $email;

    /**
     * @var integer
     *
     * @ORM\Column(name="state_format", type="smallint" , nullable = true)
     */
    private $stateFormat;

    /**
     * @var integer
     *
     * @ORM\Column(name="kr_was_clients", type="smallint", nullable = true)
     */
    private $krWasClients;

    /**
     * @var integer
     *
     * @ORM\Column(name="reseller_id", type="smallint", options={"default" = 0} )
     */
    private $resellerId;

     /**
     * @var string
     *
     * @ORM\Column(name="account_setting", type="text", nullable = true)
     */
    private $accountSetting;
    
    /**
     * @var integer
     *
     * @ORM\Column(name="account_logo", type="string", length = 255, nullable = true)
     */
    private $logo;
	
	
	/**
    * @Assert\File(maxSize="6000000000")
    */
    private $file;
	
	 /**
     * @var integer
     *
     * @ORM\Column(name="theme_setting", type="text" , nullable = true)
     */
    private $themeSetting;
	

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
     * @return account
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
     * @return account
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
     * Set address2
     *
     * @param string $address2
     * @return account
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
     * Set city
     *
     * @param string $city
     * @return account
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
     * Set stateId
     *
     * @param integer $stateId
     * @return account
     */
    public function setStateId($stateId)
    {
        $this->stateId = $stateId;

        return $this;
    }

    /**
     * Get stateId
     *
     * @return integer 
     */
    public function getStateId()
    {
        return $this->stateId;
    }

    /**
     * Set zipCode
     *
     * @param string $zipCode
     * @return account
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
     * Set primaryPhone
     *
     * @param string $primaryPhone
     * @return account
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
     * Set secondaryPhone
     *
     * @param string $secondaryPhone
     * @return account
     */
    public function setSecondaryPhone($secondaryPhone)
    {
        $this->secondaryPhone = $secondaryPhone;

        return $this;
    }

    /**
     * Get secondaryPhone
     *
     * @return string 
     */
    public function getSecondaryPhone()
    {
        return $this->secondaryPhone;
    }

    /**
     * Set status
     *
     * @param integer $status
     * @return account
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
     * @return account
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
     * @return account
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
     * Set email
     *
     * @param string $email
     * @return account
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
     * Set stateFormat
     *
     * @param integer $stateFormat
     * @return account
     */
    public function setStateFormat($stateFormat)
    {
        $this->stateFormat = $stateFormat;

        return $this;
    }

    /**
     * Get stateFormat
     *
     * @return integer 
     */
    public function getStateFormat()
    {
        return $this->stateFormat;
    }

    /**
     * Set krWasClients
     *
     * @param integer $krWasClients
     * @return account
     */
    public function setKrWasClients($krWasClients)
    {
        $this->krWasClients = $krWasClients;

        return $this;
    }

    /**
     * Get krWasClients
     *
     * @return integer 
     */
    public function getKrWasClients()
    {
        return $this->krWasClients;
    }

    /**
     * Set resellerId
     *
     * @param integer $resellerId
     * @return account
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

    /**
     * Set state_entity
     *
     * @param \Users\UserManageBundle\Entity\state $stateEntity
     * @return account
     */
    public function setStateEntity(\Users\UserManageBundle\Entity\state $stateEntity = null)
    {
        $this->state_entity = $stateEntity;

        return $this;
    }

    /**
     * Get state_entity
     *
     * @return \Users\UserManageBundle\Entity\state 
     */
    public function getStateEntity()
    {
        return $this->state_entity;
    }

    /**
     * Set logo
     *
     * @param string $logo
     * @return account
     */
    public function setLogo($logo)
    {
        $this->logo = $logo;

        return $this;
    }

    /**
     * Get logo
     *
     * @return string 
     */
    public function getLogo()
    {
        return $this->logo;
    }
	
	
	 /**
     * Sets file.
     *
     * @param UploadedFile $file
     */
    public function setFile(UploadedFile $file = null)
    {
       
        $this->file = $file;
        return $this;
    }

    /**
     * Get file.
     *
     * @return UploadedFile
     */
    public function getFile()
    {
       
       return $this->file;
    }
	
	public function getUploadRootDir($id, $usertype)
    {
        // the absolute directory path where uploaded
        // documents should be saved
        return __DIR__.'/../../../../web/'.$this->getUploadDir($id, $usertype);
    }

    public function getUploadDir($id, $usertype)
    {
	     $folder = $usertype == 1 ? 'resellers' : 'agents' ;
        // when displaying uploaded in the view.
        return 'bundles/UsersUserManage/images/'.$folder.'/'.$id;
    }
	

	 public function upload($file, $id, $usertype)
    {
        $file_system = new Filesystem();
		try{
		   $folder = $usertype == 1 ? 'resellers' : 'agents' ;
		   $directory =  __DIR__.'/../../../../web/bundles/UsersUserManage/images/'.$folder ;
		   if( !file_exists($directory) && !is_dir($directory) ) {
		      $file_system->mkdir(  $directory );
		   }
        $file_system->mkdir( $this->getUploadRootDir($id,  $usertype) );
		}catch(\Exception $e) {
		   $logger = $this->get( 'logger' );           
           $logger->error( $e->getMessage() );
		}
        // compute a random name and try to guess the extension (more secure)
      /*  $extension = $file->guessExtension();          
        if (!$extension) {
            // extension cannot be guessed
            $extension = 'bin';
        }*/
        // move takes the target directory and then the
        // target filename to move to
      
        $file->move(
               $this->getUploadRootDir($id,  $usertype),
               $file->getClientOriginalName()
        );
        
        // clean up the file property as you won't need it anymore
        $this->file = null;
    }

    /**
     * Set themeSetting
     *
     * @param string $themeSetting
     * @return account
     */
    public function setThemeSetting($themeSetting)
    {
        $this->themeSetting = $themeSetting;

        return $this;
    }

    /**
     * Get themeSetting
     *
     * @return string 
     */
    public function getThemeSetting()
    {
        return $this->themeSetting;
    }

    /**
     * Set accountSetting
     *
     * @param string $accountSetting
     * @return account
     */
    public function setAccountSetting($accountSetting)
    {
        $this->accountSetting = $accountSetting;

        return $this;
    }

    /**
     * Get accountSetting
     *
     * @return string 
     */
    public function getAccountSetting()
    {
        return $this->accountSetting;
    }
}
