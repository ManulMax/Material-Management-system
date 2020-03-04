CREATE TABLE IF NOT EXISTS stock(
    item_id int(10) NOT NULL PRIMARY KEY,
    item_name VARCHAR(50) NOT NULL,
    item_type VARCHAR(50) NOT NULL,
    quantity  int(100) NOT NULL,
    unit_price int(100) NOT NULL
);

CREATE TABLE IF NOT EXISTS users (
    userid int NOT NULL AUTO_INCREMENT,
    uname varchar(50) NOT NULL,
    passwrd varchar(50) NOT NULL,
    options varchar(50) NOT NULL,
    email varchar(50),
    locations varchar(50),
    contactNo int(30) NOT NULL,
    PRIMARY KEY (userid)
);

CREATE TABLE IF NOT EXISTS messeages (
    message_id int NOT NULL AUTO_INCREMENT,
    message_text varchar(50) NOT NULL,
    reply varchar(100),
    PRIMARY KEY (message_id)
);

CREATE TABLE IF NOT EXISTS orders (
	order_id int NOT NULL AUTO_INCREMENT,
	qty int(30) not null,
	locations varchar(50) not null,
	contact int(30),
	category varchar(30),
	types varchar(30),
	color varchar(30),
	thickness varchar(30),
	total_price int(30),
	dates date,
	primary key(order_id)
);

########## dummy_data_for_stock ##########
INSERT INTO `stock`(`item_id`, `item_name`, `item_type`, `quantity`, `unit_price`) VALUES ('001','glass','frosted glass','100','120');
INSERT INTO `stock`(`item_id`, `item_name`, `item_type`, `quantity`, `unit_price`) VALUES ('002','sand','concrete sand','100','300');
INSERT INTO `stock`(`item_id`, `item_name`, `item_type`, `quantity`, `unit_price`) VALUES ('003','cement','portland cement','100','8');
INSERT INTO `stock`(`item_id`, `item_name`, `item_type`, `quantity`, `unit_price`) VALUES ('004','gravel','panda gravel','100','320');
INSERT INTO `stock`(`item_id`, `item_name`, `item_type`, `quantity`, `unit_price`) VALUES ('005','iron','tmt steel bars','100','120');