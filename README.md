# ReCodMod-[RCM]-Admintool

 Admintool for (COD1, COD1:UO, COD2, COD4 & [COD4X 1.8], COD5 all patches)
(65 and more chat commands in one)

New final version RCM[V.3.x.x] working in all GNU/linux systems and Windows with supporting (PHP 5.2 <= 5.3.0, PHP 7)

This version not compactible for x2.2 version update, compactible only |RCM/ReCodMod/databases/| files(ban database, and another sql bases)

#WHAT'S NEW? WHEN COME OUT?

Come out 6.-14.August /2016

+ Support gmail email service for !report and !support
+ Included rcm admintool auto update. 
+ New commands: 
+ !nextmap - showing next map
+ !map - map list.
+ !maprotate - load next map.
+ !refresh |banlist| |top| - update banlist or top for website (banlist and top autoupdate between 10 minutes)
+ !update - manual RCM - ReCodMod admintool manual update.
+ !reload - manual RCM ADMINTOOL restart after update if chat commands not work. 
+ !rules - server rules list.
+ !date or !time - your date and time , time zone display
+ !kickall - kick all players
+ !killserver - off server
+ !logout - out from your group to user group.
+ !banall - ban all players
+ !lastban - dispplay last banned player
+ !banlist mb - banlist weight (megabytes)
+ !login -password-  or !log -password-
+ !stop -msg- | -autokick- | -autoban- | -stats- | -geo- | 
+ !run -msg- | -autokick- | -autoban- | -stats- | -geo- |
+ New geo welcome database
+ Manual ip adreses inserting for admins control. in cfg/_groups.php
+ Fixed chat gametype, ban, kick and map vote plugins!
+ New graphic FUN messages
+ Fixed game log file searching
+ Easy install, more install help messages.
+ RSS news from any website in game chat (new for message rotation)
+ Changed message rotation
+ Fixed stats loading
+ Fixed bugs for stats reading.
+ Full cod4x 1.7b and 1.8 admincontrol support.
+ !getss - all players screenshots
+ New log files archive.
+ Full support with cod1 1.1  codextended(chatcommands) 
+ Fix !list for cod1 1.1 (numbers in nickname end)
+ RCM admintool configuration control from game chat.
+ More auto answers.
+ and more....


