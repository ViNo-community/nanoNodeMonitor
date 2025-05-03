# apache with php base image 
FROM --platform=linux/amd64 php:8.0-apache

# copy all contents to public html
COPY . /var/www/html

# entry shell
COPY entry.sh /entry.sh

# make it executable
RUN chmod +x /entry.sh

# go for it!
CMD ["/bin/bash", "/entry.sh"]