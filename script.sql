CREATE DATABASE `booking`;

USE `booking`;

CREATE TABLE `t_booking` (

    id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY NOT NULL, 
    b_title VARCHAR(50) NOT NULL,
    b_subtitle VARCHAR(255) NOT NULL,
    b_description TEXT NOT NULL,
    b_city VARCHAR(100) NOT NULL,
    b_surface INT(11) NOT NULL,
    b_price INT(11) NOT NULL,
    b_type ENUM('appartement', 'maison') NOT NULL,
    b_swim BOOLEAN
);

CREATE TABLE `t_images` (

    id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY NOT NULL,
    i_path VARCHAR(50) NOT NULL
);

CREATE TABLE `booking_has_images` (

    booking_id INT(11) NOT NULL,
    image_id INT(11) NOT NULL
);

CREATE TABLE `t_users` (

    id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY NOT NULL,
    u_name VARCHAR(25) NOT NULL,
    u_email VARCHAR(100) UNIQUE NOT NULL,
    u_password VARCHAR(255) NOT NULL
);

INSERT INTO `t_booking` (b_title, b_subtitle, b_description, b_city, b_surface, b_price, b_type, b_swim)
    VALUES (
        "Résidence les petits cuicuis", "Résidence calme, que des petits vieux qui restent chez eux tellement il fait chaud", 
        "Que dire de plus.. c'est près de la mer, il y a du vent en facade mais pas dans la cour sécurisée, vous pourrez laisser les gosses s'amuser, pas de problèmes !",
        "Palavas-les-Flots", 47, 99, "appartement", 0
    );

INSERT INTO `t_booking` (b_title, b_subtitle, b_description, b_city, b_surface, b_price, b_type, b_swim)
    VALUES (
        "Maison près de la côte", "Maison tout à fait attrayante, des criques sont pas loin du tout, c'est vraiment chouette", 
        "Que dire de plus.. c'est près de la mer, il y a du vent en facade mais pas dans la cour sécurisée, vous pourrez laisser les gosses s'amuser, pas de problèmes !",
        "Saint-Tropez", 150, 245, "maison", 0
    );

INSERT INTO `t_booking` (b_title, b_subtitle, b_description, b_city, b_surface, b_price, b_type, b_swim)
    VALUES (
        "Appartement de charme", "Appartement dans un lieu bucolique avec le chant des oiseaux au loin", 
        "Que dire de plus.. c'est près de la mer, il y a du vent en facade mais pas dans la cour sécurisée, vous pourrez laisser les gosses s'amuser, pas de problèmes !",
        "Cannes", 78, 112, "appartement", 1
    );

INSERT INTO `t_booking` (b_title, b_subtitle, b_description, b_city, b_surface, b_price, b_type, b_swim)
    VALUES (
        "Lieu paradisiaque", "Maison de ouf qui fait zizir ma gueule c'est top moumoute je kiff", 
        "Que dire de plus.. c'est près de la mer, il y a du vent en facade mais pas dans la cour sécurisée, vous pourrez laisser les gosses s'amuser, pas de problèmes !",
        "Sain-tropez", 117, 265, "maison", 0
    );

INSERT INTO `t_booking` (b_title, b_subtitle, b_description, b_city, b_surface, b_price, b_type, b_swim)
    VALUES (
        "Maison avec veranda", "Verarnda sur la plage, les pieds dans le sable", 
        "Que dire de plus.. c'est près de la mer, il y a du vent en facade mais pas dans la cour sécurisée, vous pourrez laisser les gosses s'amuser, pas de problèmes !",
        "Palavas-les-Flots", 94, 149, "maison", 0
    );

INSERT INTO `t_booking` (b_title, b_subtitle, b_description, b_city, b_surface, b_price, b_type, b_swim)
    VALUES (
        "Appartement dans les hauteurs", "Dans les hauteurs de saint-raphael se cache la petite maison dans la prairie !", 
        "Que dire de plus.. c'est près de la mer, il y a du vent en facade mais pas dans la cour sécurisée, vous pourrez laisser les gosses s'amuser, pas de problèmes !",
        "Saint-raphael ", 38, 75, "appartement", 1
    );

INSERT INTO `t_images` (i_path) VALUES

('1-house1.jpg'),
('1-kitchen1.jpg'),
('1-saloon1.jpg'),
('2-bathroom2.jpg'),
('2-house2.jpg'),
('2-sallon2.jpg'),
('3-house3.jpg'),
('3-kitchen3.jpg'),
('3-saloon3.jpg'),
('4-garden4.jpg'),
('4-kitchen4.jpg'),
('4-saloon4.jpg'),
('5-house5.jpg'),
('5-playa5.jpg'),
('5-saloon5.jpg'),
('6-house6.jpg'),
('6-saloon-6.jpg'),
('6-swim6.jpg');

INSERT INTO `booking_has_images` (booking_id, image_id) VALUES 

(1, 1),
(1, 2),
(1, 3),
(2, 4),
(2, 5),
(2, 6),
(3, 7),
(3, 8),
(3, 9),
(4, 10),
(4, 11),
(4, 12),
(5, 13),
(5, 14),
(5, 15),
(6, 16),
(6, 17),
(6, 18);
