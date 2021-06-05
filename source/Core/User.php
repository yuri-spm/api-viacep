<?php


namespace Source\Core;


class User
{
    protected string $first_name;

    protected string $last_name;

    protected string $cpf;

    protected string $email;

    protected string $sexo;



    public function __construct($first_name, $last_name, $cpf = null, $email, $sexo)
    {
            if(!validaCPF($cpf)){
                echo "CFP Invalido </br>";
                exit;
            }

            if(!is_email($email)){
                echo "Email Invalido";
                exit;
            }

            $this->first_name = $first_name;
            $this->last_name = $last_name;
            $this->cpf = $cpf;
            $this->email = $email;
            $this->sexo = $sexo;

    }



    /**
     * @return string
     */
    public function getFirstName(): string
    {
        return $this->first_name;
    }

    /**
     * @param string $first_name
     */
    public function setFirstName(string $first_name): void
    {
        $this->first_name = $first_name;
    }

    /**
     * @return string
     */
    public function getLastName(): string
    {
        return $this->last_name;
    }

    /**
     * @param string $last_name
     */
    public function setLastName(string $last_name): void
    {
        $this->last_name = $last_name;
    }

    /**
     * @return string
     */
    public function getCpf(): string
    {
        return $this->cpf;
    }

    /**
     * @param string $cpf
     */
    public function setCpf(string $cpf): void
    {
        $this->cpf = $cpf;
    }

    /**
     * @return mixed|string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param mixed|string $email
     */
    public function setEmail($email): void
    {
        $this->email = $email;
    }


}