Dear reader & future me,
"May your words be strong but honest. May they deliver me from my mistakes and enlighten my path so I may avoid my foolishness. But do not allow yourself to venture too much on the path of criticism, cause I am.. as you may have been... a small baby dung beetle.. still unsure what the true difference between soil and shit is. 
Namaste!"


1. Run " composer update "
2. Copy .env.example & rename to .env
3. Run  " php artisan key:generate "
4. Add your server DB_DATABASE name, DB_USERNAME and DB_PASSWORD
5. Run  " php artisan key:generate "
6. Run  " php artisan migrate "
7. Run " php artisan serve "
8. Enjoy :)

9. In case you received this error: "Unable to guess the mime type as no guessers are available (Did you enable the php_fileinfo extension?)":

You should enable the following line in your php.ini and then restart your apache

extension=php_fileinfo.dll
Enabling mean just uncomment the line in your php.ini file

i.e., From this ;extension=php_fileinfo.dll to extension=php_fileinfo.dll





