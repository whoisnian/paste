# paste
Make a website with PHP to share codes.

## Notice
* `sudo chmod -R 777 code` to enable apache to create new code files.  
* Languages now supported:  
  `Bash, C, C++, CSS, Go, HTML, PHP`  
* Material Design: [Material Design Lite](https://getmdl.io)  
* Code HighLight: [google-code-prettify](https://github.com/google/code-prettify)  

## Guide
* Paste:  
  * Visit [http://paste.whoisnian.com](http://paste.whoisnian.com) to paste.  
  * `<command> | curl <data> "http://paste.whoisnian.com/new.php"` and get the link. Such as:  
    * `screenfetch -N | curl --data-urlencode content@- "http://paste.whoisnian.com/new.php"` (anonymous and auto type)  
    * `cat nian.css | curl -d "poster=nian" --data-urlencode content@- "http://paste.whoisnian.com/new.php"` (only auto type)  
    * `cat try.cpp | curl -d "type=cpp" --data-urlencode content@- "http://paste.whoisnian.com/new.php"` (only anonymous)  
    * `cat ipgw.sh | curl -d "poster=nian&type=bash" --data-urlencode content@- "http://paste.whoisnian.com/new.php"`  
    * It's so long that a `pastecode.sh` will be much better.(an example [pastecode](https://raw.githubusercontent.com/whoisnian/script/master/pastecode))  
* Delete:
  * Code files are automatically deleted after 7 days;

## Todo
- [x] pastecode.sh example.  
- [x] Automatically delete code files.  
- [x] Paste code in the console without Explorer.  
- [x] Beautify the website.  

## Address
[http://paste.whoisnian.com](http://paste.whoisnian.com)
