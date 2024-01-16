<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/dashboard.css">
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
    <title>wiki.to</title>
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
            <div id="nav-bar">
                <img id="menu-logo" style="height: 40px;" src="images/more.png" alt="menu">
                <div id="nav-bar-section2">
                    <div id="profil">
                        <h1>Welcome back,Yasser</h1>
                        <img src="images/profil.png" alt="profil-logo">
                    </div>
                </div>
            </div>
            <form id="addTagForm" method="post">
                <div style="display:flex;justify-content:end;margin-top:50px;padding-right:20px">
                    <input style="width:150px;" class="form-control" name="tag" id="tag"
                        placeholder="tag" required>
                    <button type="submit" class="btn btn-success">Add</button>
                </div>
            </form>
            <div style="display:flex;justify-content:center;text-align:center;">
                <table id="userTable" class="table table-striped" style="width:80%">
                    <thead>
                        <tr>
                            <th>id</th>
                            <th>Tag</th>
                            <th>Edit</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($tags as $tag) : ?>
                        <tr>
                            <td><?php echo $tag['id']; ?></td>
                            <td><?php echo $tag['tag']; ?></td>
                            <td style="display:flex;justify-content:center;gap:10px;">

                               <form method="post" action="Tag/delete">
                               <input type="hidden" name="tag_id" value="<?php echo $tag['id']; ?>">
                               <button type="submit" class="btn btn-danger">delete</button>
                               </form>
                               <form method="post" action="Tag/update/<?php echo $tag['id']; ?>">
                        
                               <button type="submit" class="btn btn-info">edit</button>
                               <input placeholder="<?= $tag['tag'] ?>" name="tag">
                             </form>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>


    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/dashboardhome.js"></script>
    <script src="https://kit.fontawesome.com/e80051e55f.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>

</html>