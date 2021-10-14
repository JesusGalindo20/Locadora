<?php

namespace App\Controllers;

use App\Models;

class automovel extends BaseController
{
    public function index()
    {

        $db = new \App\Models\AutomovelModel();
        $db2 = new \App\Models\MarcaModel();
        $todos = $db->findAll();

        $automoveisSemIds = array();

        foreach ($todos as $key => $value){
            unset($value['TB_MARCA_ID']);
            unset($value['TB_MODELO_ID']);

            foreach ($automoveisSemIds as $key => $linha)
            {
            $automoveisSemIds[$key]['editar'] = '<a href="automovel/editar/' .$linha['TB_AUTOMOVEL_ID'] . '"> EDITAR <a/>';
            $automoveisSemIds[$key]['excluir'] = '<a href="automovel/excluir/' .$linha['TB_AUTOMOVEL_ID'] . '"> DELETAR </a>' ;
            }

            $automoveisSemIds[] = $value;
            

        }

        $veredit['ver'] = $automoveisSemIds;

        echo view('automovelView', $veredit);
    }

    public function inserir()
    {
        $db = new \App\Models\AutomovelModel();
        $db2 = new \App\Models\MarcaModel();
        $db3 = new \App\Models\ModeloModel();

        $marcaLista = $db2->findAll();
        $modeloLista = $db3->findAll(); 
        
        
        $LMarca = array();
        foreach ($marcaLista as $key => $value){
            $LMarca[$value['TB_MARCA_ID']] = $value['TB_MARCA_NOME'];
        }

        $LModelo = array();
        foreach ($modeloLista as $key => $value){
            $LModelo[$value['TB_MODELO_ID']] = $value['TB_MODELO_DESC'];
        }

        $data['options'] = $LMarca;

        $data['modelo'] = $LModelo;

        echo view('automovel_inserirView', $data);
    }

    public function salvar()
    {
        $db = new \App\Models\AutomovelModel();

        if(isset($this->request->getPost()['TB_AUTOMOVEL_ID'])) {
            $id = $this->request->getPost()['TB_AUTOMOVEL_ID'];
        } else {
            $id = FALSE;
        }

		$nome = $this->request->getPost()['TB_AUTOMOVEL_NOME'];
		$ano = $this->request->getPost()['TB_AUTOMOVEL_ANO_FAB'];
		$cor = $this->request->getPost()['TB_AUTOMOVEL_COR'];
		$km = $this->request->getPost()['TB_AUTOMOVEL_KM'];
		$valor = $this->request->getPost()['TB_AUTOMOVEL_VALOR_D'];
		$status = $this->request->getPost()['TB_AUTOMOVEL_STATUS'];
		$marca = $this->request->getPost()['TB_MARCA_ID'];
		$modelo = $this->request->getPost()['TB_MODELO_ID'];


		$data = [
		'TB_AUTOMOVEL_NOME' => $nome,
		'TB_AUTOMOVEL_ANO_FAB' => $ano,
		'TB_AUTOMOVEL_COR' => $cor,
		'TB_AUTOMOVEL_KM' => $km,
		'TB_AUTOMOVEL_VALOR_D' => $valor,
		'TB_AUTOMOVEL_STATUS' => $status,
		'TB_MARCA_ID' => $marca,
		'TB_MODELO_ID' => $modelo
		];

		if($id != FALSE) { 
		$data['TB_AUTOMOVEL_ID'] = $id;
		}

		$result = $db->save($data);
		var_dump($result);
    }

    public function editar($id)
	{
		$db = new \App\Models\AutomovelModel();

		
		$todos = $db->find($id);
		$data['olhar'] = $todos;
		echo view ('automovel_updateView', $data);
		
	}
	
	public function excluir($id)
	{
		$db = new \App\Models\AutomovelModel();
		
		$result = $db->delete($id);
		
		var_dump($result);
		
	}

}