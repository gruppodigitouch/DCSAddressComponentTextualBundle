<?php

namespace DCS\AddressComponent\TextualBundle\Form\Type;

use DCS\AddressBundle\Component\ComponentManagerInterface;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class AddressTextualFormType extends AbstractType
{
    private $addressTextualManager;

    function __construct(ComponentManagerInterface $addressTextualManager)
    {
        $this->addressTextualManager = $addressTextualManager;
    }

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('address1', 'text', array(
                'required' => false,
                'label' => 'form.label.address1',
            ))
            ->add('address2', 'text', array(
                'required' => false,
                'label' => 'form.label.address2',
            ))
            ->add('city', 'text', array(
                'required' => false,
                'label' => 'form.label.city',
            ))
            ->add('province', 'text', array(
                'required' => false,
                'label' => 'form.label.province',
            ))
            ->add('zipCode', 'text', array(
                'required' => false,
                'label' => 'form.label.zip_code',
            ))
            ->add('country', 'country', array(
                'required' => false,
                'label' => 'form.label.country',
            ))
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => $this->addressTextualManager->getModelClass(),
        ));
    }

    public function getName()
    {
        return 'dcs_address_component_address_textual';
    }
}
