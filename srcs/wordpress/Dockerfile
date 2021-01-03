FROM alpine

COPY wp-config.php /

RUN apk update \
&&  apk add --no-cache  php7 \
                        php7-cli \
                        php7-curl \
                        php7-fpm \
                        php7-cgi \
                        php7-json \
                        php7-mysqli \
                        php7-mbstring \
                        mysql \
                        mysql-client \
\
&&  wget -c https://wordpress.org/latest.tar.gz \
&&  tar -xf latest.tar.gz \
&&  mv /wp-config.php /wordpress/

EXPOSE 5050
ENTRYPOINT ["php"]
CMD ["-S", "0.0.0.0:5050", "-t", "/wordpress"]
