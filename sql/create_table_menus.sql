CREATE TABLE menus (
	`id` INT NOT NULL AUTO_INCREMENT ,
	`dessert_id` INT NULL,
	`starter_dish_id` INT NULL,
	`main_dish_id` INT NOT NULL,
	`drink_id` INT NOT NULL,
	`name` VARCHAR(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL , 
	`price` DECIMAL(10,6) NOT NULL DEFAULT '0' , 
	`description` text NULL,
	`is_vegan` boolean default false,
	`created` DATETIME NOT NULL, 
	`updated` DATETIME NULL on update CURRENT_TIMESTAMP,
	PRIMARY KEY (id),
	FOREIGN KEY (dessert_id) REFERENCES desserts(id),
	FOREIGN KEY (starter_dish_id) REFERENCES starter_dishes(id),
	FOREIGN KEY (main_dish_id) REFERENCES main_dishes(id),
	FOREIGN KEY (drink_id) REFERENCES drinks(id)
) ENGINE = InnoDB CHARSET=utf8mb4 COLLATE utf8mb4_general_ci;