net stop mysql
cd \php
taskkill /f /im php-cgi.exe
cd \nginx
nginx -s stop
pause