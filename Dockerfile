FROM php:apache

RUN apt-get update
RUN apt-get install mysql-server php5-mysql

EXPOSE 80

CMD ["/usr/sbin/sshd","-D"]