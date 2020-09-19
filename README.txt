- Enviroment: 
        Nginx: latest
        Mysql: 5.7
        PHP: 5
- Change the server name of your database in src/Core/DBConnect.php -> $serverName
- Include Database at: 0.0.0.0:8081 (phpmyadmin)
- The base url is : localhost:8080/index.php?url=Game
- The database is in src/Public/game.sql
- Run project with the command line: 
        docker-compose up -d