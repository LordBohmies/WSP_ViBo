# WSP_ViBo

Testar. 1 2 3

CREATE TABLE Users(
 ID int(8) PRIMARY KEY AUTO_INCREMENT,
 Username varchar(50) UNIQUE NOT NULL,
 First_name varchar(50) NOT NULL,
 Last_name varchar(50) NOT NULL,
 Mail varchar(100) UNIQUE NOT NULL,
);

CREATE TABLE Posts (
 ID int(8) PRIMARY KEY AUTO_INCREMENT,
 User_ID int(8) NOT NULL,
 Headline varchar(100) NOT NULL,
 Text text(500) NOT NULL,
 Likes int(8) DEFAULT '0',
 Creation_time timestamp DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE Comments (
 ID int(8) PRIMARY KEY AUTO_INCREMENT,
 Post_ID int(8) NOT NULL,
 User_ID int(8) NOT NULL,
 Text text(500) NOT NULL,
 Likes int(8) DEFAULT '0',
 Creation_time timestamp DEFAULT CURRENT_TIMESTAMP
);

ALTER TABLE Posts
ADD FOREIGN KEY (User_ID) REFERENCES Users(ID);
ALTER TABLE Comments
ADD FOREIGN KEY (User_ID) REFERENCES Users(ID);
ALTER TABLE Comments
ADD FOREIGN KEY (Post_ID) REFERENCES Posts(ID);

INSERT INTO Users (Username, First_name, Last_name, Mail) VALUES 
('Ernst','Anders','Fossmo','ernst@fossmo.se'), 
('Bar','Bengt','Harald','bengt.harald@mail.com'),
('Cilla','Cecilia','Karlsson','cilla@mail.se'),
('DavidA','David','Andersson','davida90@mail.com'),
('Evil','Eva','Östberg','ostberg@mail.com');
