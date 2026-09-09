CREATE TABLE desserts (
	`id` INT NOT NULL AUTO_INCREMENT , 
	`created` DATETIME NOT NULL, 
	`updated` DATETIME NULL on update CURRENT_TIMESTAMP,
	`name` VARCHAR(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL , 
	`price` DECIMAL(10,6) NOT NULL DEFAULT '0' , 
	description text NULL,
	PRIMARY KEY (id)
) ENGINE = InnoDB CHARSET=utf8mb4 COLLATE utf8mb4_general_ci;