<?php

namespace DCS\AddressComponent\TextualBundle\Doctrine\ORM;

use DCS\AddressBundle\Component\AddressComponentInterface;
use DCS\AddressBundle\Model\AddressInterface;
use DCS\AddressComponent\TextualBundle\Model\AddressTextualManager as BaseAddressTextualManager;
use Doctrine\ORM\EntityManagerInterface;

class AddressTextualManager extends BaseAddressTextualManager
{
    private $className;
    private $entityManager;

    function __construct($className, EntityManagerInterface $entityManager)
    {
        $this->className = $className;
        $this->entityManager = $entityManager;
    }

    /**
     * @inheritdoc
     */
    public function getModelClass()
    {
        return $this->className;
    }

    /**
     * @inheritdoc
     */
    public function save(AddressComponentInterface $addressComponent, $andFlush = true)
    {
        $this->entityManager->persist($addressComponent);

        if ($andFlush) {
            $this->entityManager->flush();
        }
    }

    /**
     * @inheritdoc
     */
    public function findOneByAddress(AddressInterface $address)
    {
        $repo = $this->entityManager->getRepository($this->className);

        return $repo->findOneBy(array(
            'address' => $address
        ));
    }
}