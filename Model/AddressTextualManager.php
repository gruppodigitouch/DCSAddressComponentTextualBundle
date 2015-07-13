<?php

namespace DCS\AddressComponent\TextualBundle\Model;

use DCS\AddressBundle\Component\ComponentManagerInterface;

abstract class AddressTextualManager implements ComponentManagerInterface
{
    /**
     * @inheritdoc
     */
    public function create()
    {
        $className = $this->getModelClass();
        return new $className();
    }
}