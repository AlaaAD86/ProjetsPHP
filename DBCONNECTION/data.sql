CREATE TABLE phpusers (
user_id int(100) NOT null PRIMARY KEY AUTO_INCREMENT,
    user_first varchar(250) NOT null,
    user_last varchar(250) NOT null,
    user_email varchar(250) NOT null,
    user_uid varchar(250) NOT null,
    user_pwd varchar(250) NOT null 
);

INSERT INTO phpusers (user_first, user_last, user_email, user_uid, user_pwd)
VALUES ('Daniel', 'Nielsen', 'usemmtuts@gmail.com', 'Admin', 'test123');

INSERT INTO phpusers (user_first, user_last, user_email, user_uid, user_pwd)
VALUES ('Alaa', 'AD', 'alaaad@gmail.com', 'Admin', 'alaa2020');