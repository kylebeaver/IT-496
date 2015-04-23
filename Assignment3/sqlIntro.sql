create table person(
	person_id int(4),
	first_name varchar(24),
	last_name varchar(24),
	age int(3)
);

desc person;

create table address(
	address_id int(4),
	street varchar(64),
	city varchar(64),
	state char(2),
	zipcode int(5)
);

desc address;