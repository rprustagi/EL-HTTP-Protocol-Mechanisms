# EL-HTTP-Protocol-Mechanisms
Exercises to understand HTTP Protocol mechanisms to develop high performance applications

The example and code snippets correspond to the article 
"HTTP Protocol Mechanisms for High Performance Applications"
published in ACCS Journal "Advanced Communications and
Computing" volume 01, issue 02, 2017.

The examples of web pages used in this article are listed
below.
**pictures.html**\
This HTML file contains links to 10 embedded images to help
understand use of persistent and non-persitent connections.

**apache2.conf**\
The set of directives to be used in /etc/apache2/apache2.conf
to understand persistent and non-persistent connections.

**img-01.jpg**\
The image file img-01.jpg and similarly other images files up to
img-10.jpg.

**Table2-Typical-Request-Header.txt**\
Contains the example of HTTP request header in a typical web page
request for an image file.


**Table3-Typical-Response-Header.txt**\
Contains the example of HTTP Response headers with status code 304 for  a typical web page request which has not been modified.


**chunk-xfer.php**\
The PHP file when accessed via web browser will demonstrate use of
chunk transfer encoding.  This needs to be deployed in the same
directory where other HTML resources are kept. 

** Commands for downloading partial contents**\
__a.	curl âH âRange: bytes=0-199â âo chunk1.html http://myweb.com/mypage.html
b.	curl âH âRange: bytes=200-399â âo chunk2.html http://myweb.com/mypage.html
c.	curl âH âRange: bytes=400-â âo chunk3.html http://myweb.com/mypage.html
cat chunk1.html chunk2.html chunk3.html >response.html

Open the file *_response.html_* in the browser to see the full
content.** Commands for downloading partial contents**\
__a.	curl âH âRange: bytes=0-199â
âo chunk1.html http://myweb.com/mypage.html
b.	curl âH âRange: bytes=200-399â
âo chunk2.html http://myweb.com/mypage.html
c.	curl âH âRange: bytes=400-â
âo chunk3.html http://myweb.com/mypage.html
cat chunk1.html chunk2.html chunk3.html >response.html

Open the file *_response.html_* in the browser to see the full
content.** Commands for downloading partial contents**\
__a.	curl âH âRange: bytes=0-199â
âo chunk1.html http://myweb.com/mypage.html
b.	curl âH âRange: bytes=200-399â
âo chunk2.html http://myweb.com/mypage.html
c.	curl âH âRange: bytes=400-â
âo chunk3.html http://myweb.com/mypage.html
cat chunk1.html chunk2.html chunk3.html >response.html

Open the file *_response.html_* in the browser to see the full
content.** Commands for downloading partial contents**\
__a.	curl âH âRange: bytes=0-199â
âo chunk1.html http://myweb.com/mypage.html
b.	curl âH âRange: bytes=200-399â
âo chunk2.html http://myweb.com/mypage.html
c.	curl âH âRange: bytes=400-â
âo chunk3.html http://myweb.com/mypage.html
cat chunk1.html chunk2.html chunk3.html >response.html

Open the file *_response.html_* in the browser to see the full
content.** Commands for downloading partial contents**\
__a.	curl âH âRange: bytes=0-199â
âo chunk1.html http://myweb.com/mypage.html
b.	curl âH âRange: bytes=200-399â
âo chunk2.html http://myweb.com/mypage.html
c.	curl âH âRange: bytes=400-â
âo chunk3.html http://myweb.com/mypage.html
cat chunk1.html chunk2.html chunk3.html >response.html

Open the file *_response.html_* in the browser to see the full
content.** Commands for downloading partial contents**\
__a.	curl âH âRange: bytes=0-199â
âo chunk1.html http://myweb.com/mypage.html
b.	curl âH âRange: bytes=200-399â
âo chunk2.html http://myweb.com/mypage.html
c.	curl âH âRange: bytes=400-â
âo chunk3.html http://myweb.com/mypage.html
cat chunk1.html chunk2.html chunk3.html >response.html

Open the file *_response.html_* in the browser to see the full
content.** Commands for downloading partial contents**\
__a.	curl âH âRange: bytes=0-199â
âo chunk1.html http://myweb.com/mypage.html
b.	curl âH âRange: bytes=200-399â
âo chunk2.html http://myweb.com/mypage.html
c.	curl âH âRange: bytes=400-â
âo chunk3.html http://myweb.com/mypage.html
cat chunk1.html chunk2.html chunk3.html >response.html

Open the file *_response.html_* in the browser to see the full
content.** Commands for downloading partial contents**\
__a.	curl âH âRange: bytes=0-199â
âo chunk1.html http://myweb.com/mypage.html
b.	curl âH âRange: bytes=200-399â
âo chunk2.html http://myweb.com/mypage.html
c.	curl âH âRange: bytes=400-â
âo chunk3.html http://myweb.com/mypage.html
cat chunk1.html chunk2.html chunk3.html >response.html

Open the file *_response.html_* in the browser to see the full
content.** Commands for downloading partial contents**\
__a.	curl âH âRange: bytes=0-199â
âo chunk1.html http://myweb.com/mypage.html
b.	curl âH âRange: bytes=200-399â
âo chunk2.html http://myweb.com/mypage.html
c.	curl âH âRange: bytes=400-â
âo chunk3.html http://myweb.com/mypage.html
cat chunk1.html chunk2.html chunk3.html >response.html

