# Building Your Own Image

PHP 8.4 FPM w/ MySQL
```docker image build -f Dockerfile-8-fpm -t dhluther/php:8.4-fpm-mysql .```

```docker image build -f Dockerfile-8-fpm-all-the-goodies -t dhluther/php:8.4-fpm-all-the-goodies .```

The following must be run from the parent directory to have access to the necessary files
```docker image build -f php-image-options/Dockerfile-8-bundled --target=phptek_php -t dhluther/php:phptek-demo .```
```docker image build -f php-image-options/Dockerfile-8-bundled --target=phptek_nginx -t dhluther/nginx:phptek-demo .```