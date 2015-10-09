<?php

require_once"Cliente.php";

/**
 * Created by PhpStorm.
 * User: alexroch
 * Date: 09/10/15
 * Time: 00:35
 */
class ClienteFactory
{
    private $clientes = [];
    private $cliente;

    /**
     * ClienteFactory constructor.
     * @param array $clientes
     */
    public function __construct()
    {

        $this->addCliente($cliente = new Cliente(1,"maycon",
                                                 "alexandre",
                                                    29,
                                                "19564782",
                                                "tubarao",
                                                "maycon@may.com",
                                                "4891915432")
                        );
        $this->addCliente($cliente = new Cliente(2,"alex",
            "da Silva",
            45,
            "168564782",
            "tubarao",
            "alexn@may.com",
            "4871915432")
        );
        $this->addCliente($cliente = new Cliente(3,"Ronaldo",
            "alexandre",
            25,
            "195647845",
            "tubarao",
            "ronaldo@may.com",
            "4891915432")
        );
        $this->addCliente($cliente = new Cliente(4,"maycon",
            "alexandre",
            29,
            "19564782",
            "tubarao",
            "maycon@may.com",
            "4891915432")
        );
        $this->addCliente($cliente = new Cliente(5,"alex",
            "da Silva",
            45,
            "168564782",
            "tubarao",
            "alexn@may.com",
            "4871915432")
        );
        $this->addCliente($cliente = new Cliente(6,"Ronaldo",
            "alexandre",
            25,
            "195647845",
            "tubarao",
            "ronaldo@may.com",
            "4891915432")
        );
        $this->addCliente($cliente = new Cliente(7,"maycon",
            "alexandre",
            29,
            "19564782",
            "tubarao",
            "maycon@may.com",
            "4891915432")
        );
        $this->addCliente($cliente = new Cliente(8,"alex",
            "da Silva",
            45,
            "168564782",
            "tubarao",
            "alexn@may.com",
            "4871915432")
        );
        $this->addCliente($cliente = new Cliente(9,"Ronaldo",
            "alexandre",
            25,
            "195647845",
            "tubarao",
            "ronaldo@may.com",
            "4891915432")
        );
        $this->addCliente($cliente = new Cliente(10,"Ronaldo",
            "alexandre",
            25,
            "195647845",
            "tubarao",
            "ronaldo@may.com",
            "4891915432")
        );

    }


    public function listaClientes(){
        return $this->clientes;
    }

    public function addCliente($valor){
        array_push($this->clientes,$valor);
    }
    public function ordemCrescente(){
        return asort($this->clientes);
    }
    public function ordemDecrescente(){
        return arsort($this->clientes);
    }

    public function pesquisaCliente($id){
        $cliente = null;
        foreach($this->clientes as $item){
            (in_array($id,(array) $item) == true)? $cliente = $item : null ;
        }
        return $cliente;
    }

}