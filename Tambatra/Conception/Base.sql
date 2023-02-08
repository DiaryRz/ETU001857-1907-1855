create database Takalo;
use Takalo;


create table Sexe(
    IdSexe int not null primary key auto_increment,
    NomSexe varchar(20)
);

create table Utilisateur(
    IdUtilisateur int not null primary key auto_increment,
    NomUtilisateur varchar(30),
    Email varchar(40),
    MotDePasse varchar(50),
    IdSexe int not null,
    foreign key(IdSexe) references Sexe(IdSexe)
);


create table Categorie(
    IdCategorie int not null primary key auto_increment,
    NomCategorie varchar(30)
);

create table Objet(
    IdObjet int not null primary key auto_increment,
    NomObjet varchar(30),
    Description varchar(100),
    Prix double ,
    IdCategorie int not null,
    IdUtilisateur int not null,
    foreign key(IdUtilisateur) references Utilisateur(IdUtilisateur)
);

create table Photo(
    IdPhoto int not null primary key auto_increment,
    IdObjet int not null,
    LienPhoto varchar(60),
    foreign key(IdObjet) references Objet(IdObjet)
);

create table Proposition(
    IdProposition int not null primary key auto_increment,
    IdObjet int not null,
    IdObjetEchange int not null,
    foreign key(IdObjet) references Objet(IdObjet),
    foreign key(IdObjetEchange) references Objet(IdObjet)
);

select * from objet where idObject = id;


select objet.IdObjet,objet.NomObjet,Objet.Description,objet.Prix,objet.IdCategorie,objet.IdUtilisateur
        ,objet.idUtilisateur,Proposition.IdObjetEchange from objet 
        join Proposition on objet.IdObjet = Proposition.IdObjet 
        where objet.IdUtilisateur = 1;

