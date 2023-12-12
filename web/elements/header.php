<header>
            <!--Hamburger Icon-->
            <div class="menu-icon">
                <div class="bar"></div>
                <div class="bar"></div>
                <div class="bar"></div>
            </div>
                    <ul class="menu-items">
                        <li><a href="<?= BASE_URL ?>dashboard">Tickets</a></li>
                        <li><a href="<?= BASE_URL ?>admin">Admins</a></li>
                        <li><a href="<?= BASE_URL ?>profile">Profile</a></li>
                        <li><a class="logout" href="<?= BASE_URL ?>login">Log Out</a></li>
                    </ul>
            <!---End of Hamburger Icon--->

                    <div class="search-container">
                        <form action="/action_page.php">
                          <input type="text" placeholder="Search Ticket" name="search">
                          <button type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
                        </form>
                      </div>
                    <h1>SysGuard</h1>
        </header>        