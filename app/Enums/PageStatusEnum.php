<?php 

namespace App\Enums;

/**
 * Enum ProductStatusEnum defines the current status of a product
 * @return string Current Product status
 */
enum PageStatusEnum: string
{
    case PUBLISHED = 'Published';
    case DISABLED = 'Disabled';
    case DRAFT = 'Draft';
}

?>