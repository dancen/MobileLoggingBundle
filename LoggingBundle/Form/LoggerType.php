<?php

namespace Mobile\LoggingBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;

class LoggerType extends AbstractType
{
    public function buildForm(FormBuilder $builder, array $options)
    {
        $builder
            ->add('log_url')
            ->add('log_level')
            ->add('log_ipaddress')
            ->add('log_sid')
            ->add('log_commcode')
            ->add('log_stage')
            ->add('log_message')
            ->add('created_at')
        ;
    }

    public function getName()
    {
        return 'mobile_loggingbundle_loggertype';
    }
}
