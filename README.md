# GD-2.2-Lists
recreating 2.2 lists in php for geometry dash
## notes to myself
```
create login page
work on rewriting the getGJLevelLists.php endpoint
implement inside gd
upload lists page
make cool web ui interface
no bitches
```
response text notes for rebuilding
```
response example:
1:18:2:Sevenworks Pack:3::5:2:49:71:50:7WORKS:10:420:7:8:14:69:19::51:128:55:0:56:0:28:1687448553:29:1687448691#16:RobTop:71#1:0:1

extra info:
#1:0:1 - "1 to 1 of 1"
#16:RobTop:71 - accountid:username:userid (this is required but optional to add new ones, probably related to the lists list idk)

value info (unknown, still looking for answers)
1:18:2:Sevenworks Pack:3::5:2:49:71:50:7WORKS:10:420:7:8:14:69:19::51:128:55:0:56:0:28:1687448553:29:1687448691
leave that alone:listID:version:name:leave that alone:description:unknown:unknown:accountID:unknown:username:unknown:downloads:unknown:unknown:unknown:likes:unknown:unknown:levels array seperated by ,:unknown:unknown:unknown:unknown:unknown:upload timestamp:unknown:update timestamp
```
