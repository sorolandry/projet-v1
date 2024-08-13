<?php

class Demander
{
    public $id_service;
    public $id_client;

    function __construct($id_service, $id_client) {
        global $db;

        $id_service = str_secur($id_service);
        $id_client = str_secur($id_client);

        $reqDemander = $db->fetch('SELECT * FROM demander WHERE id_service = ? AND id_client = ?', [$id_service, $id_client], false);
        $data = $reqDemander;

        $this->id_service = $data['id_service'];
        $this->id_client = $data['id_client'];
    }

    static function getAllDemander() {
        global $db;
        $reqDemander = $db->fetch('SELECT * FROM demander', [], true);
        return $reqDemander;
    }

    static function create($id_service, $id_client) {
        global $db;
        $db->execute('INSERT INTO demander (id_service, id_client) VALUES (?, ?)', [$id_service, $id_client]);
    }

    static function delete($id_service, $id_client) {
        global $db;
        $db->execute('DELETE FROM demander WHERE id_service = ? AND id_client = ?', [$id_service, $id_client]);
    }
}
