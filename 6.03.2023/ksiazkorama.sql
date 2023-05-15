create table klienci
( klientid int unsigned not null auto_increment primary key,
  nazwisko char(50) not null,
  adres char(100) not null,
  miejscowosc char(30) not null
);

create table zamowienia
( zamowienieid int unsigned not null auto_increment primary key,
  klientid int unsigned not null,
  wartosc float(6,2),
  data date not null
);

create table ksiazki
( isbn char(13) not null primary key,
  autor char(50),
  tytul char(100),
  cena float(4,2)
);

create table pozycje_zamowione
( zamowienieid int unsigned not null,
  isbn char(13) not null,
  ilosc tinyint unsigned,

  primary key (zamowienieid, isbn)

);

create table recenzje_ksiazek
( isbn char(13) not null primary key,
  recenzja text
);
