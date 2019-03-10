Community
============
Server Status now has a community forum open to everyone. https://www.pilabs.io/forum/

ServerStatus
============

ServerStatus is based off [BlueVM's](http://uptime.bluevm.com/) Uptime Checker script, [original download and information](http://www.lowendtalk.com/discussion/comment/169690#Comment_169690).

It uses Bootstrap for theming and progress bars.

You can currently see Load, RAM (free), HDD (free) statistics, and if it is online or not.

Screenshot
============
![Screenshot](http://www.mojeda.com/wp/wp-content/2013/04/serverupbigthemes.png)
![Mobile Screenshot](http://www.mojeda.com/wp/wp-content/2013/04/serverupthemes.png)

Installation
============

1. Create a database with a user.
2. Import the servers.sql file in in the /sql/ folder, to populate the database.
3. Configure /includes/config.php with the database and user information.
4. Copy uptime.php to any server you want to monitor. This needs to be publicly accessible.
5. Insert an entry into the database.
  * name - The name of your server.
  * url - The URL path to the uptime.php file e.g. http://domain.tld/uptime.php
  * location - Where is your server physically located?
  * host - The name of the host of which your server is hosted by.
  * type - What type of server is this? DNS, SQL, Apache/nginx, etc.

Requirements
============

**Remote Servers**:
* PHP, currently php_exec needs to be enabled in order to get the uptime.
* Web Server (lighttpd, apache2, nginx, etc.)
* You do **NOT** need a database running on the remote servers.

**Master Server**:
* PHP7 + PHP7_CURL
* Web Server (lighttpd, apache2, nginx, etc.)
* mySQL server unless you choose to use a remote mySQL server.
