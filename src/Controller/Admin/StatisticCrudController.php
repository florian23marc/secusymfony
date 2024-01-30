<?php

namespace App\Controller\Admin;

use App\Entity\Statistic;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IntegerField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class StatisticCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Statistic::class;
    }

    
    public function configureFields(string $pageName): iterable
    {
        return [
            TextField::new('category', 'Cathégorie'),
            TextField::new('icon', 'Icone'),
            IntegerField::new('value', 'Valeur'),
        ];
    }
    
}
