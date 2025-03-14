
### Version 17.0 (February 25, 2010)
    - added support for connections from reconnect tools such as GProxy++
    - added new config value bot_reconnect
    - added new config value bot_reconnectport
    - added new config value bot_reconnectwaittime
    - switched to another timing method on Windows to avoid "timer jitter" which caused occasional lag spikes
    - players who are lagging are now detected based on an absolute count rather than a relative count of packets
    * previously a player was considered lagging if they fell behind relative to another player
    * a player is now considered lagging if they fall behind relative to the server itself
    - changed "forum.codelain.com" to "www.codelain.com" in multiple places

### Version 16.2 (November 18, 2009)
    - added the option to lock the log file for faster logging, particularly on Windows
    - added new config value bot_logmethod (defaults to 1)
    - added support for multiple root admins per battle.net server
    - started using a high performance timer on Windows for timing data
    - printed the timer resolution on startup on Windows and Linux
    - map download percentages are now updated once per second rather than continuously (network optimization)
    - the bot now prints a warning when it sees a map_path with forward slashes instead of back slashes
    - the bot now invalidates any map config that contains a map_size that doesn't match with the loaded map
    - printed a warning when the bot detects that you're probably IP banned from battle.net
    - fixed a bug where entering the wrong password in the admin game would cause the admin game lobby to become "bugged"
    - fixed a bug where it was possible for the bot to attempt to connect to battle.net multiple times in a row under certain conditions
    - fixed a bug where it was possible for the bot to print the "all games finished" message multiple times when exiting nicely under certain conditions
    - fixed a bug where bot_maxdownloadspeed would be rounded off to the nearest ~10 KB/sec
    - fixed a bug where TFT replays were saved as ROC and ROC replays were saved as TFT

### Version 16.1 (November 16, 2009)
    - fixed a bug where the bot would use 100% of available CPU time while a game was loading or lagging (introduced in version 16.0)

### Version 16.0 (November 13, 2009)
    - added support for logging in to battle.net as Reign of Chaos only instead of The Frozen Throne
    - added new config value bot_tft
    - added support for broadcasting LAN games as Reign of Chaos when bot_tft = 0
    - added support for saving replays as Reign of Chaos when bot_tft = 0
    - added ghost dynamic configurator with source code written by HardwareBug
    - updated ip-to-country.csv to the latest version from October 22, 2009
    - updated StormLib to version 6.25
    - forced StormLib to open all MPQ's as V1 only (defeats some map protection schemes)
    - implemented a dynamic select interval to make game updates happen much closer to the desired latency
    - lowered the minimum latency from 50ms to 20ms when using !latency
    - printed a message to the console when the bot lags due to CPU starvation
    - when the bot lags due to CPU starvation the game will no longer play in "fast forward" when it resumes
    - added ?trigger command
    - added new command !fppause to force the FakePlayer to pause the game
    - added new command !fpresume to force the FakePlayer to resume the game
    - added new config value bot_localadminmessages (defaults to 1)
    - added new config value bot_reserveadmins (defaults to 1)
    - bot_requirespoofchecks now defaults to 0
    - only root admins can !end games from battle.net when the game owner is still playing
    - only root admins can !unhost games from battle.net when the game owner is in the lobby
    - when connecting to a pvpgn server the configured BNLS server is now ignored
    - the bot will now unhost the current lobby after using !quit nice
    - removed regex support
    - removed config value bot_useregexes
    - removed replay_stitcher
    - stopped saving partial replays when hosting from a saved game
    - fixed a bug where the bot would continue to autohost unjoinable games after using !quit nice
    - fixed many timer bugs which would cause strange behaviours when GHost++ ran for extended periods (i.e. several weeks)
    - fixed a bug where using !comp <slot with player> <number more than 2> would cause strange behaviours in the lobby
    - fixed a bug where swapping computers would reset their difficulty to "normal" (thanks redlizard)
    - fixed a bug where replays saved when using a FakePlayer would be corrupted
    - fixed a bug where a banned player could cause multiple ban messages to be printed when trying to join a full game when bot_banmethod = 0
    - added german language config (thanks Emmeran)

### Version 15.0
    - added support for "replay stitching" (stitching together replays from before and after the game is saved)
    * see the new readme.replay_stitcher.txt for more information
    - added new project replay_stitcher
    - partial (unusable) replays are now created when hosting from a saved game
    - added player enforcement in saved games
    * see the "Using Saved Games" section of the readme for more information
    - added new command in battle.net and admin game !enforcesg
    - whispers sent by mutual friends when they join your game are now considered valid spoof checks regardless of language
    - whispers sent by battle.net when mutual friends join your game on PVPGN realms are now considered valid spoof checks
    - added new config value bnet*_custom_pvpgnrealmname
    - it is now much less likely for a player to be marked as a name spoofer after rehosting the game under a new name
    - added support for spoof checking only potential admins instead of every player (bot_spoofchecks = 2)
    - bot_spoofchecks now defaults to 2
    - the bot will now tell players how to spoof check in !autohostmm games if necessary
    - printed a more detailed message to the console/log when there's a path mismatch between a saved game and a map
    - replay_buildnumber now defaults to 6059 again (the previous 6374 value was incorrect)
    - increased the hard coded maximum map download speed to 1400 KB/sec in most cases (it depends on player ping)
    - the bot now automatically adds your system's path seperator to the following config values:
    * bot_war3path
    * bot_mapcfgpath
    * bot_savegamepath
    * bot_mappath
    * bot_replaypath
    - fixed a very old bug where the bot would sometimes pick a random player to talk through instead of the game owner
    - fixed a crash bug with !sp when observers/referees were present
    - fixed some compiler warnings with sha1.cpp with Visual C++
    - update_dota_elo now outputs release exe's to the main ghost directory when compiling with Visual C++
    - update_w3mmd_elo now outputs release exe's to the main ghost directory when compiling with Visual C++
    - replay_stitcher now outputs release exe's to the main ghost directory when compiling with Visual C++
    - added spanish language config made by azglenad
    - updated russian language config
    - added some new entries to language.cfg

### Version 14.7
    - clarified some comments in ghost.cfg regarding bot_requirespoofchecks
    - fixed a bug where it was only possible to ban spoofchecked players once the game started
    - fixed a crash bug when bot_requirespoofchecks was enabled and bot_spoofchecks was disabled
    - added russian language config made by JiLiZART

### Version 14.6
    - the countdown will no longer start if a player left the game less than two seconds ago (use "force" to skip this check)
    - IP bans are once again properly checked on ALL battle.net realms rather than just one
    - autokicking players who don't spoofcheck is now only enabled in autohosted games
    - the bot no longer tries to unqueue spoofchecks if the player already spoofchecked
    - updated the default replay_buildnumber to match Warcraft III version 1.24b
    - fixed a bug where the meaning of bot_requirespoofchecks was reversed
    - fixed a crash bug that would sometimes happen when bot_spoofchecks was enabled
    - added turkish language config made by HellGuy

