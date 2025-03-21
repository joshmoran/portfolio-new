<?php
$sendTo = 'josh@joshkelly.cc';
$headers = "From: contact@joshkelly.cc";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $subject = $_POST['subject'];
  $message = $_POST['message'];

  $txt = $name . '\n\n' . 'Contact Email: ' . $email . '\n\n' . 'Message: ' . $message;

  echo mail( $sendTo, $subject, $txt, $headers);
  
  header( "Location: index.php?message=sent#article4");
}

if ( !isset( $_GET['message']) ) {
  $error_message = '';
} else {
  if ( $_GET['message'] == 'sent' ) {
    $error_message = 'Message sent!';#
  }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Josh Kelly's Portfolio</title>
    <meta content="width=device-width, initial-scale=1" name="viewport">
    <!-- <link rel="stylesheet" type="text/css" href="css/universal.css" /> -->
    <script type="text/javascript" async src="//cdn.credly.com/assets/utilities/embed.js"></script>
    <link rel="stylesheet" type="text/css" href="css/index.css">
</head>
<body>
    
<?php
        include "inc/header.php";
    ?>
    <div id="container" class="flex row">
        <div class="contentRow parallax" id="article1">
            <div id="intro">
                <div class="left">
                    <img src="img/cover_photo.jpg" class="profilePhoto" alt="My Profile Picture">
                </div>
                <div class="right">
                    <h2>Front and Backend Developer</h2>
                    <div id="quote">
                        <div class="quoteText">
                            <img src="img/quote/quote-left.svg" alt="Left Quote Icon">
                            <span>The beginning of knowledge is the discovery of something we do not understand.</span>
                            <img src="img/quote/quote-right.svg" alt="Right Quote Icon">
                        </div>
                        <p class="author">Frank Herbert</p>
                    </div>
                    <hr>
                    <p>Helping clients <span>develop</span>, <span>build</span> and <span>deploy</span> your digital products</p>
                    <a class="cvLink clickable" href="src/cv.pdf" target="_parent">Download My CV</a>
                    <a class="contactMe clickable" href="#article4" target="_parent">Contact Me</a>
                </div>
            </div>
        </div>
        <div class="contentRow" id="article2">
            <h1>My Development Work</h1>
            <!-- Projects -->
            <div id="projects">
                <div class="itemProject">
                    <div class="left">
                        <img src="img/ticket_system.png" class="projectsImg" alt="Ticket System Project">
                    </div>
                    <div class="right">
                        <div class="projectInfo">
                            <h2>Ticket System</h2>
                            <p>A website designed for managing, organizing and resolving tickets.</p>
                            <p><strong>Front-EndLanguages: </strong><br> ReactJS, CSS and JavaScript</p>
                            <p><strong>Backend Languages: </strong><br> NodeJS (API) and SQL (Data)</p>
                        </div>
                        <p><strong>Progress: </strong><br> Completed</p>
                        <div class="projectLinks">
                            <a class="clickable" href="projects/ticket_system/docs/moredetails.php">More Information</a>
                            <a class="clickable" href="https://github.com/joshmoran/ticket-system-frontend" target="_blank">View Frontend on GitHub</a>
                            <a class="clickable" href="https://github.com/joshmoran/ticket-system-backend" target="_blank">View Backend on GitHub</a>
                        </div>
                    </div>
                </div>
                <div class="itemProject">
                    <div class="left">
                        <img src="img/todo_flask.png" class="projectsImg" alt="ToDo Application Project Using Flask Framework">
                    </div>
                    <div class="right">
                        <div class="projectInfo">
                            <h2>ToDo List</h2>
                            <p>A simple task management system.</p>
                            <p><strong>Languages: </strong><br> Python, Flask, HTML, CSS, JavaScript and SQL</p>
                            <p><strong>Progress: </strong><br> Completed</p>
                        </div>
                        <div class="projectLinks">
                            <a class="clickable" href="https://todo-flask-z4xg.onrender.com/" target="_blank" rel="noopener noreferrer">View Project</a>
                            <a class="clickable" href="projects/todo_flask/docs/moredetails.php">More Information</a>
                            <a class="clickable" href="https://github.com/joshmoran/todo_flask" target="_blank">View on GitHub</a>
                        </div>
                    </div>
                </div>
                <div class="itemProject">
                    <div class="left">
                        <img src="img/claires.png" class="projectsImg" alt="Claries Bakery Project">
                    </div>
                    <div class="right">
                        <div class="projectInfo">
                            <h2>Cakeaholics by Claire</h2>
                            <p>A website designed for a local business in the north east england.</p>
                            <p><strong>Languages: </strong><br> HTML, CSS and JavaScript</p>
                            <p><strong>Progress: </strong><br> Completed</p>
                        </div>
                        <div class="projectLinks">
                            <a class="clickable" href="projects/cakeaholicsbyclaire/base/index.php" target="_blank">View Project</a>
                            <a class="clickable" href="projects/cakeaholicsbyclaire/docs/moredetails.php">More Information</a>
                            <a class="clickable" href="https://github.com/joshmoran/cakeaholics" target="_blank">View on GitHub</a>
                        </div>
                    </div>
                </div>
                <div class="itemProject">
                    <div class="left">
                        <img src="img/angelas_website.jpg" class="projectsImg" alt="Angelas Website Project">
                    </div>
                    <div class="right">
                        <div class="projectInfo">
                            <h2>Angela's Website</h2>
                            <p>A e-commerce website.</p>
                            <p><strong>Languages: </strong><br> HTML, CSS, JavaScript, SQL and PHP</p>
                            <p><strong>Progress: </strong><br> Completed</p>
                        </div>
                        <div class="projectLinks">
                            <a class="clickable" href="projects/angela/base/index.php" target="_blank">View Project</a>
                            <a class="clickable" href="projects/angela/docs/moredetails.php" target="_blank">More Information</a>
                            <a class="clickable" href="https://github.com/joshmoran/angeleas_website/
                            " target="_blank">View on GitHub</a>
                        </div>
                    </div>
                </div>
            </div>
            <hr>
            <a class="seeMore clickable" href="projects.php">See All My Work</a>

        </div>
        <div class="contentRow parallax" id="article3">
            <div id="article3content">
            <h2 class="heading">Introduction</h2>
            <!-- <p>I am a very hard working and dedicated individual. I have had a passion for computers since I was a child, taking apart broken electronics to see how they functions. To building, servicing and repairing computers for my family and friends during my teenage years. For the last five, I have been expanding my knowledge to the back-end of web-servers. Integrating and hosting different servers, from a simple WebDAV protocol file viewer to an email server.</p> -->
            <p>I am a passionate and dedicated developer with experience with front and back end developer technologies. I have developed a broad and extensive library of knowledge helping me develop websites and web applications for my clients.</p> 
            <p>The start of my journey started as a child taking apart broken electronics, progressing into diagnosing and repairing hardware and software faults. Expanding into system administration using advanced Linux applications such as Iptables, Fail2Ban, Apache2 Server, PHP8.2-FPM and many others. Combining the knowledge of a network and system technician with my developer knowledge really aids my attention to detail, critical thinking and problem solving and problem analysis.</p>

            <p><strong>Front end development</strong> has given me an extensive understanding of the pinnacle nature of why the users are to be first and foremost when developing and building a solution. Understanding the target demographic, morals and beliefs can further the design, layout and content. Furthermore, understanding accessibility and designing a solution that is within the User Experience (UE) and User Interface (UI) of the clients specifications.</p>

            <p><strong>Back end development</strong> has allowed me to integrate system administration with website development. Integrating database solutions and APIs into my projects to allow website applications to be built. Certainly when I was  building an e-commerce website, it has  given me a comprehensive knowledge and skills to further this and develop more challenging and advanced websites.</p>

            <h2 class="heading">Programming Languages:</h2>
            <div class="flex row logoDiv">
                <div class="logoContainer">
                    <img src="img/languages/html5.svg" alt="HTML5 Logo">
                    <h3>HTML5</h3>
                </div>
                <div class="logoContainer">
                    <img src="img/languages/css3-alt.svg" alt="CSS3 Logo">
                    <h3>CSS3</h3>
                </div>
                <div class="logoContainer">
                    <img src="img/languages/js.svg" alt="JavaScript Logo">
                    <h3>JavaScript</h3>
                </div>
                <div class="logoContainer">
                    <img src="img/languages/jquery.svg" alt="JQuery Logo">
                    <h3>JQuery</h3>
                </div>
                <div class="logoContainer">
                    <img src="img/languages/react.svg" alt="ReactJS Logo">
                    <h3>ReactJS</h3>
                </div>
                <div class="logoContainer">
                    <img src="img/languages/node.svg" alt="NodeJS Logo">
                    <h3>NodeJS</h3>
                </div>
                <div class="logoContainer">
                    <img src="img/languages/python.svg" alt="Python Logo">
                    <h3>Python</h3>
                </div>
                <div class="logoContainer">
                    <img src="img/languages/flask.svg" alt="Flask Logo">
                    <h3>Flask</h3>
                </div>
                <div class="logoContainer">
                    <img src="img/languages/php.svg" alt="PHP Logo">
                    <h3>PHP</h3>
                </div>
                <div class="logoContainer">
                    <img src="img/languages/sql.svg" alt="SQL Logo">
                    <h3>SQL</h3>
                </div>
                <div class="logoContainer">
                    <img src="img/languages/json.svg" alt="JSON Logo">
                    <h3>JSON</h3>
                </div>

            </div>
            <!-- <div class="flex row"> -->
            <!-- 
            </div>
                
                <img src="img/css3.png" alt="CSS3 Logo" />
                    <img src="img/javascript.png" alt="JavaScript Logo" />
                    <
                </div>
            </div> -->
            <!--         
            <h2>Technolgies</h2>
            <div class="flex row">
                <div class="logoContainer">
                    <img src="img/languages/html5.svg" alt="HTML5 Logo" />
                    <h2>HTML5</h2>
                </div>
            </div> -->
            <br>
            <h2 class="heading">Operating Systems</h2>
            <div class="flex row logoDiv" id="osLogos">
                <div class="logoContainer">
                    <img src="img/operatingsystems/windows.svg" alt="Windows Logo">
                    <h3>Windows</h3>
                </div>
                <div class="logoContainer">
                    <img src="img/operatingsystems/linux.svg" alt="Linux Logo">
                    <h3>Linux</h3>
                </div>
                <div class="logoContainer">
                    <img src="img/operatingsystems/debian.svg" alt="Debian Logo">
                    <h3>Debian</h3>
                </div>
            </div>
            <br>
            <h2 class="heading">Software</h2>
            <div class="flex row logoDiv">
                <div class="logoContainer">
                    <img src="img/skills/vscode.svg" alt="VScode Logo">
                    <h3>VSCode</h3>
                </div>
                <div class="logoContainer">
                    <img src="img/skills/git.svg" alt="Git Logo">
                    <h3>Git</h3>
                </div>
                <div class="logoContainer">
                    <img src="img/skills/github.svg" alt="Github Logo">
                    <h3>Github</h3>
                </div>
                <div class="logoContainer">
                    <img src="img/skills/docker.svg" alt="Docker Logo">
                    <h3>Docker</h3>
                </div>
                <div class="logoContainer">
                    <img src="img/skills/jenkins.svg" alt="Jenkins Logo">
                    <h3>Jenkins</h3>
                </div>
                <div class="logoContainer">
                    <img src="img/skills/apache.svg" alt="Apache2 Logo">
                    <h3>Apache2</h3>
                </div>
                <div class="logoContainer">
                    <img src="img/skills/git.svg" alt="Git Logo">
                    <h3>Git</h3>
                </div>
                <div class="logoContainer">
                    <img src="img/skills/cloudflare.svg" alt="Cloudflare Logo">
                    <h3>Cloudflare</h3>
                </div>
                <div class="logoContainer">
                    <img src="img/skills/mariadb.png" alt="MariaDB Logo">
                    <h3>MariaDB</h3>
                </div>
                <div class="logoContainer">
                    <img src="img/skills/pihole.svg" alt="Pihole Logo">
                    <h3>Pihole</h3>
                </div>
                <div class="logoContainer">
                    <img src="img/skills/dovecot.webp" alt="Dovecot Logo">
                    <h3>Dovecot</h3>
                </div>
                <div class="logoContainer">
                    <img src="img/skills/postfix.png" alt="Postfix Logo">
                    <h3>Postfix</h3>
                </div>
                <div class="logoContainer">
                    <img src="img/skills/redis.svg" alt="Redis Logo">
                    <h3>Redis</h3>
                </div>
                <div class="logoContainer">
                    <img src="img/skills/npm.svg" alt="NPM Logo">
                    <h3>NPM</h3>
                </div>
                <div class="logoContainer">
                    <img src="img/skills/localai.svg" alt="LocalAI Logo">
                    <h3>LocalAI</h3>
                </div>
            </div>
            <!--             
            <ul>
                <li>AJAX</li>
                <li>HTTP/TCP</li>
                <li>DNS Server & Protocol</li>
                <li>Mail Server - POP3, IMAP, SMTP</li>
            </ul>

            <h2>Tools</h2>
            <ul>
                <li>VSCode</li>
                <li>Apache2</li>
                <li>Linux</li>
                <li>Windows</li>
            </ul>
            -->
            <br>
            <h2 class="heading">Qualifications</h2>
            <div class="flex row">
                <div class="logoContainer">
                    <img class="qualifications" src="img/qualifications/ms900.png" alt="Microsoft 365 Fundamentals Logo">
                    <h3>Microsoft 365 Fundamentals</h3>
                </div>
                <div class="logoContainer">
                    <div data-iframe-width="150" data-iframe-height="270" data-share-badge-id="41bde048-f406-4cde-b177-e8c141f2fe01" data-share-badge-host="https://www.credly.com"></div><h2>CompTIA A+</h2><script type="text/javascript" async src="//cdn.credly.com/assets/utilities/embed.js"></script>
                </div>
                <div class="logoContainer">
                    <div data-iframe-width="150" data-iframe-height="270" data-share-badge-id="3c181719-73ac-4b2d-be38-33c7cb6c35a4" data-share-badge-host="https://www.credly.com"></div><h2>CompTIA Network+</h2><script type="text/javascript" async src="//cdn.credly.com/assets/utilities/embed.js"></script>
                </div>
                <div class="logoContainer">
                    <div data-iframe-width="150" data-iframe-height="270" data-share-badge-id="4ff17196-ce34-4e2e-a623-019d6fbcece4" data-share-badge-host="https://www.credly.com"></div><h2>CompTIA IT Operations Specialist</h2><script type="text/javascript" async src="//cdn.credly.com/assets/utilities/embed.js"></script>
                </div>
            </div>  
        </div>
    </div>
    <div class="contentRow" id="article4">
<h2>Contact Methods</h2>
<div id="contactMethod">
<ul class="contactLinks">
    <li><a class="contactClickable" href="mailto:josh@lovingfamily.co.uk" target="_blank"><span>Email: </span><img src="/img/footer/pngkey.com-mail-white-png-4297053.png" alt="Contact Me By Email" class="contactMethod"></a></li>
    <li><a class="contactClickable" href="https://github.com/joshmoran" target="_blank"><span>GitHub: </span><img src="/img/footer/github.svg" class="contactMethod" alt="Contact Me By GitHub"></a></li>
    <li><a class="contactClickable" href="https://teamtreehouse.com/profiles/joshkelly4" target="_blank"><span>TeamTreeHouse: </span><img src="/img/footer/treehouse.png" class="contactMethod" alt="Contact Me By TeamTreehouse"></a></li>
    <li><a class="contactClickable" href="//www.linkedin.com/in/joshua-kelly-92a321310/" target="_blank"><span>LinkedIn: </span><img src="/img/footer/linkedin.svg" class="contactMethod" alt="Contact Me By LinkedIn"></a></li>
    <!-- <li><a class="contactClickable" href="https://www.codecademy.com/profiles/method7207366434" target="_blank"><span>CodeAcademy: </span><img src="/img/footer/linkedin.svg" class="contactMethod" /></a></li> -->
</ul>
</div>
<div id="contactForm">
<h3>Contact Form</h3>
<?php 
    if ( isset($error_message) && $error_message != '' ) {
    echo '<p id="messageSent">';
    echo $error_message;
    echo '</p>';
    }
?>
<form action="index.php" method="POST" >
    <div><label for="name">Name</label><input type="text" id="name" name="name" placeholder="John Smith" autocomplete="name" required></div>
    <div><label for="email">Email</label><input type="email" id="email" name="email" placeholder="johnsmith@provider.co.uk" autocomplete="email" required></div>
    <div><label for="subject">Subject</label><input type="text" id="subject" name="subject" placeholder="Information and advice" autocomplete="subject" required></div>
    <div><label for="message">Message</label><textarea id="message" name="message" placeholder="I am in need of a website developed for my business. Is this something you can do? Looking forward to hearing from you soon." autocomplete="message" required></textarea></div>
    <input type="submit" value="Submit">
</form>
</div>
</div>
</div>
<?php
    include "inc/footer.php";
    ?>


    
    <!-- <script src="js/index.js"></script> -->
</body>

</html>