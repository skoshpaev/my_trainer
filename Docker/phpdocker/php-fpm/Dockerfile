FROM phpdockerio/php72-fpm:latest
WORKDIR /var/www

# Fix debconf warnings upon build
ARG DEBIAN_FRONTEND=noninteractive

# Install selected extensions and other stuff
RUN apt-get update \
    && apt-get -y install  php7.2-pgsql php-redis php7.2-sqlite3 php-xdebug php7.2-bcmath php7.2-bz2 php7.2-dba php7.2-enchant php7.2-gd php7.2-gmp php-igbinary php-imagick php7.2-imap php7.2-interbase php7.2-intl php7.2-ldap php-msgpack php7.2-odbc php7.2-phpdbg php7.2-pspell php-raphf php7.2-recode php7.2-soap php-ssh2 php7.2-sybase php-tideways php7.2-tidy php7.2-xmlrpc php7.2-xsl php7.2-mysql php-yaml \
    && apt-get clean; rm -rf /var/lib/apt/lists/* /tmp/* /var/tmp/* /usr/share/doc/* \