### Version 14.5
    - added new config value db_mysql_botid to identify which bot the data came from when using MySQL with multiple bots
    - added new config value bot_matchmakingmethod
    - added new config value bot_requirespoofchecks
    * modified bot_spoofchecks so it only controls whether automatic spoof checks are done or not
    - added new command !reload in battle.net and the admin game to reload the main configuration files
    - banned players are now kicked back to the chat channel rather than told the game is full when they try to join
    - the !ban and !banlast commands now only ban on the realm the player joined from
    - players are now only considered banned if they are banned on the realm they joined from
    - complete ban messages are now printed when a banned player joins the game
    - added automatic kicking of desynced players
    - players can now spoofcheck by whispering the bot "s", "sc", "spoof", "check", or "spoofcheck"
    - the bot now only sends the player spoofcheck message on the realm they joined from rather than all realms (network optimization)
    - spoofcheck failures are now displayed in the game lobby even when using multiple realms
    - spoofcheck failures on players who joined then left the game are now hidden
    - when spoofchecks are disabled but required the bot will tell new players how to spoofcheck
    - the bot now considers players who joined the game from the LAN screen to be spoofchecked (rather than from a LAN address)
    - the game will now start even if some reserved players have not been pinged 3 times yet
    - printed W3MMD Event messages to the server console in a more readable format
    - removed the 1-realm requirement for !autohostmm
    - unqueued battle.net spoofcheck messages for players who are no longer in the game (network optimization)
    - fixed a bug where observers/referees were shuffled when !sp was used
    - fixed a bug where queued spoof checks would be ignored when the game is changed from public to private
    - fixed a bug where colour terminators were sometimes not added correctly when printing !ping and !from responses
    - fixed a bug with the team balancing algorithm where it wouldn't properly arrange the players according to the best balance
    - fixed a bug where the bot would spam the chat with up to 12 nonexisting team scores when team balancing was complete
    - made several small changes to language.cfg to make the messages make more sense

### Version 14.4
    - implemented the team balancing algorithm when using !autohostmm
    * the algorithm cannot be used with 4 teams of 3 players as it is too slow in this case
    * this code has not been tested and should be considered experimental for now
    - added new map config value map_defaultplayerscore
    - the default player score is used for balancing unrated players when using !autohostmm
    - added a previously hardcoded message when using !autohostmm to language.cfg
    - added new command !messages to game lobbies and in game
    - added new command !say to the admin game
    - added new command !say to game lobbies and in game (this command is HIDDEN from other players)
    - optimized parsing of dota and w3mmd stats while the game is running
    - removed warden responses from the battle.net packet queue (they are now sent immediately)
    * this should result in fewer disconnects from battle.net and a slightly more responsive bot
    - added a colour terminator to coloured player names when printing !ping and !from responses
    - fixed a crash bug when a desync was detected (introduced in version 14.3)

### Version 14.3
    - players joining the game from a local IP address are now considered spoof checked automatically
    - added support for configuring the replay version and build number
    - added new config value replay_war3version
    - added new config value replay_buildnumber
    - updated default replay version to Warcraft 3 version 1.24
    - added support for MySQL databases to the admin game
    - added new command !checkban to the admin game
    - added new command !countbans to the admin game
    - added new command !delban/!unban to the admin game
    - added support for whispering players on battle.net from within the admin game and game lobbies and games when using the admin game
    - added new command !w to the admin game
    - added new command !w to the lobby and in game (this command is HIDDEN from other players)
    - added support for printing battle.net emote messages to the server console
    - added support for printing battle.net whispers, chat messages, and emotes to the admin game
    - added support for printing battle.net whispers, chat messages, and emotes to local game owners in the lobby or in game
    - added new config value bnet*_serveralias
    - console messages originating from battle.net now use the server alias instead of the server address for identification (this is a cosmetic change only)
    - added new config value autohost_owner
    - automatically raised the process priority to "above normal" on startup when running on Windows
    - major optimizations to some internal data handling (there should be a noticeable reduction in CPU requirements)
    - printed a message identifying the players in each game state when the game desyncs
    - printed a message to the console when auto hosting is stopped due to a game name that is too long
    - the bot's lobby messages are now printed to the console and saved to the log
    - split the "non-admin sent command" console message into two different messages to make it more obvious when not spoof checking is the problem
    - blank HCL command strings are no longer included in the welcome message
    - fixed a bug where it was impossible to use commands on a player when their name was a subset of another player's name</blockquote>

### Version 14.2
    - the bot now accepts default maps with or without the ".cfg" extension in ghost.cfg
    - added support for specifying a different admin game map
    - added new config value admingame_map
    - added support for disabling Nagle's algorithm on game sockets
    - added new config value tcp_nodelay
    - fixed a bug where UDP broadcasts would sometimes fail when not using a broadcast target
    - fixed a bug where the bot would not allow you to join the admin game with Warcraft 3 version 1.24
    - fixed a crash bug when using !autohostmm
    - updated the admin game welcome message

### Version 14.1
    - updated SQLite to SQLite 3.6.16
    - added new config value lan_war3version
    - used the lan_war3version instead of a hard coded value when broadcasting games to the LAN
    - updated the default Warcraft 3 version to 1.24
    - sent a text message to the current game lobby when a battle.net connection's status changes (e.g. connected or disconnected)
    - modified some console messages to make it more clear when a player is banned but is still permitted to join the game
    - the bot now waits 60 seconds for (database) threads to finish when exiting nicely
    - removed outdated map configs
    - updated wormwar.cfg to work with Warcraft 3 version 1.24
    - changed the default map to wormwar in ghost.cfg

