drop table if exists badge_types;
create table badge_types (
	badgetype_id int auto_increment,
	description varchar(50),
	price numeric(10,2),
	order_by int4,
	PRIMARY KEY(badgetype_id)
) Engine=InnoDB;


drop table if exists attendees;
create table attendees (
	attendee_id int auto_increment,
	name varchar(255),
	nick_name varchar(255),
	email varchar(255),
	street_address varchar(255),
	city varchar(255),
	postal_code varchar(255),
	state_province varchar(255),
	dob int8,
	creation_date int8,
	contact_phone_nbr varchar(255),
	PRIMARY KEY(attendee_id)
) Engine=InnoDB;
