
<html>
    <head>
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="fontawesome-free-7.1.0-web/css/all.css">
    </head>
<body>
      <div class="header">
        <div class="listLeft">
        <ul>
            <li><a href="#">Recent Actions</a></li>
            <li><a href="#" class="barToggle">Add Customer</a></li>
        </ul>
    </div>
    <div id="topBar" class="topBar"><ul>
        <div class="topBarForm">
            <input type="text" name="name" id="name" placeholder="Name-Surname">
            <input type="text" name="phone" id="Phone" placeholder="Phone Number">
            <input type="text" name="email" id="email" placeholder="E-mail">
            <select id="priority">
                <option value="">Priority</option>
                <option value="1">1-High Priority Customer</option>
                <option value="2">2-Middle Priority Customer</option>
                <option value="3">3-Bottom Priority Customer</option>
            </select>
        </div>
        <div class="topBarAction">
        <li><a href="#">Add</a></li>
        <li><a href="#" class="barToggle">Close</a></li>
        </div>
    </ul>
    </div>
    <div class="list">
        <div class="listTopMenu">
            <div class="searchBar" id="searchBar">
                <input type="search" placeholder="Search Customer..">
            </div>
            <div class="searchIcon">
                <a href="#" class="searchico">
                <i class="fa-solid fa-magnifying-glass", class="searchBar"></i> 
            </a>
            </div>
        </div>
        <div class="listDb">
            <div class="listDbPeace">
                <div class="listChanges">
                    <ul>
                        <li><a href="#"><i class="fa-solid fa-trash"></i></a></li>
                        <li><a href="#"><i class="fa-solid fa-pen"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    </div>  
    
<script>
document.querySelectorAll(".barToggle").forEach(btn => {
  btn.addEventListener("click", e => {
    e.preventDefault();
    document.getElementById("topBar").classList.toggle("active");
  });
});
document.querySelectorAll(".searchico").forEach(btn => {
  btn.addEventListener("click", e => {
    e.preventDefault();
    document.getElementById("searchBar").classList.toggle("active");
  });
});
</script>
</body>
<?php ?>
</html>