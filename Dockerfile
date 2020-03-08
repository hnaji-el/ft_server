FROM debian:buster

RUN apt-get update

RUN apt-get install -y nginx vim wget lsb-release gnupg libnss3-tools

RUN echo "daemon off;" >> /etc/nginx/nginx.conf

RUN apt-get install -y php php-fpm php-mysql php-gd \
	php-cli php-curl php-json php-mbstring php-zip \
	php-xml php-pear php-gettext php-cgi

RUN export DEBIAN_FRONTEND=noninteractive; \
	wget https://dev.mysql.com/get/mysql-apt-config_0.8.14-1_all.deb; \
	echo "mysql-apt-config mysql-apt-config/select-server select mysql-5.7" | /usr/bin/debconf-set-selections; \
	dpkg --install  mysql-apt-config_0.8.14-1_all.deb; \
	apt-get update; \
	apt-get -y install mysql-server; \
	chown -R mysql: /var/lib/mysql; \
	rm -rf mysql-apt-config_0.8.14-1_all.deb

RUN wget https://files.phpmyadmin.net/phpMyAdmin/5.0.1/phpMyAdmin-5.0.1-all-languages.tar.gz; \
	tar xvf phpMyAdmin-5.0.1-all-languages.tar.gz; \
	mv phpMyAdmin-5.0.1-all-languages /var/www/html/phpmyadmin; \
	rm -rf phpMyAdmin-5.0.1-all-languages.tar.gz

RUN wget https://wordpress.org/latest.tar.gz; \
	tar -xvf latest.tar.gz ;\
	mv wordpress /var/www/html/;\
	rm latest.tar.gz

COPY ./srcs/localhost.crt /root/
COPY ./srcs/localhost.key /root/
COPY ./srcs/wp-config.php /var/www/html/wordpress
COPY ./srcs/config.inc.php /var/www/html/phpmyadmin/
COPY ./srcs/default /etc/nginx/sites-available/default
COPY ./srcs/index.php /var/www/html
COPY ./srcs/dbhamid.sql /root/
COPY ./srcs/script.sh /

EXPOSE 80 443

ENTRYPOINT ["./script.sh"]
