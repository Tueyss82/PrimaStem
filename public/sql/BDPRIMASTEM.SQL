DROP DATABASE IF EXISTS primastem;

CREATE DATABASE IF NOT EXISTS primastem;
USE primastem;
# -----------------------------------------------------------------------------
#       TABLE : CONTACT
# -----------------------------------------------------------------------------

CREATE TABLE IF NOT EXISTS CONTACT
 (
   IDCONTACT INTEGER(10) NOT NULL AUTO_INCREMENT ,
   NOM VARCHAR(50) NULL  ,
   PRENOM VARCHAR(50) NULL  ,
   ADRESSEMAIL VARCHAR(128) NULL  
   , PRIMARY KEY (IDCONTACT) 
 ) 
 comment = "";

# -----------------------------------------------------------------------------
#       TABLE : BLOG
# -----------------------------------------------------------------------------

CREATE TABLE IF NOT EXISTS BLOG
 (
   IDARTICLE INTEGER(10) NOT NULL AUTO_INCREMENT ,
   TITRE VARCHAR(128) NULL  ,
   MINIAARTICLE LONGBLOB NULL  ,
   DESCRIPTIONARTICLE VARCHAR(5000) NULL  
   , PRIMARY KEY (IDARTICLE) 
 ) 
 comment = "";


# -----------------------------------------------------------------------------
#       CREATION DES REFERENCES DE TABLE
# -----------------------------------------------------------------------------

