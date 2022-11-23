<div class="dash-nav dash-nav-dark">
            <header>
                <a href="#!" class="menu-toggle">
                    <i class="fas fa-bars"></i>
                </a>
                <a href="index.html" class="easion-logo"><i class="fas fa-sun"></i> <span>Easion</span></a>
            </header>
            <nav class="dash-nav-list">
                <a class="dash-nav-item">
                    <i class="fas fa-home"></i> Dashboard </a>
                <div class="dash-nav-dropdown">
                    <a href="#!" class="dash-nav-item dash-nav-dropdown-toggle">
                        <i class="fas fa-chart-bar"></i> Registers </a>
                    <div class="dash-nav-dropdown-menu">
                        <a href= {{URL::to('/show_registers')}} class="dash-nav-dropdown-item">show</a>
                    </div>
                </div>
               
                
            </nav>
        </div>