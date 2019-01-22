
CREATE DATABASE Instadog;

CREATE USER 'adminInstaDog' IDENTIFIED BY 'Inst@Dog';
 GRANT ALL PRIVILEGES ON Instadog.* TO 'adminInstaDog';


CREATE TABLE Utilisateur (
    id INT(100) AUTO_INCREMENT,
    nom VARCHAR(255),
    prenom VARCHAR(255),
    dateConnexion VARCHAR(255),
    email VARCHAR(255),
    motDePasse VARCHAR(255),
    login VARCHAR(255),
    PRIMARY KEY (id)

);


CREATE TABLE Chien (
    id INT(100) AUTO_INCREMENT,
    surnom VARCHAR(255),
    nomElevage VARCHAR(255),
    dateAge VARCHAR(100),
    sexe VARCHAR(255),
    race VARCHAR(255),
    utilisateurId INT(100),
    PRIMARY KEY (id),
    FOREIGN KEY (utilisateurId) REFERENCES Utilisateur(id)

);


CREATE TABLE Article (
    id INT(100) AUTO_INCREMENT,
    image LONGBLOB,
    texte VARCHAR(255),
    datePublication VARCHAR(255),
    chienId INT(100),
    PRIMARY KEY(id),
    FOREIGN KEY (chienId) REFERENCES Chien(id)
);

CREATE TABLE Commentaire (
    id INT(100) AUTO_INCREMENT,
    texte VARCHAR(300),
    dateCommentaire VARCHAR(100),
    utilisateurId INT(100),
    articleId INT(100),
    PRIMARY KEY (id),
    FOREIGN KEY (utilisateurId) REFERENCES Utilisateur(id),
    FOREIGN KEY (articleId) REFERENCES Article(id)

);