Open the file *_response.html_* in the browser to see the full
content.** Commands for downloading partial contents**\
__a.	curl âH âRange: bytes=0-199â
âo chunk1.html http://myweb.com/mypage.html
b.	curl âH âRange: bytes=200-399â
âo chunk2.html http://myweb.com/mypage.html
c.	curl âH âRange: bytes=400-â
âo chunk3.html http://myweb.com/mypage.html
cat chunk1.html chunk2.html chunk3.html >response.html

Open the file *_response.html_* in the browser to see the full
content.** Commands for downloading partial contents**\
__a.	curl âH âRange: bytes=0-199â
âo chunk1.html http://myweb.com/mypage.html
b.	curl âH âRange: bytes=200-399â
âo chunk2.html http://myweb.com/mypage.html
c.	curl âH âRange: bytes=400-â
âo chunk3.html http://myweb.com/mypage.html
cat chunk1.html chunk2.html chunk3.html >response.html

Open the file *_response.html_* in the browser to see the full
content.** Commands for downloading partial contents**\
__a.	curl âH âRange: bytes=0-199â
âo chunk1.html http://myweb.com/mypage.html
b.	curl âH âRange: bytes=200-399â
âo chunk2.html http://myweb.com/mypage.html
c.	curl âH âRange: bytes=400-â
âo chunk3.html http://myweb.com/mypage.html
cat chunk1.html chunk2.html chunk3.html >response.html

Open the file *_response.html_* in the browser to see the full
content.** Commands for downloading partial contents**\
__a.	curl âH âRange: bytes=0-199â
âo chunk1.html http://myweb.com/mypage.html
b.	curl âH âRange: bytes=200-399â
âo chunk2.html http://myweb.com/mypage.html
c.	curl âH âRange: bytes=400-â
âo chunk3.html http://myweb.com/mypage.html
cat chunk1.html chunk2.html chunk3.html >response.html

Open the file *_response.html_* in the browser to see the full
content.** Commands for downloading partial contents**\
__a.	curl âH âRange: bytes=0-199â
âo chunk1.html http://myweb.com/mypage.html
b.	curl âH âRange: bytes=200-399â
âo chunk2.html http://myweb.com/mypage.html
c.	curl âH âRange: bytes=400-â
âo chunk3.html http://myweb.com/mypage.html
cat chunk1.html chunk2.html chunk3.html >response.html

Open the file *_response.html_* in the browser to see the full
content.** Commands for downloading partial contents**\
__a.	curl âH âRange: bytes=0-199â
âo chunk1.html http://myweb.com/mypage.html
b.	curl âH âRange: bytes=200-399â
âo chunk2.html http://myweb.com/mypage.html
c.	curl âH âRange: bytes=400-â
âo chunk3.html http://myweb.com/mypage.html
cat chunk1.html chunk2.html chunk3.html >response.html

Open the file *_response.html_* in the browser to see the full
content.** Commands for downloading partial contents**\
__a.	curl âH âRange: bytes=0-199â
âo chunk1.html http://myweb.com/mypage.html
b.	curl âH âRange: bytes=200-399â
âo chunk2.html http://myweb.com/mypage.html
c.	curl âH âRange: bytes=400-â
âo chunk3.html http://myweb.com/mypage.html
cat chunk1.html chunk2.html chunk3.html >response.html

Open the file *_response.html_* in the browser to see the full
content.** Commands for downloading partial contents**\
__a.	curl âH âRange: bytes=0-199â
âo chunk1.html http://myweb.com/mypage.html
b.	curl âH âRange: bytes=200-399â
âo chunk2.html http://myweb.com/mypage.html
c.	curl âH âRange: bytes=400-â
âo chunk3.html http://myweb.com/mypage.html
cat chunk1.html chunk2.html chunk3.html >response.html

Open the file *_response.html_* in the browser to see the full
content.** Commands for downloading partial contents**\
__a.	curl âH âRange: bytes=0-199â
âo chunk1.html http://myweb.com/mypage.html
b.	curl âH âRange: bytes=200-399â
âo chunk2.html http://myweb.com/mypage.html
c.	curl âH âRange: bytes=400-â
âo chunk3.html http://myweb.com/mypage.html
cat chunk1.html chunk2.html chunk3.html >response.html

Open the file *_response.html_* in the browser to see the full
content.** Commands for downloading partial contents**\
__a.	curl âH âRange: bytes=0-199â
âo chunk1.html http://myweb.com/mypage.html
b.	curl âH âRange: bytes=200-399â
âo chunk2.html http://myweb.com/mypage.html
c.	curl âH âRange: bytes=400-â
âo chunk3.html http://myweb.com/mypage.html
cat chunk1.html chunk2.html chunk3.html >response.html

Open the file *_response.html_* in the browser to see the full
content.** Commands for downloading partial contents**\
__a.	curl âH âRange: bytes=0-199â
âo chunk1.html http://myweb.com/mypage.html
b.	curl âH âRange: bytes=200-399â
âo chunk2.html http://myweb.com/mypage.html
c.	curl âH âRange: bytes=400-â
âo chunk3.html http://myweb.com/mypage.html
cat chunk1.html chunk2.html chunk3.html >response.html

