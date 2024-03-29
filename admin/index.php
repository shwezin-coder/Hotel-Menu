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
                <a href="menu.html">
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
            <div class="insights">
                <div class="sales">
                    <span class="material-icons-sharp">
                       trending_up
                        </span>
                        <div class="middle">
                            <div class="left">
                                <h3>Total Sales</h3>
                                <h1>49</h1>
                            </div>
                            <div class="progress">
                                <svg viewBox="0 0 36 36" class="circular-chart sales">
                                    <path class="circle-bg"
                                      d="M18 2.0845
                                        a 15.9155 15.9155 0 0 1 0 31.831
                                        a 15.9155 15.9155 0 0 1 0 -31.831"
                                    />
                                    <path class="circle"
                                      stroke-dasharray="20, 100"
                                      d="M18 2.0845
                                        a 15.9155 15.9155 0 0 1 0 31.831
                                        a 15.9155 15.9155 0 0 1 0 -31.831"
                                    />
                                    <text x="18" y="20.35" class="percentage">20%</text>
                                  </svg>
                        </div>
                        </div>
                        <small class="text-muted">
                            Last 24 hours
                        </small>
                </div>
                <!---End sales-->
                <div class="expenses">
                    <span class="material-icons-sharp">
                        trending_down
                        </span>
                        <div class="middle">
                            <div class="left">
                                <h3>Total Customers</h3>
                                <h1>49</h1>
                            </div>
                            <div class="progress">
                                <svg viewBox="0 0 36 36" class="circular-chart expenses">
                                    <path class="circle-bg"
                                      d="M18 2.0845
                                        a 15.9155 15.9155 0 0 1 0 31.831
                                        a 15.9155 15.9155 0 0 1 0 -31.831"
                                    />
                                    <path class="circle"
                                      stroke-dasharray="10, 100"
                                      d="M18 2.0845
                                        a 15.9155 15.9155 0 0 1 0 31.831
                                        a 15.9155 15.9155 0 0 1 0 -31.831"
                                    />
                                    <text x="18" y="20.35" class="percentage">10%</text>
                                  </svg>
                        </div>
                        </div>
                        <small class="text-muted">
                            Last 24 hours
                        </small>
                </div>
                <!---End of Expenses-->
                <div class="income">
                    <span class="material-icons-sharp">
                       trending_up
                        </span>
                        <div class="middle">
                            <div class="left">
                                <h3>Total Orders</h3>
                                <h1>49</h1>
                            </div>
                            <div class="progress">
                                <svg viewBox="0 0 36 36" class="circular-chart income">
                                    <path class="circle-bg"
                                      d="M18 2.0845
                                        a 15.9155 15.9155 0 0 1 0 31.831
                                        a 15.9155 15.9155 0 0 1 0 -31.831"
                                    />
                                    <path class="circle"
                                      stroke-dasharray="8, 100"
                                      d="M18 2.0845
                                        a 15.9155 15.9155 0 0 1 0 31.831
                                        a 15.9155 15.9155 0 0 1 0 -31.831"
                                    />
                                    <text x="18" y="20.35" class="percentage">8%</text>
                                  </svg>
                        </div>
                        </div>
                        <small class="text-muted">
                            Last 24 hours
                        </small>
                </div>
                <!---End of Expenses-->
            </div>
            <!---End of Insights-->
            <div class="recent-orders">
                <h2>Recent Orders</h2>
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
        <div class="sales-analytics">
            <h2>Sales Analytics</h2>
            <div class="item morning">
                <div class="icon">
                    <span class="material-icons-sharp active">
                        breakfast_dining
                    </span>
                </div>
                <div class="right">
                    <div class="ingo">
                        <h3>Breakfast Order</h3>
                        <small class="text-muted">Today order</small>
                    </div>
                    <h5 class="success">+40%</h5>
                    <h3>3849</h3>
                </div>
            </div>
            <div class="item lunch">
                <div class="icon">
                    <span class="material-icons-sharp">
                        lunch_dining
                    </span>
                </div>
                <div class="right">
                    <div class="ingo">
                        <h3>Lunch Order</h3>
                        <small class="text-muted">Today order</small>
                    </div>
                    <h5 class="danger">+30%</h5>
                    <h3>2849</h3>
                </div>
            </div>
            <div class="item dinner">
                <div class="icon">
                    <span class="material-icons-sharp">
                        dinner_dining
                    </span>
                </div>
                <div class="right">
                    <div class="ingo">
                        <h3>Dinner Order</h3>
                        <small class="text-muted">Today order</small>
                    </div>
                    <h5 class="success">+30%</h5>
                    <h3>2849</h3>
                </div>
            </div>
            <div class="item add-menu">
                   <div>
                    <span class="material-icons-sharp">
                        add
                    </span>
                    <h3>Add Menu</h3>
                   </div>
            </div>
        </div>
    </div>
</div>
    <script src="../assets/js/admin/script.js"></script>
</body>
</html>