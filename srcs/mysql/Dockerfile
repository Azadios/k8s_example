FROM alpine

COPY init.sh wp.sql /

RUN apk update \
&&  apk add --no-cache  mysql \
                        mysql-client \
                        openrc \
\
&&	chmod +x /init.sh


COPY my.cnf /etc/mysql/

EXPOSE 3306
ENTRYPOINT /init.sh
