<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <link rel="icon" type="image/svg+xml" href="/favicon.svg" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="main.js" defer></script>
    <title>Concern | Barangay Caniogan</title>
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
                        <li><a href="Request.php" class="active">Request</a></li>
                        <li><a href="Registration.php">Registration</a></li>
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
            <span> Services </span> Barangay Caniogan
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
      <h1 class="blotter-title">ONLINE REQUEST</h1>
      <div class="online-blotter">
        <p>Welcome to the Barangay Request Form—a convenient online platform simplifying the process of requesting certificates and services from your local barangay. Ensure accuracy by carefully entering details for a seamless request experience. Specify the type of certificate or service needed, such as barangay clearance or residence certification. Your personal details, purpose of the request, and additional information for processing are essential. This secure submission process guarantees confidentiality, fostering a smooth interaction between residents and barangay officials. Your accurate input is crucial for the timely and precise delivery of requested services.</p>
      </div>
      <div class="req_form">
        <fieldset>
          <form action="dbrequest.php" method="post">
          <h2>Request Form</h2>
          <br>
          <label>Name:</label><br>
          <br>
          <input type="text" name="name" required="required" placeholder="Firstname/Middlename/Lastname"/>
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
          <label>Request:</label><br>
          <br>
          <input type="text" name="req" required="required" placeholder="Type your request"/>
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
          <input type="text" name="number" required="required" placeholder="Contact Number"/>
          <br>
          <br>
          <br>
          <br>
          <label>Date of Claim:</label><br>
          <br>
          <input type="text" name="doc" required="required" placeholder="Input your Date of Claim"/>
          <br>
          <br>
          <br>
          <br>
          <label>Guardian (optional):</label><br>
          <br>
          <input type="text" name="guardian" placeholder="Name of Guardian"/>
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