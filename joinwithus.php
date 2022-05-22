<?php
    include_once 'header.php'
?>
<!--Navigation bar-->
<div class="mainnav">
            <a class="openbtn" onclick="openNav()">&#9776; Services</a>
            <a href="Home.php">Home</a>
        <?php
            if(isset($_SESSION["useruid"])) {
                echo "<a href='Profile.php'>Profile</a>";
                echo "<a href='payment.php'>E-banking</a>";
            }
            else {
                echo "<a href='Register intro.php'>Register</a>"; 
            }
        ?>
            <a href="contactus.php">Contact us</a>
            <a href="about us.php">About us</a>
            <a class="active" href="joinwithus.php">Join with us</a>
            <div class="search-container">
                <form action="search.php" method="POST">
                    <input type="text" placeholder="Search.." name="search">
                    <button type="submit" name="submit-search"><img src="images/Search icon.png" height="15px" width="20px"></button>
                </form>
            </div>
        </div>
        <!--Horizontal line-->
        <hr style="width:100%">

    <body>



        <script src="joinwithus.js"></script>
        <!-- Baner image for new tab-->

        <!-- <Body background=" bk1.png">    Background image for new tab-->
        <div class="body-boxm">
        <div class="container-boxm">
            
            <!-- Bank job panal-->
            <div class="box">
                <span class="hovertext" data-hover="What we are loking for? The ability to consult with our clinets, advising on better processes/systemes">   <!-- hover popup window-->
                 <div class = "content" id = "d1">
                    <img src="images/d1.png" width="270px" height="250px">
                </span>
            </div> 
                </div>
                 <div class="box">
                 <span class="hovertext" data-hover="Proven work experience as a field officer, loan agent or similar role">   <!-- hover popup window-->
                 <div class = "content" id = "d2">
                 <img src="images/d2.png" width="270px" height="250px">
                 </span>
             </div>
            </div>
                 <div class="box">
                 <span class="hovertext" data-hover="An ability and experience with account managment systems">   <!-- hover popup window-->
                 <div class = "content" id = "d3">
                 <img src="images/d3.png" width="270px" height="250px">
                 </span>
            </div>
            </div>
                 <div class="box">
                 <span class="hovertext" data-hover="Work experience as a field officer, loan agent or similar role">   <!-- hover popup window-->
                 <div class = "content" id = "d4">
                 <img src="images/d4.png" width="270px" height="250px">
                 </span>
           </div>
      </div>
     </div>
     </div>


     <!--   Form Content-->


<div class="join-body">

    <div id="join-form">
    <h3 class="join-h3">Join With ABC Bank Team  </h3>

    <form action="joinus.php" method="post">  <!-- Php databass connection-->
      
        <div class="join-form-group">
            <label for="name" class="join-label">Your name</label>
            <div class="join-input-group">
                <input type="text" id="name" name="name" class="join-form-control" required>
            </div>
        </div>

        <div class="join-form-group">
            <label for="Vacancie" class="join-label"> Vacancie</label>
            <div class="join-input-group">
                <input type="text" id="Vacancie" name="Vacancie" class="join-form-control" required>
            </div>
        </div>

        <div class="join-form-group">
            <label for="mail" class="join-label">Your email address</label>
            <div class="join-input-group">
                <input type="mail" id="mail" name="mail" class="join-form-control" required>
            </div>
        </div>

        <div class="join-form-group">
            <label for="Message" class="join-label">Tell Us About You </label>
            <div class="join-input-group">
                <textarea id="Message" name="Message" class="join-form-control" rows="6" maxlength="3000" required></textarea>
            </div>
        </div>

        <div class="join-form-group">
            <button type="submit" id="join-button" class="join-btn">Send</button>
        </div>
        <p id="page-bottom"></p>

    </form>
    </div>
    </div>
    </body>

    <?php
        include_once 'footer.php'
    ?>  