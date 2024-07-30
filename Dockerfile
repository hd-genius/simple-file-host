FROM php:8.2-cli
EXPOSE 8080
COPY . /usr/src/simple-file-host
WORKDIR /usr/src/simple-file-host
CMD [ "php", "-S", "localhost:8080", "-t", "." ]
