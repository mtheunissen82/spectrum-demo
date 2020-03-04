#!/bin/bash

if [[ ! -f .env ]]; then
  echo -e "STEP: creating .env file"

  cp -v .env.example .env
  sed -i 's/DB_HOST=.*/DB_HOST=dierdemo-db/' .env
  sed -i 's/DB_DATABASE=.*/DB_DATABASE=dierdemo/' .env
  sed -i 's/DB_USERNAME=.*/DB_USERNAME=dierdemo/' .env
  sed -i 's/DB_PASSWORD=.*/DB_PASSWORD=dierdemo/' .env
  echo -e "UID=${UID}" >> .env
fi

echo -e "\nSTEP: cleaning up previous docker-compose containers"
docker-compose down

echo -e "\nSTEP: cleaning up previous database data directory"
sudo rm -rfv ./run/var/*

echo -e "\nSTEP: docker-compose build/up"
docker-compose build && docker-compose up -d

echo -e "\nSTEP: execute composer install"
docker exec laravel-dierdemo-app bash -c "composer install"

echo -e "\nSTEP: execute artisan key:generate"
docker exec laravel-dierdemo-app bash -c "php artisan key:generate"

# sleep for 10 seconds before seeding the database
echo -e "\nsleeping for 10 seconds"
sleep 10

echo -e "\nSTEP: execute artisan migrate:fresh and seed the database"
docker exec laravel-dierdemo-app bash -c "php artisan migrate:fresh --seed"
