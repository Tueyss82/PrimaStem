DROP DATABASE IF EXISTS primastem;

CREATE DATABASE IF NOT EXISTS primastem;
USE primastem;
# -----------------------------------------------------------------------------
#       TABLE : CONTACT
# -----------------------------------------------------------------------------

CREATE TABLE IF NOT EXISTS CONTACT
 (
   IDCONTACT INTEGER(10) NOT NULL AUTO_INCREMENT ,
   NOM VARCHAR(50) NOT NULL  ,
   PRENOM VARCHAR(50) NOT NULL  ,
   ADRESSEMAIL VARCHAR(128) NOT NULL  
   , PRIMARY KEY (IDCONTACT) 
 ) 
 comment = "";

# -----------------------------------------------------------------------------
#       TABLE : BLOG
# -----------------------------------------------------------------------------

CREATE TABLE IF NOT EXISTS BLOG
 (
   IDARTICLE INTEGER(10) NOT NULL AUTO_INCREMENT ,
   TITRE VARCHAR(128) NOT NULL  ,
   MINIAARTICLE LONGBLOB NOT NULL  ,
   DESCRIPTIONARTICLE VARCHAR(5000) NOT NULL  
   , PRIMARY KEY (IDARTICLE) 
 ) 
 comment = "";

# -----------------------------------------------------------------------------
#       TABLE : PARTENAIRE
# -----------------------------------------------------------------------------

CREATE TABLE IF NOT EXISTS PARTENAIRE
 (
   IDPARTENAIRE INTEGER(5) NOT NULL AUTO_INCREMENT ,
   NOMPARTENAIRE VARCHAR(128) NOT NULL  ,
   AVISPARTENAIRE VARCHAR(128) NOT NULL  ,
   IMGPARTENAIRE LONGBLOB NOT NULL  
   , PRIMARY KEY (IDPARTENAIRE) 
 ) 
 comment = "";


# -----------------------------------------------------------------------------
#       CREATION DES REFERENCES DE TABLE
# -----------------------------------------------------------------------------