Open the file *_response.html_* in the browser to see the full
content.** Commands for downloading partial contents**\
__a.	curl âH âRange: bytes=0-199â
âo chunk1.html http://myweb.com/mypage.html
b.	curl âH âRange: bytes=200-399â
âo chunk2.html http://myweb.com/mypage.html
c.	curl âH âRange: bytes=400-â
âo chunk3.html http://myweb.com/mypage.html
cat chunk1.html chunk2.html chunk3.html >response.html

Open the file *_response.html_* in the browser to see the full
content.** Commands for downloading partial contents**\
__a.	curl âH âRange: bytes=0-199â
âo chunk1.html http://myweb.com/mypage.html
b.	curl âH âRange: bytes=200-399â
âo chunk2.html http://myweb.com/mypage.html
c.	curl âH âRange: bytes=400-â
âo chunk3.html http://myweb.com/mypage.html
cat chunk1.html chunk2.html chunk3.html >response.html

Open the file *_response.html_* in the browser to see the full
content.** Commands for downloading partial contents**\
__a.	curl âH âRange: bytes=0-199â
âo chunk1.html http://myweb.com/mypage.html
b.	curl âH âRange: bytes=200-399â
âo chunk2.html http://myweb.com/mypage.html
c.	curl âH âRange: bytes=400-â
âo chunk3.html http://myweb.com/mypage.html
cat chunk1.html chunk2.html chunk3.html >response.html

Open the file *_response.html_* in the browser to see the full
content.** Commands for downloading partial contents**\
__a.	curl âH âRange: bytes=0-199â
âo chunk1.html http://myweb.com/mypage.html
b.	curl âH âRange: bytes=200-399â
âo chunk2.html http://myweb.com/mypage.html
c.	curl âH âRange: bytes=400-â
âo chunk3.html http://myweb.com/mypage.html
cat chunk1.html chunk2.html chunk3.html >response.html

Open the file *_response.html_* in the browser to see the full
content.** Commands for downloading partial contents**\
__a.	curl âH âRange: bytes=0-199â
âo chunk1.html http://myweb.com/mypage.html
b.	curl âH âRange: bytes=200-399â
âo chunk2.html http://myweb.com/mypage.html
c.	curl âH âRange: bytes=400-â
âo chunk3.html http://myweb.com/mypage.html
cat chunk1.html chunk2.html chunk3.html >response.html

Open the file *_response.html_* in the browser to see the full
content.** Commands for downloading partial contents**\
__a.	curl âH âRange: bytes=0-199â
âo chunk1.html http://myweb.com/mypage.html
b.	curl âH âRange: bytes=200-399â
âo chunk2.html http://myweb.com/mypage.html
c.	curl âH âRange: bytes=400-â
âo chunk3.html http://myweb.com/mypage.html
cat chunk1.html chunk2.html chunk3.html >response.html

Open the file *_response.html_* in the browser to see the full
content.** Commands for downloading partial contents**\
__a.	curl âH âRange: bytes=0-199â
âo chunk1.html http://myweb.com/mypage.html
b.	curl âH âRange: bytes=200-399â
âo chunk2.html http://myweb.com/mypage.html
c.	curl âH âRange: bytes=400-â
âo chunk3.html http://myweb.com/mypage.html
cat chunk1.html chunk2.html chunk3.html >response.html

Open the file *_response.html_* in the browser to see the full
content.** Commands for downloading partial contents**\
__a.	curl âH âRange: bytes=0-199â
âo chunk1.html http://myweb.com/mypage.html
b.	curl âH âRange: bytes=200-399â
âo chunk2.html http://myweb.com/mypage.html
c.	curl âH âRange: bytes=400-â
âo chunk3.html http://myweb.com/mypage.html
cat chunk1.html chunk2.html chunk3.html >response.html

Open the file *_response.html_* in the browser to see the full
content.** Commands for downloading partial contents**\
__a.	curl âH âRange: bytes=0-199â
âo chunk1.html http://myweb.com/mypage.html
b.	curl âH âRange: bytes=200-399â
âo chunk2.html http://myweb.com/mypage.html
c.	curl âH âRange: bytes=400-â
âo chunk3.html http://myweb.com/mypage.html
cat chunk1.html chunk2.html chunk3.html >response.html

Open the file *_response.html_* in the browser to see the full
content.** Commands for downloading partial contents**\
__a.	curl âH âRange: bytes=0-199â
âo chunk1.html http://myweb.com/mypage.html
b.	curl âH âRange: bytes=200-399â
âo chunk2.html http://myweb.com/mypage.html
c.	curl âH âRange: bytes=400-â
âo chunk3.html http://myweb.com/mypage.html
cat chunk1.html chunk2.html chunk3.html >response.html

Open the file *_response.html_* in the browser to see the full
content.** Commands for downloading partial contents**\
__a.	curl âH âRange: bytes=0-199â
âo chunk1.html http://myweb.com/mypage.html
b.	curl âH âRange: bytes=200-399â
âo chunk2.html http://myweb.com/mypage.html
c.	curl âH âRange: bytes=400-â
âo chunk3.html http://myweb.com/mypage.html
cat chunk1.html chunk2.html chunk3.html >response.html

