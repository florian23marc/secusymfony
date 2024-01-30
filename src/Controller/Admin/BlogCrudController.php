<?php

namespace App\Controller\Admin;

use App\Entity\Blog;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IntegerField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ImageField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class BlogCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Blog::class;
    }

    
    public function configureFields(string $pageName): iterable
    {
        return [
            TextField::new('title', 'Titre'),
            TextField::new('subtitle', 'Sous-titre'),
            ImageField::new('illustration', 'Image')
                ->setBasePath('uplaod/')
                ->setUploadDir('public/uploads')
                ->setUploadedFileNamePattern('[randomhash].[extension]'),
            TextField::new('illustration_title', 'ImageTitle'),
            TextField::new('icon_link', 'LienIcone'),
            /*IntegerField::new('author_id', 'IDAuteur'),*/
            TextField::new('author_icon', 'IconeAuteur'),
            /*TextEditorField::new('message', 'Message'),*/
            TextField::new('category', 'Cathegorie'),
            TextField::new('icon_category', 'IconeCathegorie'),

            
        ];
    }
    
}
