FROM node:15.2-alpine as node
FROM nginx:latest
SHELL ["/bin/bash", "-oeux", "pipefail", "-c"]

ENV TZ=UTC

RUN apt-get update && \
  apt-get install -y g++ tzdata && \
  cp /usr/share/zoneinfo/Asia/Tokyo /etc/localtime

# node command
COPY --from=node /usr/local/bin /usr/local/bin
# npm command
COPY --from=node /usr/local/lib /usr/local/lib
# nginx config file
COPY ./default.conf /etc/nginx/conf.d/default.conf
COPY ./nginx.conf /etc/nginx/nginx.conf

WORKDIR /var/www/html