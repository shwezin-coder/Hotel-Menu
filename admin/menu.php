<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nature Land</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Sharp"
      rel="stylesheet">
      <link rel="stylesheet" href="../assets/css/admin/style.css">
      <link rel="icon" type="image/x-icon" href="../assets/img/admin/naturelandlogo.png">
</head>
<body>
    <div class="container">
        <aside>
            <div class="top">
                <div class="logo">
                    <img src="../assets/img/admin/naturelandlogo.png" alt="">
                    <h2>Nature <span class="danger">Land</span></h2>
                </div>
                <div class="close" id="close-btn">
                    <span class="material-icons-sharp">
                        close
                    </span>
                </div>
            </div>
            <div class="sidebar">
                <a href="#" class="active">
                    <span class="material-icons-sharp">
                        grid_view
                    </span>
                    <h3>Dashboard</h3>
                </a>
                <a href="#">
                    <span class="material-icons-sharp">
                        category
                    </span>
                    <h3>Menu Category</h3>
                </a>
                <a href="#">
                    <span class="material-icons-sharp">
                        menu_book
                    </span>
                    <h3>Hotel Menu</h3>
                </a>
                <a href="#">
                    <span class="material-icons-sharp">
                        person_outline
                        </span>
                    <h3>Customer</h3>
                    <span class="customer-count">12</span>
                </a>
                <a href="#">
                    <span class="material-icons-sharp">
                        receipt_long
                    </span>
                    <h3>Order</h3>
                </a>
                <a href="#">
                    <span class="material-icons-sharp">
                        insights
                    </span>
                    <h3>Analytics</h3>
                </a>
                <a href="#">
                    <span class="material-icons-sharp">
                       track_changes
                    </span>
                    <h3>Visitors Log</h3>
                </a>
                <a href="#">
                    <span class="material-icons-sharp">
                        logout
                    </span>
                    <h3>Log Out</h3>
                </a>
            </div>
        </aside>
        <div class="palette">
            <div class="top">
                <div class="logo">
                    <h2>Theme<span class="danger">Color</span></h2>
                </div>
                <div class="close" id="theme-btn">
                    <span class="material-icons-sharp">
                        close
                    </span>
                </div>
            </div>
            <div class="palette_bar">
                <div class="btn-group firsttheme"> 
                    <button style="background:rgb(146, 128, 28)"></button>
                    <button  style="background:rgb(166, 166, 13)"></button>
                    <button  style="background:rgb(29, 135, 29)"></button>
                  </div>
                  <div class="btn-group secondtheme">
                    <button style="background:#0e2e2e"></button>
                    <button  style="background:#9b710e"></button>
                    <button  style="background:#854c0b"></button>
                  </div>
                  <div class="btn-group thirdtheme"> 
                    <button style="background:rgb(22, 22, 117);"></button>
                    <button  style="background:rgb(92, 8, 8);"></button>
                    <button  style="background:rgb(9, 9, 69);"></button>
                  </div>
            </div>
        </div>

        <!--- Side Bar End-->
        <main>
            <h1>Dashboard</h1>
            <div class="date">
                <input type="date" name="" id="">
            </div>
            <!---End of Insights-->
            <div class="recent-orders" >
                <h2>Recent Orders</h2>
                <a href="addmenu.html" class="addbtn">Add Menu</a>
                 <table>
                    <thead>
                        <tr>
                            <th>Order Id</th>
                            <th>Customer Name</th>
                            <th>Menu Name</th>
                            <th>Quantity</th>
                            <th>Payment</th>
                            <th>Status</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>O_000001</td>
                            <td>Song John Ki</td>
                            <td>Pizza</td>
                            <td>3</td>
                            <td>Cash on Delivery</td>
                            <td class="danger">Pending</td>
                            <td class="success">Details</td>
                        </tr>
                        <tr>
                            <td>O_000001</td>
                            <td>Song John Ki</td>
                            <td>Pizza</td>
                            <td>3</td>
                            <td>Cash on Delivery</td>
                            <td class="danger">Pending</td>
                            <td class="success">Details</td>
                        </tr>
                    </tbody>
                 </table>
                 <a href="#">Show All</a>
            </div>
        </main>
        <!----End of main-->
        <div class="right">
            <div class="top">
                <button id="menu-item">
                    <span class="material-icons-sharp">
                        menu
                        </span>
                </button>
                <div class="theme-toggler">
                    <span class="material-icons-sharp active">
                        light_mode
                    </span>
                    <span class="material-icons-sharp">
                        dark_mode
                    </span>
                </div>
                <div class="theme-palette">
                    <span class="material-icons-sharp active">
                        palette
                    </span>
                </div>
                <div class="profile">
                    <div class="info">
                        <p>Hey <b>Joong KI</b></p>
                        <small class="text-muted">Admin</small>
                    </div>
                    <div class="profile-photo">
                        <img src="../assets/img/admin/profile.jfif">
                    </div>
                </div>
            </div>
        <!---End of Top-->
    </div>
</div>
    <script src="../assets/js/admin/script.js"></script>
</body>
</html>