# tesstRedis

ty for this site
https://sys-guard.com/post-16250/


#This is sample program for testing redis users.

#we should do this action before test redis.
 sudo yum -y update
 sudo yum -y install redis --enablerepo=epel
 sudo yum -y install php
 sudo yum -y install php-pecl-redis --enablerepo=epel
 sudo vi /etc/php.ini
  > extension=redis.so
 php -m | grep redis
 output 
  redis
  
 cd /var/www/html/
 curl
