# Adding suggestions for http://www.whatcanidoforwikimedia.org

##Instructions
1. Navigate to the file you wish you change
2. Click the pen icon in the top right
3. Make your changes. Please be sure to follow the file's structure.
4. Make a pull request

##File Structure
The file structure on the server is as follows:
* **assets**
  * style.css <br/>
  * Wikimedia_Community_Logo.png
  * Wikimedia_Community_Logo-140px.png
* **explore** <br/>
  * advocate.php <br/>
  * create.php <br/>
  * index.php <br/>
  * tech.php <br/>
* **schools** <br/>
  * [marked for later use]
* .htaccess <br/>
* index.php (nb. uses file_get_contents on index.html)<br/>

##File structure
```<a href='url here'>Text to be shown</a>?```

##Notes
* index.html is **THE MOST** hacky way of including something in a webpage and also allowing community input. It uses a PHP 'file_get_contents'. Editing this changes the index of http://www.whatcanidoforwikimedia.org - so only pull request sensible things yeah? :3
