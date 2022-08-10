<?php

class Equipamento
{
    private $marca;
    private $modelo;
    private $categoria;
    private $outros;
/*
    private $processador;
    private $complemento;
    private $memoria;
    private $disco;
    private $monitor;
    private $partNumber;
    private $serialNumber;
    private $tagNumber;
    private $adicional;
    private $sistemaOperacional;
    private $ano;
    private $garantia;
    private $projeto;
    private $financiador;
    private $loja;
    private $notaFiscal;
    private $data;
    private $quantidade;
    private $patrimonio;
 */


    /**
     * Get the value of marca
     */ 
    public function getMarca()
    {
        return $this->marca;
    }

    /**
     * Set the value of marca
     *
     * @return  self
     */ 
    public function setMarca($marca)
    {
        $this->marca = $marca;

        return $this;
    }

    /**
     * Get the value of categoria
     */ 
    public function getCategoria()
    {
        return $this->categoria;
    }

    /**
     * Set the value of categoria
     *
     * @return  self
     */ 
    public function setCategoria($categoria)
    {
        $this->categoria = $categoria;

        return $this;
    }



    /**
     * Get the value of modelo
     */ 
    public function getModelo()
    {
        return $this->modelo;
    }

    /**
     * Set the value of modelo
     *
     * @return  self
     */ 
    public function setModelo($modelo)
    {
        $this->modelo = $modelo;

        return $this;
    }

    /**
     * Get the value of outros
     */ 
    public function getOutros()
    {
        return $this->outros;
    }

    /**
     * Set the value of outros
     *
     * @return  self
     */ 
    public function setOutros($outros)
    {
        $this->outros = $outros;

        return $this;
    }

 
}
