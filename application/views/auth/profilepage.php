<?php
session_start();

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "elearngamezone"; // Replace with your database name

// Establish a database connection
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Assuming user's ID is stored in the session
$userId = 1;

// Fetch user info from the `user_info` table
$query = "SELECT name, profile_picture FROM user_info WHERE id='$userId'";
$result = $conn->query($query);
if ($result->num_rows > 0) {
    $user = $result->fetch_assoc();
    $userName = $user['name'];
    $profilePicture = $user['profile_picture'] ?: '#';
} else {
    die("User not found.");
}

// Handle profile update form submission
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Update name
    if (!empty($_POST['name'])) {
        $newName = $conn->real_escape_string($_POST['name']);
        $conn->query("UPDATE user_info SET name='$newName' WHERE id='$userId'");
        $userName = $newName; // Update local variable for display
    }

    // Handle profile picture upload if a file was selected
    if (!empty($_FILES['profile-pic']['name'])) {
        $target_dir = "uploaded_img/";
        $file_name = basename($_FILES["profile-pic"]["name"]);
        $target_file = $target_dir . $file_name;
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

        // Validate image file
        $check = getimagesize($_FILES["profile-pic"]["tmp_name"]);
        if ($check === false) {
            $uploadOk = 0;
            $_SESSION['errorMessage'] = "File is not an image.";
        }
        if ($_FILES["profile-pic"]["size"] > 5000000) {
            $uploadOk = 0;
            $_SESSION['errorMessage'] = "Sorry, your file is too large.";
        }
        if (!in_array($imageFileType, ['jpg', 'jpeg', 'png', 'gif'])) {
            $uploadOk = 0;
            $_SESSION['errorMessage'] = "Only JPG, JPEG, PNG & GIF files are allowed.";
        }

        // Move the uploaded file if validation passed
        if ($uploadOk == 1 && move_uploaded_file($_FILES["profile-pic"]["tmp_name"], $target_file)) {
            $conn->query("UPDATE user_info SET profile_picture='$target_file' WHERE id='$userId'");
            $profilePicture = $target_file; // Update local variable for display
        }
    }

    header("Location: " . $_SERVER['PHP_SELF']); // Refresh to apply changes
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="ind.css">
    <link rel="stylesheet" href="./assets/css/auth/profile.css">
    <link rel="stylesheet" href="./assets/css-charts/css/progress_pie_compiled.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Learning Management System</title>
</head>