Open the file *_response.html_* in the browser to see the full
content.** Commands for downloading partial contents**\
__a.	curl âH âRange: bytes=0-199â
âo chunk1.html http://myweb.com/mypage.html
b.	curl âH âRange: bytes=200-399â
âo chunk2.html http://myweb.com/mypage.html
c.	curl âH âRange: bytes=400-â
âo chunk3.html http://myweb.com/mypage.html
cat chunk1.html chunk2.html chunk3.html >response.html

Open the file *_response.html_* in the browser to see the full
content.** Commands for downloading partial contents**\
__a.	curl âH âRange: bytes=0-199â
âo chunk1.html http://myweb.com/mypage.html
b.	curl âH âRange: bytes=200-399â
âo chunk2.html http://myweb.com/mypage.html
c.	curl âH âRange: bytes=400-â
âo chunk3.html http://myweb.com/mypage.html
cat chunk1.html chunk2.html chunk3.html >response.html

Open the file *_response.html_* in the browser to see the full
content.** Commands for downloading partial contents**\
__a.	curl âH âRange: bytes=0-199â
âo chunk1.html http://myweb.com/mypage.html
b.	curl âH âRange: bytes=200-399â
âo chunk2.html http://myweb.com/mypage.html
c.	curl âH âRange: bytes=400-â
âo chunk3.html http://myweb.com/mypage.html
cat chunk1.html chunk2.html chunk3.html >response.html

Open the file *_response.html_* in the browser to see the full
content.** Commands for downloading partial contents**\
__a.	curl âH âRange: bytes=0-199â
âo chunk1.html http://myweb.com/mypage.html
b.	curl âH âRange: bytes=200-399â
âo chunk2.html http://myweb.com/mypage.html
c.	curl âH âRange: bytes=400-â
âo chunk3.html http://myweb.com/mypage.html
cat chunk1.html chunk2.html chunk3.html >response.html

Open the file *_response.html_* in the browser to see the full
content.** Commands for downloading partial contents**\
__a.	curl âH âRange: bytes=0-199â
âo chunk1.html http://myweb.com/mypage.html
b.	curl âH âRange: bytes=200-399â
âo chunk2.html http://myweb.com/mypage.html
c.	curl âH âRange: bytes=400-â
âo chunk3.html http://myweb.com/mypage.html
cat chunk1.html chunk2.html chunk3.html >response.html

Open the file *_response.html_* in the browser to see the full
content.** Commands for downloading partial contents**\
__a.	curl âH âRange: bytes=0-199â
âo chunk1.html http://myweb.com/mypage.html
b.	curl âH âRange: bytes=200-399â
âo chunk2.html http://myweb.com/mypage.html
c.	curl âH âRange: bytes=400-â
âo chunk3.html http://myweb.com/mypage.html
cat chunk1.html chunk2.html chunk3.html >response.html

Open the file *_response.html_* in the browser to see the full
content.** Commands for downloading partial contents**\
__a.	curl âH âRange: bytes=0-199â
âo chunk1.html http://myweb.com/mypage.html
b.	curl âH âRange: bytes=200-399â
âo chunk2.html http://myweb.com/mypage.html
c.	curl âH âRange: bytes=400-â
âo chunk3.html http://myweb.com/mypage.html
cat chunk1.html chunk2.html chunk3.html >response.html

Open the file *_response.html_* in the browser to see the full
content.** Commands for downloading partial contents**\
__a.	curl âH âRange: bytes=0-199â
âo chunk1.html http://myweb.com/mypage.html
b.	curl âH âRange: bytes=200-399â
âo chunk2.html http://myweb.com/mypage.html
c.	curl âH âRange: bytes=400-â
âo chunk3.html http://myweb.com/mypage.html
cat chunk1.html chunk2.html chunk3.html >response.html

Open the file *_response.html_* in the browser to see the full
content.** Commands for downloading partial contents**\
__a.	curl âH âRange: bytes=0-199â
âo chunk1.html http://myweb.com/mypage.html
b.	curl âH âRange: bytes=200-399â
âo chunk2.html http://myweb.com/mypage.html
c.	curl âH âRange: bytes=400-â
âo chunk3.html http://myweb.com/mypage.html
cat chunk1.html chunk2.html chunk3.html >response.html

Open the file *_response.html_* in the browser to see the full
content.** Commands for downloading partial contents**\
__a.	curl âH âRange: bytes=0-199â
âo chunk1.html http://myweb.com/mypage.html
b.	curl âH âRange: bytes=200-399â
âo chunk2.html http://myweb.com/mypage.html
c.	curl âH âRange: bytes=400-â
âo chunk3.html http://myweb.com/mypage.html
cat chunk1.html chunk2.html chunk3.html >response.html

Open the file *_response.html_* in the browser to see the full
content.** Commands for downloading partial contents**\
__a.	curl âH âRange: bytes=0-199â
âo chunk1.html http://myweb.com/mypage.html
b.	curl âH âRange: bytes=200-399â
âo chunk2.html http://myweb.com/mypage.html
c.	curl âH âRange: bytes=400-â
âo chunk3.html http://myweb.com/mypage.html
cat chunk1.html chunk2.html chunk3.html >response.html

