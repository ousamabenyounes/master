<?php

namespace Users\usermanageBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\HttpFoundation\File\UploadedFile;

/**
 * resellerlogo
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Users\usermanageBundle\Entity\resellerlogoRepository")
 */
class resellerlogo
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
     * @ORM\Column(name="reseller_id", type="smallint")
     */
    private $resellerId;

    /**
     * @var string
     *
     * @ORM\Column(name="new_name", type="string", length=255)
     */
    private $newName;

    /**
     * @var string
     *
     * @ORM\Column(name="real_name", type="string", length=255)
     */
    private $realName;


    /**
    * @Assert\File(maxSize="6000000000")
    */
    private $file;
    
    
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
     * Set resellerId
     *
     * @param integer $resellerId
     * @return resellerlogo
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
     * Set newName
     *
     * @param string $newName
     * @return resellerlogo
     */
    public function setNewName($newName)
    {
        $this->newName = $newName;

        return $this;
    }

    /**
     * Get newName
     *
     * @return string 
     */
    public function getNewName()
    {
        return $this->newName;
    }

    /**
     * Set realName
     *
     * @param string $realName
     * @return resellerlogo
     */
    public function setRealName($realName)
    {
        $this->realName = $realName;

        return $this;
    }

    /**
     * Get realName
     *
     * @return string 
     */
    public function getRealName()
    {
        return $this->realName;
    }
    
   /*  public function getAbsolutePath()
    {
        return null === $this->path
            ? null
            : $this->getUploadRootDir().'/'.$this->path;
    } */
    
      protected function getUploadRootDir()
    {
        // the absolute directory path where uploaded
        // documents should be saved
        return __DIR__.'/../../../../web/'.$this->getUploadDir();
    }

    protected function getUploadDir()
    {
        // when displaying uploaded in the view.
        return 'bundles/Usersusermanage/reseller_logo';
    }
    
    /**
     * Sets file.
     *
     * @param UploadedFile $file
     */
    public function setFile(UploadedFile $file = null)
    {
        echo '==='.$file.'===';
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
       
        echo  '!!'. $this->file.'!!'; 
        return $this->file;
    }
    
    public function upload()
    {
       // the file property can be empty if the field is not required
        if (null === $this->getFile()) {
           echo '111';
            return;
        }
        echo '222';
        // compute a random name and try to guess the extension (more secure)
          $extension = $file->guessExtension();
          if (!$extension) {
              // extension cannot be guessed
              $extension = 'bin';
          }
        // move takes the target directory and then the
        // target filename to move to
        $this->getFile()->move(
               $this->getUploadRootDir(),
               rand(1, 99999).'.'.$extension
        );
        
        // clean up the file property as you won't need it anymore
        $this->file = null;
    }

}
