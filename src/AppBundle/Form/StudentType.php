<?php 

namespace AppBundle\Form;

use AppBundle\Entity\Student;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use App\Entity\User;
use Doctrine\ORM\EntityRepository;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;

class StudentType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
		$student = $options['data'];
		$user = $student->getUser();		

        $builder
            ->add('names', TextType::class, array('label' => false))
            ->add('upi_number', TextType::class, array('label' => false))
            ->add('gender', ChoiceType::class, array(
                'choices' => array(
                    'Male' => 'm',
                    'Female' => 'f',
                ),
                'label' => false,
            ))
			->add('class', EntityType::class, array(
				'label' => false,
				'class' => 'AppBundle:Classs',
				'choices' => $user->getClasses()
			))            
			->add('saveAndAdd', SubmitType::class, array(
                'label' => "Save and Add More"
            ))
            ->add('save', SubmitType::class, array(
                'label' => "Save Student"
            ))

        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => Student::class,
        ));
    }
}