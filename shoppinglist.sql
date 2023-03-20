create database shoppinglist;

use shoppinglist;

create table item (
    id int primary key auto_increment,
    description varchar(255) not null,
    amount smallint unsigned not null 
);

insert into item (description,amount) values ('Test item', 2);
-- Muutama lisä testidata alla
-- insert into item (description,amount) values ('Toinen testi', 3);
-- insert into item (description,amount) values ('Third Test item', 6);