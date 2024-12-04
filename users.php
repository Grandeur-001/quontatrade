<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
        <!-- ============TITLE============= -->
        <title>Ocean Fortune</title>
    
        <!-- ============HEAD-ICON-LOGO============= -->
        <link rel="icon" type="image/png" href="assets/images/logo.png">
    
        <!-- ============CSS-LINKS============= -->
        <link rel="stylesheet" href="assets/css/swap.css">
        <link rel="stylesheet" href="assets/css/users.css">
        <link rel="stylesheet" href="assets/css/style.css">
        <link rel="stylesheet" href="assets/css/mediaquery.css">
        <link rel="stylesheet" href="assets/css/main-mediaquery.css">
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/5.4.5/css/swiper.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/4.2.0/remixicon.min.css">
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    
    
    
        <!-- ============FONT-AWESOME-LINKS============= -->
        <link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">


        <noscript> Powered by <a href=“https://www.smartsupp.com” target=“_blank”>Smartsupp</a></noscript>
    </head>


        <?php
            
            include 'session_handler.php';

        ?>


    <style>
        html{
          animation: none;
        }
        .tradingview-widget-container{
            width: auto;
            height: auto;
            position: relative;
            bottom: auto;
            z-index: auto;
        }

        .main_content{
            margin-top: 8rem;
        }

  
    </style>
