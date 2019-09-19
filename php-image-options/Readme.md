# Building Your Own Image from this directory

## PHP 7.0 FPM w/ MySQL
```docker image build -f Dockerfile-7-fpm -t dhluther/php:7-fpm-mysql .```

## PHP 7.0 FPM w/ MySQL and additional libraries
```docker image build -f Dockerfile-7-fpm-all-the-goodies -t dhluther/php:7-fpm-all-the-goodies .```

## PHP 8.0 FPM w/ MySQL
```docker image build -f Dockerfile-rc-fpm -t dhluther/php:rc-fpm-mysql .```