<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Ivory\CKEditorBundle\Form\Type\CKEditorType;
use AppBundle\Entity\Config;
use Symfony\Component\Form\Extension\Core\Type\FileType;

class ConfigType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('sch_name', TextType::class)
            ->add('address', TextType::class)
            ->add('telephone', TextType::class)
			->add('results_per_page', ChoiceType::class, array(
			    'choices'  => array(
			        '10' => 10,
			        '25' => 25,
			        '50' => 50,
			        '100' => 100,
			    ),
			))
			->add('letterhead_height', ChoiceType::class, array(
			    'choices'  => array(
			        '150px' => 150,
			        '180px' => 180,
			        '200px' => 200,
			        '220px' => 220,
			        '250px' => 250,
			        '280px' => 280,
			        '300px' => 300,
			    ),
			))
			->add('tour_guide', ChoiceType::class, array(
			    'choices'  => array(
			        'On' => 'on',
			        'Off' => 'off',
			    ),
			))
			->add('title_display', ChoiceType::class, array(
			    'choices'  => array(
			        'Basic Info Text' => 'txt',
              'Letterhead Image' => 'img',
			    ),
			))
            ->add('letterhead', FileType::class, array('label' => 'jpg or png image', 'data_class' => null))
            ->add('save', SubmitType::class, array(
            	'label' => "Save Settings"
            ))
        ;
    }
// ...


    public function configureOptions(OptionsResolver $resolver)
	{
	    $resolver->setDefaults(array(
	        'data_class' => Config::class,
        	'validation_groups' => false,
	    ));
	}

}