### Version 14.0
    - added support for the "HostBot Command Library" (HCL) system
    - added new lobby command !hcl to set the HCL string
    - added new lobby command !clearhcl to clear the HCL string
    - added new map config value map_defaulthcl to specify the default HCL string to use
    - added new project update_w3mmd_elo
    - IMPORTANT: REMOVED/RENAMED THE !RLOAD/!RMAP COMMANDS
    *** the !load command now loads map config files (".cfg" files) just like the old !load/!map commands
    *** the !map command now loads map files (".w3m" and ".w3x" files) just like the old !rload/!rmap commands
    - updated ip-to-country.csv to the latest version from June 3, 2009
    - added new config value udp_broadcasttarget
    - added new config value udp_dontroute
    - added new config value bnet*_publiccommands to enable or disable anonymous access to public commands such as !stats
    - added support for automatically starting the autohost system when the bot starts up without requiring an explicit command
    - added new config value autohost_maxgames
    - added new config value autohost_startplayers
    - added new config value autohost_gamename
    - rewrote the way maps are handled internally to allow map changes while a game is in the lobby (the map change will affect subsequent games)
    * this requires GHost++ to duplicate some map data internally and will result in a slight increase in memory usage
    - players joining the game via LAN are now considered spoof checked automatically
    - game owners are no longer considered spoof checked automatically
    - autohosted games once again have a game owner defined as the player who ran the !autohost command
    - fixed a crash bug when the map config's map_size was larger than the actual map size and a player tried to download the map
    - fixed a crash bug when saving W3MMD stats
    - fixed a bug where the bot would frequently reject W3MMD messages sent by maps using the W3MMD system
    - fixed a bug where autohosted games would sometimes get "stuck" when the bot was disconnected from battle.net
    - fixed a bug where !ping and !from responses would sometimes be truncated when used in game
    - fixed a bug where the !map/!load and !rmap/!rload commands would sometimes fail to load a file
    - fixed a bug where the !map/!load commands could be used to load files without a ".cfg" extension
    - fixed a bug where everyone would be dropped from the lobby when the fake player was used in a full 12 player game
    - fixed a bug where player names were not forced to lowercase when using MySQL databases
    - fixed a bug where "player was autokicked for excessive ping" messages could be printed more than once for a player in some cases
    - fixed a bug where changing the map while the autohost was between games would change the autohosted map
    - the "player is trying to join the game but is banned" messages will now only be printed once per player per game
    - added new "player is trying to join the game but is banned" messages to distinguish whether the ban was by name or by IP
    - added new "player is connecting with a banned name/ip" messages when the ban method permits the player to join
    - chat responses to the !votekick command are now sent privately unless the vote was started successfully
    - added a chat response when rehosting games with !pub and !priv
    - added a chat response when rehosting is successful on at least one realm
    - the bot now tries to kick a player who is downloading the map first when a reserved player joins and there aren't any empty slots
    - adjusted the battle.net flood protection code again
    - printed some more information messages to the server console (e.g. when a player finishes loading)

### Version 13.3
    - committed nindoja's modifications to bncsutil/StormLib/GHost++ to compile on OS X
    - added a new feature "load in game" - credit goes to Strilanc for the idea
    * see the "Load In Game" section of the readme for more information
    - added new map config value map_loadingame
    - added new command !downloads to change the bot_allowdownloads value while the bot is running
    - adjusted the battle.net flood protection code
    - cached battle.net IP addresses on first connect to eliminate resolver lag on reconnect
    - fixed a bug where autohosting wouldn't work anymore after the map was changed (introduced in 13.2)
    - fixed a minor bug where the bot would include the kicked player's score in the spread when using matchmaking
    - updated the readme with an overview and some optimization tips
    - modified language.cfg

### Version 13.2
    - GHost++ now requires the boost system, filesystem, and regex libraries (ONLY NECESSARY IF YOU ARE COMPILING GHOST++ YOURSELF)
    * removed precompiled boost libraries from the release
    * you can download precompiled boost 1.38 libraries for Windows from the ghostplusplus googlecode page
    * updated the compile instructions for Linux and Windows to reflect these changes
    - updated the default map in ghost.cfg to dota6.59d
    - increased the battle.net reconnect timer from 30 seconds to 90 seconds
    - tweaked the battle.net strict queue a bit
    - automatically removed dashes from CD keys
    - started saving game durations and player left times to the database based on actual game ticks instead of time since loading
    - printed the calculated map slot configuration to the console when loading a map
    - added "nice" option to !exit/!quit to allow running games to finish first
    - modified Ctrl-C behaviour to exit nicely the first time and exit immediately the second time
    - added new command !rload and !rmap in battle.net and the admin game
    * see the "Using the 'rload' and 'rmap' Commands" section of the readme for more information
    - modified the !load/!map command to include a listing feature like the !rload/!rmap command
    - added new config value bot_useregexes to enable or disable regular expressions
    - the map listing commands now accept regular expressions if configured to
    * see the "Regular Expressions" section of the readme for more information
    - implemented megablue's patch for removing the subselect in DoSend, an optimization to the network code
    - minor changes to the battle.net protocol
    - allowed team changes up to the maximum number of players in non-custom maps instead of the maximum number of teams (aka "forces")
    - fixed a bug introduced in GHost++ Version 13.0 where games would never be removed from the custom game list in battle.net
    - fixed a bug where the last line of motd.txt/gameloaded.txt/gameover.txt would sometimes be ignored
    - fixed a bug where a player's map download time and rate would be incorrect when they were restricted from downloading due to download limits
    - fixed a bug with calculating map data on some maps (specifically Pyramid Escape 1.42)
    - fixed some bugs with saving replays, particularly when there's a leaver during loading
    - fixed a bug with the !ping command where everyone would be kicked when a non-numeric payload was used
    - modified language.cfg

### Version 13.1
    - implemented a stricter packet queueing system on battle.net to help fix the flooding problem
    * as a result you may notice it sometimes takes the bot longer to respond to your battle.net commands
    - stopped using a specific boost version in the Makefile
    - the bot now searches for "Storm.dll" first and if not found it searches for "storm.dll"
    - updated W3MMD parser version to 1
    - optimized saving of W3MMD stats to the database
    - added new config value bot_banmethod
    * see the "How Bans Work" section of the readme for more information
    - added new config value bot_ipblacklistfile
    - added the ability to blacklist IP addresses via the IP blacklist file
    - included a default ipblacklist.txt file which includes known TOR proxies
    - added new command !fakeplayer
    - fixed a very old bug where Windows formatted config files caused problems on Linux
    - fixed a bug with the automatic slot calculation code
    - fixed a crash bug with some non-Warcraft III clients connecting to the bot

