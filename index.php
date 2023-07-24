<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>HealthCare</title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet"href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"/>

    <!-- custom css file link  -->
    <link rel="stylesheet" href="style.css" />
  </head>
  <body>
    <!-- header section starts  -->

    <header class="header">
      <a href="#" class="logo">
        <i class="fas fa-hands"></i> HealthCare.
      </a>

      <nav class="navbar">
        <a href="#home">home</a>
        <a href="#services">services</a>
        <a href="#helpline">Helpline</a>
        <a href="backend/doc/index.php">Login</a>
      </nav>

      <div id="menu-btn" class="fas fa-bars"></div>
    </header>

    <!-- header section ends -->

    <!-- home section starts  -->

    <section class="book" id="book">
      <div class="row">
        <div class="image">
          <img src="b.jpeg" alt="" />
        </div>

        <form action="">
          <h3>Centralised Dashboard</h3>
          <p style="text-align:left;font-size:17px ;font-style:monospace;">Hospital Name</p>
          <select  class="box" >
            <option value="" selected disabled>Choose a Hospital</option>
            <option value>WENLOCK HOSPITAL MANGALORE DH</option>
            <option value>DAVANAGERE DISTRICT HOSPITAL</option>
            <option value>HUBLI KIMS DISTRICT HOSPITAL
            </option>
            <option value>BIDAR DISTRICT HOSPITAL</option>
            <option value>BELGAUM DISTRICT HOSPITAL</option>
            <option value>HASSAN DISTRICT HOSPITAL</option>
            <option value>GADAG DISTRICT HOSPITAL FRU</option>
            <option value>SHIMOGA DISTRICT HOSPITAL</option>
            <option value>UDUPI DISTRICT HOSPITAL FRU</option>
            <option value>DAVANGERE WOMEN AND CHILDREN DH FRU</option>
            <option value>SHIKARIPURA DH FRU</option>
            <option value>KC GENERAL HOSPITAL</option>
            <option value>ESIC Model Hospital Rajajinagar</option>
            <option value>INDIRANAGAR GENERAL HOSPITAL</option>
            <option value>BOWRING LADY CURZON</option>
          </select>

          <input type="submit" value="Get Status of Vacancy" class="btn" onclick="location.href='#services'"/>
        </form>
      </div>
    </section>
    <!-- home section ends -->

    <!-- services section starts  -->

    <section class="services" id="services">
      <h1 class="heading">Facilities Available</h1>

      <div class="box-container">
        <div class="box">
          <i class="fas fa-notes-medical"></i>
          <h3>Vaccine</h3>
          <p>
            Available: 1500
          </p>
        </div>

        <div class="box">
          <i class="fas fa-user-md"></i>
          <h3>Doctors</h3>
          <p>
            Available: 450
          </p>
        </div>

        <div class="box">
          <i class="fas fa-user"></i>
          <h3>Wards</h3>
          <p>
            Available: 90
          </p>
        </div>

        <div class="box">
          <i class="fas fa-ambulance"></i>
          <h3>24/7 ambulance</h3>
          <p>
            available: 100
          </p>
        </div>


        <div class="box">
          <i class="fas fa-procedures"></i>
          <h3>ICU beds</h3>
          <p>
            Availaible: 30
          </p>
        </div>

        <div class="box">
          <i class="fas fa-heartbeat"></i>
          <h3>Ventilator</h3>
          <p>
            Availaible: 30
            cases
          </p>
        </div>
        <div class="box">
          <i class="fas fa-book"></i>
          <h3>Inventory</h3>
          <p>
            Availaible: 13
          </p>
        </div>

        <div class="box">
          <i class="fas fa-map"></i>
          <h3>Locate Hospital</h3>
        </div>
      </div>
      </div>
    </section>

    <!-- services section ends -->

    <!-- about section starts  -->

    <section class="about" id="about">
      <h1 class="heading">Recent Updates</h1>

      <div class="row">
        <div class="image">
          <img src="c.jpeg" alt="" />
        </div>

        <div class="content">
        <a href="https://www.who.int/health-topics/nipah-virus-infection#tab=tab_1" class="btn" target=”_blank”>WHO Recent News</a><br>
            <a href="https://www.bbc.com/news/health" class="btn" target=”_blank”>Recent news from BBC</a><br>
            <a href="https://pib.gov.in/PressReleasePage.aspx?PRID=1905602" class="btn" target=”_blank”>H3N2 Updates</a><br>
            <a href="#" class="btn">
            learn more <span class="fas fa-chevron-right"></span>
          </a>
        </div>
      </div>
    </section>

    <!-- about section ends -->

    
    <!-- footer section starts  -->

    <div class="footer">
      <div class="credit">
        created by TechTitans@copyrights reserved 2023
      </div>
      </div>
    

    <!-- footer section ends -->

    <!-- custom js file link  -->
    <script src="script.js"></script>
  </body>
</html>
