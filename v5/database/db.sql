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
insert into champion(name, type, lane) VALUES ("amumu", "tank", "jungle");
insert into champion(name, type, lane) VALUES ("aurelionsol", "mage", "mid");
insert into champion(name, type, lane) VALUES ("ashe", "marksman", "bot");
insert into champion(name, type, lane) VALUES ("yasuo", "fighter", "mid");
insert into champion(name, type, lane) VALUES ("mordekasier", "fighter", "top");
insert into champion(name, type, lane) VALUES ("pantheon", "fighter", "top");
-- insert into champion(name, type, lane) VALUES ("aurelion sol", "mage", "mid");
-- insert into champion(name, type, lane) VALUES ("aurelion sol", "mage", "mid");
-- insert into champion(name, type, lane) VALUES ("aurelion sol", "mage", "mid");
-- insert into champion(name, type, lane) VALUES ("aurelion sol", "mage", "mid");


create table users(
	usersId int(3) not null PRIMARY KEY AUTO_INCREMENT,
	usersUid varchar(128) not null,
	userPwd varchar(128) not null
);