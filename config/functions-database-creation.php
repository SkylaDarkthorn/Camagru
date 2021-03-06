<?PHP

function create_user_table($bdd)
{
$bdd->query("CREATE TABLE IF NOT EXISTS users (
	id INT PRIMARY KEY AUTO_INCREMENT,
	login VARCHAR(255) UNIQUE,
	mail VARCHAR(255) UNIQUE,
	groupe VARCHAR(20),
	mdp VARCHAR(255),
	token VARCHAR(255))");
}

function	add_users($bdd)
{
$bdd->query("LOAD DATA INFILE 'C:/xampp/htdocs/AngstyCam/config/users.csv'
IGNORE INTO TABLE `users`
FIELDS TERMINATED BY ','
LINES TERMINATED BY '\r\n'
IGNORE 1 LINES (login,mail,groupe,mdp,token)");
}


function	create_pictures_table($bdd)
{
$bdd->query("CREATE TABLE IF NOT EXISTS photos (
	id_photo INT PRIMARY KEY AUTO_INCREMENT,
	date_upload INT,
	link VARCHAR(255) UNIQUE,
	id_user INT,
	FOREIGN KEY (id_user) REFERENCES users(id)
)");
}

function	add_pictures($bdd)
{
	$bdd->query("LOAD DATA INFILE 'C:/xampp/htdocs/AngstyCam/config/photos.csv'
	INTO TABLE `photos`
	FIELDS TERMINATED BY ','
	LINES TERMINATED BY '\r\n'
	IGNORE 1 LINES (link,id_user,date_upload)");
}

function	create_likes_table($bdd)
{
$bdd->query("CREATE TABLE IF NOT EXISTS likes (
	id_user INT,
	FOREIGN KEY (id_user) REFERENCES users(id),
	id_photo INT,
	FOREIGN KEY (id_photo) REFERENCES photos(id_photo) ON DELETE CASCADE
)");
}

function	add_likes($bdd)
{
	$bdd->query("LOAD DATA INFILE 'C:/xampp/htdocs/AngstyCam/config/likes.csv'
	INTO TABLE `likes`
	FIELDS TERMINATED BY ','
	LINES TERMINATED BY '\r\n'
	IGNORE 1 LINES (id_user,id_photo)");
}



function	create_comments_table($bdd)
{
$bdd->query("CREATE TABLE IF NOT EXISTS comments (
	id_comment INT PRIMARY KEY AUTO_INCREMENT,
	id_user INT,
	FOREIGN KEY (id_user) REFERENCES users(id),
	id_photo INT,
	FOREIGN KEY (id_photo) REFERENCES photos(id_photo) ON DELETE CASCADE,
	comments VARCHAR(1000) CHARACTER SET UTF8
)");
}

function	add_comments($bdd)
{
	$bdd->query("LOAD DATA INFILE 'C:/xampp/htdocs/AngstyCam/config/comments.csv'
	INTO TABLE `comments`
	CHARACTER SET UTF8
	FIELDS TERMINATED BY ','
	LINES TERMINATED BY '\r\n'
	IGNORE 1 LINES (id_user,id_photo,comments)");
}

function	create_filters_table($bdd)
{
$bdd->query("CREATE TABLE IF NOT EXISTS filters (
	id_filter INT PRIMARY KEY AUTO_INCREMENT,
	path_filter VARCHAR(255) UNIQUE
)");
}

function	add_filters($bdd)
{
	$bdd->query("LOAD DATA INFILE 'C:/xampp/htdocs/AngstyCam/config/filters.csv'
	INTO TABLE `filters`
	CHARACTER SET UTF8
	FIELDS TERMINATED BY ','
	LINES TERMINATED BY '\r\n'
	IGNORE 1 LINES (path_filter)");
}


?>
