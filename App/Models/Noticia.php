<?php

namespace App\Models;

use Core\Database;

class Noticia {

    private $table = 'noticia';

    public function getAll() {
        $db = Database::getInstance();
        $dados = $db->getList($this->table, '*');
        return $db->getList($this->table,'*');
    }

    public function getByTituloUrl($tituloUrl) {
        $db = Database::getInstance();
        $noticia = $db->getList($this->table, '*',['titulo_url' => "'" . $tituloUrl . "'"]);

        return $noticia[0];
    }
}