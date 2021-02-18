# InteGento docker compose

Quick & Dirty way to work with Magento 2.

## How to install

- Install docker & docker-compose.
- Create a folder for your project and open your terminal in it.
- Clone your project into a htdocs subfolder.
- Copy the `docker-compose.yml` file and the `docker/` folder.
- In `docker-compose.yml`, replace "db-myproject" by your project name.
- Create a `.env` file with your MySQL settings.
- Start env : `docker-compose up -d`;
- Stop : `docker-compose stop`;
- SSH to a machine : `sudo docker exec -it myproject_php_1 /bin/bash`
- Go to http://localhost:8080.

## `.env` file :

```
MYSQL_ROOT_PASSWORD=root
MYSQL_DATABASE=myproject
MYSQL_USER=myproject
MYSQL_PASSWORD=myproject
```
