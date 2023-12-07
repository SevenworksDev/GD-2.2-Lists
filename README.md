# GD-2.2-Lists
recreating 2.2 lists in php for geometry dash
## notes to myself
```
create login page
work on rewriting the getGJLevelLists.php endpoint
upload lists page
make cool web ui interface
```
response text notes for rebuilding
```
response example:
1:18:2:Sevenworks Pack:3::5:2:49:71:50:7WORKS:10:420:7:8:14:69:19::51:128:55:0:56:0:28:1687448553:29:1687448691#16:RobTop:71#1:0:1

extra info:
#16:RobTop:71 - accountid:username:userid (this is required but optional to add new ones, probably related to the lists list idk)
#1:0:1 - "1 to 1 of 1"

value info
1:<id>:2:<name>:3:<description in base64>:5:<version>:49:<accountid>:50:<username>:10:<downloads>:7:<difficulty>:14:<likes>:19:<featuredIdx>:51:<levels>:55:0:56:0:28:<uploaded timestamp>:29:<updated timestamp>

in case i use a shitty old db hosting site:

CREATE TABLE `lists` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `description` text DEFAULT NULL,
  `version` int(11) DEFAULT 1,
  `accountid` int(11) DEFAULT NULL,
  `username` varchar(16) DEFAULT NULL,
  `downloads` int(11) DEFAULT 0,
  `difficulty` int(11) DEFAULT -1,
  `likes` int(11) DEFAULT 0,
  `featuredIdx` int(11) DEFAULT NULL,
  `levels` varchar(170) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
);


$dateTimeUploaded = new DateTime($row['uploaded_timestamp']);
$dateTimeUpdated = new DateTime($row['uploaded_timestamp']);
```
