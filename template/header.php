
    <header id="header">
        <section class="control-bar">
            <div class="container">
                <ul class="left-menu left">
                    <li>
                        Hello.
                        <a href="#">Sign In</a> or
                        <a href="#">Sign Up</a>
                    </li>
                </ul>

                <ul class="right-menu right">
                    <li>
                        <a href="#">
                            <span id="cart"></span>
                            <span id="badge">0</span>
                        </a>
                    </li>
                    <li><a href="#">Account Panel</a></li>
                </ul>
            </div>
        </section>

        <div class="clearfix"></div>

        <section class="search">
            <div class="container">
                <div class="search-inner">
                    <form action="search.php">
                        <ul>
                            <li class="brand">
                                <div>
                                    <a href="index.php"><img src="img/shopper.png" alt="Shopper Logo"/></a>
                                </div>
                            </li>
                            <li class="search-box">
                                <div>
                                    <input type="text" placeholder="Search..."/>
                                </div>
                            </li>
                            <li class="option-box">
                                <div>
                                    <select name="category" id="category">
                                        <option value="1" selected>All Categories</option>
                                        <option value="2">Phones</option>
                                        <option value="3">Tablets</option>
                                        <option value="4">Computers</option>
                                        <option value="5">Laptops</option>
                                    </select>
                                </div>
                            </li>
                            <li class="submit-box">
                                <div>
                                    <input type="submit" value="Search" class="btn"/>
                                </div>
                            </li>
                        </ul>
                    </form>
                </div>
            </div>
        </section>
    </header>