<body>
    
      <header class="dashboard_header">
          <div class="wrapper">
            <div class="logo">
              <div class="image_wrapper">
                  <img src="assets/images/logo.png" width="42" height="42" alt="">
              </div>
              <!-- <div class="logo_name">Ocean </div> -->
            </div>

            <div class="icons">
              <ul>
                  <li class=""><a><i class="material-icons notification-icon">notifications_none</i></a>
                      <div class="notification_box">
                        <div class="wrapper">
                          <header>
                              <span>Notifications</span>
                              <a>Clear All</a>
                          </header>
                          <ul>
                              <li>
                                  <a href="#">
                                      <i class="fa fa-user"></i>
                                      <span>Your OTP is <p>487887</p></span>
                                  </a>
                              </li>

                              <li>
                                  <a href="#">
                                      <i class="fa fa-user"></i>
                                      <span>Your OTP is <p>651902</p></span>
                                  </a>
                              </li>

                              <li>
                                  <a href="#">
                                      <i class="fa fa-user"></i>
                                      <span>Your OTP is <p>651902</p></span>
                                  </a>
                              </li>

                              <li>
                                  <a href="#">
                                      <i class="fa fa-user"></i>
                                      <span>Your OTP is <p>651902</p></span>
                                  </a>
                              </li>
                          </ul>
                          <div class="view_all"><a href="#">View All</a></div>
                        </div>
                      </div>
                  </li>

                  <li><a href="#"><i class="material-icons account-icon">account_circle</i></a>
                      <div class="profile_box">
                          <ul>
                              <li>
                                  <a href="profile.php">
                                      <i class="material-icons">person_outline</i>
                                      <span>Profile</span>
                                  </a>
                              </li>
                              <li>
                                  <a href="#">
                                      <i class="material-icons">account_balance_wallet</i>
                                      <span>Wallet</span>
                                  </a>
                              </li>
                              <li>
                                  <a href="logout.php">
                                      <i class="material-icons">logout</i>
                                      <span>Logout</span>
                                  </a>
                              </li>
                          </ul>
                      </div>

                      
                  </li>

                
              </ul>
            </div>
          </div>


        <!-- ============ CRYPTO STICKER ============= //--AT THE TOP, BELOW THE NAV BAR--//-->
        <div class="crypto-ticker">
          <div style="height:62px; background-color: #1e293b; overflow:hidden; box-sizing: border-box; border: 1px solid #282E3B; border-radius: 4px; text-align: right; line-height:14px; block-size:62px; font-size: 12px; font-feature-settings: normal; text-size-adjust: 100%; box-shadow: inset 0 -20px 0 0 #262B38;padding:1px;padding: 0px; margin: 0px; width: 100%;">
              <div style="height:40px; padding:0px; margin:0px; width: 100%;">
                  <iframe src="https://widget.coinlib.io/widget?type=horizontal_v2&amp;theme=dark&amp;pref_coin_id=1505&amp;invert_hover=no" width="100%" height="36px" scrolling="auto" marginwidth="0" marginheight="0" frameborder="0" border="0" style="border:0;margin:0;padding:0;"></iframe>
                  <script>
                      document.addEventListener('contextmenu', (event) => event.preventDefault());
                          document.onkeydown = function(e) {
                              // Disable F12, Ctrl+Shift+I (Inspector), Ctrl+Shift+J (Console), Ctrl+U (View Source)
                              if (e.keyCode == 123 || // F12
                                  (e.ctrlKey && e.shiftKey && e.keyCode == 'I'.charCodeAt(0)) || // Ctrl+Shift+I
                                  (e.ctrlKey && e.shiftKey && e.keyCode == 'J'.charCodeAt(0)) || // Ctrl+Shift+J
                                  (e.ctrlKey && e.keyCode == 'U'.charCodeAt(0))) { // Ctrl+U
                                  return false; // Prevent the event
                              }
                          };
                  </script>
              </div>
              <div style="color: #1e293b; line-height: 14px; font-weight: 400; font-size: 11px; box-sizing: border-box; padding: 2px 6px; width: 100%; font-family: Verdana, Tahoma, Arial, sans-serif;">
                  <a href="https://coinlib.io" target="_blank" style="font-weight: 500; color: #626B7F; text-decoration:none; font-size:11px"></a>
              </div>
          </div>
        </div>
      </header>



    
        
      <aside class="sidebar">
          <div class="wrapper">


              <div class="sidebar_menu">
                  <ul>
                      <li>
                          <a href="admin_dashboard.php">
                              <i class="material-icons">dashboard</i>
                              <span>Home</span>
                          </a>
                      </li>
                      <li>
                          <a href="swap.php">
                              <i class="material-icons">swap_calls</i>
                              <span>Swap</span>
                          </a>
                      </li>

                      <li>
                          <a href="users.php">
                              <i class="fa fa-user-o"></i>
                              <span>Users</span>
                          </a>
                      </li>

                      <li>
                          <a href="admin_history.php">
                              <i class="material-icons">history</i>
                              <span>History</span>
                          </a>
                      </li>
                      <li>
                          <a href="features.php">
                              <i class="material-icons">widgets</i>
                              <span>Features</span>
                          </a>
                      </li>
                      <li>
                          <a href="market.php">
                              <i class="material-icons">store</i>
                              <span>Market</span>
                          </a>
                      </li>
                  </ul>
              </div>

              <div class="sidebar_widgets">
                <div class="wrapper">
                  <div class="image">
                    <img src="assets/images/crypto-join.png" alt="">
                  </div>
                  <div class="text">
                    <h3>Invest Now!</h3>
                    <a href="">
                      Buy and Sell Coins
                    </a>
                    <br><br>
                  </div>
                </div>
              </div>
          </div>
      </aside>

        <main class="main_content">

            <div class="box-body">
                <!-- Search Bar -->
                <div class="input-group-navbar">
                <input type="text" id="searchInput" class="form-control" placeholder="Search users by name or email">
                <button type="button">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>
                </button>
                </div>
                <div id="error" class="error_message">No users found matching your search.</div>

                <!-- Users Table -->
                <div class="table-responsive">
                <table class="table">
                    <thead class="d-none">
                    <tr>
                        <th></th>
                        <th></th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody id="usersTableBody">
                    <!-- Users will be inserted here by JavaScript -->
                    </tbody>
                </table>
                </div>

                <!-- Pagination -->
                <nav>
                <ul class="pagination" id="pagination">
                    <!-- Pagination will be inserted here by JavaScript -->
                </ul>
                </nav>
            </div>

         </main>

      
      <footer class="dashboard_footer">
        <div class="wrapper">
          <span>© 2024 <a href="index.php">Creative Fortune</a>All Right Reserved</span>
          <span><a href="#">Purchase Now</a></span>
        </div>
      </footer>

      <section class="bottom_nav">
        <div class="wrapper">
            <ul>
                <li>
                    <a href="dashboard.php">
                        <i class="material-icons">dashboard</i>
                        <span>Home</span>
                    </a>
                </li>
            </ul>

            <ul>
                <li>
                    <a href="swap.php">
                        <i class="material-icons">swap_calls</i>
                        <span>Swap</span>
                    </a>
                </li>
            </ul>

            <ul>
                <li>
                    <a href="admin_history.php">
                        <i class="material-icons">history</i>
                        <span>History</span>
                    </a>
                </li>
            </ul>

            <ul>
                <li>
                    <a href="features.php">
                        <i class="material-icons">widgets</i>
                        <span>Features</span>
                    </a>
                </li>
            </ul>

            <ul>
                <li>
                    <a href="market.php">
                        <i class="material-icons">store</i>
                        <span>Market</span>
                    </a>
                </li>
            </ul>
        </div>
      </section>
    




 
    <!-- ============JAVASCRIPT-LINKS============= -->
    <script src="assets/user/javascript/popup.js"></script>
    <script>
        
