# phishingtool-
this is a phishing tool which uses scripting in python.
 you will be ablur to run the webiste on local host on php.
 you will be provided with the thw website link.
 you will input you username and password.
 then you will click the signup button.
 you are going to be redirected to website which will display you are hacked.

How to run the demo (local, safe)

Open a terminal and change into the demo directory:

cd phishing_tool


Start a simple HTTP server to host the static pages (Python 3):

python3 -m http.server 8080


Open a browser and visit the demo page:

http://YOUR-IP:8080

Example terminal output (safe, informational)

When the Python server is running, you’ll see lines like:

Serving HTTP on 0.0.0.0 port 8080 (http://0.0.0.0:8080/) ...
127.0.0.1 - - [2025-03-15 14:30:25] "GET /index.html HTTP/1.1" 200 -
127.0.0.1 - - [2025-03-15 14:30:30] "GET /hacked.html HTTP/1.1" 200 -
