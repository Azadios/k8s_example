FROM alpine

RUN apk update \
&&	apk	add	--no-cache	ca-certificates \
\
&&	wget -q -O /etc/apk/keys/sgerrand.rsa.pub https://alpine-pkgs.sgerrand.com/sgerrand.rsa.pub \
&&	wget https://github.com/sgerrand/alpine-pkg-glibc/releases/download/2.32-r0/glibc-2.32-r0.apk \
\
&&	apk	add	--no-cache	glibc-2.32-r0.apk \
\
&&	wget https://dl.grafana.com/oss/release/grafana-7.1.5.linux-amd64.tar.gz \
&&	tar -zxvf grafana-7.1.5.linux-amd64.tar.gz \
&&	mv /grafana-7.1.5 /grafana

EXPOSE 3000

COPY ./grafana.db /grafana/data/

WORKDIR /grafana/bin
ENTRYPOINT ./grafana-server
