CREATE DATABASE registration;

CREATE TABLE movies(
    id INT PRIMARY KEY AUTO_INCREMENT,
    title VARCHAR(100) NOT NULL,
    year INT,
    image VARCHAR(1000)
);

INSERT INTO movies (title, year, image)
VALUES ("Star Wars", 2004, "https://geekninja.com.br/wp-content/uploads/2022/10/star-wars.jpg"),
       ("Pirates of the Caribbean", 2003, "https://www.sociedadenerd.com.br/wp-content/uploads/2021/09/piratas-do-caribe-ordem-para-assistir.jpg"),
       ("Avatar", 2009, "https://veja.abril.com.br/wp-content/uploads/2017/04/avatar_750.jpg?quality=70&strip=info&w=750&resize=1200,800"),
       ("Top Gun", 2022, "https://veja.abril.com.br/wp-content/uploads/2022/05/ABRE-2-TOP-GUN-MAVERICK-45.jpg.jpg"),
       ("The Lord of the Rings", 2002, "https://criticalhits.com.br/wp-content/uploads/2022/08/O-Senhor-dos-Aneis.jpg"),
       ("Harry Potter", 1998, "https://criticalhits.com.br/wp-content/uploads/2022/01/harry-potter-e-o-prisioneiro-de-azkaban-1-910x512.jpg"),
       ("Back to the Future", 1998, "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRTzcT88fShmd3BregMo4I7y_wonnB1EVVf5w&usqp=CAU");
       