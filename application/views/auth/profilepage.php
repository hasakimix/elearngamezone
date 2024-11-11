<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Profile</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <style>
        .main-profile { padding: 20px; }
        .profile-card { background-color: #f8f9fa; }
        .profile-card-body { padding: 20px; }
        .edit-icon { position: absolute; top: 5px; right: 5px; color: #007bff; cursor: pointer; }
        .progress-section, .collapsible-section { margin-top: 20px; }
        .card.bg-light { background-color: #e9ecef; border-radius: 8px; padding: 15px; }
        .nav-tabs .nav-link { color: #495057; }
        .nav-tabs .nav-link.active { background-color: #007bff; color: white; }
        .tab-content h5 { font-weight: bold; }
        .progress-bar { background-color: #007bff; }
        .card-body label { font-weight: bold; }
        .card-body {height: 850px;}
        .card-edit label { font-weight: bold; }
        .card-edit {height: 400px; padding: 20px;}
    </style>
</head>
<body>

<!-- Main Profile Section -->
<div class="main-profile container">
    <div class="row">
        <!-- Profile Card -->
        <div class="col-lg-4">
            <div class="card profile-card mb-4">
                <div class="card-body profile-card-body text-center">
                    <div class="profile-picture-container position-relative">
                        <img src="<?= base_url("/assets/img/pfp.jpg") ?>" alt="Profile Picture" class="rounded-circle p-1 bg-primary" width="110">
                        <div class="edit-icon">
                            <i class="fas fa-edit"></i>
                        </div>
                    </div>
                    <h4 class="mt-3">Jett Gods</h4>
                    <p class="text-secondary mb-1">Radiant Player</p>
                    <p class="text-muted font-size-sm">HasakiMix</p>
                    <button class="btn btn-outline-primary" id="editButton">Edit</button>
                    <hr class="my-4">
                    <h5>About Me</h5>
                    <p class="text-muted">Passionate gamer with a love for competitive play and a keen interest in software development. Always excited to learn new skills and level up, both in-game and in life!</p>
                </div>
            </div>
        </div>

        <!-- Collapsible Section and Tabs -->
        <div class="col-lg-8">
            <!-- Collapsible Edit Section -->
            <div class="collapsible-section" id="collapsibleSection" style="display: none;">
                <div class="card mb-4">
                    <div class="card-edit">
                        <div class="row mb-3">
                            <div class="col-sm-3">
                                <label>Full Name</label>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                <input type="text" class="form-control">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-sm-3">
                                <label>Status</label>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                <input type="text" class="form-control">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-sm-3">
                                <label>Nickname</label>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                <input type="text" class="form-control">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-sm-3">
                                <label>About Me</label>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                <textarea class="form-control" rows="3"></textarea>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-3"></div>
                            <div class="col-sm-9 text-secondary">
                                <input type="button" class="btn btn-primary px-4" value="Save Changes">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Progress Tabs -->
            <div class="progress-section">
                <ul class="nav nav-tabs" id="progressTabs" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="java-tab" data-toggle="tab" href="#java" role="tab">Java</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="html-tab" data-toggle="tab" href="#html" role="tab">HTML</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="javascript-tab" data-toggle="tab" href="#javascript" role="tab">JavaScript</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="php-tab" data-toggle="tab" href="#php" role="tab">PHP</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="python-tab" data-toggle="tab" href="#python" role="tab">Python</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="sql-tab" data-toggle="tab" href="#sql" role="tab">SQL</a>
                    </li>
                </ul>

                <!-- Tab Content -->
                <div class="tab-content mt-3" id="progressTabsContent">
                    <!-- Java Tab Content -->
                    <div class="tab-pane fade show active" id="java" role="tabpanel">
                        <div class="card bg-light p-3">
                            <h5>Java Progress</h5>
                            <p>Modules <span class="float-right">75%</span></p>
                            <div class="progress mb-3">
                                <div class="progress-bar" role="progressbar" style="width: 75%">75%</div>
                            </div>
                            <p>Quizzes <span class="float-right">65%</span></p>
                            <div class="progress mb-3">
                                <div class="progress-bar" role="progressbar" style="width: 65%">65%</div>
                            </div>
                            <p>Videos <span class="float-right">50%</span></p>
                            <div class="progress mb-3">
                                <div class="progress-bar" role="progressbar" style="width: 50%">50%</div>
                            </div>
                            <p>Games <span class="float-right">80%</span></p>
                            <div class="progress mb-3">
                                <div class="progress-bar" role="progressbar" style="width: 80%">80%</div>
                            </div>
                        </div>
                    </div>

                    <!-- HTML Tab Content -->
                    <div class="tab-pane fade" id="html" role="tabpanel">
                        <div class="card bg-light p-3">
                            <h5>HTML Progress</h5>
                            <p>Modules <span class="float-right">85%</span></p>
                            <div class="progress mb-3">
                                <div class="progress-bar" role="progressbar" style="width: 85%">85%</div>
                            </div>
                            <p>Quizzes <span class="float-right">60%</span></p>
                            <div class="progress mb-3">
                                <div class="progress-bar" role="progressbar" style="width: 60%">60%</div>
                            </div>
                            <p>Videos <span class="float-right">90%</span></p>
                            <div class="progress mb-3">
                                <div class="progress-bar" role="progressbar" style="width: 90%">90%</div>
                            </div>
                            <p>Games <span class="float-right">40%</span></p>
                            <div class="progress mb-3">
                                <div class="progress-bar" role="progressbar" style="width: 40%">40%</div>
                            </div>
                        </div>
                    </div>

                    <!-- JavaScript Tab Content -->
                    <div class="tab-pane fade" id="javascript" role="tabpanel">
                        <div class="card bg-light p-3">
                            <h5>JavaScript Progress</h5>
                            <p>Modules <span class="float-right">55%</span></p>
                            <div class="progress mb-3">
                                <div class="progress-bar" role="progressbar" style="width: 55%">55%</div>
                            </div>
                            <p>Quizzes <span class="float-right">70%</span></p>
                            <div class="progress mb-3">
                                <div class="progress-bar" role="progressbar" style="width: 70%">70%</div>
                            </div>
                            <p>Videos <span class="float-right">65%</span></p>
                            <div class="progress mb-3">
                                <div class="progress-bar" role="progressbar" style="width: 65%">65%</div>
                            </div>
                            <p>Games <span class="float-right">75%</span></p>
                            <div class="progress mb-3">
                                <div class="progress-bar" role="progressbar" style="width: 75%">75%</div>
                            </div>
                        </div>
                    </div>

                    <!-- PHP Tab Content -->
                    <div class="tab-pane fade" id="php" role="tabpanel">
                        <div class="card bg-light p-3">
                            <h5>PHP Progress</h5>
                            <p>Modules <span class="float-right">75%</span></p>
                            <div class="progress mb-3">
                                <div class="progress-bar" role="progressbar" style="width: 75%">75%</div>
                            </div>
                            <p>Quizzes <span class="float-right">65%</span></p>
                            <div class="progress mb-3">
                                <div class="progress-bar" role="progressbar" style="width: 65%">65%</div>
                            </div>
                            <p>Videos <span class="float-right">50%</span></p>
                            <div class="progress mb-3">
                                <div class="progress-bar" role="progressbar" style="width: 50%">50%</div>
                            </div>
                            <p>Games <span class="float-right">80%</span></p>
                            <div class="progress mb-3">
                                <div class="progress-bar" role="progressbar" style="width: 80%">80%</div>
                            </div>
                        </div>
                    </div>

                    <!-- Python Tab Content -->
                    <div class="tab-pane fade" id="python" role="tabpanel">
                        <div class="card bg-light p-3">
                            <h5>Python Progress</h5>
                            <p>Modules <span class="float-right">85%</span></p>
                            <div class="progress mb-3">
                                <div class="progress-bar" role="progressbar" style="width: 85%">85%</div>
                            </div>
                            <p>Quizzes <span class="float-right">60%</span></p>
                            <div class="progress mb-3">
                                <div class="progress-bar" role="progressbar" style="width: 60%">60%</div>
                            </div>
                            <p>Videos <span class="float-right">90%</span></p>
                            <div class="progress mb-3">
                                <div class="progress-bar" role="progressbar" style="width: 90%">90%</div>
                            </div>
                            <p>Games <span class="float-right">40%</span></p>
                            <div class="progress mb-3">
                                <div class="progress-bar" role="progressbar" style="width: 40%">40%</div>
                            </div>
                        </div>
                    </div>

                    <!-- SQL Tab Content -->
                    <div class="tab-pane fade" id="sql" role="tabpanel">
                        <div class="card bg-light p-3">
                            <h5>SQL Progress</h5>
                            <p>Modules <span class="float-right">55%</span></p>
                            <div class="progress mb-3">
                                <div class="progress-bar" role="progressbar" style="width: 55%">55%</div>
                            </div>
                            <p>Quizzes <span class="float-right">70%</span></p>
                            <div class="progress mb-3">
                                <div class="progress-bar" role="progressbar" style="width: 70%">70%</div>
                            </div>
                            <p>Videos <span class="float-right">65%</span></p>
                            <div class="progress mb-3">
                                <div class="progress-bar" role="progressbar" style="width: 65%">65%</div>
                            </div>
                            <p>Games <span class="float-right">75%</span></p>
                            <div class="progress mb-3">
                                <div class="progress-bar" role="progressbar" style="width: 75%">75%</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.0/dist/js/bootstrap.bundle.min.js"></script>
<script>
    document.getElementById("editButton").addEventListener("click", function() {
        const collapsible = document.getElementById("collapsibleSection");
        collapsible.style.display = collapsible.style.display === "none" ? "block" : "none";
    });
</script>
</body>
</html>