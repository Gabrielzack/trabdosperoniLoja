<?php


class Categoria
{

    private $id;
    private $nome;
    private $descricao;


    public function setDescricao($descricao)
    {
        $this->descricao = $descricao;
    }


    public function setId($id)
    {
        $this->id = $id;
    }


    public function setNome($nome)
    {
        $this->nome = $nome;
    }


    public function getId()
    {
        return $this->id;
    }


    public function getDescricao()
    {
        return $this->descricao;
    }


    public function getNome()
    {
        return $this->nome;
    }


}