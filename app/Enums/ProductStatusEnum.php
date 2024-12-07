<?php 

namespace App\Enums;

/**
 * Enum ProductStatusEnum defines the current status of a product
 * @return string Current Product status
 */
enum ProductStatusEnum: string
{
    case ENABLED = 'Enabled';
    case DISABLED = 'Disabled';
    case DRAFT = 'Draft';
}

?>