<?php


namespace Source\Core;


/**
 * Class Address
 * @package Source\Model
 */
class Address
{
    protected string $zipCode;

    protected string $street;

    protected string $district;

    protected string  $complement;

    protected int $number;

    protected  string  $location;

    protected string $uf;


    public function __construct($zipCode, $street, $district, $complement, $number, $location, $uf)
    {
        $this->zipCode = $zipCode;
        $this->street = $street;
        $this->district = $district;
        $this->complement = $complement;
        $this->number = $number;
        $this->location = $location;
        $this->uf = $uf;
    }

    /**
     * @return string
     */
    public function getComplement(): string
    {
        return $this->complement;
    }

    /**
     * @param string $complement
     */
    public function setComplement(string $complement): void
    {
        $this->complement = $complement;
    }

    /**
     * @return string
     */
    public function getZipCode(): string
    {
        return $this->zipCode;
    }

    /**
     * @return string
     */
    public function getStreet(): string
    {
        return $this->street;
    }

    /**
     * @return string
     */
    public function getDistrict(): string
    {
        return $this->district;
    }

    /**
     * @return int
     */
    public function getNumber(): int
    {
        return $this->number;
    }

    /**
     * @return string
     */
    public function getLocation(): string
    {
        return $this->location;
    }

    /**
     * @return string
     */
    public function getUf(): string
    {
        return $this->uf;
    }

    /**
     * @param string $zipCode
     */
    public function setZipCode(string $zipCode): void
    {
        $this->zipCode = $zipCode;
    }

    /**
     * @param string $street
     */
    public function setStreet(string $street): void
    {
        $this->street = $street;
    }

    /**
     * @param string $district
     */
    public function setDistrict(string $district): void
    {
        $this->district = $district;
    }

    /**
     * @param int $number
     */
    public function setNumber(int $number): void
    {
        $this->number = $number;
    }

    /**
     * @param string $location
     */
    public function setLocation(string $location): void
    {
        $this->location = $location;
    }

    /**
     * @param string $uf
     */
    public function setUf(string $uf): void
    {
        $this->uf = $uf;
    }





}