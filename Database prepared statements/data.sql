CREATE TABLE allusers (
user_id int(100) NOT null PRIMARY KEY AUTO_INCREMENT,
    user_first varchar(250) NOT null,
    user_last varchar(250) NOT null,
    user_mail varchar(250) NOT null,
    user_uid varchar(250) NOT null,
    user_pwd varchar(250) NOT null 
);

INSERT INTO allusers (user_first, user_last, user_mail, user_uid, user_pwd)
VALUES ('Daniel', 'Nielsen', 'usemmtuts@gmail.com', 'Admin', 'test123');

INSERT INTO allusers (user_first, user_last, user_mail, user_uid, user_pwd)
VALUES ('john', 'Doe', 'jd@gmail.com', 'member', 'test123');

