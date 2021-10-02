<?php

namespace App\Controllers;

use App\Models;

class automovel extends BaseController
{
    public function index()
    {
        echo view('inserirView');
        $db = new \App\Models\AutomovelModel();
        $db2 = new \App\Models\MarcaModel();
        $todos = $db->findAll();

        //var_dump($todos[0]["TB_MARCA_ID"]);

        //var_dump($todos);


        foreach($todos as $key => $linha){
            //$todos[$key]['editar'] = '<a href="editar/' .$linha['TB_AUTOMOVEL_ID'] . '"> EDITAR <a/>';
            //$todos[$key]['excluir'] = '<a href="excluir/' . $linha['TB_AUTOMOVEL_ID'] . '"> DELETAR </a>' ;

            $sql      = \Config\Database::connect();
            $builder = $sql->table('tb_automovel,tb_marca');
            $builder->select('tb_automovel.TB_AUTOMOVEL_ID, tb_automovel.TB_AUTOMOVEL_NOME, tb_automovel.TB_AUTOMOVEL_ANO_FAB,
             tb_automovel.TB_AUTOMOVEL_COR, tb_automovel.TB_AUTOMOVEL_KM,
             tb_automovel.TB_AUTOMOVEL_VALOR_D, tb_automovel.TB_AUTOMOVEL_STATUS,
             tb_automovel.TB_MARCA_ID ,  tb_automovel.TB_MODELO_ID, tb_marca.TB_MARCA_NOME');
            $builder->where('tb_automovel.TB_MARCA_ID = tb_marca.TB_MARCA_ID');
            //$builder->where('tb');

            $query=$builder->get()->getResultArray();

            

            foreach($query as $key => $linha){
                $query[$key]['editar'] = '<a href="editar/' .$query[0]['TB_AUTOMOVEL_ID']  . '"> EDITAR <a/>';
                $query[$key]['excluir'] = '<a href="excluir/' . $linha['TB_AUTOMOVEL_ID'] . '"> DELETAR </a>' ;
            }
            // var_dump($query[0]['excluir']);
            

        }

        

            //var_dump($query);

            $data = $db2->findAll();
            //$data = $db2->find($todos[$key]['TB_MARCA_ID']);

            //var_dump($data);

    

        
        
        $veredit['ver'] = $query;

        echo view('automovelView', $veredit);
    }
}