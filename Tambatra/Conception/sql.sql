Create table emp(
    id int primary key Auto_increment,
    nom varchar(20),
    age int
);


insert into emp values (null,'Soa',21);
insert into emp values (null,'Soafara',34);
insert into emp values (null,'Fara',31);
insert into emp values (null,'Koto',28);
insert into emp values (null,'Rado',22);
insert into emp values (null,'Lala',40);
insert into emp values (null,'Lalaina',26);
insert into emp values (null,'Bema',46);

create table services(
    id int primary key Auto_increment,
    nom varchar(50),
    taux_horaire double precision
);

insert into services values (null,'Menager',8200);
insert into services values (null,'Bibliothequere',4500);
insert into services values (null,'Contoleur',15000);
insert into services values (null,'Gestionaire',15400);
insert into services values (null,'Secretaire',12000);
insert into services values (null,'King',26000);
insert into services values (null,'Testeur',15200);

create table Service_emp(
    id_emp int,
    id_services int,
    foreign key (id_emp) references emp(id),
    foreign key (id_services) references services(id)
);

insert into Service_emp values (1,2);
insert into Service_emp values (2,5);
insert into Service_emp values (3,1);
insert into Service_emp values (4,4);
insert into Service_emp values (5,2);
insert into Service_emp values (6,3);