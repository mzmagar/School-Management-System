CREATE TABLE houses2 (
longitude FLOAT,
latitude FLOAT,
housing_median_age FLOAT,
total_rooms FLOAT,
total_bedrooms FLOAT,
population FLOAT,
households FLOAT,
median_income FLOAT,
median_house_value FLOAT,
ocean_proximity VARCHAR(255));

LOAD DATA LOCAL INFILE '/home/ubuntu/environment/housing.csv' INTO TABLE houses2 FIELDS TERMINATED BY ',' LINES TERMINATED BY '\n' IGNORE 1 ROWS (longitude, latitude, housing_median_age, total_rooms, total_bedrooms, population, households, median_income, median_house_value, ocean_proximity);
