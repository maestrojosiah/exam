<?php 

namespace AppBundle\Form;

use AppBundle\Entity\ExamCompany;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use App\Entity\User;
use Doctrine\ORM\EntityRepository;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;

class ExamCompanyType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
		$examCompany = $options['data'];
		$user = $examCompany->getUser();		

        $builder
            ->add('c_title', TextType::class, array('label' => false))
			->add('class', EntityType::class, array(
				'label' => false,
				'class' => 'AppBundle:Classs',
				'choices' => $user->getClasses()
			))            
			->add('saveAndAdd', SubmitType::class, array(
                'label' => "Save and Add More"
            ))
            ->add('save', SubmitType::class, array(
                'label' => "Save ExamCompany"
            ))

        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => ExamCompany::class,
        ));
    }
}