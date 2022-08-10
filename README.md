## How to use
Run this program as follows:
```
$ git clone https://github.com/turashrocks/server-docker-lara8-php7.4.git
$ cd server-docker-lara8-php7.4
$ docker-compose up -d --build
$ docker-compose exec laravelup ash
# In the laravel container:
$ 
$ sh -x ../laravelup_build.sh
```

And then see http://localhost:8080
You can see laravel is working on docker there.

http://localhost:7000/
Phpmyadmin running
root, root

file 'tmss-test.post_collection.json' contains the API endpoints which could be run in Postman