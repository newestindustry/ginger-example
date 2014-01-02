ginger-example
==============

Example implementation for the ginger framework: https://github.com/newestindustry/ginger-rest

How to
======

    git clone https://github.com/biggingernerd/ginger-example.git

Point your apache or nginx vhost to ginger-example/public

Use the following for url rewriting in nginx: 

    location / {
        try_files $uri $uri/ /index.php?$args;
    }

Run composer install

Go to http://yourhost/ to see it working!

There is a sample resource that has all basic http methods:

    GET /sample/
    GET /sample/key/value/and/stuff
    POST /sample/
    PUT /sample/key/value/and/stuff
    DELETE /sample/key/value/and/stuff
