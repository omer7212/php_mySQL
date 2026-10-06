 CREATE DATABASE movie_project;
 USE movie project;
create table users(


	id int PRIMARY key AUTO_INCREMENT,
    emri varchar(255) not null,
    username varchar(255) not null,
    email varchar(255) not null,
    password varchar(255) not null,
    roli varchar(255) not null,
)

create table movies (
	id int PRIMARY key AUTO_INCREMENT,
    emri_filmit varchar(255) not null,
    viti_publikimit int,
    vleresimi decimal,
    zhanri varchar(255) not null,
)

create table bookings(
	id int primary key AUTO_INCREMENT,
    data varchar(255) not null,
    movieID int,
    FOREIGN KEY (movieID) 
    REFERENCES movies(id)
	userID int,
    FOREIGN KEY (userID) 
    REFERENCES users(id),
    ulesja varchar(255) not null,
    nr_tiketave int not null
);