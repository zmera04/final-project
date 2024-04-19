CREATE TABLE `contactMe`
(
    `id`            int(11) NOT NULL AUTO_INCREMENT,
    `lastName`      varchar(254) NOT NULL,
    `email`         varchar(254) NOT NULL,
    `message`       varchar(254) NOT NULL,
    primary key (`id`)
);

CREATE TABLE `resume`
(
    `id`            int(11) NOT NULL AUTO_INCREMENT,
    `source`      varchar(254) NOT NULL,
    primary key (`id`)
);

insert into resume(source)
values("img/resume 2023-4.pdf");