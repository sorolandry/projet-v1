CREATE TABLE acheter (
  id_publicite int(11) NOT NULL,
  id_profil_artisan int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table artisan
--

CREATE TABLE artisan (
  id_profil_artisan int(11) NOT NULL,
  description text NOT NULL,
  nom_complet varchar(255) NOT NULL,
  numero varchar(11) NOT NULL,
  numero_whatsapp varchar(11) NOT NULL,
  branche_d_activite varchar(255) NOT NULL,
  specialite varchar(255) NOT NULL,
  metier varchar(255) NOT NULL,
  ville varchar(20) NOT NULL,
  commune varchar(20) NOT NULL,
  quartier varchar(20) NOT NULL,
  url_image text NOT NULL,
  latitude decimal(10,8) NOT NULL,
  longitude decimal(11,8) NOT NULL,
  mot_de_passe varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table client
--

CREATE TABLE client (
  id_client int(11) NOT NULL,
  nom_complet varchar(255) NOT NULL,
  numero varchar(11) NOT NULL,
  ville varchar(20) NOT NULL,
  commune varchar(20) NOT NULL,
  quartier varchar(20) NOT NULL,
  url_image text NOT NULL,
  latitude decimal(10,8) NOT NULL,
  longitude decimal(11,8) NOT NULL,
  mot_de_passe varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table demander
--

CREATE TABLE demander (
  id_service int(11) NOT NULL,
  id_client int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table offrir
--

CREATE TABLE offrir (
  id_service int(11) NOT NULL,
  id_profil_artisan int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table pack_publicitaire
--

CREATE TABLE pack_publicitaire (
  id_publicite int(11) NOT NULL,
  pack_publicitaire varchar(200) NOT NULL,
  budget int(11) NOT NULL,
  date_debut date NOT NULL,
  date_fin date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table publication
--

CREATE TABLE publication (
  id_publication int(11) NOT NULL,
  Text text NOT NULL,
  url_image varchar(50) NOT NULL,
  date_publication date NOT NULL,
  id_service int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table service
--

CREATE TABLE service (
  id_service int(11) NOT NULL,
  description_Besoin text NOT NULL,
  localisation float NOT NULL,
  date_de_demande date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table acheter
--
ALTER TABLE acheter
  ADD PRIMARY KEY (id_publicite,id_profil_artisan),
  ADD KEY acheter_Artisan0_FK (id_profil_artisan);

--
-- Index pour la table artisan
--
ALTER TABLE artisan
  ADD PRIMARY KEY (id_profil_artisan);

--
-- Index pour la table client
--
ALTER TABLE client
  ADD PRIMARY KEY (id_client);

--
-- Index pour la table demander
--
ALTER TABLE demander
  ADD PRIMARY KEY (id_service,id_client),
  ADD KEY demander_Client0_FK (id_client);

--
-- Index pour la table offrir
--
ALTER TABLE offrir
  ADD PRIMARY KEY (id_service,id_profil_artisan),
  ADD KEY Offrir_Artisan0_FK (id_profil_artisan);

--
-- Index pour la table pack_publicitaire
--
ALTER TABLE pack_publicitaire
  ADD PRIMARY KEY (id_publicite);

--
-- Index pour la table publication
--
ALTER TABLE publication
  ADD PRIMARY KEY (id_publication),
  ADD KEY Publication_Service_FK (id_service);

--
-- Index pour la table service
--
ALTER TABLE service
  ADD PRIMARY KEY (id_service);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table pack_publicitaire
--
ALTER TABLE pack_publicitaire
  MODIFY id_publicite int(11) NOT NULL AUTO_INCREMENT;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table acheter
--
ALTER TABLE acheter
  ADD CONSTRAINT acheter_Artisan0_FK FOREIGN KEY (id_profil_artisan) REFERENCES artisan (id_profil_artisan),
  ADD CONSTRAINT acheter_Pack_publicitaire_FK FOREIGN KEY (id_publicite) REFERENCES pack_publicitaire (id_publicite);

--
-- Contraintes pour la table demander
--
ALTER TABLE demander
  ADD CONSTRAINT demander_Client0_FK FOREIGN KEY (id_client) REFERENCES client (id_client),
  ADD CONSTRAINT demander_Service_FK FOREIGN KEY (id_service) REFERENCES service (id_service);

--
-- Contraintes pour la table offrir
--
ALTER TABLE offrir
  ADD CONSTRAINT Offrir_Artisan0_FK FOREIGN KEY (id_profil_artisan) REFERENCES artisan (id_profil_artisan),
  ADD CONSTRAINT Offrir_Service_FK FOREIGN KEY (id_service) REFERENCES service (id_service);

--
-- Contraintes pour la table publication
--
ALTER TABLE publication
  ADD CONSTRAINT Publication_Service_FK FOREIGN KEY (id_service) REFERENCES service (id_service);
COMMIT;

