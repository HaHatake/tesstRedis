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
  add this word :extension=redis.so  
 php -m | grep redis  
 output : redis    
 
 systemctl start httpd
 systemctl start redis  
 
 
 cd /var/www/html/  
 sudo curl  
