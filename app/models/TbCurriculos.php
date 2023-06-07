<?php

class TbCurriculos extends Model
{
    public function getCvForHomePage()
    {
        $db = $this->getDb();
        $db->query(<<<SQL
            SELECT id
                ,nome
                ,sobrenome
                ,CONCAT(nome, ' ', sobrenome) AS nome_completo
                ,email
                ,imagem
                ,curriculo
            FROM tb_curriculos
            ORDER BY id DESC
            LIMIT 3
        SQL);
        $results = $db->resultSet();
        return $results;
    }
}