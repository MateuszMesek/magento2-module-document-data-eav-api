<?php declare(strict_types=1);

namespace MateuszMesek\DocumentDataEavApi;

use Magento\Eav\Api\Data\AttributeInterface;
use MateuszMesek\DocumentDataApi\InputInterface;

interface AttributeValueResolverInterface
{
    public function resolver(AttributeInterface $attribute, InputInterface $input);
}
