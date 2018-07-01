1. Run " composer update "
2. Copy .env.example & rename to .env
3. Run  " php artisan key:generate "
4. Add your server DB_DATABASE name, DB_USERNAME and DB_PASSWORD
5. Run  " php artisan key:generate "
6. Run  " php artisan migrate "
7. Run " php -S localhost:8001 "
8. Enjoy :)

9. In case you received this error: "Unable to guess the mime type as no guessers are available (Did you enable the php_fileinfo extension?)":

You should enable the following line in your php.ini and then restart your apache

extension=php_fileinfo.dll
Enabling mean just uncomment the line in your php.ini file

i.e., From this ;extension=php_fileinfo.dll to extension=php_fileinfo.dll





