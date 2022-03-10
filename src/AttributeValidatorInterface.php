<?php declare(strict_types=1);

namespace MateuszMesek\DocumentDataEavApi;

use Magento\Eav\Api\Data\AttributeInterface;

interface AttributeValidatorInterface
{
    public function validate(AttributeInterface $attribute): bool;
}
