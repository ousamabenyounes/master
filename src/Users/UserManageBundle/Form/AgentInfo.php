<?php

namespace Users\UsermanageBundle\Form;

use Symfony\Component\Validator;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormEvents;

class AgentInfo extends AbstractType
{
  private $id;
  public function __construct( $id )
  {
    $this->id = $id;
  }
  
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
        
        $builder->add('title', 'text',
                      array( 'required' => false,
                             'label'  => 'Title',
                             'attr'     => array( 'placeholder' => 'Title',
                             
                                                 ),
                      ));
                      
        $builder->add('email', 'text',
                      array( 'required' => false,
                             'label'  => 'Email',
                             'attr'     => array( 'placeholder' => 'Email',
                             
                                                 ),
                      ));
        
        $builder->add('email2', 'text',
                      array( 'required' => false,
                             'label'  => 'Email2',
                             'attr'     => array( 'placeholder' => 'Email2',
                             
                                                 ),
                      ));
        
        $builder->add('primary_phone', 'text',
                      array( 'required' => false,
                             'label'  => 'Primary Phone',
                             'attr'     => array( 'placeholder' => 'Primary Phone',
                             
                                                 ),
                      )); 
                      
        $builder->add('phone2', 'text',
                      array( 'required' => false,
                             'label'  => 'Secondary Phone',
                             'attr'     => array( 'placeholder' => 'Secondary Phone',
                             
                                                 ),
                      ));                       
        
        $builder->add('first_name', 'text', 
                      array( 'required' => false,  
                             'label'  => 'First Name',
                             'attr'     => array( 'placeholder' => 'First Name',
                             
                                                 ),
                             
                      ));
                      
            if( empty( $this->id ) ) {    
             $builder->add('username', 'text',
                        array( 'required' => false,
                               'attr'     => array( 'placeholder' => 'User Name',
                               
                                                   ),                      
                        )); 
                        
            $builder->add('password', 'password',
                        array( 'required' => false,
                        'attr'     => array( 'placeholder' => 'Password',
                               
                                            ),  
                        ));
           } 
      
      
       
         $builder->add('last_name', 'text',
                      array( 'required' => false,
                             'label'  => 'Last Name',
                             'attr'     => array( 'placeholder' => 'Last Name',
                             
                                          ),  
                      ));
       
       
         $builder->add('id', 'hidden', array( 'required' => false,
                      ));            
                 
        if( $this->id ) {
         $builder->add('Edit', 'submit', array('attr' => array('class' => 'btn btn-large btn-login'))
                      );
  } else{    
        $builder->add('Save', 'submit', array('attr' => array('class' => 'btn btn-large btn-login'))
                      );
        }
    }

    
    
    public function getName()
    {
        //return 'contact';
    }
}
