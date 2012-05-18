<?php

if(isset($_POST['action']) && !empty($_POST['action'])) {
    $action = $_POST['action'];
    $a = $_POST['a'];
    $b = $_POST['b'];
    $resume = 
    
    
    '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

     <style type="text/css">
        * { margin: 0; padding: 0; }
        
        .clear { clear: both; }
        #page-wrap { width: 800px; margin: 40px auto 60px; }
        #pic { float: right; margin: -30px 0 0 0; }
        h1 { margin: 0 0 16px 0; padding: 0 0 16px 0; font-size: 42px; font-weight: bold; letter-spacing: -2px; border-bottom: 1px solid #999; }
        h2 { font-size: 20px; margin: 0 0 6px 0; position: relative; }
        h2 span { position: absolute; bottom: 0; right: 0; font-style: italic; font-family: Georgia, Serif; font-size: 16px; color: #999; font-weight: normal; }
        p { margin: 0 0 16px 0; }
        a { color: #999; text-decoration: none; border-bottom: 1px dotted #999; }
        a:hover { border-bottom-style: solid; color: black; }
        ul { margin: 0 0 32px 17px; }
        #objective { width: 500px; float: left; }
        #objective p { font-family: Georgia, Serif; font-style: italic; color: #666; }
        dt { font-style: italic; font-weight: bold; font-size: 18px; text-align: right; padding: 0 26px 0 0; width: 150px; float: left; height: 100px; border-right: 1px solid #999;  }
        dd { width: 600px; float: right; }
        dd.clear { float: none; margin: 0; height: 15px; }
     </style>
<body>

    <div id="page-wrap">
    
        <img src="images/cthulu.png" alt="Photo of Cthulu" id="pic" />
    
        <div id="contact-info" class="vcard">
        
            <!-- Microformats! -->
        
            <h1 class="fn">Parikshit Tiwari</h1>
        
            <p>
                Cell: <span class="tel">408-505-1365</span><br />
                Email: <a class="email" href="mailto:parikshit.tiwari@ymail.com">parikshit.tiwari@ymail.com</a>
            </p>
        </div>
                
        <div id="objective">
            <p>
                I am an cheerful energetic and focused young professional, seeking a 
                career that fits my professional skills, personality, and area of interest.
            </p>
        </div>
        
        <div class="clear"></div>
        
        <dl>
            <dd class="clear"></dd>
            
            <dt>Education</dt>
            <dd>
                <h2>Santa Clara University</h2>
                <p><strong>Level:</strong> Master\'s<br />
                   <strong>Degree:</strong> Computer Science and Engineering</p>
            </dd>
            <dd>
                <h2>Swami Vivekanand College of Engineering</h2>
                <p><strong>Level:</strong> Bachelor\'s<br />
                   <strong>Degree:</strong> Computer Science and Engineering</p>
            </dd>
            
            <dd class="clear"></dd>
            
            <dt>Experience</dt>
            <dd>
                <h2>Balluun Inc <span>Consultant - San Mateo, CA - Nov\'11-Present</span></h2>
                <ul>
                    <li>Worked on UI development and server side development using PHP, jQuery, AJAX, JavaScript, CSS, XHTML</li>
                    <li>Bug fixes for previous releases using object oriented Zend PHP MVC Framework</li>
                    <li>Developed and implemented image upload and cropping feature using ajax and ImageMagick</li>
                    <li>Implemented the cropping feature all over the website</li>
                    <li>Installation and setup for SVN and Bugzilla on RedHat server</li>
                </ul>
                
                <h2>Axcient<span>Developer Intern - Mountain View, CA - May\'11-Sept\'11</span></h2>
                <ul>
                    <li>Worked in developing website and fixing bugs using PHP, MySQL, JavaScript, XHTML, CSS, XAMPP, CodeIgniter framework</li>
                    <li>Used CodeIgniter, jQuery, CSS, HTML for front end development and validations Developed back-end using PHP and MySQL</li>
                    <li>Worked with session and cookies</li>
                    <li>Design and add new features in the current product (RMC)</li>
                    <li>Develop Restful API for integration of product with Sales Force</li>
                    <li>Used jQuery for validation and providing UI effects</li>
                    <li>Resolve issues assigned in JIRA</li>
                    <li>Developed an internal UI project using HTML, jQuery, PHP and Datatables</li>
                    <li>Involved in user training and preparing technical documentation</li>
                    <li>Modified/crested cron jobs to automate the process of collecting data from end user, error logs</li>
                </ul>
                <h2>Red Seraphim<span>Developer Intern - Santa Clara, CA - Dec\'10-May\'11</span></h2>
                <ul>
                    <li>Develop communication between flash and PHP5</li>
                    <li>PHP was used to get data from MySQL server and send it to the client side</li>
                    <li>Worked on Amazon S3</li>
                    <li>Design and develop database to store question and answers on the server</li>
                    <li>Used Navicat and Phpmyadmin in writing queries, Procedures and triggers using MySQL</li>
                    <li>Used Mercurial for version control</li>
                </ul>
            </dd>

            <dd class="clear"></dd>
            
            <dt>Skills</dt>
            <dd>
                <h2>Programming Language</h2>
                <p>C, C++, Perl</p>

                <h2>Web Technologies</h2>
                <p>LAMP, PHP 5/4, XHTML, HTML, CSS, HTML5, CSS3, jQuery, JavaScript, AJAX<p>

                <h2>Networking Protocols</h2>
                <p>MPLS, VLAN, SONET, Pseudo wires, TCP/IP, UDP, RTP, Telnet, FTP, HTTP, DNS</p>

                <h2>Database</h2>
                <p>MySQL</p>

                <h2>Development Tools</h2>
                <p>Eclipse, NetBeans</p>
                
                <h2>Design Tools</h2>
                <p>Microsoft Visio, Adobe Dreamweaver, GIMP</p>
                
                <h2>Source Repository</h2>
                <p>SVN, CVS, Github, Mercurial, TortoiseHG</p>
                
                <h2>Tool Set</h2>
                <p>Firebug, Measure It, ColorToHTML, YSlow, HTTP Fox, DOM Inspector</p>
                
                <h2>Others</h2>
                <p>Apache, Bugzilla, JIRA, Wireshark, Matlab, Optnet, MS-Office</p>

                <h2>Operating System</h2>
                <p>Linux Redhat /Ubuntu /Debain, Windows Server, Windows 7</p>
                
            </dd>
            
            <dd class="clear"></dd>
            
            <dt>Hobbies</dt>
            <dd>Biking, Music</dd>
            
            <dd class="clear"></dd>
            
            <dt>References</dt>
            <dd>Available on request</dd>
            
            <dd class="clear"></dd>
        </dl>
        
        <div class="clear"></div>
    
    </div>

</body>

</html>';
    
    $findme = '<p>
    find me is you can
    </p>';
    
    try {
    switch($action) {
        case 'home' : 
          echo '<p>HOME</p>';
          break;
        case 'projects' : 
          echo '<p>projects</p>'; 
          break;
        case 'resume' : 
          echo $resume;
          break;
        case 'findme' : 
          echo $findme;
          break;
    }
    } catch (Exception $e) {
      echo ('Value Too Large');
      }
}