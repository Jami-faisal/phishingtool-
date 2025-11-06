# phishingtool-
this is a phishing tool which uses scripting in python.
 you will be ablur to run the webiste on local host on php.
 you will be provided with the thw website link.
 you will input you username and password.
 then you will click the signup button.
 you are going to be redirected to website which will display you are hacked.

this commands you will use:
first of all you get in to the directory where all the files(index.html , capture.php, hacked.html, credential.log) are saved:
--> cd phishing_tool
you will first write the command:
Start your server
--> python3 -m http.server 8080


Test Your Phishing Page:
http://YOUR-IP:8080

Terminal Output:
Terminal Output:



Serving HTTP on 0.0.0.0 port 8080 (http://0.0.0.0:8080/) ...
192.168.1.50 - - [15/Mar/2025 14:30:25] "GET / HTTP/1.1" 200 -
192.168.1.50 - - [15/Mar/2025 14:30:30] "POST /capture.php HTTP/1.1" 303 -