Open the file *_response.html_* in the browser to see the full
content.** Commands for downloading partial contents**\
__a.	curl âH âRange: bytes=0-199â
âo chunk1.html http://myweb.com/mypage.html
b.	curl âH âRange: bytes=200-399â
âo chunk2.html http://myweb.com/mypage.html
c.	curl âH âRange: bytes=400-â
âo chunk3.html http://myweb.com/mypage.html
cat chunk1.html chunk2.html chunk3.html >response.html

Open the file *_response.html_* in the browser to see the full
content.** Commands for downloading partial contents**\
__a.	curl âH âRange: bytes=0-199â
âo chunk1.html http://myweb.com/mypage.html
b.	curl âH âRange: bytes=200-399â
âo chunk2.html http://myweb.com/mypage.html
c.	curl âH âRange: bytes=400-â
âo chunk3.html http://myweb.com/mypage.html
cat chunk1.html chunk2.html chunk3.html >response.html

Open the file *_response.html_* in the browser to see the full
content.** Commands for downloading partial contents**\
__a.	curl âH âRange: bytes=0-199â
âo chunk1.html http://myweb.com/mypage.html
b.	curl âH âRange: bytes=200-399â
âo chunk2.html http://myweb.com/mypage.html
c.	curl âH âRange: bytes=400-â
âo chunk3.html http://myweb.com/mypage.html
cat chunk1.html chunk2.html chunk3.html >response.html

Open the file *_response.html_* in the browser to see the full
content.** Commands for downloading partial contents**\
__a.	curl âH âRange: bytes=0-199â
âo chunk1.html http://myweb.com/mypage.html
b.	curl âH âRange: bytes=200-399â
âo chunk2.html http://myweb.com/mypage.html
c.	curl âH âRange: bytes=400-â
âo chunk3.html http://myweb.com/mypage.html
cat chunk1.html chunk2.html chunk3.html >response.html

Open the file *_response.html_* in the browser to see the full
content.** Commands for downloading partial contents**\
__a.	curl âH âRange: bytes=0-199â
âo chunk1.html http://myweb.com/mypage.html
b.	curl âH âRange: bytes=200-399â
âo chunk2.html http://myweb.com/mypage.html
c.	curl âH âRange: bytes=400-â
âo chunk3.html http://myweb.com/mypage.html
cat chunk1.html chunk2.html chunk3.html >response.html

Open the file *_response.html_* in the browser to see the full
content.** Commands for downloading partial contents**\
__a.	curl âH âRange: bytes=0-199â
âo chunk1.html http://myweb.com/mypage.html
b.	curl âH âRange: bytes=200-399â
âo chunk2.html http://myweb.com/mypage.html
c.	curl âH âRange: bytes=400-â
âo chunk3.html http://myweb.com/mypage.html
cat chunk1.html chunk2.html chunk3.html >response.html

Open the file *_response.html_* in the browser to see the full
content.** Commands for downloading partial contents**\
__a.	curl âH âRange: bytes=0-199â
âo chunk1.html http://myweb.com/mypage.html
b.	curl âH âRange: bytes=200-399â
âo chunk2.html http://myweb.com/mypage.html
c.	curl âH âRange: bytes=400-â
âo chunk3.html http://myweb.com/mypage.html
cat chunk1.html chunk2.html chunk3.html >response.html

Open the file *_response.html_* in the browser to see the full
content.** Commands for downloading partial contents**\
__a.	curl âH âRange: bytes=0-199â
âo chunk1.html http://myweb.com/mypage.html
b.	curl âH âRange: bytes=200-399â
âo chunk2.html http://myweb.com/mypage.html
c.	curl âH âRange: bytes=400-â
âo chunk3.html http://myweb.com/mypage.html
cat chunk1.html chunk2.html chunk3.html >response.html

Open the file *_response.html_* in the browser to see the full
content.** Commands for downloading partial contents**\
__a.	curl âH âRange: bytes=0-199â
âo chunk1.html http://myweb.com/mypage.html
b.	curl âH âRange: bytes=200-399â
âo chunk2.html http://myweb.com/mypage.html
c.	curl âH âRange: bytes=400-â
âo chunk3.html http://myweb.com/mypage.html
cat chunk1.html chunk2.html chunk3.html >response.html

Open the file *_response.html_* in the browser to see the full
content.** Commands for downloading partial contents**\
__a.	curl âH âRange: bytes=0-199â
âo chunk1.html http://myweb.com/mypage.html
b.	curl âH âRange: bytes=200-399â
âo chunk2.html http://myweb.com/mypage.html
c.	curl âH âRange: bytes=400-â
âo chunk3.html http://myweb.com/mypage.html
cat chunk1.html chunk2.html chunk3.html >response.html

Open the file *_response.html_* in the browser to see the full
content.** Commands for downloading partial contents**\
__a.	curl âH âRange: bytes=0-199â
âo chunk1.html http://myweb.com/mypage.html
b.	curl âH âRange: bytes=200-399â
âo chunk2.html http://myweb.com/mypage.html
c.	curl âH âRange: bytes=400-â
âo chunk3.html http://myweb.com/mypage.html
cat chunk1.html chunk2.html chunk3.html >response.html

Open the file *_response.html_* in the browser to see the full
content.** Commands for downloading partial contents**\
__a.	curl âH âRange: bytes=0-199â
âo chunk1.html http://myweb.com/mypage.html
b.	curl âH âRange: bytes=200-399â
âo chunk2.html http://myweb.com/mypage.html
c.	curl âH âRange: bytes=400-â
âo chunk3.html http://myweb.com/mypage.html
cat chunk1.html chunk2.html chunk3.html >response.html

