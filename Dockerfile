FROM ubuntu

RUN apt-get update
RUN apt-get install -y openssh-server
RUN apt-get install -y apache2
RUN apt-get install -y mariadb-server

EXPOSE 80

CMD ["/usr/bin/ssh", "-D", "-e"]