### Version 13.0
    - added support for external Warden handling
    * see the "Warden" section of the readme for more information
    - added support for automatic matchmaking
    * see the "Automatic Matchmaking" section of the readme for more information
    * this is an advanced/experimental feature
    - added support for the W3MMD map statistics standard
    * see the "The W3MMD (Warcraft III Map Meta Data) Standard" section of the readme for more information
    * do not use the W3MMD standard with MySQL databases as the code has not been optimized yet and will likely cause problems
    * the W3MMD standard is not 100% supported yet
    - the SQLite database schema has been updated to version number 8
    * GHost++ will automatically update your database schema if it's out of date
    - the MySQL database schema has been updated to version number 2
    * you will need to run the appropriate "mysql_upgrade.sql" file(s) on your MySQL database manually
    - updated SQLite to SQLite 3.6.12
    - updated ip-to-country.csv to the latest version from April 3, 2009
    - GHost++ will now only keep up to 30 idle MySQL connections open (it may open more than 30 total connections when busy)
    - GHost++ will now print MySQL error messages to the console
    - added new solution configurations for Visual C++, "Release MySQL" and "Debug MySQL" for those who want to enable or disable MySQL support at compile time
    - added new project update_dota_elo
    - added new config value bot_checkmultipleipusage to enable or disable multiple IP usage checks
    - added new map config value map_matchmakingcategory
    - added new map config value map_statsw3mmdcategory
    - added new config value bnet<x>_bnlsserver
    - added new config value bnet<x>_bnlsport
    - added new config value bnet<x>_bnlswardencookie
    - changed the join rejection messages from "game not found" to "game is full" and "wrong password" where appropriate
    - added new command !autohostmm for auto hosting matchmaking games
    - added new command !wardenstatus for showing warden status information
    - made several modifications to help prevent flooding out of battle.net
    - fixed a crash bug when the system was unable to create a new thread when using a threaded database (MySQL)
    - fixed a bug where the "gameover timer finished" message could be spammed to the console in some cases
    - fixed a bug where the bot would sometimes lag when a game finished when using a SQLite database
    - fixed a bug where bot_bindipaddress would only affect the game sockets and not the battle.net sockets
    - fixed a potential exploit where a malicious user could cause your bot to freeze (infinite loop)
    - modified the behaviour of the !delban/!unban commands to unban the user on all realms instead of just one
    - deleted all the old broken default map config files and replaced some of them with working versions
    - modified language.cfg

### Version 12.0
    - updated ip-to-country.csv to the latest version from February 26, 2009
    - added support for MySQL databases
    - added precompiled boost libraries for Visual C++
    - added precompiled mysql libraries for Visual C++
    - added mysql headers for Visual C++
    - added new command !dbstatus in battle.net
    - refresh messages are no longer permanently disabled and can be configured on or off once again
    - games are now refreshed every 3 seconds instead of 2 seconds (to reduce the risk of flooding out)
    - when a game refresh fails the bot will stop trying to refresh the game until it is rehosted (to reduce the risk of flooding out)
    - fixed the "duplicate game" bug when rehosting a game
    - fixed an error in the Makefile
    - added support for Warcraft III patch 1.23
    - bnet*_custom_war3version now defaults to 23
    - updated the game protocol to match the 1.23 game protocol
    - updated the LAN protocol to match the 1.23 LAN protocol
    - updated the replay header to match the 1.23 replay header
    - added a public domain SHA1 hashing algorithm
    - added a new map config value map_sha1
    - added support for spoof checking via friend whisper
    - added error codes to unknown socket errors
    - fixed a minor bug with the !statsdota command not responding correctly to whispers
    - fixed a bug where changes to the system clock could cause GHost++ to drop players (thanks lucasn)
    - minor optimizations
    - modified language.cfg

### Version 11.5
    - updated ip-to-country.csv to the latest version from January 23, 2009
    - updated StormLib
    - updated the map_crc calculation algorithm (thanks Strilanc!)
    - the bot should now correctly calculate map values for many maps that previously did not calculate properly
    - the bot now identifies itself as originating from the United States instead of Canada by default when connecting to battle.net
    - updated the refresh method to more closely match the way LC does it
    * refresh messages are no longer displayed because the bot refreshes much more quickly than it used to and it would create too much spam
    - players are now given a new team when joining melee maps rather than always team 1
    - added map config files for DotA 6.59

