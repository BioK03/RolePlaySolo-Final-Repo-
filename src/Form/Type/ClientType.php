<?php

namespace RolePlaySolo\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class ClientType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
		$builder->add('pseudo', 'text');
		$builder->add('username', 'email');
		$builder->add('address', 'text');
		$builder->add('cp', 'integer');
        $builder->add('city', 'text');
    }

    public function getName()
    {
        return 'client';
    }
}