docker run ^
    -d ^
    --rm ^
    --name KJC_Pizza ^
    --mount "type=bind,source=%cd%/FrontEnd,target=/var/www/html" ^
    -p 80:80 ^
    php:apache
