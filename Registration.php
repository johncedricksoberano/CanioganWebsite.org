<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <link rel="icon" type="image/svg+xml" href="/favicon.svg" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="main.js" defer></script>
    <title>Registration | Barangay Caniogan</title>
    <link rel="icon" href="brg.PNG" type="image/x-icon">
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,700;1,900&display=swap"
      rel="stylesheet"
    />
    <link href="style.css" rel="stylesheet"/>
  </head>

  <body>
    <div class="parallax">
      
      <header class="primary-header">
        <div class="wrapper">
          <div class="primary-header__inner">
            <div class="logo">
              <img src="brg.PNG" alt="" />
            </div>
            <nav class="primary-nav">
              <ul role="list">
                <li><a href="Homepage.html">Home</a></li>
                <li><a href="About.html"> About Us</a></li>
                <li><a href="#">Services</a>
                <div class="sub-menu">
                    <ul>
                        <li><a href="Blotter.php">Blotter</a></li>
                        <li><a href="Request.php">Request</a></li>
                        <li><a href="Registration.html" class="active">Registration</a></li>
                    </ul>
                </div>
                </li>
                <li><a href="News.html"> News</a></li>
                <li><a href="Calamity.html"> Calamity </a></li>
                <li><a href="Contact.html"> Contact</a></li>
              </ul>
            </nav>
          </div>
        </div>
      </header>
      <div class="hero">
        <div class="wrapper">
          <h2 class="hero__title">
            <span> Registration </span> Barangay Caniogan
          </h2>
          <button class="button">Connect us</button>
        </div>
      </div>

      <img class="parallax__bg" src="background.png" alt="" />
      <img
        class="parallax__foreground-back"
        src="foreground-back.webp"
        alt=""
      />
      <img
        class="parallax__foreground-front"
        src="foreground-front.webp"
        alt=""/>
    </div>

    <main class="main-content">
      <h1 class="blotter-title">ONLINE REGISTRATION</h1>
      <div class="online-blotter">
        <p>Welcome to the Barangay Registration Form—an efficient online tool for registering marriages, organizations, businesses, and more. 
            Select your registration type, provide accurate details, and attach necessary documents. 
            This streamlined process ensures quick and accurate submissions, contributing to a well-documented and organized community. 
            Review your information carefully before submitting, and thank you for your cooperation in enhancing our barangay records.</p>
      </div>
      <div class="req_form">
        <br> <br> <br><br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br>
        <fieldset>
          <form action="dbregister.php" method="post">
          <h2>Registration Form</h2>
          <label>-Personal information-</label><br>
          <br>
          <label>Name:</label><br>
          <br>
          <input type="text" name="name" required="required" placeholder="Firstname/Middlename/Lastname"/>
          <br>
          <br>
          <br>
          <br>
          <label>Date of Birth:</label><br>
          <br>
          <input type="text" name="birth" required="required" placeholder="Month/Day/Year"/>
          <br>
          <br>
          <br>
          <br>
          <label>Age:</label><br>
          <br>
          <input type="text" name="age" required="required"placeholder="Current Age"/>
          <br>
          <br>
          <br>
          <br>
          <label>Gender:</label><br>
          <br>
          <input type="text" name="gender" required="required" placeholder="Female or Male"/>
          <br>
          <br>
          <br>
          <br>
          <label>Home Address:</label><br>
          <br>
          <input type="text" name="home_add" required="required" placeholder="Input your full address"/>
          <br>
          <br>
          <br>
          <br>
          <label>Email:</label><br>
          <br>
          <input type="text" name="email" required="required" placeholder="sample@gmail.com"/>
          <br>
          <br>
          <br>
          <br>
          <label>Contact:</label><br>
          <br>
          <input type="text" name="personalnum" required="required" placeholder="Contact Number"/>
          <br>
          <br>
          <br>
          <br>
          <label>Type of Registration</label><br>
          <br>
          <input type="text" name="doc" required="required" placeholder="Input you want to register"/>
          <br>
          <br>
          <br>
          <br>
          <label>-Additional Details (Based on Type of Registration)-</label><br>
          <br>
          <label>Spouse Full Name (For Marriage): </label><br>
          <br>
          <input type="text" name="spouse" placeholder="Name of Spouse"/>
          <br>
          <br>
          <br>
          <br>
          <label>Organization Name(For Organization):</label><br>
          <br>
          <input type="text" name="org" placeholder="Name of Organization"/>
          <br>
          <br>
          <br>
          <br>
          <label>Business Name (For Business):</label><br>
          <br>
          <input type="text" name="business" placeholder="Name of Business"/>
          <br>
          <br>
          <br>
          <br>
          <label>Other Revelant Information:</label><br>
          <br>
          <input type="text" name="other" placeholder="Input other information"/>
          <br>
          <br>
          <br>
          <br>
          <label>Date:</label><br>
          <br>
          <input type="text" name="date" required="required" placeholder="Month/Day/Year"/>
          <br>
          <br>
          <br>
          <br>
          <label>Place/Location:</label><br>
          <br>
          <input type="text" name="loc" required="required" placeholder="Input exact Location"/>
          <br>
          <br>
          <br>
          <br>
          <label>Please Provide Identification</label><br>
          <input type="file" id="file"/>
          <br>
          <img style="position: absolute; left: 35%; width: 300px; height: 200px;" src="upload.png">
          <br>
          <br>
          <br>
          <br>
          <br>
          <br>
          <br>
          <br>
          <br>
          <br>
          <br>
          <br>
          <br>
          <a href="#">
          <label style="margin-left: 330px; font-size: 50px;" for="file">Click Here</label>
          </a>
          <br>
          <br>
          <input  type="submit" value="Submit" style="width: 150px; height: 40px; background-color: white; color: black; border-color: black; border-radius: 5px; font-family: Arial, Helvetica, sans-serif; font-size: 20px;"/>
        </form>
        </fieldset>
      </div>
    </main>
    <footer>
      <div class="container">
          <div class="logo-footer">
            <img src="brgy-logo.PNG" alt=""/>
            <p> A barangay offer a community services online that help its area covered. </p>
          </div>
          <div class="footer-content">
              <h3>More Pages</h3>
               <ul class="list">
                  <li><a href="Homepage.html"> Home </a></li>
                  <li><a href="About.html"> About </a></li>
                  <li><a href="Blotter.php"> Blotter </a></li>
                  <li><a href="Request.php"> Request </a></li>
                  <li><a href="#"> News </a></li>
                  <li><a href="Calamity.html"> Calamity </a></li>
                  <li><a href="About.html"> Contact </a></li>
                  <li><a href="#">FAQ</a></li>
               </ul>
          </div>
      </div>
      <div class="bottom-bar">
          <p>&copy; 2024 | COPYRIGHT: BARANGAY CANIOGAN | PARA SA CANIOGAN</p>
      </div>
  </footer>
  </body>
</html>