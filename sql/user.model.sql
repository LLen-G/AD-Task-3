CREATE TABLE public.user_info (
    id int NOT NULL,
    username varchar(256) NOT NULL,
    password varchar(256) NOT NULL,
    first_name varchar(256) NOT NULL,
    middle_name varchar(256),
    last_name varchar(256) NOT NULL,
    email varchar(256) NOT NULL
);