<nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading">Menu</div>
                            <a class="nav-link" href="../Dashboard/"
                                ><div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Dashboard</a>

                                <a class="nav-link" href="../member/"
                                ><div class="sb-nav-link-icon"><i class="fa fa-user-circle" aria-hidden="true"></i></div>
                                ग्राहक</a>

                                <a class="nav-link" href="../meter/"
                                ><div class="sb-nav-link-icon"><i class="fa fa-user-circle" aria-hidden="true"></i></div>
                                मिटर रिडिंग विवरण</a>

                                <a class="nav-link" href="../area/"
                                ><div class="sb-nav-link-icon"><i class="fa fa-user-circle" aria-hidden="true"></i></div>
                                एरिया</a>

                                <a class="nav-link" href="../counter/"
                                ><div class="sb-nav-link-icon"><i class="fa fa-user-circle" aria-hidden="true"></i></div>
                                काउन्टर</a>

                                <a class="nav-link" href="../meterreader/"
                                ><div class="sb-nav-link-icon"><i class="fa fa-user-circle" aria-hidden="true"></i></div>
                                मिटर रिडर</a>
                                 <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseLayoutsmenu" aria-expanded="false" aria-controls="collapseLayouts"
                                ><div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                बिद्युत महशुल
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div
                            ></a>

                                 <div class="collapse" id="collapseLayoutsmenu" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="../ElectricityCosts/index.php?el_amp=5A">5 Amps</a>
                                    <a class="nav-link" href="../ElectricityCosts/index.php?el_amp=15A">15 Amps</a>
                                     <a class="nav-link" href="../ElectricityCosts/index.php?el_amp=30A">30 Amps</a>
                                      <a class="nav-link" href="../ElectricityCosts/index.php?el_amp=60A">60 Amps</a>
                                </nav>
                            </div>
                        </div>
                    </div>
                    
                    <div class="sb-sidenav-footer">
                        <div class="small">Logged in as:</div>
                        <?php
                            echo $_SESSION["username"];
                    ?>
                    </div>
                </nav>



               