#!/bin/bash

# Load environment variables from .env file
source .env
echo "PROJECT_NAME: $PROJECT_NAME"
echo "PROJECT_BASE_URL: $PROJECT_BASE_URL"

docker exec -it  "${PROJECT_NAME}_certbot" bash

#certonly --manual --preferred-challenges dns-01 --agree-tos -d "${DOMAIN}" -d "*.${DOMAIN}" --server https://acme-v02.api.letsencrypt.org/directory

docker run -it --rm --name certbot \
-v "/etc/letsencrypt:/etc/letsencrypt" \
-v "/var/lib/letsencrypt:/var/lib/letsencrypt" \
certbot/dns-digitalocean \
certonly --preferred-challenges dns-01 --agree-tos --register-unsafely-without-email --dns-digitalocean --dns-digitalocean-credentials $PWD/.secrets/certbot/digitalocean.ini --dns-digitalocean-propagation-seconds 60 -d "${DOMAIN}" -d "*.${DOMAIN}"

