# paste
Make a website with PHP to share codes.

## Notice
* `sudo chmod -R 777 code` to enable apache to create new code files.  
* Languages now supported:  
  `Bash, C, C++, CSS, HTML, PHP`  
* Code HighLight: [google-code-prettify](https://github.com/google/code-prettify)  

## Guide
* Paste:  
  * Visit [http://paste.whoisnian.com](http://paste.whoisnian.com) to paste.  
  * `<command> | curl <data> "http://paste.whoisnian.com/add.php"` and get the link.
    * `screenfetch -N | curl --data-urlencode content@- "localhost/add.php"` __anonymous and auto type__  
    * `cat nian.css | curl -d "user=nian" --data-urlencode content@- "localhost/add.php"` __only auto type__  
    * `cat try.cpp | curl -d "type=cpp" --data-urlencode content@- "localhost/add.php"` __only anonymous__  
    * `cat ipgw.sh | curl -d "user=nian&type=bash" --data-urlencode content@- "localhost/add.php"`  
    * It's so long that a `paste.sh` will be much better.(an example will be given later)  
* Delete:
  * Loading...

## Todo
- [ ] Delete code files.  
- [x] Paste code in the console without Explorer.  

## Address
[http://paste.whoisnian.com](http://paste.whoisnian.com)
