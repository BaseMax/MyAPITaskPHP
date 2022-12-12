<?php
// array(48) {
//     ["MIBDIRS"]=>
//     string(24) "C:/xampp/php/extras/mibs"
//     ["MYSQL_HOME"]=>
//     string(16) "\xampp\mysql\bin"
//     ["OPENSSL_CONF"]=>
//     string(31) "C:/xampp/apache/bin/openssl.cnf"
//     ["PHP_PEAR_SYSCONF_DIR"]=>
//     string(10) "\xampp\php"
//     ["PHPRC"]=>
//     string(10) "\xampp\php"
//     ["TMP"]=>
//     string(10) "\xampp\tmp"
//     ["HTTP_HOST"]=>
//     string(9) "localhost"
//     ["HTTP_CONNECTION"]=>
//     string(10) "keep-alive"
//     ["HTTP_CACHE_CONTROL"]=>
//     string(9) "max-age=0"
//     ["HTTP_SEC_CH_UA"]=>
//     string(65) ""Google Chrome";v="107", "Chromium";v="107", "Not=A?Brand";v="24""
//     ["HTTP_SEC_CH_UA_MOBILE"]=>
//     string(2) "?0"
//     ["HTTP_SEC_CH_UA_PLATFORM"]=>
//     string(9) ""Windows""
//     ["HTTP_UPGRADE_INSECURE_REQUESTS"]=>
//     string(1) "1"
//     ["HTTP_USER_AGENT"]=>
//     string(111) "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/107.0.0.0 Safari/537.36"
//     ["HTTP_ACCEPT"]=>
//     string(135) "text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9"
//     ["HTTP_SEC_FETCH_SITE"]=>
//     string(4) "none"
//     ["HTTP_SEC_FETCH_MODE"]=>
//     string(8) "navigate"
//     ["HTTP_SEC_FETCH_USER"]=>
//     string(2) "?1"
//     ["HTTP_SEC_FETCH_DEST"]=>
//     string(8) "document"
//     ["HTTP_ACCEPT_ENCODING"]=>
//     string(17) "gzip, deflate, br"
//     ["HTTP_ACCEPT_LANGUAGE"]=>
//     string(14) "en-US,en;q=0.9"
//     ["PATH"]=>
//     string(562) "C:\Windows\system32;C:\Windows;C:\Windows\System32\Wbem;C:\Windows\System32\WindowsPowerShell\v1.0\;C:\Windows\System32\OpenSSH\;C:\Program Files\Docker\Docker\resources\bin;C:\Program Files\nodejs\;C:\Program Files\dotnet\;C:\Program Files\Cloudflare\Cloudflare WARP\;C:\Program Files\Git\cmd;C:\xampp\php;C:\ProgramData\ComposerSetup\bin;C:\Users\Max\AppData\Local\Microsoft\WindowsApps;C:\Users\Max\AppData\Local\Programs\VSCode\bin;C:\Users\Max\AppData\Roaming\npm;C:\Users\Max\AppData\Local\GitHubDesktop\bin;C:\Users\Max\AppData\Roaming\Composer\vendor\bin"
//     ["SystemRoot"]=>
//     string(10) "C:\Windows"
//     ["COMSPEC"]=>
//     string(27) "C:\Windows\system32\cmd.exe"
//     ["PATHEXT"]=>
//     string(53) ".COM;.EXE;.BAT;.CMD;.VBS;.VBE;.JS;.JSE;.WSF;.WSH;.MSC"
//     ["WINDIR"]=>
//     string(10) "C:\Windows"
//     ["SERVER_SIGNATURE"]=>
//     string(95) "
//   Apache/2.4.54 (Win64) OpenSSL/1.1.1p PHP/8.1.12 Server at localhost Port 80
  
//   "
//     ["SERVER_SOFTWARE"]=>
//     string(47) "Apache/2.4.54 (Win64) OpenSSL/1.1.1p PHP/8.1.12"
//     ["SERVER_NAME"]=>
//     string(9) "localhost"
//     ["SERVER_ADDR"]=>
//     string(3) "::1"
//     ["SERVER_PORT"]=>
//     string(2) "80"
//     ["REMOTE_ADDR"]=>
//     string(3) "::1"
//     ["DOCUMENT_ROOT"]=>
//     string(15) "C:/xampp/htdocs"
//     ["REQUEST_SCHEME"]=>
//     string(4) "http"
//     ["CONTEXT_PREFIX"]=>
//     string(0) ""
//     ["CONTEXT_DOCUMENT_ROOT"]=>
//     string(15) "C:/xampp/htdocs"
//     ["SERVER_ADMIN"]=>
//     string(20) "postmaster@localhost"
//     ["SCRIPT_FILENAME"]=>
//     string(38) "C:/xampp/htdocs/MyAPITaskPHP/index.php"
//     ["REMOTE_PORT"]=>
//     string(5) "63779"
//     ["GATEWAY_INTERFACE"]=>
//     string(7) "CGI/1.1"
//     ["SERVER_PROTOCOL"]=>
//     string(8) "HTTP/1.1"
//     ["REQUEST_METHOD"]=>
//     string(3) "GET"
//     ["QUERY_STRING"]=>
//     string(22) "name=ali&family=ahmadi"
//     ["REQUEST_URI"]=>
//     string(46) "/MyAPITaskPHP/index.php?name=ali&family=ahmadi"
//     ["SCRIPT_NAME"]=>
//     string(23) "/MyAPITaskPHP/index.php"
//     ["PHP_SELF"]=>
//     string(23) "/MyAPITaskPHP/index.php"
//     ["REQUEST_TIME_FLOAT"]=>
//     float(1670258137.107077)
//     ["REQUEST_TIME"]=>
//     int(1670258137)
//   }


#######################################



    // require_once "functions.php";

    // $url = $_SERVER['REQUEST_URI'];
    // if($_SERVER["REQUEST_METHOD"] == "POST"){}


    // if($_SERVER["REQUEST_METHOD"] == "GET"){
    //     $route =  split($url);

    //     if($route[count($route) - 1] == ""){
    //         echo "main page";
    //     }else if($route[count($route) - 1] == "about"){
    //         echo "About";
    //     }
    // }
    require_once "functions.php";


    if($_SERVER["REQUEST_METHOD"] == "GET"){
        $querys = Query_splitter($_SERVER["QUERY_STRING"]);
        if(empty($querys)){
            echo "All Tasks";
        }else if(!empty($querys["q"])){
            echo "Search with {$querys['q']} keyword";
        }
    }

?>