create database ia;

\c ia;

create table admins
(
    id serial not null primary key,
    email varchar(50),
    mdp varchar(50)
);

create table categorie
(
    id serial not null primary key,
    nom varchar(30)
);

create table article
(
    id serial not null primary key,
    idcategorie int not null,
    titre varchar(100),
    texte text,
    datedepublication date,
    foreign key(idcategorie) references categorie(id)
);


insert into admins(email,mdp) values
('admin1','admin1'),
('admin2','admin2');

insert into categorie(nom) values
('News'),
('Produit'),
('Cours');

insert into article(idcategorie,titre,texte,datedepublication) values
(1,'L''intelligence artificielle est en progres!','De nos jours, l''I.A ou l''intelligence artificielle ne cesse pas de progresser. Avec leurs techniques et competences, les ingenieurs dans ce domaine trouvent toujours des nouvelles idees innovantes.','2023-05-07'),
(1,'RAKOTONDRANANDRA(DG de la comite de l''intelligence artificielle) est mort','Suite a une terrible accident qui s''est passee sur la route de Tsarasaotra, un des piliers dans le domaine de l''intelligence artificielle a tire sa reverance hier. Selon les sources proches, la voiture que le DG conduisait a subi une panne de frein et par consequent a heurtee un camion en pleine vitesse. La comite de''intelligence artficielle est alors en deuil.','2023-05-08');


create or replace view v_article as select article.*,categorie.nom as categorie from article join categorie on article.idcategorie=categorie.id;