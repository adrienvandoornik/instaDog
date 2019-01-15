
CREATE DATABASE Instadog;

CREATE TABLE Utilisateur (
    id INTEGER NOT NULL ,
    nom VARCHAR(100),
    prenom VARCHAR(100),
    derniereConnexion DATE,
    email VARCHAR(255),
    motDePasse VARCHAR(100),
    PRIMARY KEY (id)

);

CREATE TABLE Article (
    id INTEGER  NOT NULL ,
    image URL,
    texte VARCHAR(300),
    PRIMARY KEY(id),
    CONSTRAINT FK_ArticleCommentaire FOREIGN KEY (commentaireId) 
    REFERENCES Commentaire(id)
);

CREATE TABLE Chien (
    id INTEGER  NOT NULL,
    surnom VARCHAR(100),
    nomElevage VARCHAR(100),
    dateNaissance DATE,
    sexe VARCHAR(100),
    race VARCHAR(100),
    PRIMARY KEY (id),
    CONSTRAINT FK_UtilisateurChien FOREIGN KEY (utilisateurId)
    REFERENCES Utilisateur(id)

);

CREATE TABLE Commentaire (
    id INTEGER NOT NULL,
    texte VARCHAR(300),
    date DATE,
    PRIMARY KEY (id),
    CONSTRAINT FK_CommentaireUtilisateur FOREIGN KEY (utilisateurLogue)
    REFERENCES Utilisateur(id)

);