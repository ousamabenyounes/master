<?php

namespace Users\UserManageBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * state
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Users\UserManageBundle\Entity\stateRepository")
 */
class state
{
    /**
    * @ORM\OneToMany( targetEntity="account", mappedBy="state_entity",  cascade={"ALL"}, orphanRemoval=true )
    */
    protected $Account;
	
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
     * @return state
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
    
}
