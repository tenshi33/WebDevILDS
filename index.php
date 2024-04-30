<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ILoDigital Solution</title>
    <link rel="icon" type="image/logo" href="vertex/favicon.png">
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="index.js" defer></script>
</head>
<body>
    <header class="header">
        <div class="header__content">
          <a href="#" class="logo"><img src="vertex/logo.png" id="logo"></a>
          <nav class="nav">
            <ul class="nav__list">
              <li class="nav__item">
                <a href="#top" class="nav__link">Home</a>
              </li>
              <li class="nav__item">
                <a href="#contact" class="nav__link">Contact</a>
              </li>
              <li class="nav__item">
                <a href="#service" class="nav__link">Service</a>
              </li>
              <li class="nav__item">
                <a href="#aboutUs" class="nav__link">About Us</a>
              </li>
              <li class="nav__item">
                <a href="#project" class="nav__link">Project</a>
              </li>
            </ul>
          </nav>
          <!-- HAMBURGER MENU ICON -->
          <div class="hamburger">
            <div class="bar"></div>
            <div class="bar"></div>
            <div class="bar"></div>
          </div>
        </div>
      </header>

    <section class="main-page">
        <div class="main-front">
            <div class="row">
                <div class="main-top">
                    <h1>Better Solution for your Business</h1>
                    <p>Let our team create your dream website hassle-free</p>
                    <br>
                    <button onclick="contactUs()" class="button">Email Now</button>
                </div>
                <div>
                    <img src="vertex\post.png" id="main-front-img">
                </div>
            </div>
        </div>

        <div id="products" class="products">
            <h1>Here's What We Offer</h1>
            <div class="row">
                <div class="products-col">
                    <h2>Web Hosting</h2>
                    <img src="vertex/3.png">
                </div>
                <div>
                    <p>Reliable hosting to keep your websites running smoothly</p>
                </div>
            </div>
        </div>

        <div id="products2" class="products">
            <div class="row">
                <div>
                    <p>With our all-in-one Website Building Package, creating a captivating website for your business is easy and stress-free</p>
                </div>
                <div class="products-col2">
                <h2>Building a Website</h2>
                    <img src="vertex/2.png">
                </div>
            </div>
        </div>

        <div id="products3" class="products">
            <div class="row">
                <div class="products-col3">
                    <h2>User-Friendly Interface</h2>
                    <img src="vertex/1.png">
                </div>
                <div>
                    <p>Easy navigation for your customers</p>
                </div>
            </div>
        </div>

        <div id="tools" class="tools">
            <h1>Tools</h1>
            <div class="row2">
                <div class="tools-col">
                    <img src="vertex/github.png">
                    <h2>Github</h2>
                </div>
                <div class="tools-col">
                    <img src="vertex/vscode.png">
                    <h2>Visual Studio Code</h2>
                </div>
                <div class="tools-col">
                    <img src="vertex/figma.png">
                    <h2>Figma</h2>
                </div>
                <div class="tools-col">
                    <img src="vertex/web.png">
                    <h2>WordPress</h2>
                </div>
            </div>
        </div>

        <div id="tools" class="tools2">
            <h1>Technology We Use</h1>
            <div class="row2">
                <div class="tools-col2">
                    <img src="vertex/user.png">
                    <h2>Python</h2>
                </div>
                <div class="tools-col2">
                    <img src="vertex/user.png">
                    <h2>HTML</h2>
                </div>
                <div class="tools-col2">
                    <img src="vertex/user.png">
                    <h2>JavaScript</h2>
                </div>
                <div class="tools-col2">
                    <img src="vertex/user.png">
                    <h2>CSS</h2>
                </div>
                <div class="tools-col2">
                    <img src="vertex/user.png">
                    <h2>PHP</h2>
                </div>
            </div>
        </div>

        <div id="aboutUs" class="aboutUs">
            <h1>About Us</h1>
            <div class="row">
                <div class="aboutUs-col">
                    <img src="vertex\logo.png">
                </div>
                <div>
                    <p>We are a group of developers who lorem ipsum all the time bro, Nilibot ang tahanan
                        Tagpuan, wala ka
                        Pa'no hihilom ang sugat
                        Na gawa sa pagmamahalan?
                        Pagmamahalan
                        Buong araw kang inisip
                        Mga sulat mo'y binasa
                        Pa'no ba titigil ang pagluha
                        Na gawa sa pagmamahalan?
                        Pagmamahalan
                        Magbabalik ang nakaraan
                        Ibabalik ang pinagmulan
                        Umaasa
                        Umaasa</p>
                </div>
            </div>
        </div>

        <div id="end-form" class="end-form">
            <div class="row">
                <div class="container">
                    <form id="contact" action="mail.php" method="post" class="form">
                        <h1>Contact Form</h1>
                  
                        <fieldset class="fieldset-form">
                          <input placeholder="Your name" name="name" type="text" tabindex="1">
                        </fieldset>
                        <fieldset class="fieldset-form">
                          <input placeholder="Your Email Address" name="email" type="email" tabindex="2">
                        </fieldset>
                        <fieldset class="fieldset-form">
                          <input placeholder="Type your subject line" type="text" name="subject" tabindex="4">
                        </fieldset>
                        <fieldset class="fieldset-form">
                          <textarea name="message" placeholder="Type your Message Details Here..." tabindex="5" class="textarea-form"></textarea>
                        </fieldset>
                        <fieldset class="fieldset-form">
                          <button type="submit" name="send" id="contact-submit" class="form-button">Submit Now</button>
                        </fieldset>
                    </form>
                </div>
                <div>
                    <p>Contact Us</p>
                    <h2><u>Get in Touch</u></h2>
                    <img src="vertex/5.png">
                </div>
            </div>            
        </div>

        <footer>
            <hr>
            <br><p>Copyright © 2024 ILoDigital Solution. All Rights Reserved.</p><br>
        </footer>
    </section>
    
</body>
</html>
