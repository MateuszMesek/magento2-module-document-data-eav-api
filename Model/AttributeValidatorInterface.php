<?php declare(strict_types=1);

namespace MateuszMesek\DocumentDataEavApi\Model;

use Magento\Eav\Api\Data\AttributeInterface;

interface AttributeValidatorInterface
{
    /**
     * @param \Magento\Eav\Api\Data\AttributeInterface $attribute
     * @return bool
     */
    public function validate(AttributeInterface $attribute): bool;
}