<body>
    <div class="profile-container">
        <form class="profile-form" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" enctype="multipart/form-data">
            <div class="profile-pic" onclick="toggleDropdown()">
                <input type="file" name="profile-pic" class="hidden-input" accept="image/*" onchange="previewImage(event)">
                <img id="profileImage" src="<?php echo htmlspecialchars($profilePicture); ?>" alt="Profile Picture" style="width: 100%; height: 100%; border-radius: 50%; object-fit: cover; <?php echo ($profilePicture === '#' ? 'display:none;' : ''); ?>">
            </div>
            <div class="profile-name" id="profileName"><?php echo htmlspecialchars($userName); ?></div>
            <button type="button" class="edit-btn" id="editButton" onclick="editName()">Edit</button>

            <!-- Editable name input and save button -->
            <div>
                <input id="name-edit" style="display: none;" type="text" name="name" class="input-field" placeholder="Type new name..." value="<?php echo htmlspecialchars($userName); ?>">
                <button type="submit" class="save-button" id="saveButton" style="display: none;">Save</button> <!-- Save button -->
            </div>
        </form>

        <!-- Profile picture options dropdown -->
        <div class="dropdown" id="dropdownMenu">
            <a href="#" onclick="document.querySelector('.hidden-input').click();">Upload New Picture</a>
            <a href="#" onclick="viewPicture()">View Picture</a>
            <a href="#" onclick="removePicture()">Remove Picture</a>
        </div>
    </div>

    <h2>Progress</h2>
    <div class="progress">
        <div class="chart-container">
            <div class="progress-pie" data-value="50"></div>
            <div class="chart-box">
                <h2 class="progress-title">Trained</h2>
                <h1 class="progress-percentatge">73.3%</h1>
            </div>
            <div class="chart-box">
                <h2 class="progress-title">Passed</h2>
                <h1 class="progress-percentatge">41</h1>
            </div>
            <div class="chart-box">
                <h2 class="progress-title">Failed</h2>
                <h1 class="progress-percentatge">3</h1>
            </div>
            <div class="chart-box box-end">
                <h2 class="progress-title">In Progress</h2>
                <h1 class="progress-percentatge">6</h1>
            </div>
        </div>

        <div class="progress-bars"> </div>
        <div class="progress-container">
            <h2 class="title">Exercises</h2>
            <!-- Progress boxes for Exercises -->
        </div>

        <div class="progress-bars">
            <div class="row">
                <div class="progress-box">
                    <div class="progress-container">
                        <div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="--progress-value: 80;"></div>
                    </div>
                    <label>CSS</label>
                </div>
                <div class="chart-boxs"></div>
                <div class="progress-box">
                    <div class="progress-container">
                        <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="--progress-value: 100;"></div>
                    </div>
                    <label>HTML</label>
                </div>
                <div class="chart-boxs"></div>
                <div class="progress-box">
                    <div class="progress-container">
                        <div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="--progress-value: 80;"></div>
                    </div>
                    <label>JavaScript</label>
                </div>
                <div class="chart-boxs"></div>
            </div>
            <div class="row">
                <div class="progress-box">
                    <div class="progress-container">
                        <div class="progress-bar" role="progressbar" aria-valuenow="32" aria-valuemin="0" aria-valuemax="100" style="--progress-value: 32;"></div>
                    </div>
                    <label>PHP</label>
                </div>
                <div class="chart-boxs"></div>
                <div class="progress-box">
                    <div class="progress-container">
                        <div class="progress-bar" role="progressbar" aria-valuenow="72" aria-valuemin="0" aria-valuemax="100" style="--progress-value: 72;"></div>
                    </div>
                    <label>Python</label>
                </div>
                <div class="chart-boxs"></div>
                <div class="progress-box">
                    <div class="progress-container">
                        <div class="progress-bar" role="progressbar" aria-valuenow="82" aria-valuemin="0" aria-valuemax="100" style="--progress-value: 82;"></div>
                    </div>
                    <label>SQL</label>
                </div>
                <div class="chart-boxs"></div>
            </div>
        </div>
        <div class="progress-container">
            <h2 class="title">Quizzes</h2>
            <!-- Progress boxes for Quizzes -->
        </div>
        <div class="progress-bars">
            <div class="row">
                <div class="progress-box">
                    <div class="progress-container">
                        <div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="--progress-value: 80;"></div>
                    </div>
                    <label>CSS</label>
                </div>
                <div class="chart-boxs"></div>
                <div class="progress-box">
                    <div class="progress-container">
                        <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="--progress-value: 100;"></div>
                    </div>
                    <label>HTML</label>
                </div>
                <div class="chart-boxs"></div>
                <div class="progress-box">
                    <div class="progress-container">
                        <div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="--progress-value: 80;"></div>
                    </div>
                    <label>JavaScript</label>
                </div>
                <div class="chart-boxs"></div>
            </div>
            <div class="row">
                <div class="progress-box">
                    <div class="progress-container">
                        <div class="progress-bar" role="progressbar" aria-valuenow="32" aria-valuemin="0" aria-valuemax="100" style="--progress-value: 32;"></div>
                    </div>
                    <label>PHP</label>
                </div>
                <div class="chart-boxs"></div>
                <div class="progress-box">
                    <div class="progress-container">
                        <div class="progress-bar" role="progressbar" aria-valuenow="72" aria-valuemin="0" aria-valuemax="100" style="--progress-value: 72;"></div>
                    </div>
                    <label>Python</label>
                </div>
                <div class="chart-boxs"></div>
                <div class="progress-box">
                    <div class="progress-container">
                        <div class="progress-bar" role="progressbar" aria-valuenow="82" aria-valuemin="0" aria-valuemax="100" style="--progress-value: 82;"></div>
                    </div>
                    <label>SQL</label>
                </div>
                <div class="chart-boxs"></div>
            </div>
        </div>
    </div>
    </div>
    </div>
    <div id="imageModal" style="display: none;">
        <img id="modalImage" />
    </div>

    <script>
        // Toggle the edit mode to show input and save button
        function editName() {
            document.getElementById('name-edit').style.display = 'block';
            document.getElementById('profileName').style.display = 'none';
            document.getElementById('editButton').style.display = 'none';
            document.getElementById('saveButton').style.display = 'inline'; // Show the save button
        }


        function toggleDropdown() {
            const dropdown = document.getElementById('dropdownMenu');
            dropdown.style.display = dropdown.style.display === 'block' ? 'none' : 'block';
        }

        function previewImage(event) {
            const file = event.target.files[0];
            const reader = new FileReader();
            reader.onload = function(e) {
                const profileImage = document.getElementById('profileImage');
                profileImage.src = e.target.result;
                profileImage.style.display = 'block';
                toggleDropdown(); // Close dropdown after selecting an image

                // Show save button and hide edit button when a new image is selected
                document.getElementById('editButton').style.display = 'none';
                document.getElementById('saveButton').style.display = 'inline';
            }
            if (file) {
                reader.readAsDataURL(file);
            }
        }

        function viewPicture() {
            const profileImage = document.getElementById('profileImage').src;
            if (profileImage && profileImage !== "#") {
                const modal = document.getElementById('imageModal');
                const modalImage = document.getElementById('modalImage');
                modalImage.src = profileImage;
                modal.style.display = 'flex';
            } else {
                alert('No picture uploaded yet.');
            }
            toggleDropdown();
        }

        function removePicture() {
            document.getElementById('profileImage').src = "#";
            document.getElementById('profileImage').style.display = 'none';
            document.getElementById('editButton').style.display = 'none';
            document.getElementById('saveButton').style.display = 'inline';
            toggleDropdown();
        }

        window.onclick = function(event) {
            const modal = document.getElementById('imageModal');
            if (event.target === modal) {
                modal.style.display = 'none';
            }
        }
    </script>
</body>

</html>