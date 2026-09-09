CREATE TABLE `quaiantiquerestaurant`.`drinks_types` (
	`id` INT NOT NULL AUTO_INCREMENT , 
	`name` VARCHAR(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL ,
	`created` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP , 
	`updated` DATETIME on update CURRENT_TIMESTAMP NULL , 
	PRIMARY KEY (`id`)
) ENGINE = InnoDB CHARSET=utf8mb4 COLLATE utf8mb4_general_ci;