<?php

namespace Users\UsermanageBundle\Form;

use Symfony\Component\Validator;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormEvents;

class signatureinfo extends AbstractType
{
  private $id;
  public function __construct( $id )
  {
    $this->id = $id;
  }
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('signatureTitle', 'text',
                      array( 'required' => false,
                             'label'  => 'Signature Title',
                             
                      ));
    
		$builder->add('signature', 'ckeditor', array(
                'transformers'      => array(),                
                'toolbar'           => array('document', 'clipboard', 'editing', '/', 'basicstyles', 'paragraph', 'links', '/', 
                                                        'insert', 'styles', 'tools'),
                'toolbar_groups'    => array(
                                            'document'     => array('Source','-','Save','-','Templates'),
                                            'clipboard'    => array('Cut','Copy','Paste','PasteText','PasteFromWord','-','Undo','Redo'),
                                            'editing'      => array('Find','Replace','-','SelectAll'),
                                            'basicstyles'  => array('Bold','Italic','Underline','Strike','Subscript','Superscript','-','RemoveFormat'),
                                            'paragraph'    => array('NumberedList','BulletedList','-','Outdent',
                                                                  'Indent','-','JustifyLeft', 'JustifyCenter','JustifyRight','JustifyBlock'),
                                            'links'        => array('Link','Unlink','Anchor'),
                                            'insert'       => array('Image','Flash','Table','HorizontalRule'),
                                            'styles'       => array('Styles','Format'),
                                            'tools'        => array('Maximize', 'ShowBlocks'),

                ),
                'ui_color'                     => '#fff',
                'startup_outline_blocks'       => false,
                'width'                        => '100%',
                'height'                       => '320',
                'language'                     => 'en-au',
                'filebrowser_image_browse_url' => array(
                    'url' => 'relative-url.php?type=file',
                ),
                'filebrowser_image_browse_url' => array(
                    'route'            => 'manage_signature',
                    'route_parameters' => array(
                        'type' => 'image',
                    ),
                ),
                'required' => false,
                'label'    => 'Signature HTML',
                             
            )
         );

     $builder->add('id', 'hidden', array( 'required' => false,
                      ));            
                 
                 
    $builder->add('signatureStatus', 'choice', 
                       array('choices'=> array(
                                                 '1'    => 'Active',
                                                 '2'   => 'In Active',     
                                               ),
                             //'data' => '1'             
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
