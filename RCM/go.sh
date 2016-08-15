#!/bin/sh

RED='\033[1;31m' 
BLUE='\033[1;34m'
GREEN='\033[1;32m'
NC='\033[0m' 

DIRFILE=`readlink -e "$0"`
CURFILE=`basename "$DIRFILE"`
CURDIR=`dirname "$DIRFILE"`

echo "\n"
echo "${RED} Devoleped by LARocca${NC}"
echo " Email: la.rocca@yandex.com"
echo "${BLUE} Skype: larocca2012${NC}"
php -q -f $CURDIR/ReCodMod/functions/cleaner.php 
sleep 1
setterm -term linux -back black
echo "${GREEN}"
while (true) 
do
php -q -f $CURDIR/w.php 
done;
echo "${NC}"
