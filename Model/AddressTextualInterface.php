<?php

namespace DCS\AddressComponent\TextualBundle\Model;

use DCS\AddressBundle\Component\AddressComponentInterface;

interface AddressTextualInterface extends AddressComponentInterface
{
    /**
     * Get id
     *
     * @return int
     */
    public function getId();

    /**
     * Get address1
     *
     * @return string
     */
    public function getAddress1();

    /**
     * Set address1
     *
     * @param string $address1
     * @return AddressTextualInterface
     */
    public function setAddress1($address1 = null);

    /**
     * Get address2
     *
     * @return string
     */
    public function getAddress2();

    /**
     * Set address2
     *
     * @param string $address2
     * @return AddressTextualInterface
     */
    public function setAddress2($address2 = null);

    /**
     * Get city
     *
     * @return string
     */
    public function getCity();

    /**
     * Set city
     *
     * @param string $city
     * @return AddressTextualInterface
     */
    public function setCity($city = null);

    /**
     * Get province
     *
     * @return string
     */
    public function getProvince();

    /**
     * Set province
     *
     * @param string $province
     * @return AddressTextualInterface
     */
    public function setProvince($province = null);

    /**
     * Get cap
     *
     * @return string
     */
    public function getCap();

    /**
     * Set cap
     *
     * @param string $cap
     * @return AddressTextualInterface
     */
    public function setCap($cap = null);

    /**
     * Get country
     *
     * @return string
     */
    public function getCountry();

    /**
     * Set country
     *
     * @param string $country
     * @return AddressTextualInterface
     */
    public function setCountry($country = null);
}