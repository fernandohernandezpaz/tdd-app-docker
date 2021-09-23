# TDD APP IN DOCKER #
TDD App of Laravel in docker

# Instructions #

## Create the container ##
first go to "src" directory and execute the next command
- Run ```docker-compose up```

## Create a copy of .env.example ##
- ```cp .env.example .env```

## Next config after create the .env file ##
* Database connection(taked from docker-compose)
  * DB_CONNECTION=pgsql
  * DB_HOST=laravel-pgsql
  * DB_PORT=5432
  * DB_DATABASE=pgdb
  * DB_USERNAME=tdduser
  * DB_PASSWORD=tdduser123
* docker exec -it -u 1000:1000 tdd-app sh -c "php artisan key:generate"
* docker exec -it -u 1000:1000 tdd-app sh -c "php artisan migrate:fresh --seed"

More detail about execute command out the container go to the end of the file

## Run the container build ##
- Run ```docker-compose up``` or ```docker-compose up -d```

## Run the laravel server  ##
- Run ```docker exec -it -u 1000:1000 tdd-app sh -c "php artisan serve --host=0.0.0.0 --port=8000"``` or 
```docker exec -it -u 1000:1000 tdd-app sh``` and when you get inside run ```php artisan serve --host=0.0.0.0 --port=8000"```

## Create test  ##
-  docker exec -it -u 1000:1000 tdd-app sh -c "php artisan make:test TestNameFile"

## Test a Test Class ##
- docker exec -it -u 1000:1000 tdd-app sh -c "./vendor/bin/phpunit --filter QuotesManagmentTest"

OR 

- docker exec -it -u 1000:1000 tdd-app sh -c "./vendor/bin/phpunit --filter method_name"


## Execute command out the container after build it ##
- docker exec -it -u 1000:1000 tdd-app sh -c "command"
  - example: docker exec -it -u 1000:1000 tdd-app sh -c "php artisan make:model Quotes --migration"