Open the file *_response.html_* in the browser to see the full
content.** Commands for downloading partial contents**\
__a.	curl âH âRange: bytes=0-199â
âo chunk1.html http://myweb.com/mypage.html
b.	curl âH âRange: bytes=200-399â
âo chunk2.html http://myweb.com/mypage.html
c.	curl âH âRange: bytes=400-â
âo chunk3.html http://myweb.com/mypage.html
cat chunk1.html chunk2.html chunk3.html >response.html

Open the file *_response.html_* in the browser to see the full
content.** Commands for downloading partial contents**\
__a.	curl âH âRange: bytes=0-199â
âo chunk1.html http://myweb.com/mypage.html
b.	curl âH âRange: bytes=200-399â
âo chunk2.html http://myweb.com/mypage.html
c.	curl âH âRange: bytes=400-â
âo chunk3.html http://myweb.com/mypage.html
cat chunk1.html chunk2.html chunk3.html >response.html

Open the file *_response.html_* in the browser to see the full
content.** Commands for downloading partial contents**\
__a.	curl âH âRange: bytes=0-199â
âo chunk1.html http://myweb.com/mypage.html
b.	curl âH âRange: bytes=200-399â
âo chunk2.html http://myweb.com/mypage.html
c.	curl âH âRange: bytes=400-â
âo chunk3.html http://myweb.com/mypage.html
cat chunk1.html chunk2.html chunk3.html >response.html

Open the file *_response.html_* in the browser to see the full
content.** Commands for downloading partial contents**\
__a.	curl âH âRange: bytes=0-199â
âo chunk1.html http://myweb.com/mypage.html
b.	curl âH âRange: bytes=200-399â
âo chunk2.html http://myweb.com/mypage.html
c.	curl âH âRange: bytes=400-â
âo chunk3.html http://myweb.com/mypage.html
cat chunk1.html chunk2.html chunk3.html >response.html

Open the file *_response.html_* in the browser to see the full
content.** Commands for downloading partial contents**\
__a.	curl âH âRange: bytes=0-199â
âo chunk1.html http://myweb.com/mypage.html
b.	curl âH âRange: bytes=200-399â
âo chunk2.html http://myweb.com/mypage.html
c.	curl âH âRange: bytes=400-â
âo chunk3.html http://myweb.com/mypage.html
cat chunk1.html chunk2.html chunk3.html >response.html

Open the file *_response.html_* in the browser to see the full
content.** Commands for downloading partial contents**\
__a.	curl âH âRange: bytes=0-199â
âo chunk1.html http://myweb.com/mypage.html
b.	curl âH âRange: bytes=200-399â
âo chunk2.html http://myweb.com/mypage.html
c.	curl âH âRange: bytes=400-â
âo chunk3.html http://myweb.com/mypage.html
cat chunk1.html chunk2.html chunk3.html >response.html

Open the file *_response.html_* in the browser to see the full
content.** Commands for downloading partial contents**\
__a.	curl âH âRange: bytes=0-199â
âo chunk1.html http://myweb.com/mypage.html
b.	curl âH âRange: bytes=200-399â
âo chunk2.html http://myweb.com/mypage.html
c.	curl âH âRange: bytes=400-â
âo chunk3.html http://myweb.com/mypage.html
cat chunk1.html chunk2.html chunk3.html >response.html

Open the file *_response.html_* in the browser to see the full
content.** Commands for downloading partial contents**\
__a.	curl âH âRange: bytes=0-199â
âo chunk1.html http://myweb.com/mypage.html
b.	curl âH âRange: bytes=200-399â
âo chunk2.html http://myweb.com/mypage.html
c.	curl âH âRange: bytes=400-â
âo chunk3.html http://myweb.com/mypage.html
cat chunk1.html chunk2.html chunk3.html >response.html

Open the file *_response.html_* in the browser to see the full
content.** Commands for downloading partial contents**\
__a.	curl âH âRange: bytes=0-199â
âo chunk1.html http://myweb.com/mypage.html
b.	curl âH âRange: bytes=200-399â
âo chunk2.html http://myweb.com/mypage.html
c.	curl âH âRange: bytes=400-â
âo chunk3.html http://myweb.com/mypage.html
cat chunk1.html chunk2.html chunk3.html >response.html

Open the file *_response.html_* in the browser to see the full
content.** Commands for downloading partial contents**\
__a.	curl âH âRange: bytes=0-199â
âo chunk1.html http://myweb.com/mypage.html
b.	curl âH âRange: bytes=200-399â
âo chunk2.html http://myweb.com/mypage.html
c.	curl âH âRange: bytes=400-â
âo chunk3.html http://myweb.com/mypage.html
cat chunk1.html chunk2.html chunk3.html >response.html

Open the file *_response.html_* in the browser to see the full
content.** Commands for downloading partial contents**\
__a.	curl âH âRange: bytes=0-199â
âo chunk1.html http://myweb.com/mypage.html
b.	curl âH âRange: bytes=200-399â
âo chunk2.html http://myweb.com/mypage.html
c.	curl âH âRange: bytes=400-â
âo chunk3.html http://myweb.com/mypage.html
cat chunk1.html chunk2.html chunk3.html >response.html

