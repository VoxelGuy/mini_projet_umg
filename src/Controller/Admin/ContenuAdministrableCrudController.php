<?php

namespace App\Controller\Admin;

use App\Entity\ContenuAdministrable;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;

class ContenuAdministrableCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return ContenuAdministrable::class;
    }

    
    public function configureFields(string $pageName): iterable
    {
        return [
            TextField::new('Titre'),
            TextEditorField::new('Description'),
        ];
    }

    public function configureCrud(Crud $crud): Crud
    {
        return $crud
            // the labels used to refer to this entity in titles, buttons, etc.
            ->setEntityLabelInSingular('Contenu administrable')
            ->setEntityLabelInPlural('Contenus administrables')
        ;
    }
    
}
