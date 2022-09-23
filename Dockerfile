FROM php:7.4-apache

RUN apt-get update && apt-get install -y zlib1g-dev libpng-dev
RUN docker-php-ext-install mysqli
RUN docker-php-ext-install gd