<?php

namespace DCS\AddressComponent\TextualBundle\Model;

use DCS\AddressBundle\Component\AddressComponent;

abstract class AddressTextual implements AddressTextualInterface
{
    use AddressComponent;

    /**
     * @var int
     */
    protected $id;

    /**
     * @var string
     */
    protected $address1;

    /**
     * @var string
     */
    protected $address2;

    /**
     * @var string
     */
    protected $city;

    /**
     * @var string
     */
    protected $province;

    /**
     * @var string
     */
    protected $cap;

    /**
     * @var string
     */
    protected $country;

    public function getId()
    {
        return $this->id;
    }

    public function getAddress1()
    {
        return $this->address1;
    }

    public function setAddress1($address1 = null)
    {
        $this->address1 = $address1;
        return $this;
    }

    public function getAddress2()
    {
        return $this->address2;
    }

    public function setAddress2($address2 = null)
    {
        $this->address2 = $address2;
        return $this;
    }

    public function getCity()
    {
        return $this->city;
    }

    public function setCity($city = null)
    {
        $this->city = $city;
        return $this;
    }

    public function getProvince()
    {
        return $this->province;
    }

    public function setProvince($province = null)
    {
        $this->province = $province;
        return $this;
    }

    public function getCap()
    {
        return $this->cap;
    }

    public function setCap($cap = null)
    {
        $this->cap = $cap;
        return $this;
    }

    public function getCountry()
    {
        return $this->country;
    }

    public function setCountry($country = null)
    {
        $this->country = $country;
        return $this;
    }
}