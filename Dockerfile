# Patched for CVE-2026-109618 and CVE-2026-109619 (PHP2Shell).
# PHP 8.0 is end of life and will not receive this fix.
FROM --platform=linux/amd64 php:8.3.36-apache

# The monitor's RPC client requires the curl extension.
RUN apt-get update \
    && apt-get install -y --no-install-recommends libcurl4-openssl-dev \
    && docker-php-ext-install curl \
    && rm -rf /var/lib/apt/lists/*

# copy all contents to public html
COPY . /var/www/html

# entry shell
COPY entry.sh /entry.sh

# make it executable
RUN chmod +x /entry.sh

# go for it!
CMD ["/bin/bash", "/entry.sh"]