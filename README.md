# CRUD 

Sistema simples de CRUD feito em PHP com MySQLi sem extenção foi usado na aplicação.
  - Bootstrap v4
  - JQuery
## Versões
 - PHP 7.3.9
 - MySQL 8.0.16
### Installation

Criando o schema:
```sql
CREATE DATABASE `base` /*!40100 DEFAULT CHARACTER SET utf8 */ /*!80016 DEFAULT ENCRYPTION='N' */;
```
Criar a tabela Pessoa

```sql
CREATE TABLE `pessoa` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(45) NOT NULL,
  `data_nascimento` date DEFAULT NULL,
  `email` varchar(45) NOT NULL,
  `telefone` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=34 DEFAULT CHARSET=utf8;

```

subindo a aplicação...

```sh
php -S localhost:8000 -t public
```

alterar os parametros de configuração na pasta config/init.php de acordo com os dados do seu banco de dados mysql
```sh
// credenciais de acesso ao MySQL
define('MYSQL_HOST', '');
define('MYSQL_USER', '');
define('MYSQL_PASS', '');
define('MYSQL_PORT', '');
define('MYSQL_DBNAME', '');
```
License
----
MIT
**Free Software, Hell Yeah!**


   
