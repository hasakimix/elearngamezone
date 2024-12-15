<nav class="navbar">
	<div class="logo_item">
		<img src="<?= base_url("/assets/img/elearn.jpg") ?>">eLearnGameZone
	</div>

	<div class="search_bar">
		<input type="text" placeholder="Search" class="search-bar" />
	</div>

	<div class="navbar_content">
		<a href="<?= base_url("home") ?>" class="nav_link">
			<button class="nav-btn <?= ($this->uri->segment(1) == 'home') ? 'active' : '' ?>">Home</button>
		</a>
		<a href="<?= base_url("library") ?>" class="nav_link">
			<button class="nav-btn <?= ($this->uri->segment(1) == 'library') ? 'active' : '' ?>">Library</button>
		</a>
		<i class="bi bi-grid"></i>
		<i class='bx bx-sun' id="darkLight"></i>

		<i class='bx bx-bell' onclick="toggleNotification()"></i>
		<div id="notificationDropdown" class="notification-dropdown">
			<p class="notification-title">Notifications</p>

			<!-- Example notifs -->
			<div class="notification-item">
				<div class="notification-text">
					<span class="notification-message">New module available: "Introduction to Python"</span>
					<span class="notification-timestamp">Just now</span>
				</div>
			</div>

			<div class="notification-item">
				<div class="notification-text">
					<span class="notification-message">Assignment deadline approaching: "JavaScript Basics"</span>
					<span class="notification-timestamp">2 hours ago</span>
				</div>
			</div>
		</div>

		<div class="dropdown">
			<img src="<?= base_url("/assets/img/profileicon.png") ?>" onclick="toggleDropdown()" class="dropbtn">
			<div id="DropDown" class="dropdown-content">
				<a href="<?= base_url("profile") ?>" class="dropdown-item">Profile</a>
				<a href="<?= base_url("submit/logout") ?>" class="dropdown-item">Logout</a>
			</div>
		</div>
	</div>
	</div>
	</div>
</nav>