const users = [
  {
    id: 1,
    name: 'Developer',
    email: 'dev@dailyminning.com',
    location: 'Belgium',
    balance: 0,
    status: 'Enabled',
    avatar: 'D'
  },
  {
    id: 2,
    name: 'Administrator',
    email: 'admin@dailyminning.com',
    location: 'Belgium',
    balance: 53850,
    status: 'Enabled',
    avatar: 'A'
  },
  {
    id: 3,
    name: 'Sarah Johnson',
    email: 'sarah.j@example.com',
    location: 'United States',
    balance: 12500,
    status: 'Enabled',
    avatar: 'SJ'
  },
  // Adding more users to reach 30 total
  {
    id: 4,
    name: 'Michael Chen',
    email: 'michael.c@example.com',
    location: 'Singapore',
    balance: 8750,
    status: 'Enabled',
    avatar: 'MC'
  },
  {
    id: 5,
    name: 'Emma Wilson',
    email: 'emma.w@example.com',
    location: 'United Kingdom',
    balance: 15000,
    status: 'Enabled',
    avatar: 'EW'
  },
  {
    id: 6,
    name: 'Lucas Silva',
    email: 'lucas.s@example.com',
    location: 'Brazil',
    balance: 6300,
    status: 'Enabled',
    avatar: 'LS'
  },
  {
    id: 7,
    name: 'Sophie Martin',
    email: 'sophie.m@example.com',
    location: 'France',
    balance: 9200,
    status: 'Enabled',
    avatar: 'SM'
  },
  {
    id: 8,
    name: 'Alexander Kim',
    email: 'alex.k@example.com',
    location: 'South Korea',
    balance: 11800,
    status: 'Enabled',
    avatar: 'AK'
  },
  {
    id: 9,
    name: 'Isabella Garcia',
    email: 'isabella.g@example.com',
    location: 'Spain',
    balance: 7400,
    status: 'Enabled',
    avatar: 'IG'
  },
  {
    id: 10,
    name: 'Oliver Schmidt',
    email: 'oliver.s@example.com',
    location: 'Germany',
    balance: 13600,
    status: 'Enabled',
    avatar: 'OS'
  },
  {
    id: 11,
    name: 'Sophia Lee',
    email: 'sophia.l@example.com',
    location: 'Canada',
    balance: 9800,
    status: 'Enabled',
    avatar: 'SL'
  },
  {
    id: 12,
    name: 'Ethan Brown',
    email: 'ethan.b@example.com',
    location: 'Australia',
    balance: 14200,
    status: 'Enabled',
    avatar: 'EB'
  },
  {
    id: 13,
    name: 'Ava Thompson',
    email: 'ava.t@example.com',
    location: 'Ireland',
    balance: 8900,
    status: 'Enabled',
    avatar: 'AT'
  },
  {
    id: 14,
    name: 'William Davis',
    email: 'william.d@example.com',
    location: 'Sweden',
    balance: 12100,
    status: 'Enabled',
    avatar: 'WD'
  },
  {
    id: 15,
    name: 'Mia Rodriguez',
    email: 'mia.r@example.com',
    location: 'Mexico',
    balance: 6700,
    status: 'Enabled',
    avatar: 'MR'
  },
  {
    id: 16,
    name: 'James Wilson',
    email: 'james.w@example.com',
    location: 'New Zealand',
    balance: 10300,
    status: 'Enabled',
    avatar: 'JW'
  },
  {
    id: 17,
    name: 'Charlotte Brown',
    email: 'charlotte.b@example.com',
    location: 'Denmark',
    balance: 15800,
    status: 'Enabled',
    avatar: 'CB'
  },
  {
    id: 18,
    name: 'Benjamin Lee',
    email: 'benjamin.l@example.com',
    location: 'Norway',
    balance: 11200,
    status: 'Enabled',
    avatar: 'BL'
  },
  {
    id: 19,
    name: 'Amelia Clark',
    email: 'amelia.c@example.com',
    location: 'Finland',
    balance: 9400,
    status: 'Enabled',
    avatar: 'AC'
  },
  {
    id: 20,
    name: 'Henry Zhang',
    email: 'henry.z@example.com',
    location: 'China',
    balance: 13900,
    status: 'Enabled',
    avatar: 'HZ'
  },
  {
    id: 21,
    name: 'Victoria Kim',
    email: 'victoria.k@example.com',
    location: 'Japan',
    balance: 8100,
    status: 'Enabled',
    avatar: 'VK'
  },
  {
    id: 22,
    name: 'Daniel Martinez',
    email: 'daniel.m@example.com',
    location: 'Argentina',
    balance: 12700,
    status: 'Enabled',
    avatar: 'DM'
  },
  {
    id: 23,
    name: 'Sofia Rossi',
    email: 'sofia.r@example.com',
    location: 'Italy',
    balance: 10900,
    status: 'Enabled',
    avatar: 'SR'
  },
  {
    id: 24,
    name: 'Joseph Taylor',
    email: 'joseph.t@example.com',
    location: 'South Africa',
    balance: 7800,
    status: 'Enabled',
    avatar: 'JT'
  },
  {
    id: 25,
    name: 'Chloe Anderson',
    email: 'chloe.a@example.com',
    location: 'Russia',
    balance: 14500,
    status: 'Enabled',
    avatar: 'CA'
  },
  {
    id: 26,
    name: 'Andrew Wilson',
    email: 'andrew.w@example.com',
    location: 'Portugal',
    balance: 9600,
    status: 'Enabled',
    avatar: 'AW'
  },
  {
    id: 27,
    name: 'Grace Miller',
    email: 'grace.m@example.com',
    location: 'Netherlands',
    balance: 11500,
    status: 'Enabled',
    avatar: 'GM'
  },
  {
    id: 28,
    name: 'David Garcia',
    email: 'david.g@example.com',
    location: 'Greece',
    balance: 8300,
    status: 'Enabled',
    avatar: 'DG'
  },
  {
    id: 29,
    name: 'Elizabeth Chen',
    email: 'elizabeth.c@example.com',
    location: 'Taiwan',
    balance: 13200,
    status: 'Enabled',
    avatar: 'EC'
  },
  {
    id: 30,
    name: 'Matthew Park',
    email: 'matthew.p@example.com',
    location: 'South Korea',
    balance: 10700,
    status: 'Enabled',
    avatar: 'MP'
  },

  
  


  
];