### Version 11.4
    - the database schema has been updated to version number 7
    * GHost++ will automatically update your database schema if it's out of date
    - major optimizations to the database to improve statsdota performance
    - chat messages sent to battle.net servers are now limited to 255 characters instead of 220
    - chat messages sent to pvpgn servers are now limited to bnet<x>_custom_maxmessagelength characters
    - added new config value bnet<x>_custom_maxmessagelength
    - chat messages sent in the game lobby are now limited to 254 characters
    - chat messages sent ingame are now limited to 127 characters
    - added new config value bot_votekickallowed
    - added new config value bot_votekickpercentage
    - added new config value bot_defaultmap
    - added new config value bot_motdfile
    - added new config value bot_gameloadedfile
    - added new config value bot_gameoverfile
    - added new command !votekick
    - added new command !votecancel
    - added new command !yes
    - root admins can now use lobby and game commands while the game is locked
    - root admins can now use the !lock and !unlock commands
    - modified the battle.net refresh procedure to improve performance
    - refresh messages are sent every 12 seconds now instead of 10
    - added a silent gameover timer triggered by one player being left and/or by the stats class
    - statsdota now checks the "id" value for validity
    - fixed a bug where games couldn't be rehosted on pvpgn servers (first appeared with the new refresh code)
    - fixed a minor bug where users would sometimes be listed as admins when a root admin used the !check command (they weren't)
    - autohosted games are no longer created with an owner
    - minor adjustments to same language.cfg entries

### Version 11.3
    - the database schema has been updated to version number 6
    * GHost++ will automatically update your database schema if it's out of date
    * new colour, tower kills, rax kills, and courier kills are now recorded to the database when using statsdota
    - if bot_maxdownloadspeed = 0 the download speed will not be limited
    - fixed a bug where games created with !autohost did not have an owner (first appeared in GHost++ 11.1)
    - fixed a bug where some players would be automatically muted when joining the game (first appeared in GHost++ 11.1)
    - fixed the statsdota parser to correctly parse the "id" value (first appeared in GHost++ 11.1)
    - updated the !statsdota command to print more information
    - the bot now reads from motd.txt for the welcome message
    - the bot now reads from gameloaded.txt for the game loaded message
    - the bot now reads from gameover.txt for the game over message
    - added default gameloaded.txt and gameover.txt

### Version 11.2
    - fixed a crash bug introduced in GHost++ 11.1 when saving DotA stats
    - shortened the auto drop timer to 60 seconds when players are lagging
    - when a player saves the game GHost++ will now send a message identifying who did it
    - improved automatic calculation of map_crc, it should work with more (but still not all) maps now
    - added some responses to the !getclan and !getfriends commands
    - added automatic detection of multiple IP address usage
    - added new config value bnet<x>_countryabbrev to specify the user's country
    - added new config value bnet<x>_country to specify the user's country
    - added new config value bot_hideipaddresses to hide IP addresses from players
    - added a 5 second grace period after downloading the map where pings are discarded from the player
    - added new config value bot_maxdownloaders
    - added new config value bot_maxdownloadspeed

### Version 11.1
    - updated SQLite to SQLite 3.6.10
    - updated ip-to-country.csv to the latest version from December 19, 2008
    - updated the game refresh procedure on battle.net to more closely match the way Warcraft III does it
    - added new command !virtualhost to change the virtual host name
    - the !stats and !statsdota commands now send private responses when used in a lobby or in a game (it still sends public responses when used by an admin)
    - the !version command now sends a private response when used in a lobby or in a game
    - the !autohost command can now be used in the admin game
    - added new config value bot_bindaddress
    - added new config value bot_virtualhostname
    - map_gametype can now be set to 2 (non-blizzard melee map) in addition to 1 and 9
    - added a console warning when the map_path starts with '\'
    - optimized saving of game data to the database when a game ends
    - players who are lagging are now automatically dropped after 80 seconds to prevent all players from disconnecting
    - players who are downloading the map are once again sent pings to prevent them from disconnecting after 90 seconds
    - fixed a bug where after an invalid saved game was loaded no other saved games could be loaded until the bot was restarted
    - fixed a security flaw where non admins could cause the bot to execute battle.net commands
    - increased the flood protection timer from 2 seconds to 2.5 seconds
    - added new command !mute to mute a player
    - added new command !unmute to unmute a player
    - statsdota now parses the "id" value, DotA stats should be accurate when using -sp or -switch now
    - added the "lobby time limit" code written by LuCasn (thank you!)
    - added new config value bot_lobbytimelimit
    - added map config files for DotA 6.58b
    - fixed a bug where you could start a game with no players
    - you can now use the !owner command if you are a root admin even if the owner is already in the game

### Version 11.01
    - bot_savereplays now defaults to 0
    - added new map configs for DotA 6.57
    - modified GHost++ to prevent excessive traffic when connecting to PVPGN servers

### Version 11.0
    - updated SQLite to SQLite 3.6.4
    - added zlib to the project
    - modified the StormLib Visual C++ project file to fix a build confliction with zlib on Windows
    - added support for autosaving games and loading games
    * see the "Using Saved Games" section of this readme for more information
    - added support for automatically saving replays
    * see the "Saving Replays" section of this readme for more information
    - added new config value bot_savegamepath to specify the directory where saved games will be loaded from
    - added new config value bot_autosave to enable or disable autosaving by default
    - added new config value bot_savereplays to enable or disable automatic saving of replays
    - added new config value bot_replaypath to specify the directory where replays will be saved to
    - added new command !loadsg to load a saved game
    - added new command !hostsg to host a saved game
    - added new command !autosave to enable or disable autosaving for a particular game
    - added new command !saygame to send a message to a specified game in progress
    - added new command !checkme for non admins to use (the response to this command is sent privately)
    - the "game is locked" response is now sent privately
    - the "game refreshed" message is now printed only once per refresh rather than once per server per refresh
    - the !ping command can now be used ingame
    - the !from command can now be used ingame
    - pings are now sent to players ingame in order to continue tracking player pings after the game has started
    - pings are no longer sent to players who are downloading the map
    - when using the !hold command if the player is already in the game they will now be immediately upgraded to reserved status
    - the !saygame and !saygames commands now prefix your message with "ADMIN: "
    - the !check and !checkme commands now display ping and from fields in addition to the other fields
    - the !addban and !ban commands can now be used in the game lobby
    - game timestamps are now calculated based on actual ingame time instead of real time since the game started loading
    - when the owner player joins the game it now attempts to kick a real player instead of the entity in slot 0
    - added automatic detection of desyncs (a warning message will be printed to chat if a desync is detected)
    - fixed a bug where commands with aliases could be executed when they shouldn't be
    - updated some outdated information in this readme
    - many changes and additions to language.cfg

### Version 10.4
    - added support for auto starting games
    - added support for auto hosting public games
    * see the "Auto Hosting" section of this readme for more information
    - bot_log now defaults to empty (if it isn't specified no log file will be generated)
    - bot_refreshmessages now defaults to 0
    - games are now refreshed every 5 seconds instead of 10 seconds
    - before creating a game the bot now checks that the currently loaded map config file is valid
    - a timestamp is now printed to the console with ingame chat messages
    - fixed a typo with the map config file for BattleShips Pro 1.189
    - added new config value bot_language to specify the language file
    - added new command !autostart to auto start the current game
    - added new command !autohost to auto host public games
    - you can now use the !announce command in battle.net (it still affects the current game lobby only)
    - added responses to the !announce command
    - added new map config for BattleShips Pro 1.197
    - added new map config for Warlock 083
    - added new map config for Worm War
    - fixed a bug where a reserved player joining the game and kicking someone would cause everyone to disconnect
    - fixed a bug where a player joining over LAN would be kicked when the game filled up when the game had less than 12 slots
    - added some new entries to language.cfg

### Version 10.3
    - added support for specifying the config file on the command line (e.g. "ghost.exe mycfg.cfg" or "ghost++ mycfg.cfg")
    * it will default to ghost.cfg if no config file is specified
    - added support for logging console output
    - added new config value bot_log to specify the log file
    - added new config value bot_autolock to automatically lock the game when the owner joins
    - added new config value bnet*_holdfriends to automatically add the bot's friends to the reserved list when creating a game
    - added new config value bnet*_holdclan to automatically add the bot's clan members to the reserved list when creating a game
    - added new command !banlast to ban the last leaver
    - added new command !getclan to refresh the clan members list
    - added new command !getfriends to refresh the friends list
    - added new command !disable to prevent new games from being created
    - added new command !enable to allow new games to be created
    - added new command !saygames to send a chat message to all games
    - fixed a bug where Warcraft 3 would crash when sharing control of units when the map has 12 slots and when connecting via LAN
    - fixed some bugs where long chat messages would be incorrectly truncated
    - fixed a crash bug when there was an error opening the sqlite3 database
    - fixed a potential crash bug when checking game player summaries with a corrupt database
    - fixed a bug where the bot would sometimes not detect a dropped battle.net connection
    - added 3 new entries to language.cfg

### Version 10.2
    - added new command !closeall to close all open slots
    - added new command !openall to open all closed slots
    - fixed a minor bug where GHost++ would substitute the creator's name for the owner's name in the "game created" chat message when using !privby and !pubby
    - fixed a bug where GHost++ would sometimes use map_width instead of map_numplayers when loading a map config file

### Version 10.1
    - the database schema has been updated to version number 4
    * GHost++ will automatically update your database schema if it's out of date
    * map downloads are now recorded to the database
    * the game creator's name and battle.net server are now recorded to the database
    - fixed some minor chat issues when using multiple realms
    - chat messages about game status are now sent to the game creator rather than the game owner since the owner can be changed and isn't tied to a realm
    - "spoof check accepted" messages are no longer printed when using multiple realms
    - the bot now attempts to spoof check the game owner in order to determine what realm they came from (this is not mandatory - they are still considered spoof checked automatically)
    - duplicate player names are no longer allowed in the same game
    - added new command !announce to send a repeating message to the game lobby
    - fixed a bug that would sometimes result in all players leaving the game at the end of the countdown when starting a melee map with observers
    * as a result of this, you must make sure map_numplayers is correct even in custom maps now

### Version 10.01
    - fixed a bug where GHost++ would use an incorrect database schema when creating a new database
    * if you created a database file with Version 10.0 your database schema is incorrect and you should delete your database file and let Version 10.01 create a new one

### Version 10.0
    - added support for connecting to multiple realms at the same time
    * see the "Using Multiple Realms" section of this readme for more information
    * added new config value *_rootadmin (e.g. bnet_rootadmin, bnet2_rootadmin, etc...)
    * removed config value db_rootadmin
    * added new config value *_commandtrigger (e.g. bnet_commandtrigger, bnet2_commandtrigger, etc...)
    * renamed config value bnet_hostport to bot_hostport
    * renamed config value bnet_war3path to bot_war3path
    * changed the way admins work slightly to accomodate multiple realms (see the "How Admins Work" section of this readme for more information)
    * changed the way bans work slightly to accomodate multiple realms (see the "How Bans Work" section of this readme for more information)
    - the database schema has been updated to version number 3
    * GHost++ will automatically update your database schema if it's out of date
    - updated iptocountry.csv to the latest version from October 9, 2008
    - added new command !check to check a user's status (leave blank to check your own status)
    - added new command !lock to lock a game and prevent anyone but the game owner from running commands
    - added new command !unlock to unlock a game
    - added new command !owner to set the game owner
    - the !hold command can now be accessed through battle.net
    - the !hold command can now take more than one input
    - the !version command can now be accessed in the lobby and ingame
    - the !stats command can now be accessed ingame
    - the !statsdota command can now be accessed ingame
    - the !addadmin command can now be accessed in the admin game (the realm must be specified unless only one realm is defined)
    - the !checkadmin command can now be accessed in the admin game (the realm must be specified unless only one realm is defined)
    - the !countadmins command can now be accessed in the admin game (the realm must be specified unless only one realm is defined)
    - the !deladmin command can now be accessed in the admin game (the realm must be specified unless only one realm is defined)
    - added new config value bot_commandtrigger for specifying the command trigger ingame
    - added new config value bot_spoofchecks to enable or disable spoof checks
    - added support for conditional map downloads
    * if you set bot_allowdownloads to 2 conditional map downloads will be enabled
    * players without the map will remain at 0% map downloaded until an admin permits them to download the map
    * an admin can use the !download or !dl commands to permit a player to download the map
    - fixed a bug where loading times were not printed after the game loaded
    - fixed the welcome messages to display properly on all screen resolutions
    - the countdown is now aborted if someone joins the game during the countdown
    - GHost++ now checks that your game names are 31 characters or less
    - the game owner checks are now case insensitive (so you don't need to type the owner name with correct capitalization when using !privby and !pubby)
    - included a fix for spoof checking on PVPGN
    - you don't need to have an active battle.net connection to host a LAN game with the admin game anymore
    - the game state (public or private) is now saved to the database
    - download times and speeds are now printed when a map download finishes
    - added 13 new entries to language.cfg and modified many other entries

### Version 9.2
    - GHost++ now creates all sockets in non blocking mode
    * this fixes the bug where too many players downloading the map would cause the bot to temporarily freeze up
    * this might improve game performance a little, especially when playing with people on slow connections such as dialup
    - fixed a bug where the bot would sometimes send action packets that were too large which would cause Warcraft 3 to disconnect
    * this bug appeared in games where lots of actions were used (e.g. tower defense maps, Uther Party, even sometimes in DotA)
    * this fixes the bug where the server console would print "connection closed by remote host" for every player
    - added a 15 second timeout when connecting to battle.net rather than waiting indefinitely for the connection to complete
    - the virtual host player now automatically leaves the game when the 12th player joins
    * this might help prevent Warcraft 3 from disconnecting due to there being too many players in the game but it's untested
    * if the player count drops below 12 again the virtual host player will automatically rejoin the game
    - changed the virtual host name to a red "Admin" in the Admin Game
    - when playing DotA the bot no longer kicks everyone before displaying the summary screen
    * the game will remain open until the last player leaves (you can use !end to force the game to end)
    * the bot considers the game time to be the time when the last player left so you won't be considered as playing to 100% when using the !stats command unless you're the last to leave
    - added new config value bot_latency to set the default latency (you can still change this for a particular game with the !latency command)
    - fixed a typo with lang_0039 in language.cfg
    - added one new entry to language.cfg

### Version 9.1
    - fixed a crash bug with maps other than DotA

### Version 9.0
    - added support for the admin game
    * this allows you to use GHost++ with only one set of CD keys
    * see the "Admin Game" section of this readme for more information
    - added support for new replay data in DotA 6.55
    * this required some changes to the database schema
    * GHost++ will try to determine whether your database schema needs to be upgraded or not when it starts
    * if your database schema is out of data GHost++ will automatically upgrade it
    - completely rewrote game.cpp to allow for admin games
    - did some spring cleaning on some classes to make for cleaner and neater code
    - bot_synclimit defaults to 30 now instead of 15
    - added new config value admingame_create to control whether to create the admin game or not
    - added new config value admingame_port to control the admin game port
    - added new config value admingame_password to control the admin game password
    - fixed a bug where GHost++ sent the map width instead of the map height when broadcasting a game to the local network
    - added 10 new entries to language.cfg
    - modified lang_0093 slightly

### Version 8.1
    - updated StormLib to version 6.23
    * backported all my previous modifications to StormLib so it should stil compile and run properly on Linux systems
    * made a few more modifications to StormLib to make my changes cleaner and more understandable
    * as a result of this StormLib once again uses the system copy of zlib under Linux instead of a local copy
    * StormLib should now correctly load the Warlock 083 map
    - finally wrote some code to check all commands for correct input
    * e.g. if you try to run the command "!swap 1 x" or "!swap 1"
    * if bad input is detected a warning will be printed to the server console
    - the !close command can now take more than one input (e.g. "!close 6 7 8")
    - the !open command can now take more than one input (e.g. "!open 6 7 8")
    - the bot now attempts to send the "game created" chat message to the channel *before* creating the game
    * if it can't because of flood protection it won't send the chat message at all
    * this doesn't apply if you whispered the bot since whispers work even when in a game
    - fixed a ton of problems related to observers in melee maps
    * GHost++ now enforces player limits when observers are permitted
    * GHost++ does not enforce player limits with computer slots
    - the !compteam command now uses correct team numbers (previously you had to use team 0 for team 1 and so on)
    - added new config value map_numplayers to control the number of players in melee maps (no effect in custom maps)
    - added new config value map_numteams to control the number of teams in melee maps (no effect in custom maps)
    * in most (all?) cases this should be the same as map_numplayers
    - GHost++ now automatically adds observer slots to maps when observers are permitted (including custom maps)

### Version 8.01
    - modified StormLib so that it should compile and run properly on more Linux systems now (including 64 bit systems)
    - GHost++ now uses the StormLib headers from the StormLib directory rather than seperate copies

### Version 8.0
    - switched from libmpq to StormLib for MPQ loading
    * libmpq was unable to deal with several map protection schemes and would even segfault (crash) when loading some maps
    * StormLib can handle more map protection schemes (but not all - for example, Warlock 083 doesn't load properly)
    - added support for automatically calculating map_width, map_height, and map_slot<x> (the slot structure)
    - added support for game rehosting via the !priv and !pub commands in the game lobby
    * this doesn't work very well with automatic spoof checking in public games at the moment
    - added support for the lag screen
    * the lag screen is controlled by the sync limit
    * if a player falls behind by more than the sync limit number of packets the lag screen will be started
    * when the player catches up to within half the sync limit number of packets they will be removed from the lag screen
    - added new config value bot_pingduringdownloads to control whether the bot should stop pinging *all* players when at least one player is downloading
    - added new config value bot_refreshmessages to control whether refresh messages are displayed by default (use !refresh to change this for a particular game)
    - added new config value bot_synclimit to control the default sync limit (use !synclimit to change this for a particular game)
    - added new command !drop to drop all lagging players (players listed on the lag screen)
    - added new command !synclimit to change the sync limit for a particular game
    - game descriptions now include the game time in minutes (when using !getgame/!getgames)
    - the !channel command now uses "/join" instead of "/j" so it should work on PVPGN servers now
    - the !exit and !quit commands can now only be accessed by the root admin
    - the !exit and !quit commands will now alert you if there is a game in the lobby or in progress (add force to skip this check)
    - the !latency command now returns the current latency setting if no latency is specified
    - the !sp command now shuffles players only (it leaves open/closed/computer slots in place)
    - added some additional console messages during startup to help identify problems when connecting to PVPGN servers
    - added 10 new entries to language.cfg

### Version 7.0
    - optimized loading of the iptocountry data, it should load somewhat faster now
    - added support for automatically calculating map_size, map_info, and map_crc
    * a big thank you to Strilanc for figuring out the map_crc algorithm
    * see the new "Map Config Files" section of this readme for much more information on this
    - GHost++ now requires libmpq
    * libmpq requires zlib
    * libmpq requires libbz2
    * Windows users never fear - I have included all the necessary include files and prebuilt libraries
    * Linux users are in for a bit more effort - you'll need to download and compile libmpq and possibly zlib and libbz2 yourself
    * note that I had to modify libmpq slightly to make it compile with Visual C++ (the modified project is found in the included libmpq-0.4.2-win.zip if you want to compile it yourself)
    - added ms_stdint.h for standard types across all these libraries with Visual C++
    * bncsutil now uses ms_stdint.h when compiling with Visual C++

### Version 6.2
    - updated SQLite to SQLite 3.6.3
    - slightly modified the welcome message sent when a player joins the game
    - added new command !from to display the country each player is from
    - the iptocountry data is loaded from the file "ip-to-country.csv" on startup
     * a big thank you to tjado for help with the iptocountry feature
     * the included ip-to-country.csv is the September 1, 2008 data from http://ip-to-country.webhosting.info/
     * it may take a few seconds to load the iptocountry data when you start ghost++ (it takes ~10 seconds on my 3.2 GHz P4)
    - fixed a bug where config files with very long lines could cause ghost++ to fail
    - fixed some crash bugs where ghost++ could crash if the database schema is not what ghost++ expects

### Version 6.1
    - stats are now displayed for players who didn't spoof check when using !stats and !statsdota
    - the bot now automatically broadcasts the game to the local network on port 6112 every 5 seconds when hosting a game
    - when joining a game from the LAN screen after receiving a broadcast or a !sendlan packet you should no longer be disconnected after the game fills up
    - player leave codes are now sent when a player leaves the game (only "player lost" and "player disconnected" codes)
    - fixed a bug with printing ingame chat messages to the console
    - fixed a bug where players downloading the map could still be kicked for excessive pings

### Version 6.0
    - rewrote the internal map handling code
      * map.cfg and all other map configuration files are now stored in another directory
      * you can't load maps while a game is in the lobby anymore
      * unfortunately the configuration files are still necessary because the bot doesn't parse the maps (yet)
    - added support for non custom games
      * this is only barely tested so there may be some bugs
      * added support for changing your team/colour/race/handicap
      * if you allow observers/referees the bot doesn't ensure the correct player totals so it's possible to have more players than a map supports
      * if you choose random races the race box isn't greyed out but the bot won't allow you to change your race anyway
    - added new config value bot_mapcfgpath
    - added new config value map_speed
    - added new config value map_visibility
    - added new config value map_observers
    - added new config value map_flags
    - added new config value map_gametype
    - removed config value map_custom (it's replaced by map_observers)
    - when creating a private game on a PVPGN server the bot stays in the game rather than returning to the chat channel immediately
    - the bot now discards pings from players who are downloading the map (since those pings are probably inaccurate)
    - ingame chat messages are now printed to the server console (only messages sent to all players, allied and private chat is not printed)
    - the bot now checks that everyone has the map before starting the game when using !start (use !start force to skip this check)
    - removed some useless messages when using !start
    - when playing a map with dota stats player deaths will be printed to the console just for fun
    - added UDP socket support as a first step to supporting LAN functions
    - added new command !refresh to enable or disable refresh messages (every game starts with refresh messages enabled by default)
    - added new command !comp to add a computer player to the game
    - added new command !compcolour to change a computer's colour
    - added new command !comphandicap to change a computer's handicap
    - added new command !comprace to change a computer's race
    - added new command !compteam to change a computer's team
    - added new command !sendlan to send a fake LAN message to another computer
      * in order to use this the player needs to be running Warcraft 3 and waiting at the LAN screen
      * when you type !sendlan <ip> [port] the game will appear on the player's LAN screen and can be joined directly
      * the player needs to have forwarded the correct port on their router for this to work
      * upon joining the game the bot will reveal that you are using a name spoofer which is more or less true and thus will not be disabled
    - added 4 new entries to language.cfg

### Version 5.1
    - added includes for stdlib.h, string.h, and algorithm to fix some compile issues on some platforms
    - GHost++ now pipelines up to 70 KB of map data to the player for even faster map downloads (the theoretical throughput is [70 KB * 1000 / ping] in KB/sec)
    - GHost++ no longer autokicks reserved players for excessive pings
    - added new command !privby to host a private game by a player other than yourself
    - added new command !pubby to host a public game by a player other than yourself
    - the !delban and !unban commands no longer work in the game lobby or in the game (they can still be used in battle.net via local chat or by whispering the bot)
    - when using !privby and !pubby the specified owner is granted access to the admin commands available in the lobby and in the game but NOT in battle.net unless they're an admin
    - when creating a private game the bot now returns to the battle.net chat channel immediately rather than waiting until the game starts
    - added support for printing total wins and total losses to the !statsdota command
    - modified language.cfg to include total wins and total losses when printing dota stats

### Version 5.0 Beta 1
    - fixed a potential infinite loop with the language code
    - added support for map downloads
    - GHost++ does not use map files for anything except sending the raw data to the player so the map config files are still necessary although this may change in the future
    - GHost++ pipelines up to 28 KB of map data to the player before waiting for confirmation packets so map downloads should go very quickly if you and the receiving player have fast connections
    - GHost++ sends map data to every player that requests it simulataneously (there is no limit of 1 or 2 players at a time like in Warcraft 3)
    - the virtual host "GHost" in the lobby will now be created even when the map has 12 slots
     * this is necessary because the bot can't send maps to players without a valid PID and we can't be guaranteed the lobby will have another player (or that Warcraft 3 will accept a forged PID)
     * this is untested and may cause Warcraft 3 to do something weird when a map with 12 slots fills up with real players which is why this is a beta release
    - added new config value bot_mappath to specify the directory where GHost++ will look for map files (it tries to open [bot_mappath + map_localpath] when looking for the map)
    - added new config value bot_allowdownloads to specify whether to allow map downloads or not
    - added new config value map_localpath
    - added new command !sp to shuffle all the players in the game lobby
    - added new command !muteall to mute global chat in game
    - added new command !unmuteall to unmute global chat in game
    - you can now access the !stats and !statsdota commands in battle.net via local chat or by whispering the bot (as with !version the bot will only respond if there are few messages already in the chat queue)
    - added 3 new entries to language.cfg

### Version 4.3
    - added a socket timeout function to automatically kick players who stop responding for 30 seconds (this doesn't include truly AFK players as their computer will send keepalive packets)

### Version 4.2
    - fixed a bug where some players would sometimes not be saved to the database when a DotA game ended
    - if you were using version 4 or version 4.1 and you played at least one DotA game your database may be missing some players
    - modified the !version command to only respond to non admins when there are few messages already in the chat queue to prevent malicious users from abusing the bot
    - the !end command no longer works in the game lobby - it's intended to be used to end a currently running game (use !unhost to end a game in the lobby)
    - you can now access the !stats and !statsdota commands more than once per game but only once every 5 seconds to prevent spamming
    - you can now add a player name after the !stats and !statsdota commands to get statistics about another player (leave it blank to get your own statistics)

### Version 4.1
    - fixed a crash bug when using !stats and !statsdota
    - two minor cosmetic changes to language.cfg

### Version 4
    - updated SQLite to SQLite 3.6.1
    - included the SQLite source code to help eliminate some linking errors, no more SQLite shared objects required on Linux
    - added languages support (console messages are still hardcoded in english)
    - included an english language.cfg
    - GHost++ now sends pings during map loading to help prevent players from timing out during map loading
    - admins are now automatically treated as reserved players when joining a game
    - the !version command now sends the version number to admins
    - the !version command can now be accessed by non admins, however it does not send the version number to non admins (this can be changed in language.cfg)
    - added support for basic game/player statistics such as total games played (these stats are collected no matter which map is played)
    - added support for map specific game/player statistics (these stats are collected only on some maps)
    - included a DotA statistics class to record DotA specific statistics using the new real time replay data in dota 6.54
    - added new config value map_type to specify which statistics class handles the map statistics (currently "dota" is the only supported type, set it to anything else to disable)
    - added new command !stats which any player can access which displays basic player statistics
    - added new command !statsdota which any player can access which displays DotA player statistics
    - added new command !end
    - added some more console messages to help with troubleshooting (some of the old error messages were pretty vague)
    - a console message will now be printed when a player is kicked because they don't have the map

### Version 3
    - ghost now works on systems with 64 bit processors
    - if you have a 64 bit processor and you want to compile ghost yourself you will need to recompile bncsutil because one of the 64 bit fixes was in bncsutil
    - ghost now works with maps other than DotA
    - the default map is now DotA 6.54b if no map.cfg file is found
    - added new config value map_custom
    - added new config value map_width to allow for maps other than DotA
    - added new config value map_height to allow for maps other than DotA
    - added new config values map_slot<x> where x is a number from 1 to 12 to allow for maps other than DotA
    - added new command !load and !map
    - added new command !a (as an alias to !abort)
    - removed command !privobs (observers are now specified in the map config file)
    - removed command !pubobs (observers are now specified in the map config file)
    - added some more console messages to help understand what the bot is doing
    - fixed a bug where changing your team or slot wouldn't work properly for maps other than DotA
    - fixed a bug where maps with more or less than 10 player (non observer) slots wouldn't load
    - fixed a bug where an extra comma would sometimes be added to the ping text when using !ping
    - the config files are now in <LF> format instead of <CR/LF>
    - included a DotA 6.54b map file
    - included a DotA 6.54b with observers map file
    - included a Warlock 081b map file

### Version 2
    - the makefile now creates a "ghost++" binary instead of "ghost" so you can copy it to the parent directory without any trouble
    - ghost now tries to shutdown properly when you press Ctrl-C, press it again to force it to exit immediately
    - changed config key from bot_rootadmin to db_rootadmin
    - added new config key bnet_custom_war3version (set it to 21 for version 1.21 or 22 for version 1.22)
    - added SQLite 3 database support
    - added new command !addadmin
    - added new command !checkadmin
    - added new command !countadmins
    - added new command !deladmin
    - added new command !addban and !ban
    - added new command !checkban
    - added new command !countbans
    - added new command !delban and !unban
    - fixed a bug where a player crashing during loading could prevent the game from starting
    - fixed a bug where a reserved player joining a full game would take another player's slot but the previous player wouldn't be kicked
    - fixed a bug where the owner player joining a full game with no reserved slots available would cause the blue player to be kicked but the owner would still not be allowed to join the game
    - assorted minor bug fixes

### Version 1
    - initial release
