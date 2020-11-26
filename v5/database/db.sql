-- AUTHOR: Matt TAYLOR / Yoann SOCHAJ
-- PROJET: Web L3

create table champion(
	id int(3) not null PRIMARY KEY AUTO_INCREMENT,
	name varchar(15) not null,
	type varchar(15) not null,
	lane varchar(10) not null
);

insert into champion(name, type, lane) VALUES ("aatrox", "fighter", "top");
insert into champion(name, type, lane) VALUES ("vayne", "marksman", "bot");
insert into champion(name, type, lane) VALUES ("akali", "assassin", "mid");
insert into champion(name, type, lane) VALUES ("aurelionsol", "mage", "mid");
insert into champion(name, type, lane) VALUES ("ashe", "marksman", "bot");
insert into champion(name, type, lane) VALUES ("yasuo", "fighter", "mid");
insert into champion(name, type, lane) VALUES ("mordekasier", "fighter", "top");
insert into champion(name, type, lane) VALUES ("pantheon", "fighter", "top");
insert into champion(name, type, lane) VALUES ("swain", "mage", "top");
insert into champion(name, type, lane) VALUES ("riven", "fighter", "top");
insert into champion(name, type, lane) VALUES ("ahri", "mage", "mid");
insert into champion(name, type, lane) VALUES ("chogath", "tank", "top");
insert into champion(name, type, lane) VALUES ("evelynn", "assassin", "jungle");
insert into champion(name, type, lane) VALUES ("ezreal", "marksman", "bot");
insert into champion(name, type, lane) VALUES ("fizz", "assassin", "mid");
insert into champion(name, type, lane) VALUES ("ornn", "tank", "top");
insert into champion(name, type, lane) VALUES ("bard", "support", "bot");
insert into champion(name, type, lane) VALUES ("blitzcrank", "support", "bot");
insert into champion(name, type, lane) VALUES ("draven", "marksman", "bot");
insert into champion(name, type, lane) VALUES ("karma", "support", "bot");	


create table users(
	usersId int(3) not null PRIMARY KEY AUTO_INCREMENT,
	usersUid varchar(128) not null,
	userPwd varchar(128) not null
);


create table favorites(
	favoritesId int(9) not null PRIMARY KEY AUTO_INCREMENT,
	favoritesUsersId varchar(128) not null,
	favoritesFavorited varchar(128) not null
);