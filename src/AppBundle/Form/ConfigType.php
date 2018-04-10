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
	    ));
	}

}