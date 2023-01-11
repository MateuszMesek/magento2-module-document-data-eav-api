<?php declare(strict_types=1);

namespace MateuszMesek\DocumentDataEavApi\Model;

use Magento\Eav\Api\Data\AttributeInterface;

interface AttributeReturnTypeResolverInterface
{
    /**
     * @param AttributeInterface $attribute
     * @param mixed $value
     * @return mixed
     */
    public function resolver(AttributeInterface $attribute, $value);
}
