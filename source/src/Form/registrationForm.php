<?php

namespace App\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;

class registrationForm extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('login',TextType::class);
        $builder->add('password',TextType::class);
        $builder->add('name',TextType::class);
        $builder->add('email',TextType::class);
        $builder->add('sex',TextType::class);
        $builder->add('age',IntegerType::class, [
                'label'=>'Age)',
        ]);
        

        $builder->add('Submit',SubmitType::class);
    }
};
