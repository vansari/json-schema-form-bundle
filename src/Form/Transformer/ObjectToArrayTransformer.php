<?php

namespace Cyve\JsonSchemaFormBundle\Form\Transformer;

use stdClass;
use Symfony\Component\Form\DataTransformerInterface;

class ObjectToArrayTransformer implements DataTransformerInterface
{
    /**
     * @inheritDoc
     */
    public function transform($data)
    {
        return ($data instanceof stdClass) ? (array) $data : [];
    }

    /**
     * @inheritDoc
     */
    public function reverseTransform($data)
    {
        return is_array($data) ? (object) $data : new stdClass();
    }
}
