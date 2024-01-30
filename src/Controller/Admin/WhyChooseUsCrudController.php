<?php

namespace App\Controller\Admin;

use App\Entity\WhyChooseUs;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ImageField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class WhyChooseUsCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return WhyChooseUs::class;
    }

    
    public function configureFields(string $pageName): iterable
    {
        return [
            TextField::new('title', 'Titre'),
            TextField::new('subtitle', 'Sous-titre'),
            TextField::new('illustration', 'Image'),
            //TextEditorField::new('llustration_escription', 'Illustration et description'),
            TextField::new('button', 'Bouton'),
            TextField::new('icon', 'Icone'),
            TextField::new('category', 'category'),
            TextEditorField::new('description', 'description'),
        ];
    }
    
}
