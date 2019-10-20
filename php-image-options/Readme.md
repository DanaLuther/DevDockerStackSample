# Building Your Own Image

PHP 7.3 FPM w/ MySQL
```docker image build -f Dockerfile-7-fpm -t dhluther/php:7.3-fpm-mysql .```

```docker image build -f Dockerfile-7-fpm-all-the-goodies -t dhluther/php:7.3-fpm-all-the-goodies .```

The following must be run from the parent directory to have access to the necessary files
```docker image build -f php-image-options/Dockerfile-7-bundled --target=phpworld_php -t dhluther/php:phpworld-demo .```
```docker image build -f php-image-options/Dockerfile-7-bundled --target=phpworld_nginx -t dhluther/nginx:phpworld-demo .```