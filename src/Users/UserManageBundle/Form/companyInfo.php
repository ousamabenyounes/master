<?php

namespace Users\UsermanageBundle\Form;

use Symfony\Component\Validator;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormEvents;

class CompanyInfo extends AbstractType
{

private $states;
private $id;
private $user_type;
public function __construct( $states, $id, $user_type )
{
   $this->states = array();
   foreach( $states as $key=>$values) {
   
     foreach($values as $keys=> $state_value) {
    
     $this->states[] = $state_value;
     $this->id = $id;
	 $this->user_type = $user_type;
     }
  }

}
   
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
		if ($this->user_type == 2  && empty($this->id) ) {
		  $builder->add('state_format', 'choice',
							array(
								  'choices' => array(
								                     '0' => 'US only (State) ',
										     '1' => 'US/Canada (State/Province)',
													),
								 'expanded' => true,
								 'multiple' => false,
								 //'data' => 0,
								 
							));
						  
		
		 $builder->add('kr_was_clients', 'choice',
							array(
								  'choices' => array(
                                                                                    '0' => 'WAS Clients',
                                                                                    '1' => ' KR Clients',
													 
													),
								 'expanded' => true,
								 'multiple' => false,
								 //'data' => 0,
								 
							));
		}
		
        $builder->add('name', 'text', 
                      array( 'required'    => false,  
                             'label'       => 'Company Name',
                             'attr'        => array( 'placeholder' => 'Company Name',
                             
                                                   ),
                       ));
        
        $builder->add('status', 'checkbox', 
                      array( 'required' => false,  
                             'label'  => 'Account Status',
                             'attr' => array( 'checked' => 'checked'),
                      ));
                      
 
         $builder->add('address', 'text',
                      array( 'required' => false,
                             'label'    => 'Address',
                             'attr'     => array( 'placeholder' => 'Address',
                             
                                                 ),
                      ));
       
                      
         $builder->add('address2', 'text', 
                        array( 'required' => false,
                               'label'  => 'Address Line2',
                               'attr'     => array( 'placeholder' => 'Address Line 2',
                             
                                                   ),
                              )); 
                      
         $builder->add('city', 'text',
                        array( 'required' => false,
                               'label'  => 'City',
                                'attr'     => array( 'placeholder' => 'City',
                             
                                                   ),
                             
                        ));
        
        $builder->add('zip_code', 'text',
                        array( 'required' => false,
                               'label'  => 'Zip Code',
                               'attr'     => array( 'placeholder' => 'Zip Code',
                             
                                                   ),
                             
                        ));        
        
      $builder->add('email', 'text',
                        array( 'required' => false,
                               'label'  => 'Email',
                               'attr'     => array( 'placeholder' => 'Email',
                             
                                                   ),
                             
                        ));            
                  
      $builder->add('primary_phone', 'text',
                        array( 'required' => false,
                               'label'  => 'Primary Phone',
                               'attr'     => array( 'placeholder' => 'Primary phone',
                             
                                                   ),
                             
                        ));              
       
      $builder->add('secondary_phone', 'text',
                        array( 'required' => false,
                               'label'  => 'Phone',
                               'attr'     => array( 'placeholder' => 'Secondary phone',
                             
                                                   ),
                             
                        ));
                        
     $builder->add('state_id', 'choice', 
                       array('choices'=> $this->states,
                             'label' =>  'State'  ,    
                  ));
				  
	 $builder->add('file', 'file', 
                      array( 'required' => false,  
                             'label'  => 'Account Logo',
                             
                            ));			  
       
     $builder->add('id', 'hidden', array( 'required' => false,
                   )); 
		  if( $this->id ) {
		   $builder->add('Edit', 'submit', array('attr' => array('class' => 'btn btn-large btn-login'))
                      );
    }else {		  
       $builder->add('Save', 'submit', array('attr' => array('class' => 'btn btn-large btn-login'))
                      );
      }   
    }

    public function getName()
    {
        //return 'contact';
    }
}
