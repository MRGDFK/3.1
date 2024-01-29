create database real_estate_lisiting_property;

use real_estate_lisiting_property;


create table agent(
	agent_id int primary key NOT NULL,
	agent_name varchar(50) NOT NULL,
	agent_contact int NOT NULL,
	agent_email varchar(50) unique check (agent_email like '%@gmail.com'),
	agent_address varchar(256),
	agent_username varchar(15) NOT NULL,
	agent_password varchar(28) NOT NULL,
);

use real_estate_lisiting_property;
insert into agent(agent_id, agent_name, agent_contact, agent_email, agent_address, agent_username, agent_password)
values(1, 'Aurnob Auwal', 01533900567, 'aurnob.cse.20210104130@gmail.com', 'Modhubag 3 no road', 'tetron', 'aurnob130'); 
insert into agent 
values(2, 'Sourav Misro', 01789642512, 'sourav.cse.20210104125@gmail.com', 'Dhanmondi 25 no road', 'ravan', 'sourav125');
insert into agent
values(3, 'AR. Rafiuzzaman Nayrit', 01677922019, 'nayrit.cse.20210104120@gmail.com', 'Niketon 3 no road', 'Baji', 'Nayrit120');

select *from agent;

create table seller(
	sel_id int primary key NOT NULL,
	sel_name varchar(50) NOT NULL,
	sel_contact int NOT NULL,
	sel_email varchar(50) unique check (sel_email like '%@gmail.com'),
	sel_address varchar(256),
	sel_username varchar(15) NOT NULL,
	sel_password varchar(28) NOT NULL,
	agent_id int NOT NULL,
	Foreign key(agent_id) references agent(agent_id),

);

insert into seller(sel_id, sel_name, sel_contact, sel_email, sel_address, sel_username, sel_password,agent_id)
values(1, 'MD. ABu Shaleh Mayeen', 01532391527, 'aurnob.cse.20210104123@gmail.com', 'bonoshri', 'kara', 'mayeen123',1); 
insert into seller 
values(2, 'Ashikul Islam', 01389742532, 'ashik.cse.20210104040@gmail.com', 'Khilgaon', 'takku', 'ashik040',1);
insert into seller
values(3, 'Anik Kumar', 01877356201, 'anik.cse.20210104077@gmail.com', 'Shewra para', 'Rayuga', 'anik077',2);

select *from seller;

create table client(
	clnt_id int primary key NOT NULL,
	clnt_name varchar(50) NOT NULL,
	clnt_contact int NOT NULL,
	clnt_email varchar(50) unique check (clnt_email like '%@gmail.com'),
	clnt_address varchar(256),
	clnt_username varchar(15) NOT NULL,
	clnt_password varchar(28) NOT NULL,
	agent_id int NOT NULL,
	Foreign key(agent_id) references agent(agent_id),
);

insert into client(clnt_id, clnt_name, clnt_contact, clnt_email, clnt_address, clnt_username, clnt_password,agent_id)
values(1, 'Sharjil Khan', 0123390056, 'sharjil.cse.20210104108@gmail.com', 'Modhubag 3 no road', 'MRGDFK', 'mrgdfk108',3); 
insert into client 
values(2, 'MNR Eftee', 01569642512, 'manzar.cse.20210104105@gmail.com', 'Dhanmondi 25 no road', 'Dazai', 'eftee105',3);
insert into client
values(3, 'Zenun Chowdhury', 01999922019, 'zenun.cse.20210104047@gmail.com', 'Niketon 3 no road', 'Itachi', 'Zenun047',1);

select *from client;

create table property(
	prop_id int primary key,
	prop_price int,
	prop_status varchar(15),
	prop_description varchar(2000),
	prop_type varchar(100),
	sel_id int NOT NULL,
	Foreign key(sel_id) references seller(sel_id),
	agent_id int NOT NULL,
	Foreign key(agent_id) references agent(agent_id),
	clnt_id int NOT NULL,
	Foreign key(clnt_id) references client(clnt_id),
);

insert into property(prop_id, prop_price, prop_status, prop_description, prop_type, sel_id, agent_id,clnt_id)
values(1, 10000000, 'unsold', 'ashbdvlasyvblfygvalshvbclqshvflujahsb fljvadf', 'land', 1,2,3) 
insert into property values(2, 20000000, 'sold', 'ashbdvlasyvblfygvalshvbclqshvflujahsb fljvadf', 'land', 3,3,2) ;
insert into property values(3, 40000000, 'on hold', 'ashbdvlasyvblfygvalshvbclqshvflujahsb fljvadf', 'flat', 2,1,1) ;

select *from property;

create table comment(
	cmnt_id int NOT NULL primary key,
	cmnt_datentime date,
	comment varchar(500) default 'No comments yet!',
	cmnt_status varchar(15),
	sel_id int NOT NULL,
	Foreign key(sel_id) references seller(sel_id),
	agent_id int NOT NULL,
	Foreign key(agent_id) references agent(agent_id),
	clnt_id int NOT NULL,
	Foreign key(clnt_id) references client(clnt_id),
	prop_id int NOT NULL,
	Foreign key(prop_id) references property(prop_id),
);

select *from comment;

insert into comment(cmnt_id,cmnt_datentime, comment, cmnt_status, sel_id, agent_id,clnt_id, prop_id)
values(1,'2023-12-1', 'asdjbsajhvflahvsdflsadasdhkbada', 'seen' , 2, 2, 3, 1);

insert into comment values(2,'2023-12-2', 'asdjbsajhvflahvsdflsadasdhkbada', 'unseen' , 1, 1, 3, 2);
insert into comment values(3,'2023-12-2', 'asdjbsajhvflahvsdflsadasdhkbada', 'unseen' , 3, 3, 3, 3);

 

