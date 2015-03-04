<?php

namespace Users\UserManageBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * email_templates
 *
 * @ORM\Table(name="email_templates", options={"comment":"Default templetes for Emails"})
 * @ORM\Entity(repositoryClass="Users\UserManageBundle\Entity\email_templatesRepository")
 */
class email_templates
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
     * @ORM\Column(name="subject", type="text",  options={"comment":"The string to show in the subject of email"})
     */
    private $subject;

    /**
     * @var string
     *
     * @ORM\Column(name="content", type="text" ,  options={"comment":"The string to show in the content of email"})
     */
    private $content;

    /**
     * @var integer
     *
     * @ORM\Column(name="account_id", type="integer" ,  options={"comment":"The account id who set the template"})
     */
    private $accountId;

    /**
     * @var integer
     *
     * @ORM\Column(name="created_by", type="integer" ,  options={"comment":"The id who set the template"})
     */
    private $createdBy;

    /**
     * @var integer
     *
     * @ORM\Column(name="status", type="smallint",  options={"comment":"0 for inactive and 1 for active"} )
     */
    private $status;


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
     * Set subject
     *
     * @param string $subject
     * @return email_templates
     */
    public function setSubject($subject)
    {
        $this->subject = $subject;

        return $this;
    }

    /**
     * Get subject
     *
     * @return string 
     */
    public function getSubject()
    {
        return $this->subject;
    }

    /**
     * Set content
     *
     * @param string $content
     * @return email_templates
     */
    public function setContent($content)
    {
        $this->content = $content;

        return $this;
    }

    /**
     * Get content
     *
     * @return string 
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * Set accountId
     *
     * @param integer $accountId
     * @return email_templates
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
     * Set createdBy
     *
     * @param integer $createdBy
     * @return email_templates
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
     * Set status
     *
     * @param integer $status
     * @return email_templates
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
}