// State management
let currentPage = 1;
const usersPerPage = 10;
let filteredUsers = [...users];

// DOM elements
const searchInput = document.getElementById('searchInput');
const usersTableBody = document.getElementById('usersTableBody');
const paginationContainer = document.getElementById('pagination');

// Format currency
const formatCurrency = (amount) => {
  return new Intl.NumberFormat('en-US', {
    style: 'currency',
    currency: 'USD'
  }).format(amount);
};






// Create user row HTML
const createUserRow = (user) => {

  function getGlowingColor(userName) {
    const colors = [
      "#ff0066", // Vivid Pink
      "#33cc33", // Bright Lime
      "#00cccc", // Bright Cyan
      "#800080", // Purple
      "#ffcc00", // Bright Yellow
      "#ff00ff", // Magenta
      "#00ffff", // Aqua
      "#ff0033", // Vivid Red
      "#33ff00", // Bright Green
      "#00ff99", // Mint Green
      "#006400", // Dark Green
      "#008080", // Teal
      "#f0e68c", // Khaki
      "#ff9900", // Amber
      "#ff003d", // Hot Pink
      "#00bfff", // Deep Sky Blue
      "#f79c42", // Tangerine
      "#ff6347", // Coral Red
      "#ff3399", // Blush Pink
      "#9966cc", // Lavender
      "#ff6666", // Light Red
      "#b4e1ff", // Pale Blue
      "#20b2aa", // Light Sea Green
      "#ffb3e6", // Light Lavender
      "#1e90ff", // Dodger Blue
      "#32a852", // Medium Green
      "#ff9966", // Salmon Orange
      "#d1f7f1", // Very Light Cyan
      "#ff3d99", // Raspberry Pink
      "#ff4d6d", // Flamingo Pink
      "#ff8c66", // Soft Orange
      "#7fffd4", // Aquamarine
      "#c71585", // Medium Violet Red
      "#adff2f", // Green Yellow
      "#6f42c1", // Amethyst Purple
      "#ffb84d", // Light Amber
      "#4cbb17", // Emerald Green
      "#ffa07a", // Light Salmon
      "#f5a623", // Golden Yellow
      "#9b59b6", // Orchid Purple
    ];
  
    return colors[Math.floor(Math.random() * colors.length)];
  }
  getGlowingColor()



  return `
    <tr>
      <td>
        <a class="avatar" href="#">
          <img src="https://api.dicebear.com/6.x/initials/svg?seed=${user.name}&backgroundColor=${getGlowingColor()}&textColor=ffffff" alt="${user.name}'s Avatar">
        </a>
      </td>
      <td class="user-info">
        <strong>${user.name}</strong>
        <span class="sidetitle">${user.email}</span>
        <span class="location">${user.location}</span>
        <div class="balance">${formatCurrency(user.balance)}</div>
        <span class="badge badge-success">${user.status}</span>
      </td>
      <td>
        <div class="btn-group">
          <button class="dropdown-toggle" id="dropdown-toggle" onclick="toggleDropdown(this)">
            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
              <circle cx="12" cy="12" r="1"></circle>
              <circle cx="12" cy="5" r="1"></circle>
              <circle cx="12" cy="19" r="1"></circle>
            </svg>
          </button>
          <div class="action-dropdown-menu">
            <button type="submit" class="dropdown-item">Edit</button>
            <button type="submit" class="dropdown-item">Delete</button>
            <button type="submit" class="dropdown-item">Disable</button>
            <button type="submit" class="dropdown-item">Add Balance</button>
            <button type="submit" class="dropdown-item">Email</button>
            <button type="submit" class="dropdown-item">Verify Email</button>
            <button type="submit" class="dropdown-item">Verify KYC</button>
          </div>

        </div>
      </td>
    </tr>
  `;
};

