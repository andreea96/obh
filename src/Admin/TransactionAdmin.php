<?php
/**
 * Created by PhpStorm.
 * User: Andreea
 * Date: 9/15/2019
 * Time: 1:19 PM
 */

namespace App\Admin;

use Sonata\AdminBundle\Admin\AbstractAdmin;

final class TransactionAdmin extends TransactionAdmin extends
{
    protected
    function configureFormFields(FormMapper $formMapper)
    {
        $formMapper->add('valoare', TextType::class);
    }

    protected
    function configureListFields(ListMapper $listMapper)
    {
        $listMapper->addIdentifier('idTranzactie')
            ->add('dataCerere')
            ->add('dataFinalizare')
            ->add('valoare')
            ->add('status');
    }
}