<?php

namespace DCS\AddressComponent\TextualBundle\EventListener;

use DCS\AddressBundle\DCSAddressEvents;
use DCS\AddressBundle\Event\FormattedAddressEvent;
use DCS\AddressComponent\TextualBundle\Model\AddressTextualInterface;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;

class DCSAddressEventSubscriber implements EventSubscriberInterface
{
    public static function getSubscribedEvents()
    {
        return array(
            DCSAddressEvents::TWIG_FORMATTED_ADDRESS => 'formatAddress',
        );
    }

    public function formatAddress(FormattedAddressEvent $event)
    {
        $addressComponent = $event->getAddress()->getComponent();

        if (!$addressComponent instanceof AddressTextualInterface) {
            return;
        }

        $addressInfo = array();

        $address1 = $addressComponent->getAddress1();
        $city = $addressComponent->getCity();
        $country = $addressComponent->getCountry();

        if (!empty($address1)) {
            $addressInfo[] = $address1;
        }
        if (!empty($city)) {
            $addressInfo[] = $city;
        }
        if (!empty($country)) {
            $addressInfo[] = $country;
        }

        $event->setFormattedAddress(implode(', ', $addressInfo));
    }
}