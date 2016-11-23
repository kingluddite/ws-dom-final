
#!/bin/sh
# backs up wordpress database and files

set -e

###### set your variables
BLOGDIR="/users/philiphowley/sites/ws-dom-final" ## location of blog on server
BUDIR="/users/philiphowley/blogbu" ## location of backups on server
DBNAME='ws_dom_final' ## name of your blog's database
DBUSER='root' ## database username
DBPW='root' ## database password
### cron is funky about its PATH, so add paths to all commands here:
# Path for homebrew (/usr/local/[s]bin)
export PATH=/usr/local/bin:/usr/local/sbin:$PATH

# Use MAMP version of PHP
PHP_VERSION=`ls /Applications/MAMP/bin/php/ | sort -n | tail -1`
export PATH=/Applications/MAMP/bin/php/${PHP_VERSION}/bin:$PATH
export PATH=/Applications/MAMP/Library/bin:$PATH

### set date & time
datetime=`date "+%Y%m%d-%H%M"`
echo $datetime

### Backup database in BUDIR
echo "Creating db backup..."
mysqldump --user $DBUSER --password=$DBPW $DBNAME | gzip > $BUDIR/wpdb-$datetime.sql.gz
echo "Done with db backup"

### Backup files into BUDIR
echo "Creating wp file backup..."
tar -czf $BUDIR/wpfiles-$datetime.tar.gz $BLOGDIR 
echo "Done with wp file backup"

### Delete backups over three days old (adjust depending on need/space)
echo "Deleting backups over three days old..."
find $BUDIR -mtime +3 -exec rm -f {} \;
echo "All Done";
