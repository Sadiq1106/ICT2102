<style>
.main-menu
{
   float: right;
}
#navigation
{
   left: 400px;
   position: relative;
}
</style>

   <div class="header-area ">
      <div id="sticky-header" class="main-header-area">
         <div class="container-fluid">
            <div class="header_bottom_border">
               <div class="row align-items-center">
                  <div class="col-xl-2 col-lg-2">
                     <div>
                        <a href="index.php" class="pull-left">
                        <img src="img/logo.png" style="width: 70px;">
                        </a>
                     </div>
                  </div>
                  <div class="col-xl-6 col-lg-6">
                     <div class="main-menu  d-none d-lg-block">
                        <nav>
                         <?php

                if (isset($_SESSION['MM_Username'])) { ?>
                          <ul id="navigation">
                    <li><a class="active" href="populardest.php">Popular Destination</a></li>
                    <li><a class="active" href="placesofinterest.php">Places of Interest</a></li>
                    <li><a class="active" href="./login.php">Login</a></li>
                </ul>
                           <li><a class="active"  href="placesofinterest.php">Places of Interest</a></li>
                              <li><a class="active"  href="arguide.php">AR Guide</a></li>
                            
                              <?php
                                if ($_SESSION['MM_role'] == 'A') { ?>
                              <li><a href="myBookings.php">My Bookings</a></li>
                              <?php
                                } else { ?>
                              <li>
                                 <a href="#">Profile <i class="ti-angle-down"></i></a>
                                 <ul class="submenu">
                                    <li><a href="editprofile.php">Edit Profile</a></li>
                                    <?php } ?>
                                    <li><a href="logout.php">Logout</a></li>
                                 </ul>
                              </li>
                           </ul>
                        </nav>
                        <?php
                } else {
                    ?>
                    <ul id="navigation">
                    <li><a class="active"  href="populardest.php">Popular Destination</a></li>
                    <li><a class="active"  href="placesofinterest.php">Places of Interest</a></li>
                    <li><a class="active" href="./login.php">Login</a></li>
                </ul>
                <?php } ?>
                     </div>
                  </div>


                  <div class="seach_icon">
                     <a data-toggle="modal" data-target="#exampleModalCenter" href="#">
                     <i class="fa fa-search"></i>
                     </a>
                  </div>
                  <div class="col-12">
                     <div class="mobile_menu d-block d-lg-none"></div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
