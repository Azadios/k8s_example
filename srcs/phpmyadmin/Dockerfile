FROM alpine

RUN apk update; \
	apk add --no-cache	php7 \
						php7-fpm \
						php7-opcache \
						php7-gd \
						php7-mysqli \
						php7-zlib \
						php7-curl \
						php7-mbstring \
						php7-json \
						php7-session \
\
&&	wget -c https://files.phpmyadmin.net/phpMyAdmin/4.9.5/phpMyAdmin-4.9.5-english.tar.xz \
&&	tar -xf /phpMyAdmin-4.9.5-english.tar.xz \
&&	mv phpMyAdmin-4.9.5-english phpMyAdmin

COPY config.inc.php /phpMyAdmin/

EXPOSE 5000
ENTRYPOINT ["php"]
CMD ["-S", "0.0.0.0:5000", "-t", "/phpMyAdmin/"]
