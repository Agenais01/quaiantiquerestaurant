SELECT m.id, 
	   m.name AS menu,
	   d.name AS dessert,
       md.name AS plat_principal,
       sd.name AS entree,
       m.price
FROM menus m
JOIN desserts d
  ON d.id = d.dessert_right
JOIN main_dishes md
  ON md.id = m.main_dish_id
JOIN starter_dishes sd
  ON sd.id = m.starter_dish_id
WHERE m.id = 1;