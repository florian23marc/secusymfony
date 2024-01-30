<?php

namespace App\Controller\Admin;

use App\Entity\PersonnelReseauSocial;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IntegerField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class PersonnelReseauSocialCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return PersonnelReseauSocial::class;
    }

    
    public function configureFields(string $pageName): iterable
    {
        return [
            IntegerField::new('personnel_id', 'Identifiant personnel'),
            IntegerField::new('reseau_social_id', 'Identifiant réseau social'),
            TextField::new('url', 'URL'),
        ];
    }
    
}
