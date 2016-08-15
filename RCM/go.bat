@echo off
color 0A

echo .
echo .
echo .
echo        Devoleped by LARocca
echo        Email: la.rocca@yandex.com
echo        Skype: larocca2012
echo .

.\php\php.exe -f ReCodMod\functions\cleaner.php
:1
.\php\php.exe -f w.php
goto 1
