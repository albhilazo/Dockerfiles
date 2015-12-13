#!/bin/bash

# Change DB name
dbname=mydb

# Don't change this path
loadpath=/var/lib/mysql-files

for file in $loadpath/*; do
    mysqlimport $dbname $file
done

exit 0
