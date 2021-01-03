FROM alpine

COPY init.sh /

RUN	apk update \
&&	apk add --no-cache	openssl \
						vsftpd \
						openrc \
\
&& adduser -D admin \
&& echo 'admin:admin' | chpasswd \
&& mkdir /home/usr \
\
&& openssl req \
			-out	/etc/ssl/certs/ftps.crt \
			-keyout /etc/ssl/certs/ftps.key \
			-newkey rsa:2048 \
			-sha256 \
			-nodes \
			-x509 \
			-subj '/CN=chaako' \
\
&&	chmod +x /init.sh

COPY vsftpd.conf /vsftpd.conf

EXPOSE 21 21021

ENTRYPOINT /init.sh
