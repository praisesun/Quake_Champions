CREATE TABLE `user` (
  `id` int PRIMARY KEY AUTO_INCREMENT,
  `id_player` int,
  `full_name` varchar(255),
  `age` int,
  `login` varchar(255),
  `password` varchar(255),
  `email` varchar(255),
  `Answer_to_a_secret_question` varchar(255)
);

CREATE TABLE `mode` (
  `id` int PRIMARY KEY AUTO_INCREMENT,
  `title` varchar(255),
  `cout_players` int
);

CREATE TABLE `player` (
  `id` int PRIMARY KEY AUTO_INCREMENT,
  `nickname` varchar(255),
  `battle_pass` int,
  `rank` varchar(255),
  `statistics` varchar(255)
);

CREATE TABLE `equipment` (
  `id` int PRIMARY KEY AUTO_INCREMENT,
  `character` varchar(255),
  `weapon_set` varchar(255),
  `character_skin_title` varchar(255)
);

CREATE TABLE `map` (
  `id` int PRIMARY KEY AUTO_INCREMENT,
  `map_title` varchar(255)
);

CREATE TABLE `search` (
  `id` int PRIMARY KEY AUTO_INCREMENT,
  `player_id` int,
  `equipment_id` int,
  `map_id` int,
  `mode_id` int
);

ALTER TABLE `search` ADD FOREIGN KEY (`equipment_id`) REFERENCES `equipment` (`id`);

ALTER TABLE `search` ADD FOREIGN KEY (`map_id`) REFERENCES `map` (`id`);

ALTER TABLE `search` ADD FOREIGN KEY (`mode_id`) REFERENCES `mode` (`id`);

ALTER TABLE `search` ADD FOREIGN KEY (`player_id`) REFERENCES `player` (`id`);

ALTER TABLE `user` ADD FOREIGN KEY (`id_player`) REFERENCES `player` (`id`);
