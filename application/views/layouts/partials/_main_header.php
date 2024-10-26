<nav class="navbar">
  <div class="logo_item">
    <img src="<?= base_url("/assets/img/elearn.jpg") ?>">eLearnGameZone
  </div>

  <div class="search_bar">
    <input type="text" placeholder="Search" class="search-bar" />
  </div>

  <div class="navbar_content">
    <a href="<?= base_url("home")?>" class="nav_link">
      <button class="nav-btn <?= ($this->uri->segment(1) == 'home') ? 'active' : '' ?>">Home</button>
    </a>
    <a href="<?= base_url("library")?>" class="nav_link">
      <button class="nav-btn <?= ($this->uri->segment(1) == 'library') ? 'active' : '' ?>">Library</button>
    </a>
    <i class="bi bi-grid"></i>
    <i class='bx bx-sun' id="darkLight"></i>
    <i class='bx bx-bell'></i>

    <div class="dropdown">
      <img src="<?= base_url("/assets/img/profileicon.png") ?>" onclick="toggleDropdown()" class="dropbtn">
      <div id="myDropdown" class="dropdown-content">
        <a href="profile">Profile</a>
        <a href="<?= base_url("submit/logout") ?>">Logout</a>
      </div>
    </div>
  </div>
</nav>
