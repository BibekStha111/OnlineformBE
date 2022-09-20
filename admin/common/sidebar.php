<nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading">Menu</div>
                            <a class="nav-link" href="../Dashboard/"
                                ><div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Dashboard</a>

                                <a class="nav-link" href="../students/"
                                ><div class="sb-nav-link-icon"><i class="fa fa-user-circle" aria-hidden="true"></i></div>
                                Examiners</a>

                                <a class="nav-link" href="../verifiedstudents/"
                                ><div class="sb-nav-link-icon"><i class="fa fa-user-circle" aria-hidden="true"></i></div>
                                Verified</a>

                                 <a class="nav-link" href="../priorityforms/"
                                ><div class="sb-nav-link-icon"><i class="fa fa-user-circle" aria-hidden="true"></i></div>
                                Priority List</a>

                               

                                 
                        </div>
                    </div>
                    
                    <div class="sb-sidenav-footer">
                        <div class="small">Logged in as:</div>
                        <?php
                       
                            echo $_SESSION["username"];
                    ?>
                    </div>
                </nav>



               