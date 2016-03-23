# cloudwick-name-server

This is a server to display a list of the names using php and mysql.

## Install

### Prerequisites

On Ubuntu you can simply run `apt-get install lamp-server^` to pull in all the necessary dependencies.

The install script simply copies everything to /var/www/html/ but for now you should manually set up a MySQL database called "names" with a table "user" and column "name". You can set up the database user/password combo as you like: we used `httpd` `aspirine2710`.
