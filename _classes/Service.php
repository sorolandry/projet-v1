<?php
class Service {
    public $id_service;
    public $description_Besoin;
    public $metier;
    public $localisation;
    public $date_de_demande;

    function __construct($id_service) {
        global $db;

        $id_service = str_secur($id_service);

        $query = "SELECT s.*, 
                         a.id_profil_artisan, a.nom_complet AS artisan_nom, a.numero AS artisan_numero,
                         c.id_client, c.nom_complet AS client_nom, c.numero AS client_numero
                  FROM service s
                  LEFT JOIN offrir o ON s.id_service = o.id_service
                  LEFT JOIN artisan a ON o.id_profil_artisan = a.id_profil_artisan
                  LEFT JOIN demander d ON s.id_service = d.id_service
                  LEFT JOIN client c ON d.id_client = c.id_client
                  WHERE s.id_service = ?";

        $reqService = $db->fetch($query, [$id_service], true);

        if (!empty($reqService)) {
            $data = $reqService[0];
            $this->id_service = $data['id_service'];
            $this->description_Besoin = $data['description_Besoin'];
            $this->metier = $data['metier'];
            $this->localisation = $data['localisation'];
            $this->date_de_demande = $data['date_de_demande'];
        }
    }

    static function getAllService() {
        global $db;
        $query = "SELECT s.*, 
                         a.id_profil_artisan, a.nom_complet AS artisan_nom, a.numero AS artisan_numero,
                         c.id_client, c.nom_complet AS client_nom, c.numero AS client_numero
                  FROM service s
                  LEFT JOIN offrir o ON s.id_service = o.id_service
                  LEFT JOIN artisan a ON o.id_profil_artisan = a.id_profil_artisan
                  LEFT JOIN demander d ON s.id_service = d.id_service
                  LEFT JOIN client c ON d.id_client = c.id_client";
        $reqService = $db->fetch($query, [], true);
        return $reqService;
    }
}