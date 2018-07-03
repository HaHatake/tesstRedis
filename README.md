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
 sudo curl https://raw.githubusercontent.com/HaHatake/tesstRedis/master/rankingtest.php  

php -f rankingtest.php  
>output
 <!DOCTYPE html>
<html>
<body>
array(10) {
  ["Mary"]=>
  float(55)
  ["John"]=>
  float(20)
  ["Yuu"]=>
  float(15)
  ["Emily"]=>
  float(15)
  ["Ken"]=>
  float(12)
  ["Tarou"]=>
  float(6)
  ["Hanako"]=>
  float(6)
  ["Tanaka"]=>
  float(3)
  ["Natary"]=>
  float(2)
  ["Sato"]=>
  float(1)
}
<hr/>Mary=1<br/>John=2<br/>Yuu=3<br/>Emily=3<br/>Ken=5<br/>Tarou=6<br/>Hanako=6<br/>Tanaka=8<br/>Natary=9<br/>Sato=10<br/></body>
</html>
