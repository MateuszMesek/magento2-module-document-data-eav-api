<?php declare(strict_types=1);

namespace MateuszMesek\DocumentEavApi;

use Magento\Eav\Api\Data\AttributeInterface;
use MateuszMesek\Document\Api\InputInterface;

interface AttributeValueResolverInterface
{
    public function resolver(AttributeInterface $attribute, InputInterface $input);
}
