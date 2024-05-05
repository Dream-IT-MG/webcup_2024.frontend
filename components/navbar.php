<style>
    #page-header .logo {
        width: 100px;
    }


    /* to add to a unique file */
    #page-header {
        position: absolute;
        z-index: 9999;
        width: 100%;
        padding: 0.9rem 0;
        top: 0;
        left: 0;
        border-bottom: 1px solid rgba(255, 255, 255, 0.1);
        background-color: rgba(0, 0, 0, 0.1);
    }

    #page-header nav {
        max-width: 1400px;
        margin: 0 auto;
        padding: 0 2rem;
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    #page-header ul {
        display: flex;
        list-style: none;
        align-items: center;
    }

    #page-header ul a {
        text-decoration: none;
        color: #fff;
        padding: 0 1.5rem;
        text-transform: uppercase;
        font-weight: 300;
        font-size: 0.83rem;
    }

    /* end add unique file */
    #page-header .search a {
        font-size: 1.05rem;
        padding: 0 3rem;
    }

    #page-header .hamburger {
        padding-left: 1.5rem;
    }

    #page-header .hamburger a {
        padding: 0;
        width: 37px;
        height: 37px;
        display: flex;
        border-radius: 50%;
        background-color: rgba(115, 115, 115, 0.7);
        backdrop-filter: blur(10px);
        --webkit-backdrop-filter: blur(10px);
        justify-content: center;
        align-items: center;
    }

    #page-header .hamburger .bar {
        position: relative;
        width: 52%;
        height: 1.3px;
        background-color: white;
        border-radius: 2px;
    }

    #page-header .hamburger .bar::before,
    #page-header .hamburger .bar::after {
        content: "";
        position: absolute;
        left: 50%;
        transform: translateX(-50%);
        width: 60%;
        height: 100%;
        background-color: inherit;
        border-radius: 2px;
    }

    #page-header .hamburger .bar::before {
        top: -4.5px;
    }

    #page-header .hamburger .bar::after {
        top: 4.5px;
    }
</style>

<header class="hide" id="page-header">
    <nav>
        <div></div>
        <!-- <img src="img/logo.png" alt="Travelo" class="logo"> -->
        <ul>
            <li>
                <a href="#">Login</a>
            </li>
            <li>
                <a href="#">Sign up</a>
            </li>
            <li class="search">
                <a href="#">
                    <i class="fa-solid fa-magnifying-glass"></i>
                </a>
            </li>
            <li class="hamburger">
                <a href="#">
                    <div class="bar"></div>
                </a>
            </li>
        </ul>
    </nav>
</header>