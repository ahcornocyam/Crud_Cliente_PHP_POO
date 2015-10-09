<?php

/**
 * Created by PhpStorm.
 * User: alexroch
 * Date: 06/10/15
 * Time: 16:48
 */
class Cliente
{
    private $id;
    private $nome;
    private $sobrenome;
    private $idade;
    private $cpf;
    private $cidade;
    private $email;
    private $fone;

    /**
     * Cliente constructor.
     * @param $nome
     * @param $sobrenome
     * @param $idade
     * @param $cpf
     * @param $cidade
     * @param $email
     * @param $fone
     */
    public function __construct($id, $nome, $sobrenome, $idade, $cpf, $cidade, $email, $fone)
    {
        $this->id = $id;
        $this->nome = $nome;
        $this->sobrenome = $sobrenome;
        $this->idade = $idade;
        $this->cpf = $cpf;
        $this->cidade = $cidade;
        $this->email = $email;
        $this->fone = $fone;
    }

    /**
     * @return mixed
     */
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     * @return Cliente
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }


    /**
     * @param mixed $nome
     * @return Cliente
     */
    public function setNome($nome)
    {
        $this->nome = $nome;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getSobrenome()
    {
        return $this->sobrenome;
    }

    /**
     * @param mixed $sobrenome
     * @return Cliente
     */
    public function setSobrenome($sobrenome)
    {
        $this->sobrenome = $sobrenome;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getIdade()
    {
        return $this->idade;
    }

    /**
     * @param mixed $idade
     * @return Cliente
     */
    public function setIdade($idade)
    {
        $this->idade = $idade;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getCpf()
    {
        return $this->cpf;
    }

    /**
     * @param mixed $cpf
     * @return Cliente
     */
    public function setCpf($cpf)
    {
        $this->cpf = $cpf;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getCidade()
    {
        return $this->cidade;
    }

    /**
     * @param mixed $cidade
     * @return Cliente
     */
    public function setCidade($cidade)
    {
        $this->cidade = $cidade;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param mixed $email
     * @return Cliente
     */
    public function setEmail($email)
    {
        $this->email = $email;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getFone()
    {
        return $this->fone;
    }

    /**
     * @param mixed $fone
     * @return Cliente
     */
    public function setFone($fone)
    {
        $this->fone = $fone;
        return $this;
    }

}