const createPagination = () => {
  const totalPages = Math.ceil(filteredUsers.length / usersPerPage);
  let paginationHTML = '';

  paginationHTML += `
    <li class="page-item ${currentPage === 1 ? 'disabled' : ''}">
      <button class="page-link" ${currentPage === 1 ? 'disabled' : ''} onclick="changePage(${currentPage - 1})">‹</button>
    </li>
  `;

  for (let i = 1; i <= totalPages; i++) {
    paginationHTML += `
      <li class="page-item ${currentPage === i ? 'active' : ''}">
        <button class="page-link" onclick="changePage(${i})">${i}</button>
      </li>
    `;
  }

  paginationHTML += `
    <li class="page-item ${currentPage === totalPages ? 'disabled' : ''}">
      <button class="page-link" ${currentPage === totalPages ? 'disabled' : ''} onclick="changePage(${currentPage + 1})">›</button>
    </li>
  `;

  paginationContainer.innerHTML = paginationHTML;
};

const renderUsers = () => {
  const startIndex = (currentPage - 1) * usersPerPage;
  const endIndex = startIndex + usersPerPage;
  const usersToDisplay = filteredUsers.slice(startIndex, endIndex);

  usersTableBody.innerHTML = usersToDisplay.map(createUserRow).join('');
  createPagination();
}; 

const handleSearch = (event) => {
  const searchTerm = event.target.value.toLowerCase();
  filteredUsers = users.filter(user => 
    user.name.toLowerCase().includes(searchTerm) ||
    user.email.toLowerCase().includes(searchTerm)
  );
  currentPage = 1;
  if (filteredUsers.length === 0) {
    document.getElementById('error').style.display = "block"
  } else {
    document.getElementById('error').style.display = "none"
    
  }
  renderUsers();
};

window.changePage = (page) => {
  const totalPages = Math.ceil(filteredUsers.length / usersPerPage);
  if (page >= 1 && page <= totalPages) {
    currentPage = page;
    renderUsers();
  }
};

window.toggleDropdown = (button) => {
  const dropdown = button.nextElementSibling;
  if (dropdown.classList.contains('show')) {
    dropdown.classList.remove('show');
  } else {
    document.querySelectorAll('.action-dropdown-menu.show').forEach(menu => menu.classList.remove('show'));
    dropdown.classList.add('show');
  }
};

document.addEventListener('click', (event) => {
  const isDropdownButton = event.target.closest('.dropdown-toggle');
  const isDropdownMenu = event.target.closest('.action-dropdown-menu');

  if (!isDropdownButton && !isDropdownMenu) {
    document.querySelectorAll('.action-dropdown-menu.show').forEach(menu => menu.classList.remove('show'));
  }
});








// Close dropdowns when clicking outside
document.addEventListener('click', (e) => {
  if (!e.target.closest('.btn-group')) {
    document.querySelectorAll('.aaction-dropdown-menu').forEach(menu => {
      menu.classList.remove('show');
    });
  }
});

// Initialize
searchInput.addEventListener('input', handleSearch);
renderUsers();
    </script>

</body>
</html>

