<!DOCTYPE html>
<html lang="en">
    <head>
        
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <link rel="stylesheet" type="text/css" href="vendors/css/normalize.css">
        <link rel="stylesheet" type="text/css" href="vendors/css/grid.css">
        <link rel="stylesheet" type="text/css" href="vendors/css/ionicons.min.css">
        <link rel="stylesheet" type="text/css" href="resources/css/style.css">
        <link rel="stylesheet" type="text/css" href="resources/css/queries.css">
        <link href="https://fonts.googleapis.com/css?family=Raleway:200,300,400" rel="stylesheet"> 
        <title>WCHS Study Space</title>                               
    </head>
    
    <body>
        <header>
            <nav>
                <div class="row">
                    <img src="resources/img/WCHSLogo.png" alt="WCHS Logo" class="logo">
                    <ul class="main-nav">
                        <li><a href="#section-description">What We Do</a></li>   
                        <li><a href="#section-subjects">Subject Areas</a></li>
                        <li><a href="#section-contact">Contact Us</a></li>
                    </ul>
                </div>
            </nav>
            <div class="header-text-box">
                <h1>
                   WCHS Study Space
                </h1>
                    <a class="btn btn-ghost" href="#">Study Packets</a>
                    <a class="btn btn-ghost" href="#">Ask our Mentors</a>
            </div>
        </header>
        
        <section class="section-description">
            <div class="row">
                <h2>Peer Academic Support</h2>
                <p class="long-copy">
                Hello, we're Study Space, a casual student support program at Western Canada High School. Feel free to use our study packets or request to have one made over in the "Contact Us" section!
                </p>
            </div>
                
            <div class="row">
                <div class="col span-1-of-2 box">
                    <i class="ion-edit icon-large"></i>
                    <h3>What do we do?</h3>
                    <p>
                        We have many academically strong student mentors available to help  you with any of your questions. We offer support for courses in the sciences and maths. We also provide a chance for peers to edit your essays.
                    </p>
                </div>
                <div class="col span-1-of-2 box">
                    <i class="ion-ios-clock-outline icon-large"></i>
                    <h3>When and Where?</h3>
                    <p>
                    We run <strong>Wednesdays</strong> after school from <strong>3:40 to 5:00</strong> every week inside of room 102A (in the math hall). Drop by anytime if you have questions.
                    </p>
                </div>
            </div>
        </section>
        
        <section class="section-subjects">
            <div class = "row">
                <h2 class="subject-area-heading">Subject Areas</h2>
            </div>
            <div class="row">
                <div class="col span-1-of-4 math">
                    <h4><a href="#">Math</a></h4>
                    <i class="ion-calculator icon-math icon-subjects"></i>
                </div>
                <div class="col span-1-of-4 chem">
                    <h4><a href="#">Chemistry</a></h4>
                    <i class="ion-erlenmeyer-flask icon-chem icon-subjects"></i>
                </div>
                <div class="col span-1-of-4 physics">
                    <h4><a href="#">Physics</a></h4>
                    <i class="ion-planet icon-physics icon-subjects"></i>
                </div>
                <div class="col span-1-of-4 bio">
                    <h4><a href="#">Biology</a></h4>
                    <i class="ion-leaf icon-bio icon-subjects"></i>
                </div>
            </div>
        </section>
        
        <section class="section-contact">
            <div class = "row" id = "form">
                <h2 class="contact-heading">Request Study Packets!</h2>
            </div>
            <div class = "row">
                <form method="post" action="mailer.php" class="contact-form"> 
                        
                    <div class = "row">  
                        <?php
                        if($_GET['success']== 1) {
                            echo "<div class=\"form-messages success\"> 
                                Thank you! Your request has been sent.
                            </div>";
                            }
                       if($_GET['success']== -1) {
                            echo "<div class=\"form-messages error\"> 
                                Oops. Something went wrong. Please try again!
                            </div>";
                            }    
                        ?>
                    </div>
                
                    <div class="row">
                        <div class="col span-1-of-3">
                            <label for="email">Email</label>
                        </div>
                        <div class="col span-2-of-3">
                            <input type="email" name="email" id="email" placeholder="Your email" required>
                        </div>
                    </div>
                    <div class = "row">     
                        <div class="col span-1-of-3">
                            <label for="subject">Subject Area</label>
                        </div>
                        <div class="col span-2-of-3">
                            <input type="text" name="subject" id="subject" placeholder="Requested Subject" required>
                        </div>
                    </div>
                    <div class = "row">
                        <div class="col span-1-of-3">
                            <label for="unit">Unit</label>
                        </div>
                        <div class="col span-2-of-3">
                            <input type="text" name="unit" id="unit" placeholder="Requested Unit" required>
                        </div>
                    </div>
                    <div class = "row">
                        <div class="col span-1-of-3">
                            <label>Comments and Concerns</label>
                        </div>
                        <div class="col span-2-of-3">
                            <textarea name="comments" placeholder="Your comments"></textarea>
                        </div>
                    </div>
                    <div class = "row">
                        <div class="col span-1-of-3">
                            <label>&nbsp;</label>
                        </div>
                        <div class="col span-2-of-3">
                            <input type="submit" value="Send request!">
                        </div>
                    </div>
                </form>
            </div>          
        </section>
    
        <footer>
            <div class="row">
                <div class = "col span-1-of-2">
                    <ul class="school-nav">
                        <li><a href="http://schools.cbe.ab.ca/b816/" class="wchs">WCHS</a></li>   
                        <li><a href="http://www.cbe.ab.ca/Pages/default.aspx" class="cbe">CBE</a></li>
                    </ul>
                </div>
                <div class = "col span-1-of-2">
                    <ul class="footer-nav">
                        <li><a href="#">What We Do</a></li>
                        <li><a href="#">Subject Areas</a></li>   
                        <li><a href="#">Contact Us</a></li>
                    </ul>
                </div>
            </div>
            <div class="row">
                <p>COPYRIGHT &copy; 2016 Western Canada High School. All rights reserved.</p>
            </div>
        </footer>
        
    </body>
</html>