Open the file *_response.html_* in the browser to see the full
content.** Commands for downloading partial contents**\
__a.	curl âH âRange: bytes=0-199â
âo chunk1.html http://myweb.com/mypage.html
b.	curl âH âRange: bytes=200-399â
âo chunk2.html http://myweb.com/mypage.html
c.	curl âH âRange: bytes=400-â
âo chunk3.html http://myweb.com/mypage.html
cat chunk1.html chunk2.html chunk3.html >response.html

Open the file *_response.html_* in the browser to see the full
content.** Commands for downloading partial contents**\
__a.	curl âH âRange: bytes=0-199â
âo chunk1.html http://myweb.com/mypage.html
b.	curl âH âRange: bytes=200-399â
âo chunk2.html http://myweb.com/mypage.html
c.	curl âH âRange: bytes=400-â
âo chunk3.html http://myweb.com/mypage.html
cat chunk1.html chunk2.html chunk3.html >response.html

Open the file *_response.html_* in the browser to see the full
content.** Commands for downloading partial contents**\
__a.	curl âH âRange: bytes=0-199â
âo chunk1.html http://myweb.com/mypage.html
b.	curl âH âRange: bytes=200-399â
âo chunk2.html http://myweb.com/mypage.html
c.	curl âH âRange: bytes=400-â
âo chunk3.html http://myweb.com/mypage.html
cat chunk1.html chunk2.html chunk3.html >response.html

Open the file *_response.html_* in the browser to see the full
content.** Commands for downloading partial contents**\
__a.	curl âH âRange: bytes=0-199â
âo chunk1.html http://myweb.com/mypage.html
b.	curl âH âRange: bytes=200-399â
âo chunk2.html http://myweb.com/mypage.html
c.	curl âH âRange: bytes=400-â
âo chunk3.html http://myweb.com/mypage.html
cat chunk1.html chunk2.html chunk3.html >response.html

Open the file *_response.html_* in the browser to see the full
content.** Commands for downloading partial contents**\
__a.	curl âH âRange: bytes=0-199â
âo chunk1.html http://myweb.com/mypage.html
b.	curl âH âRange: bytes=200-399â
âo chunk2.html http://myweb.com/mypage.html
c.	curl âH âRange: bytes=400-â
âo chunk3.html http://myweb.com/mypage.html
cat chunk1.html chunk2.html chunk3.html >response.html

Open the file *_response.html_* in the browser to see the full
content.** Commands for downloading partial contents**\
__a.	curl âH âRange: bytes=0-199â
âo chunk1.html http://myweb.com/mypage.html
b.	curl âH âRange: bytes=200-399â
âo chunk2.html http://myweb.com/mypage.html
c.	curl âH âRange: bytes=400-â
âo chunk3.html http://myweb.com/mypage.html
cat chunk1.html chunk2.html chunk3.html >response.html

Open the file *_response.html_* in the browser to see the full
content.** Commands for downloading partial contents**\
__a.	curl âH âRange: bytes=0-199â
âo chunk1.html http://myweb.com/mypage.html
b.	curl âH âRange: bytes=200-399â
âo chunk2.html http://myweb.com/mypage.html
c.	curl âH âRange: bytes=400-â
âo chunk3.html http://myweb.com/mypage.html
cat chunk1.html chunk2.html chunk3.html >response.html

Open the file *_response.html_* in the browser to see the full
content.** Commands for downloading partial contents**\
__a.	curl âH âRange: bytes=0-199â
âo chunk1.html http://myweb.com/mypage.html
b.	curl âH âRange: bytes=200-399â
âo chunk2.html http://myweb.com/mypage.html
c.	curl âH âRange: bytes=400-â
âo chunk3.html http://myweb.com/mypage.html
cat chunk1.html chunk2.html chunk3.html >response.html

Open the file *_response.html_* in the browser to see the full
content.** Commands for downloading partial contents**\
__a.	curl âH âRange: bytes=0-199â
âo chunk1.html http://myweb.com/mypage.html
b.	curl âH âRange: bytes=200-399â
âo chunk2.html http://myweb.com/mypage.html
c.	curl âH âRange: bytes=400-â
âo chunk3.html http://myweb.com/mypage.html
cat chunk1.html chunk2.html chunk3.html >response.html

Open the file *_response.html_* in the browser to see the full
content.** Commands for downloading partial contents**\
__a.	curl âH âRange: bytes=0-199â
âo chunk1.html http://myweb.com/mypage.html
b.	curl âH âRange: bytes=200-399â
âo chunk2.html http://myweb.com/mypage.html
c.	curl âH âRange: bytes=400-â
âo chunk3.html http://myweb.com/mypage.html
cat chunk1.html chunk2.html chunk3.html >response.html

Open the file *_response.html_* in the browser to see the full
content.** Commands for downloading partial contents**\
__a.	curl âH âRange: bytes=0-199â
âo chunk1.html http://myweb.com/mypage.html
b.	curl âH âRange: bytes=200-399â
âo chunk2.html http://myweb.com/mypage.html
c.	curl âH âRange: bytes=400-â
âo chunk3.html http://myweb.com/mypage.html
cat chunk1.html chunk2.html chunk3.html >response.html

