<?php

namespace Users\UserManageBundle\Form;

use Symfony\Component\Validator;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

use Users\UserManageBundle\Entity\users;
use Doctrine\Common\Persistence\ObjectManager;

class ResellerInfo extends AbstractType
{
   
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('salutation', 'choice', 
                       array('choices'=> array(
                                                 '0'    => '---SELECT---',
                                                 'Mr'   => 'Mr',
                                                 'Dr'   => 'Dr',
                                                 'Mrs'  => 'Mrs',
                                                 'Miss' => 'Miss',
                                                 
                                               ),
                             //'data' => '0'             
                      ));
        
        $builder->add('first_name', 'text', 
                      array( 'required' => false,  
                             'label'  => 'First Name',
                             
                      ));
        $builder->add('username', 'text',
                      array( 'required' => false, 
                      ));
       
        $builder->add('last_name', 'text',
                      array( 'required' => false,
                             'label'  => 'Last Name',
                      ));
        $builder->add('password', 'password',
                      array( 'required' => false,
                      ));
                      
        $builder->add('status', 'choice', 
                        array('choices'=>array(
                                               '1'  =>  'Active',
                                               '0'  =>  'Inactive',
                                               
                                              ) ,  
                            //  'data' => '1'                               
                      )); 
                      
        $builder->add('id', 'hidden', array( 'required' => false,
                      ));
                      
        $builder->add('account_type', 'choice', 
                        array('choices'=>array(
                                              
                                               '1'  =>  'APGDB',
                                               '2'  =>  'NAEA',
                                               '3'  =>  'Others',
                                               
                                              ) ,  
                             //'data' => '1'                               
                      )); 
                      
        $builder->add('is_test_account', 'choice',
                        array('choices' => array(
                                                 '0' => 'No',
                                                 '1' => 'Yes',
                                                ),
                             'expanded' => true,
                                              
                        ));
						
		$builder->add('email', 'text',
                       array( 'required' => false,
                      ));
                        
        $builder->add('Submit', 'submit', array('attr' => array('class' => 'btn btn-large btn-login'))
                      );
        
    }

    public function getName()
    {
        //return 'contact';
    }
}
