<?php

namespace App\Entity;


use Doctrine\ORM\Mapping\Embeddable;
use Doctrine\ORM\Mapping\Column;

/** @Embeddable */
class Address
{
    /** @Column(type = "string") */
    private $street;

    /** @Column(type = "string") */
    private $postalCode;

    /** @Column(type = "string") */
    private $city;

    /** @Column(type = "string") */
    private $country;

    /**
     * Get the value of street
     */
    public function getStreet()
    {
        return $this->street;
    }

    /**
     * Set the value of street
     */
    public function setStreet($street): self
    {
        $this->street = $street;

        return $this;
    }

    /**
     * Get the value of postalCode
     */
    public function getPostalCode()
    {
        return $this->postalCode;
    }

    /**
     * Set the value of postalCode
     */
    public function setPostalCode($postalCode): self
    {
        $this->postalCode = $postalCode;

        return $this;
    }

    /**
     * Get the value of city
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * Set the value of city
     */
    public function setCity($city): self
    {
        $this->city = $city;

        return $this;
    }

    /**
     * Get the value of country
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * Set the value of country
     */
    public function setCountry($country): self
    {
        $this->country = $country;

        return $this;
    }
}