Open the file *_response.html_* in the browser to see the full
content.** Commands for downloading partial contents**\
__a.	curl âH âRange: bytes=0-199â
âo chunk1.html http://myweb.com/mypage.html
b.	curl âH âRange: bytes=200-399â
âo chunk2.html http://myweb.com/mypage.html
c.	curl âH âRange: bytes=400-â
âo chunk3.html http://myweb.com/mypage.html
cat chunk1.html chunk2.html chunk3.html >response.html

Open the file *_response.html_* in the browser to see the full
content.** Commands for downloading partial contents**\
__a.	curl âH âRange: bytes=0-199â
âo chunk1.html http://myweb.com/mypage.html
b.	curl âH âRange: bytes=200-399â
âo chunk2.html http://myweb.com/mypage.html
c.	curl âH âRange: bytes=400-â
âo chunk3.html http://myweb.com/mypage.html
cat chunk1.html chunk2.html chunk3.html >response.html

Open the file *_response.html_* in the browser to see the full
content.** Commands for downloading partial contents**\
__a.	curl âH âRange: bytes=0-199â
âo chunk1.html http://myweb.com/mypage.html
b.	curl âH âRange: bytes=200-399â
âo chunk2.html http://myweb.com/mypage.html
c.	curl âH âRange: bytes=400-â
âo chunk3.html http://myweb.com/mypage.html
cat chunk1.html chunk2.html chunk3.html >response.html

Open the file *_response.html_* in the browser to see the full
content.** Commands for downloading partial contents**\
__a.	curl âH âRange: bytes=0-199â
âo chunk1.html http://myweb.com/mypage.html
b.	curl âH âRange: bytes=200-399â
âo chunk2.html http://myweb.com/mypage.html
c.	curl âH âRange: bytes=400-â
âo chunk3.html http://myweb.com/mypage.html
cat chunk1.html chunk2.html chunk3.html >response.html

Open the file *_response.html_* in the browser to see the full
content.** Commands for downloading partial contents**\
__a.	curl âH âRange: bytes=0-199â
âo chunk1.html http://myweb.com/mypage.html
b.	curl âH âRange: bytes=200-399â
âo chunk2.html http://myweb.com/mypage.html
c.	curl âH âRange: bytes=400-â
âo chunk3.html http://myweb.com/mypage.html
cat chunk1.html chunk2.html chunk3.html >response.html

Open the file *_response.html_* in the browser to see the full
content.** Commands for downloading partial contents**\
__a.	curl âH âRange: bytes=0-199â
âo chunk1.html http://myweb.com/mypage.html
b.	curl âH âRange: bytes=200-399â
âo chunk2.html http://myweb.com/mypage.html
c.	curl âH âRange: bytes=400-â
âo chunk3.html http://myweb.com/mypage.html
cat chunk1.html chunk2.html chunk3.html >response.html

Open the file *_response.html_* in the browser to see the full
content.** Commands for downloading partial contents**\
__a.	curl âH âRange: bytes=0-199â
âo chunk1.html http://myweb.com/mypage.html
b.	curl âH âRange: bytes=200-399â
âo chunk2.html http://myweb.com/mypage.html
c.	curl âH âRange: bytes=400-â
âo chunk3.html http://myweb.com/mypage.html
cat chunk1.html chunk2.html chunk3.html >response.html

Open the file *_response.html_* in the browser to see the full
content.** Commands for downloading partial contents**\
__a.	curl âH âRange: bytes=0-199â
âo chunk1.html http://myweb.com/mypage.html
b.	curl âH âRange: bytes=200-399â
âo chunk2.html http://myweb.com/mypage.html
c.	curl âH âRange: bytes=400-â
âo chunk3.html http://myweb.com/mypage.html
cat chunk1.html chunk2.html chunk3.html >response.html

Open the file *_response.html_* in the browser to see the full
content.** Commands for downloading partial contents**\
__a.	curl âH âRange: bytes=0-199â
âo chunk1.html http://myweb.com/mypage.html
b.	curl âH âRange: bytes=200-399â
âo chunk2.html http://myweb.com/mypage.html
c.	curl âH âRange: bytes=400-â
âo chunk3.html http://myweb.com/mypage.html
cat chunk1.html chunk2.html chunk3.html >response.html

Open the file *_response.html_* in the browser to see the full
content.** Commands for downloading partial contents**\
__a.	curl âH âRange: bytes=0-199â
âo chunk1.html http://myweb.com/mypage.html
b.	curl âH âRange: bytes=200-399â
âo chunk2.html http://myweb.com/mypage.html
c.	curl âH âRange: bytes=400-â
âo chunk3.html http://myweb.com/mypage.html
cat chunk1.html chunk2.html chunk3.html >response.html

Open the file *_response.html_* in the browser to see the full
content.** Commands for downloading partial contents**\
\$ curl -H "Range: bytes=0-199" -o chunk1.html http://myweb.com/mypage.html
\$ curl -H "Range: bytes=200-399" -o chunk2.html http://myweb.com/mypage.html
\$ curl -H "Range: bytes=400-" -o chunk3.html http://myweb.com/mypage.html
\$ cat chunk1.html chunk2.html chunk3.html >response.html

Open the file *_response.html_* in the browser to see the full
content.
