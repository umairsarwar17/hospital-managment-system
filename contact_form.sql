SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;

CREATE TABLE`contact_form`(
    `id` int(100)NOT NULL;
    `name`varchar(100)NOT NULL;
    `email`varchar(100)NOT NULL;
    `number`varchar(11)NOT NULL;
    `date`datetime NOT NULL;
    `number`varchar(1000)NOT NULL;
) ENGINE=Inn0DB DEFAULT CHARSET=urf8mb4;


ALTER TABLE=`CONTACT_FORM`
ADD PRIMARY KEY (`id`);
ALTER TABLE=`contact_form`
MODIFY `id` int (100) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
COMMIT;