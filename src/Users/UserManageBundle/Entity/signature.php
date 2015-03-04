<?php

namespace Users\UserManageBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * signature
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Users\UserManageBundle\Entity\signatureRepository")
 */
class signature
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
     * @var integer
     *
     * @ORM\Column(name="account_id", type="integer", nullable= true)
     */
    private $accountId;

    /**
     * @var string
     *
     * @ORM\Column(name="signature", type="string", length=255, nullable= true)
     */
    private $signature;

    /**
     * @var integer
     *
     * @ORM\Column(name="user_type", type="integer", nullable= true)
     */
    private $userType;

    /**
     * @var integer
     *
     * @ORM\Column(name="created_by", type="integer", nullable= true)
     */
    private $createdBy;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="created_at", type="datetime", nullable= true)
     */
    private $createdAt;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="modified_at", type="datetime", nullable= true)
     */
    private $modifiedAt;

    /**
     * @var string
     *
     * @ORM\Column(name="signature_title", type="string", nullable= true)
     */
    private $signatureTitle;

    /**
     * @var integer
     *
     * @ORM\Column(name="signature_status", type="smallint", nullable= true)
     */
    private $signatureStatus;


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
     * Set id
     *
     * @param integer $id
     * @return integer
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }
    
    /**
     * Set accountId
     *
     * @param integer $accountId
     * @return signature
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
     * Set signature
     *
     * @param string $signature
     * @return signature
     */
    public function setSignature($signature)
    {
        $this->signature = $signature;

        return $this;
    }

    /**
     * Get signature
     *
     * @return string 
     */
    public function getSignature()
    {
        return $this->signature;
    }

    /**
     * Set userType
     *
     * @param integer $userType
     * @return signature
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
     * Set createdBy
     *
     * @param integer $createdBy
     * @return signature
     */
    public function setCreatedBy($createdBy)
    {
        $this->createdBy = $createdBy;

        return $this;
    }

    /**
     * Get createdBy
     *
     * @return integer 
     */
    public function getCreatedBy()
    {
        return $this->createdBy;
    }

    /**
     * Set createdAt
     *
     * @param \DateTime $createdAt
     * @return signature
     */
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    /**
     * Get createdAt
     *
     * @return \DateTime 
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * Set modifiedAt
     *
     * @param \DateTime $modifiedAt
     * @return signature
     */
    public function setModifiedAt($modifiedAt)
    {
        $this->modifiedAt = $modifiedAt;

        return $this;
    }

    /**
     * Get modifiedAt
     *
     * @return \DateTime 
     */
    public function getModifiedAt()
    {
        return $this->modifiedAt;
    }

    /**
     * Set signatureTitle
     *
     * @param string $signatureTitle
     * @return signature
     */
    public function setSignatureTitle($signatureTitle)
    {
        $this->signatureTitle = $signatureTitle;

        return $this;
    }

    /**
     * Get signatureTitle
     *
     * @return string 
     */
    public function getSignatureTitle()
    {
        return $this->signatureTitle;
    }

    /**
     * Set signatureStatus
     *
     * @param integer $signatureStatus
     * @return signature
     */
    public function setSignatureStatus($signatureStatus)
    {
        $this->signatureStatus = $signatureStatus;

        return $this;
    }

    /**
     * Get signatureStatus
     *
     * @return integer 
     */
    public function getSignatureStatus()
    {
        return $this->signatureStatus;
    }
}
