<?php

namespace Obelaw\Contacts\Livewire\Contacts;

use Obelaw\Framework\ACL\Attributes\PermissionAccess;
use Obelaw\Framework\Base\GridBase;

#[PermissionAccess('contacts_contacts_index')]
class IndexContactsComponent extends GridBase
{
    public $gridId = 'obelaw_helper_contacts_contacts_index';

    protected $pretitle = 'Contacts';
    protected $title = 'Contacts Listing';
}
