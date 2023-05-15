

insert into klienci values
  (3, 'Julia Kowalska', 'Wierzbowa 25', 'Warszawa'),
  (4, 'Adam Pawlak', 'Szeroka 1/47', 'Szczecin'),
  (5, 'Michalina Nowak', 'Zachodnia 357', 'Gliwice');

insert into zamowienia values
  (NULL, 5, 69.98, '2007-04-02'),
  (NULL, 3, 12.99, '2007-04-15'),
  (NULL, 4, 74.00, '2007-04-19'),
  (NULL, 5, 6.99, '2007-05-01');

insert into ksiazki values
  ('0-672-31697-8', 'Michael Morgan', 'Java 2 dla Profesjonalistow', 34.99),
  ('0-672-31745-1', 'Thomas Down', 'Instalacja Debian GNU/Linux', 24.99),
  ('0-672-31509-2', 'Lucas Pruitt', 'Poznaj GIMP w 24 godziny', '24.99'),
  ('0-672-31769-9', 'Thomas Schenk', 'Caldera OpenLinux ujarzmiony', 49.99);

insert into pozycje_zamowione values
  (1, '0-672-31697-8', 2),
  (2, '0-672-31769-9', 1),
  (3, '0-672-31769-9', 1),
  (3, '0-672-31509-2', 1),
  (4, '0-672-31745-1', 3);

insert into recenzje_ksiazek values
  ('0-672-31697-8', 'Pozycja ta znacznie szerzej i bardziej zrozumiale niz inne przedstawia tajniki jezyka Java.');