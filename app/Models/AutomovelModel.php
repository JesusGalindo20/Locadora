<?php

namespace App\Models;

use CodeIgniter\Model;

class AutomovelModel extends Model
{
    protected $table      = 'tb_automovel';
    protected $primaryKey = 'TB_AUTOMOVEL_ID';

    protected $useAutoIncrement = true;

    protected $returnType     = 'array';
    protected $useSoftDeletes = false; 

    protected $allowedFields = ['TB_AUTOMOVEL_NOME', 'TB_AUTOMOVEL_ANO_FAB',
                                'TB_AUTOMOVEL_COR', 'TB_AUTOMOVEL_KM',
                                'TB_AUTOMOVEL_VALOR_D', 'TB_AUTOMOVEL_STATUS',
                                'TB_MARCA_ID', 'TB_MODELO_ID'];

    protected $useTimestamps = false;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    protected $validationRules    = [];
    protected $validationMessages = [];
    protected $skipValidation     = false;

    public function findAll(int $limit = 0, int $offset = 0)
    {
        $sqlString = "select TB_AUTOMOVEL_ID, TB_AUTOMOVEL_NOME, 
        TB_AUTOMOVEL_ANO_FAB, TB_AUTOMOVEL_COR,  TB_AUTOMOVEL_KM,
        TB_AUTOMOVEL_VALOR_D, TB_AUTOMOVEL_STATUS, tb_automovel.TB_MARCA_ID,
        tb_automovel.TB_MODELO_ID, TB_MARCA_NOME, TB_MODELO_DESC
        from tb_automovel
        inner join
        tb_marca on tb_automovel.TB_MARCA_ID = tb_marca.TB_MARCA_ID
        inner join
        tb_modelo on tb_automovel.TB_MODELO_ID = tb_modelo.TB_MODELO_ID";

        $resultado = $this->query($sqlString);

        $rows = array();

        foreach($resultado->getResult('array') as $row)
        {
            $rows[] = $row;
        }

        return $rows;
    }
}