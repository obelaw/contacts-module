<?php

use Obelaw\Contacts\Models\Contact;
use Obelaw\Framework\Builder\Build\Grid\{
    CTA,
    Table,
    Bottom
};

return new class
{
    public function model()
    {
        return Contact::class;
    }

    public function createBottom(Bottom $bottom)
    {
        $bottom->setBottom('Create new contact', 'obelaw.contacts.contacts.create');
    }

    public function table(Table $table)
    {
        $table->setColumn('Type', 'type')
            ->setColumn('Name', 'name')
            ->setColumn('Mobile', 'mobile');
    }

    public function CTA(CTA $CTA)
    {
        $CTA->setCall('Edit', [
            'type' => 'route',
            'route' => 'obelaw.catalog.products.update',
        ]);
    }
};
