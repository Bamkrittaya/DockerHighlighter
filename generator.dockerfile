FROM php:7.4-cli
COPY . /usr/src/myapp
WORKDIR /usr/src/myapp
RUN apt-get update && apt-get install -y inotify-tools
CMD ["./generator.sh"]
