<?php 

namespace App\Enums;

enum ProductStatusEnum: string
{
    case ENABLED = 'Enabled';
    case DISABLED = 'Disabled';
    case DRAFT = 'Draft';
}

?>