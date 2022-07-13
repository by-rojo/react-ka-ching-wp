FROM wordpress:latest

RUN apt-get update -y

RUN apt-get upgrade -y

RUN curl -fsSL https://deb.nodesource.com/setup_16.x | bash -

RUN apt-get install -y nodejs

RUN mkdir /var/www/.npm

RUN chown -R 33:33 "/var/www/.npm"

RUN chown www-data:www-data themes
