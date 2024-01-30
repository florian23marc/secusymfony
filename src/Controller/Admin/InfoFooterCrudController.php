<?php

namespace App\Controller\Admin;

use App\Entity\InfoFooter;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ImageField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class InfoFooterCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return InfoFooter::class;
    }

    
    public function configureFields(string $pageName): iterable
    {
        return [
            ImageField::new('logo_footer', 'Logo du footer')
                ->setBasePath('uplaod/')
                ->setUploadDir('public/uploads')
                ->setUploadedFileNamePattern('[randomhash].[extension]'),
            TextEditorField::new('content', 'Contenue'),
            TextField::new('title', 'Titre colonne'),
            TextField::new('ligne1', 'Ligne 1 dans la colonne'),
            TextField::new('ligne2', 'Ligne 2 dans la colonne'),
            TextField::new('ligne3', 'Ligne 3 dans la colonne'),
            
        ];
    }
    
}