#What it has!
+ Full administrator server control with chat commands.
+ Report and support commands system, players can sent messages from game chat to Admin @mail.
+ Ip ban tool (Example: 111.111.111.111, or range with 111.111.111.* or 111.111.*.*
+ Ban tool with ban reasons, temp ban and more!
+ Banlist !banlist
+ UNban list!
+ Messages rotation plugin with server statistics!
+ FULL Admin control with !rc command (!rc = /rcon)
+ Make players screnshots with !getss (Anticheat server or cod4x support)
+ Geo welcome messages with player city.
+ Anonymous ip auto kicker
+ Blaclisted proxy ip adress kick
+ Bad nicknames auto kicker
+ Bad words auto kicker
+ Chat flood auto kicker
+ Fast SQLite3 database
+ Players MULTI STATS SYSTEM: Kills, Deaths, Ratio, Rank, Headshots, Suicides Skill and top places
+ Permissions 12 group system: Admin, Vip, Clan Member, Member, Noob...and more (!status chat command)
+ Log system, automatic logfilepath with chat, voting, player cheat alerts, chat flood logs and help chat logs.
+ Server system info getting !sysinfo
+ web plugin, stats, server info, chat.
+ Mapvote
+ Kick vote
+ Ban vote
+ Fun messages
+ So many another plugins....

#HOW INSTALL!

#1st STEP  (only for cod1 1.1)

We need to make a couple of changes in cod1 1.1 bugged version game_mp_x86.dll (windows) and game.mp.i386.so (linux). In another version non changes.

In fact changed : to ;

Find line say: %s: %s change to say; %s; %s

Find line sayteam: %s: %s change to sayteam; %s; %s

or download it (need register) from http://recod.ru/forum/viewtopic.php?f=35&t=90&p=712#p712

and replace in your server

#2nd STEP (for all call of duty versions)
In your game server/main or mod folder config file add (example: in dedicated.cfg)
+ seta g_log "games_mp.log"
+ set g_logsync "1"

 You can check in rcontool with command g_log  and g_logsync
 
#HOW UPDATE! 

Download last day update, unarchive .zip and replace your old files with new files! (example: RCM Update [June 27, 2016].zip)
--------------------------------------------------------------
--------------------------------------------------------------
--------------------------------------------------------------
--------------------------------------------------------------
--------------------------------------------------------------
--------------------------------------------------------------
HOW INSTALL IN WINDOWS!
==============================================================
#For windows need download and unarchive this archive RCM-Admintool-WINDOWS.exe

#Need edit all_connection.php for RCM AdminMod working
//Edit first this file for working

Edit this file from cfg/_connection.php

Important factor FOR $mplogfile line!

Example for windows with double slash: $mplogfile = "c:\\\servers\\\cod1\\\cod1.1\\\main\\\games_mp.log"

//Another two you can edit later

all_settings.php and all_groups_control.php

# All installed. Lets starting, all messages from your game server you see in RCM terminal.
Press this file ->  go.bat

--------------------------------------------------------------
--------------------------------------------------------------
--------------------------------------------------------------
--------------------------------------------------------------
--------------------------------------------------------------
--------------------------------------------------------------

HOW INSTALL IN GNU/LINUX (DEBIAN, UBUNTU..) WITH PHP5.4.x or PHP7.x SUPPORT!
==============================================================
#Install needed php7.0 or 5 and up and modules for it( if you install php5 replace in command line php7.0 to php5)

sudo apt-add-repository ppa:ondrej/php

sudo apt-get update

sudo apt-get install php7.0 

sudo apt-get install php7.0-sqlite3

sudo apt-get install php7.0-curl

sudo apt-get install php7.0-mbstring

# Open temp folder
cd /tmp

# Download Admin Mod from GitHub
sudo wget https://github.com/EXRecod/ReCodMod-RCM-Admintool/archive/master.zip

# Make folders
sudo mkdir /opt/rcm/myserver

# Install zip archivator
sudo apt-get install unzip

#Unpack to folder
sudo unzip master.zip -d /tmp/

#go to unarchived folder
cd /tmp/ReCodMod-RCM-Admintool-master/

#rename RCM folder to your (myserver) name without symbols - example: NexonRifles
sudo mv RCM myserver 

#Check your renamed folder, if all ok, you can see README.md and yOur renamed folder
ls

# myserver change to your, when you changed it before
sudo cp -a myserver  /opt/rcm/

# go to myserver, when you changed it before
cd /opt/rcm/myserver/cfg/

#Need edit all_connection.php for RCM AdminMod working
//Edit first this file for working

sudo nano all_connection.php

//Another two you can edit later

sudo nano all_settings.php

sudo nano _groups.php

# go to myserver, when you changed it before
cd /opt/rcm/myserver/

# All installed. Lets starting, all messages from your game server you see in RCM terminal. In 
sudo sh go.sh

--------------------------------------------------------------
--------------------------------------------------------------
--------------------------------------------------------------
# For RCM starting in next time, use this steps!
# 1| go to myserver
cd /opt/rcm/myserver/
# 2| Start go.sh
sudo sh go.sh

=================================================================================================================
--------------------------------------------------------------
--------------------------------------------------------------
--------------------------------------------------------------
--------------------------------------------------------------
--------------------------------------------------------------
--------------------------------------------------------------
ALL CHAT COMMANDS!
=================================================================================================================
+ + Stats System commands!

!stats - Your stats.

!n - Player stats (Sample: !n 3 - where 3 is player id.

!sk - Self skill stats. Or !sk player nick - Sample - !sk [MCclan]Destroyer.

!top - top 5 players. Or. !top 34 - where 34, is for search who player has 34 place on top, or !top - for top5

!toprank - top skill rank 5 players +New

!rank - top 5 rank +New

!kills - top 5 kills

!bash - top 5 mellee killers +New

!heads - top 5 headshot killers +New

!grenades - top 5 grenade killers +New

!suicides - top 5 suicides +New

!worst - worst top players. 

+ + Another commands

!cmd or !help - Command list. 

!fun - fun messages list.

!num - player list with id numbers.

!kick - Kick self

!status - Your permissions :)

!geo - your geo information. Or !geo id - Sample - !geo 5

!info - recodmod information.

!help - help list, or command list.

!admin - admin information. 

!ip - your ip 

!time - server time, or player time.

!b - vote for player ban (sample: !b 3 - where 3 is player id.

!k - vote for player kick (sample: !k 3 - where 3 is player id.

!xmap map - mapvote (sample: !xmap harbor - where harbor is map.) 

!support - support message for server administaror(s) (example: !support I want contact with you admin, my fc is kvjvsnjfs)

!report - report (for cheaters, glitches e.tc) message for server administaror(s) (example: !report Bombox use aimbot, please ban him)

  + Update [June 26, 2016] - register & sysinfo

!register - players register for faster stats update and for chat anti flood ;) 

!sys - server CPU , OS and more information (more information for linux) for WIN showing only one line.

+ + Admin commands
 
!map mapname (mapname - harbor carentan pavlov depot brecourt abbey standoff logging brecourt railyard ship hurtgen)

!gt gametype (gametype - osd sd tdm gun dm htf actf hq fsd rsd 4tdm ctf) 

!restart - (gametype and map restart )

!list - Player list, all information about players on server.

!all - Player list, with id and status.

!status -For admin control need status Admin 

!rc - control server with rcon commands (Sample: !rc g_speed 800 ,or !rc g_allowvote...and anothers)

!range ip_adress reason(SAMPLE: !range 111.222 wallhack - where player ip_adress is a 111.222.333.444 - but add 111.222) - range banned list dosn't showing in !banlist, it's hide in database only.

!ban id reason (SAMPLE: !ban 3 WallHack - where 3 is player id and WallHack is a reason for ban) 

!tban id time - (SAMPLE: !tban 3 15 - where 3 is player id and 15 is a tempban time in minutes) 

!kick id (SAMPLE: !kick 3 - where 3 is player id for kick player) 

!unban nick (nick - unban player)

!unban id* - (id* - special player indificator number from !banlist sample: !unban 2

!banlist - Banned last 10 players list - (if unban - sample: !unban 12, when 12 is number from banlist)

!ulist - Unbanned last 10 player list

  + Update [June 26, 2016] - getss

!getss - (example: !getss 5 - where 5 is player id)make and save player screenshot (Support only Punkbuster, Alba anticheat, COD4X 1.8 patch and another anticheat servers)

  + Update [June 27, 2016] - delete <x> , <alladmins> <allstats> <allbans>

!delete x - delete player from stats top system (x - where is player place from !top)

!delete alladmins - reset all admins  from database

!delete allstats - reset all players stats from database

!delete allbans - reset all players from ban database

+ Update [July 10, 2016] - !on for login, and /tell for hide your command from another players 
[DONT WORK IN COD1 1.1patch] IN cfg/_groups.php $admin_code add your think up password

!on |your code password| - for login - (example: !on mysecurepassword) [WORK IN ALL PATCHES AND VERSIONS, but do not use, when players playing in server]

/tell |your id| !on |your code password| - for login - (example:  get your id with !num, than /tell 5 !on mysecurepassword) [DONT WORK IN COD1 1.1patch]


/tell |your id| |your command|  - USE IT FROM CONSOLE (~)! for hide from another players your commands (example:  get your id with !num, than /tell 5 !banlist , or /tell 5 !list, or /tell 5 !cmd, or /tell 5 !ban 10 Wallhack , etc.) [DONT WORK IN COD1 1.1patch]

/tell |your id| |your command|  - USE IT FROM CONSOLE (~)! for hide from another players your commands (example:  get your id with !num, than /tell 5 !banlist , or /tell 5 !list, or /tell 5 !cmd, or /tell 5 !ban 10 Wallhack , etc.) [DONT WORK IN COD1 1.1patch]

+ Update [July 28, 2016] - !on for !login for login (in _groups.php) support ip adress and guids.

!on / !login / !register

+ Update [July 30, 2016] - Refresh top list and ban list in game and for website + in the logs.

!refresh top  - refresh top

!refresh banlist - refresh with new ban for website log - banlist.html

+ Update [August 7, 2016] - Screenshots for COD4X. and more

!getss - making all players screenshots

!kickall - kick all players

!reload - restart RCM adminmod

!lastban - last banned player!

New fun messages - gj, shit, wp, n1.

!rules - server rules

!logout - logout from your group.

!update - download last update in (ReCodMod/x_update  folder) for update need unarchive and replace files from archive.

!nextamp - Show next map 

# SPECIAL INFO

In x_logs folder after install and few days work, you can find chat, stats.... logs in html format, you can use it for website.


