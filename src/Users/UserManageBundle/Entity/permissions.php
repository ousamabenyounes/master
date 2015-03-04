<?php

namespace Users\UserManageBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * permissions
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Users\UserManageBundle\Entity\permissionsRepository")
 */
class permissions
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
     * @ORM\Column(name="user_id", type="smallint")
     */
    private $userId;

    /**
     * @var integer
     *
     * @ORM\Column(name="user_type", type="smallint")
     */
    private $userType;

    /**
     * @var string
     *
     * @ORM\Column(name="permission", type="text")
     */
    private $permission;


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
     * Set userId
     *
     * @param integer $userId
     * @return permissions
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;

        return $this;
    }

    /**
     * Get userId
     *
     * @return integer 
     */
    public function getUserId()
    {
        return $this->userId;
    }

    /**
     * Set userType
     *
     * @param integer $userType
     * @return permissions
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
     * Set permission
     *
     * @param string $permission
     * @return permissions
     */
    public function setPermission($permission)
    {
        $this->permission = $permission;

        return $this;
    }

    /**
     * Get permission
     *
     * @return string 
     */
    public function getPermission()
    {
        return $this->permission;
    }
}
