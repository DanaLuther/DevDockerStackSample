# Converting your DEV Environment to a Docker Stack

To start this basic LEMP stack:\
```docker stack deploy -c docker-compose.yml phpworld```

To take the stack down:\
```docker stack rm phpworld```

Sample Web Folder:
 * _public_html/_ : This folder is mapped to the container and will update as you modify the files within it directly.

Sample docker-compose files:
 * _docker-compose.yml_ : Basic LEMP stack
 * _docker-compose-clientA.yml_ : Modified stack for client with alternate php version
 * _docker-compose-custom-php.yml_ : Modified stack with custom php image that has the MySQLi extension enabled
 * _docker-compose-with-selenium.yml_ : LEMP stack with services defined for chrome and firefox selenium images
 * _docker-compose-portainer.yml_ : The Portainer stack for managing docker stack via gui

Sample custom php extension enabled Dockerfiles:\
(For build instructions, see the Readme file in the php-image-options folder. Alternately you can pull the images from here: https://hub.docker.com/r/dhluther/php/ )
 * _php-image-options/Dockerfile-7-fpm_ : Base PHP 7-fpm image with the MySQLi extension enabled
 * _php-image-options/Dockerfile-7-fpm-all-the-goodies_ : Base PHP 7-fpm image with the MySQLi and iconv
 

 
Additional Files:
 * _mysite.conf_ : Sample nginx configuration for this application
 * _mysite2.conf_ : Sample nginx configuration with alternate default index file
 * _root_db_password.txt_ : Secret file for the mysql image
 * _composer.json_ : Sample composer file 
 
### Note: Want to use composer? It doesn't need to be in your stack or installed locally
See https://store.docker.com/images/composer \
```docker run --rm -it --volume $PWD:/app composer install```
