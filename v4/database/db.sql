create table champion(
	id int(3) not null PRIMARY KEY AUTO_INCREMENT,
	name varchar(15) not null,
	type varchar(15) not null,
	lane varchar(10) not null
);

insert into champion(name, type, lane) VALUES ("aatrox", "fighter", "top");
insert into champion(name, type, lane) VALUES ("vayne", "marksman", "bot");
insert into champion(name, type, lane) VALUES ("garen", "fighter", "top");
insert into champion(name, type, lane) VALUES ("akali", "assassin", "mid");