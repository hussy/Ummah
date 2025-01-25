    <div class="umma-header">
        <nav class="navbar ummah-navbar navbar-expand-lg navbar-light">
            <div class="container-fluid">
                <button class="nav-small-icon d-lg-none" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <a class="navbar-brand" href="<?php echo WEBSITE_URL;?>"><img src="<?php echo ASSETS_URL;?>images/logo.png" alt="UMMA LOGO"/></a>
                <div class="collapse navbar-collapse d-none d-lg-block">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item me-4">
                            <a class="nav-link active" href="<?php echo WEBSITE_URL;?>join-umma">Join the UMMA</a>
                        </li>
                        <li class="nav-item me-4">
                            <!--<a class="nav-link" href="<?php echo WEBSITE_URL;?>programs">Programs</a>-->
                        </li>
                        <li class="nav-item me-4">
                            <a class="nav-link" href="<?php echo WEBSITE_URL;?>about">About</a>
                        </li>
                        <!--<li class="nav-item me-4">-->
                        <!--    <a class="nav-link" href="<?php echo WEBSITE_URL;?>resources">Resources</a>-->
                        <!--</li>-->
                        <li class="nav-item umma-button">
                            <a class="nav-link" target="_blank" href="https://www.zeffy.com/en-US/donation-form/e6c041d0-59e3-44c1-9abb-3867bda70600">Support</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
    <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="offcanvasNavbarLabel"><a class="navbar-brand" href="<?php echo WEBSITE_URL;?>"><img src="<?php echo ASSETS_URL;?>images/logo.png" alt="UMMA LOGO"/></a></h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            <ul class="navbar-nav">
                <li class="nav-item me-4">
                    <a class="nav-link active" href="<?php echo WEBSITE_URL;?>join-umma">Join the UMMA</a>
                </li>
                <li class="nav-item me-4">
                    <!--<a class="nav-link" href="<?php echo WEBSITE_URL;?>programs">Programs</a>-->
                </li>
                <li class="nav-item me-4">
                    <a class="nav-link" href="<?php echo WEBSITE_URL;?>about">About</a>
                </li>
                <li class="nav-item me-4">
                    <!--<a class="nav-link" href="<?php echo WEBSITE_URL;?>resources">Resources</a>-->
                </li>
                <li class="nav-item me-4 umma-button">
                    <a class="nav-link" href="javascript:void(0);">Support</a>
                </li>
            </ul>
        </div>
    </div>