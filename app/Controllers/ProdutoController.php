<?php

namespace App\Controllers;

use App\Models\CategoriaModel;
use App\Models\ProdutoModel;
use App\Controllers\BaseController;

class ProdutoController extends BaseController
{
    private $ProdutoModel;

    public function __construct(){
        $this->ProdutoModel = new ProdutoModel();
        $this->CategoriaModel = new CategoriaModel();
    }

    public function index()
    {
        return view('produtos/index', [
            'produtos' => $this->ProdutoModel->findAll(),
            'categorias' => $this->CategoriaModel->findAll()
        ]);
    }

    public function create()
    {
        
        return view('produtos/create', [
            'categorias' => $this->CategoriaModel->findAll()
        ]);
    }

    public function store()
    {
        $data = $this->request->getPost();

        if ($this->ProdutoModel->save($this->request->getPost())) {
            return view('messages', [
                'message' => 'Produto salvo com sucesso!'
            ]);
        }else {
            echo "Erro!";
        }
    }

    public function edit($id)
    {
        $data = $this->request->getPost();
        
        return view('produtos/edit', [
            'produtos' => $this->ProdutoModel->find($id),
            'categorias' => $this->CategoriaModel->findAll()
        ]);
    }

    public function delete($id)
    {
        if($this->ProdutoModel->delete($id)){
            return view('messages', [
                'message' => 'Excluído com sucesso!'
            ]);
        } else {
            echo "Erro!";
        }
    }
}
