FROM alpine

RUN \
apk update;\
apk add --no-cache	openrc \
					openssh \
					openssl \
					nginx \
\
&& mkdir -p	/run/nginx \
			/var/run/sshd \
&& chown -R nginx:www-data /var/lib/nginx \
\
&& adduser -D admin \
&& echo "admin:admin" | chpasswd \
&& ssh-keygen -A \
&& openssl req \
			-out	/etc/ssl/certs/localhost.crt \
			-keyout /etc/ssl/certs/localhost.key \
			-newkey rsa:2048 \
			-sha256 \
			-nodes \
			-x509 \
			-subj '/CN=chaako' \
\
&& echo "Sincerely, chaako." >> /var/lib/nginx/html/index.html

COPY nginx.conf /etc/nginx/nginx.conf
COPY init.sh /init.sh

EXPOSE 80 443 22

ENTRYPOINT ["sh"]
CMD ["/init.sh"]
