<?php
    /*
        Server Setup Page
        Mainly static HTML
    */
?>
            <h3>Server Setup</h3>
            <span>This page documents how I would setup a server to demonstrate ability.</span>
            <div class="dvLargeSpacer"></div>
            <div class="dvHelp">
                <i class="fa fa-info-circle"></i> Please click a heading below to open its contents.
            </div>
            <div class="dvSmallSpacer"></div>
            <div><a class="btn btn-primary btnCollapse" data-toggle="collapse" aria-expanded="true" aria-controls="clpApache" role="button" href="#clpApache" id="btnClpApache">Installing Apache, PHP, MySQL, PHPMyAdmin <i class="fa fa-angle-down"></i></a>
                <div class="collapse hide clpContent" id="clpApache">
                    <p>To setup Apache, PHP and MySQL on CentOS I would perform the following commands.</p>
                    <p>Install the actual Apache server.<br />
                    <code>sudo yum install apache2</code></p>

                    <p>Install PHP and MySQL.<br />
                    <code>sudo yum install php php-mysql</code></p>

                    <p>Install PHPMyAdmin to admin the DB server.<br />
                    <code>sudo yum install phpmyadmin</code></p>

                    <p>Restart the Apache service.<br />
                    <code>sudo service httpd restart</code></p>
                    
                    <p>Yay now we *should* have a server with Apache, PHP, MySQL running.. If only it were that easy.</p>
                    <p>I've dumbed this down to just a few commands attempting to show I understand the bash commands, trusty Google always helps here too.</p>
                </div>
            </div>
            <div><a class="btn btn-primary btnCollapse" data-toggle="collapse" aria-expanded="true" aria-controls="clpHttpdConf" role="button" href="#clpHttpdConf" id="btnclpHttpdConf">httpd.conf <i class="fa fa-angle-down"></i></a>
                <div class="collapse hide clpContent" id="clpHttpdConf">
                    <p>Just a demo of a Virtual Host to do the SSL serving of this page.</p>
                    <p><code>
                        &lt;VirtualHost *:443&gt;<br />
                            &emsp;&emsp;ServerName samples.cameronmcguffie.com<br />
                            &emsp;&emsp;DocumentRoot /var/www/samples/htdocs<br /><br />
                            &emsp;&emsp;# Turn SSL on<br />
                            &emsp;&emsp;SSLEngine on<br />
                            &emsp;&emsp;# Set the protocol version<br />
                            &emsp;&emsp;SSLProtocol all -SSLv2<br />
                            &emsp;&emsp;# Set the cipher suite<br />
                            &emsp;&emsp;SSLCipherSuite HIGH:MEDIUM:!aNULL:!MD5<br /><br />
                            &emsp;&emsp;# Set the certificate location<br />
                            &emsp;&emsp;SSLCertificateFile "/home/samples/ssl/server.crt"<br />
                            &emsp;&emsp;# Set the private key location<br />
                            &emsp;&emsp;SSLCertificateKeyFile "/home/samples/ssl/server.key"<br />
                        &lt;/VirtualHost&gt;
                    </code></p>
                    <p>This is only basic again to demonstrate ability.</p>
                </div>
            </div>
            <div><a class="btn btn-primary btnCollapse" data-toggle="collapse" aria-expanded="true" aria-controls="clpHtaccess" role="button" href="#clpHtaccess" id="btnclpHtaccess">.htaccess <i class="fa fa-angle-down"></i></a>
                <div class="collapse hide clpContent" id="clpHtaccess">
                    <p>A .htaccess file to rewrite pages so the user see's a "friendly" URL.</p>
                    <p>Turn the engine on so we can rewrite things.<br />
                    <code>RewriteEngine On</code></p>

                    <p>Rewrite &lt;url&gt;/p/&lt;page name&gt; to the script index.php?p=&lt;page name&gt;. We do NC so case doesn't matter and L so it doesn't process any more rules.<br />
                    <code>RewriteRule ^p/([a-z0-9]+)/?$ index.php?p=$1 [NC,L]</code></p>

                    <p>We can get pretty tricky with the <a href="https://regex101.com/" target="_blank">Regex</a> but on a small project like this I'll just add multiple lines to do parameters. This just allows &lt;url&gt;/api/&lt;script&gt;/&lt;parameter&gt;<br />
                    <code>RewriteRule ^api/([a-z0-9]+)/([a-z0-9]+)/?$ scripts/api.php?s=$1&p1=$2 [NC,L]</code></p>

                    <p>And this allows &lt;url&gt;/api/&lt;script&gt;/&lt;parameter 1&gt;/&lt;parameter 2&gt;<br />
                    <code>RewriteRule ^api/([a-z0-9]+)/([a-z0-9]+)/([a-z0-9]+)/?$ scripts/api.php?s=$1&p1=$2&p2=$3 [NC,L]</code></p>
                </div>
            </div>