<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <link rel="icon" type="image/svg+xml" href="/favicon.svg" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="main.js" defer></script>
    <title>Blotter | Barangay Caniogan</title>
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
                <li><a href="Homepage.html" >Home</a></li>
                <li><a href="About.html" > About Us</a></li>
                <li><a href="#">Services</a>
                <div class="sub-menu">
                    <ul>
                        <li><a href="Blotter.php" class="active" >Blotter</a></li>
                        <li><a href="Request.php">Request</a></li>
                        <li><a href="Registration.php">Registration</a></li>
                    </ul>
                </div>
                </li>
                <li><a href="#"> News</a></li>
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
      <h1 class="blotter-title">ONLINE BLOTTER</h1>
      <div class="online-blotter">
        <p>Our online blotter form serves as a convenient and efficient tool for reporting incidents or events. This structured platform allows you to provide essential details about an incident in a straightforward manner. By filling out this form, you contribute to accurate documentation,aiding in swift response and resolution.</p>
      </div>
      <div class="form">
        <fieldset>
          <form action="dbconnection.php" method="post">
          <h2>Blotter Form</h2>
          <label>-Incident-</label><br>
          <br>
          <label>Date:</label><br>
          <br>
          <input type="text" name="date" required="required" placeholder="Month/Day/Year"/>
          <br>
          <br>
          <br>
          <br>
          <label>Time:</label><br>
          <br>
          <input type="text" name="time" required="required"placeholder="00:00"/>
          <br>
          <br>
          <br>
          <br>
          <label>Location:</label><br>
          <br>
          <input type="text" name="location" required="required" placeholder="Please provide a landmark"/>
          <br>
          <br>
          <br>
          <br>
          <label>-Involved Parties-</label><br>
          <br>
          <label>Name of the Complainant:</label><br>
          <br>
          <input type="text" name="name_comp" required="required" placeholder="Firstname/Middlename/Lastname"/>
          <br>
          <br>
          <br>
          <br>
          <label>Address:</label><br>
          <br>
          <input type="text" name="address_comp" required="required" placeholder="Complete Address"/>
          <br>
          <br>
          <br>
          <br>
          <label>Contact Number:</label><br>
          <br>
          <input type="text" name="num_comp" required="required" placeholder="Cellphone Number"/>
          <br>
          <br>
          <br>
          <br>
          <label>Email Address:</label><br>
          <br>
          <input type="text" name="cemail" placeholder="sample@gmail.com"/>
          <br>
          <br>
          <br>
          <br>
          <label>Name of Witness:</label><br>
          <br>
          <input type="text" name="name_witness" required="required" placeholder="Firstname/Middlename/Lastname"/>
          <br>
          <br>
          <br>
          <br>
          <label>Address:</label><br>
          <br>
          <input  type="text" name="address_witness" required="required" placeholder="Complete Address"/>
          <br>
          <br>
          <br>
          <br>
          <label>Contact Number:</label><br>
          <br>
          <input  type="text" name="num_witness" required="required" placeholder="Contact Number"/>
          <br>
          <br>
          <br>
          <br>
          <label>Email Address:</label><br>
          <br>
          <input type="text" name="wemail" placeholder="sample@gmail.com"/>
          <br>
          <br>
          <br>
          <br>
          <label>-About the Suspect-</label>
          <br>
          <br>
          <br>
          <br>
          <label>Name (if Available):</label><br>
          <br>
          <input type="text" name="name_sus" required="required" placeholder="Firstname/Middlename/Lastname"/>
          <br>
          <br>
          <br>
          <br>
          <label>Description:</label><br>
          <br>
          <input type="text" name="description_sus" required="required" placeholder="Physical Description"/>
          <br>
          <br>
          <br>
          <br>
          <label>Statement:</label><br>
          <br>
          <textarea style="font-size: 20px; resize:none;" name="statement" cols="87" rows="10" placeholder="Please Provide a Statement about the Incident"></textarea>
          <br>
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