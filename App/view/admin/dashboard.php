<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/dashboard.css">
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
    <title>PeoplePerTask</title>
</head>

<body>
    <div class="row">
        <div class="col-1" id="column1" style="background-color: #4169E1;">
            <div id="menu">
                <div id="home-container">
                    <a href="./"><img src="images/material-symbols_home-rounded.svg" alt="Home">
                    </a>
                </div>
                <div class="menu-section">
                    <a href="Wiki"><img src="images/wikipedia.png" alt="tredning">
                        <p class="menu-paragraph">Manage Wikis</p>
                    </a>
                </div>
                <div class="menu-section">
                    <a href="Tag"><img src="images/tags.png" alt="feedbacks">
                        <p class="menu-paragraph">Tags</p>
                    </a>
                </div>
                <div class="menu-section">
                    <a href="Category"><img src="images/category.png" alt="Users">
                        <p class="menu-paragraph">Categories</p>
                    </a>
                </div>
                <div class="line">
                </div>
                <div class="menu-section">
                    <a href="#"><img src="images/Vector.svg" alt="help"></a>
                </div>
                <div class="menu-section">
                    <a href="#"><img src="images/Vector2.svg" alt="settings"></a>
                </div>
            </div>
        </div>
        <div class="col-11" id="column2">
            <div  id="nav-bar">
                <img id="menu-logo" style="height: 40px;" src="images/more.png" alt="menu">
                <div id="nav-bar-section2">
                    <div id="profil">
                        <h1>Welcome back,Yasser</h1>
                        <img src="images/profil.png" alt="profil-logo">
                    </div>
                </div>
            </div>
            <div id="content">
                <div class="cards">
                    <div class="cards-content">
                        <div class="card">
                            <h3>total clients</h3>
                            <div class="card-bottom">
                                <h5>480</h5>
                                <img src="images/ic1.png" alt="icon1">
                            </div>
                        </div>
                        <div class="card">
                            <h3>Tags</h3>
                            <div class="card-bottom">
                                <h5>300</h5>
                                <img src="images/ic3.svg" alt="icone2">
                            </div>
                        </div>
                        <div class="card">
                            <h3>Categories</h3>
                            <div class="card-bottom">
                                <h5>102</h5>
                                <img src="images/ic4.svg" alt="ic3">
                            </div>
                        </div>
                        <div class="card">
                            <h3>Total Wikis</h3>
                            <div class="card-bottom">
                                <h5>10</h5>
                                <img src="images/ic5.svg" alt="ic4">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row" id="mid-content"  style="padding-bottom:50px;>
                    <div class="col-12" id="clients-stats"">
                        <div id="header">
                            <h3>Clients stats</h3>
                            <div
                                style="background-color: white;padding-left: 10px;padding-right: 10px;padding-top: 3px;padding-bottom: 5px;border-radius: 10px;">
                                <!-- <div class="time">
<h2>Last 7 Days</h2>
<img src="images/Polygon 4.svg" alt="down-arrow">
</div> -->
                            </div>
                        </div>
                        <div id="chart"></div>

                    </div>
                </div>
            </div>
        </div>
    </div>


    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/dashboardhome.js"></script>
    <script src="https://kit.fontawesome.com/e80051e55f.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>

</html>