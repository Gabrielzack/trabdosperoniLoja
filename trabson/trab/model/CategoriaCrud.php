<?php


require_once "Conexao.php";
require_once "Categoria.php";

class CategoriaCrud
{
    private $conexao;

    public function __construct()
    {
        $con = new Conexao();
        $this->conexao = $con->getConexao();
    }

    public function getCategorias(){
        $sql = "SELECT * FROM categoria";

        $categorias = $this->conexao->query($sql);

        $categorias = $categorias->fetchAll(PDO::FETCH_ASSOC);

        $listaCategorias = [];

        foreach ($categorias as $categoria){
            $cat = new Categoria();

            $cat->setDescricao($categoria['descricao_categoria']);
            $cat->setId($categoria['id_categoria']);
            $cat->setNome($categoria['nome_categoria']);

            $listaCategorias[] = $cat;
        }




        return $listaCategorias;
    }

    public function getCategoria($id){
        $sql = "SELECT * FROM categoria WHERE id_categoria = $id";

        $categoria = $this->conexao->query($sql);

        $categoria = $categoria->fetch(PDO::FETCH_ASSOC);

        $cat = new Categoria();

        $cat->setDescricao($categoria['descricao_categoria']);
        $cat->setId($categoria['id_categoria']);
        $cat->setNome($categoria['nome_categoria']);


        return $categoria;

    }
    public function insertCategoria ($categoria){
        $sql = "INSERT INTO categoria VALUES ";

        $this->conexao->exec($sql);
    }
    public function updateCategoria ($categoria){
        $sql = "UPDATE categoria SET categoria = $categoria";
        $this->conexao->exec($sql);
    }

    }

    public function excluirProduto($id){
        $sql = "DELETE FROM categoria WHERE id_categoria  = $id";
        $this->conexao->exec($sql);
    }


}




