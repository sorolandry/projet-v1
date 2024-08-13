<?php

class Publication
{
    public $id_publication;
    public $text;
    public $url_image;
    public $date_publication;
    public $id_service;

    function __construct($id_publication) {
        global $db;

        $id_publication = str_secur($id_publication);

        $reqPublication = $db->fetch('SELECT * FROM publication WHERE id_publication = ?', [$id_publication], false);
        $data = $reqPublication;

        $this->id_publication = $data['id_publication'];
        $this->text = $data['Text'];
        $this->url_image = $data['url_image'];
        $this->date_publication = $data['Date_publication'];
        $this->id_service = $data['id_service'];
    }

    static function getAllPublications() {
        global $db;
        $reqPublications = $db->fetch('SELECT * FROM publication', [], true);
        return $reqPublications;
    }
}
