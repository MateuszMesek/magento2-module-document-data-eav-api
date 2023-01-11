<?php declare(strict_types=1);

namespace MateuszMesek\DocumentDataEavApi\Model;

use Magento\Eav\Api\Data\AttributeInterface;
use MateuszMesek\DocumentDataApi\Model\InputInterface;

interface AttributeValueResolverInterface
{
    /**
     * @param \Magento\Eav\Api\Data\AttributeInterface $attribute
     * @param \MateuszMesek\DocumentDataApi\Model\InputInterface $input
     * @return mixed
     */
    public function resolver(AttributeInterface $attribute, InputInterface $input): mixed;
}
