<?php

namespace Users\UsermanageBundle\Form;

use Symfony\Component\Validator;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;


class ResellerLogoInfo extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
      {
	       $myEntity = $builder->getForm()->getData();
          $builder->add('file', 'comur_image', 
                      array( //'required' => false,  
                             //'label'  => 'Reseller Logo',
                              'uploadConfig' => array(
                                                   'uploadUrl' => $myEntity->getUploadRootDir(),
												   'webDir'    => $myEntity->getUploadDir(),
												   'fileExt'   => '*.jpg;*.gif;*.png;*.jpeg',
							  
							  ),
							   'cropConfig' => array(
								'minWidth' => 188,
								'minHeight' => 300,
								'aspectRatio' => true,              //optional
								'forceResize' => false,             //optional
								'thumbs' => array(                  //optional
									array(
										'maxWidth' => 180,
										'maxHeight' => 400,
										'useAsFieldImage' => true  //optional
									)
								)
							)
					));
                      
          $builder->add('Submit', 'submit', array('attr' => array('class' => 'btn btn-large btn-login'))
                      );
      }
     
     
     public function getName()
      {
          //return 'contact';
      }
}