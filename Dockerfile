FROM wordpress:latest

RUN apt-get update -y

RUN apt-get upgrade -y

RUN curl -fsSL https://deb.nodesource.com/setup_18.x | bash -

RUN apt-get install -y nodejs