<?php

namespace App\Controller\Admin;

use App\Entity\ReseauSocial;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;

class ReseauSocialCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return ReseauSocial::class;
    }

    
    public function configureFields(string $pageName): iterable
    {
        return [
            TextField::new('name', 'Name'),
            TextField::new('icon', 'Icone'),
        ];
    }
    
}
