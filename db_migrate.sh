#!/usr/bin/env bash
source db_migration_vars.sh


#echo "$ptiMySqlUser";
#echo $ptiMySqlPassword;

red=`tput setaf 1`
green=`tput setaf 2`
reset=`tput sgr0`


echo "${green}Dropping school DB${reset}";
mysqladmin -f -u$ptiMySqlUser -p$ptiMySqlPassword drop school;


echo "${green}Creating school DB${reset}";
mysqladmin -f -u$ptiMySqlUser -p$ptiMySqlPassword create school;

# needs pv
# apt-get install pv

echo "${green}Load pre sql file - terry_db.sql${reset}";
pv $homeDir/terry_db.sql | mysql -u$ptiMySqlUser -p$ptiMySqlPassword school;

if [[ $? -ne 0 ]] ; then
	exit 1
fi

