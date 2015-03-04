<?php

namespace Users\UserManageBundle\Form;

use Symfony\Component\Validator;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class ContactType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        
        $builder->add('username', 'text', array( 'required'        => false,
                                                 'attr' => array( 'class'      => 'input-block-level', 
                                                                  'placeholder'=> 'Email address',
                                                               
                                                                 )
                                                )
                      );
        $builder->add('password', 'password', array( 'required' => false,
                                                      'attr' => array( 'class'      => 'input-block-level', 
                                                                       'placeholder'=> 'Password',
                                                                      )
                                                    )                  
                      );
        
        $builder->add('Login', 'submit', array(
                                               'attr' => array('class' => 'btn btn-large btn-login'
                                                               )
                                              )
                      );
        
    }

    public function getName()
    {
        //return 'contact';
    }
}
