<?php

namespace App\Controller\Admin;

use App\Entity\Supports;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;

class SupportsCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Supports::class;
    }

    
    public function configureFields(string $pageName): iterable
    {
        return [
            TextField::new('title', 'Titre'),
            TextField::new('icon', 'Icone'),
            TextEditorField::new('description', 'Description'),
        ];
    }
    
}
