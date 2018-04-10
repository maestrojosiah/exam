<?php 

namespace AppBundle\Form;

use AppBundle\Entity\ChildSubject;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use App\Entity\User;
use Doctrine\ORM\EntityRepository;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;

class ChildSubjectType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
		$childSubject = $options['data'];
		$user = $childSubject->getUser();		

        $builder
            ->add('c_s_title', TextType::class, array('label' => false))
            ->add('out_of', TextType::class, array('label' => false))
			->add('subject', EntityType::class, array(
				'label' => false,
				'class' => 'AppBundle:Subject',
				'choices' => $user->getSubjects()
			))            
			->add('saveAndAdd', SubmitType::class, array(
                'label' => "Save and Add More"
            ))
            ->add('save', SubmitType::class, array(
                'label' => "Save ChildSubject"
            ))

        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => ChildSubject::class,
        ));
    }
}