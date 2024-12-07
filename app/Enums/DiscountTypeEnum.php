<?php 

namespace App\Enums;

/**
 * Enum DiscountTypeEnum defines if the discount given is applied in a given value or a percentage
 * @return string Type of discount applied
 */
enum DiscountTypeEnum: string
{
    case PERCENTAGE = 'percentage';
    case VALUE = 'value';
}

?>