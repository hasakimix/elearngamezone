<style>
    *{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    }
.body {
    font-family: Arial, sans-serif;
    background-color: #f4f4f4;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    margin: 0;
}

.container {
    text-align: center;
    background-color: white;
}

.profile {
    margin-bottom: 30px;
}

.profile-pic {
    width: 150px;
    height: 150px;
    border-radius: 50%;
    object-fit: cover;
    border: 2px solid #4a90e2;
}

.username {
    margin-top: 10px;
}

.dashboard {
    background-color: #e8f0fe;
    padding: 20px;
    border-radius: 10px;
}

.progress-container {
    margin: 15px 0;
    display: flex;
    flex-direction: column;
    align-items: center;
}

.progress-circle {
    position: relative;
    width: 80px;
    height: 80px;
    border-radius: 50%;
    background: conic-gradient(#4a90e2 calc(var(--progress) * 1%), #e0e0e0 0);
    display: flex;
    justify-content: center;
    align-items: center;
    margin: auto;
}

.progress-value {
    position: absolute;
    font-weight: bold;
    font-size: 1.2em;
}

.score-label {
    margin-top: 5px;
    font-weight: bold;
}
</style>
<div class="container">
        <div class="profile">
            <img src="profile-pic.jpg" alt="Profile Picture" class="profile-pic">
            <h2 class="username">John Doe</h2>
        </div>
        <div class="dashboard">
            <h3>Scores Dashboard</h3>
            <div class="progress-container">
                <div class="progress-circle" data-progress="95">
                    <span class="progress-value">95%</span>
                </div>
                <div class="score-label">Math</div>
            </div>
            <div class="progress-container">
                <div class="progress-circle" data-progress="89">
                    <span class="progress-value">89%</span>
                </div>
                <div class="score-label">Science</div>
            </div>
            <div class="progress-container">
                <div class="progress-circle" data-progress="92">
                    <span class="progress-value">92%</span>
                </div>
                <div class="score-label">English</div>
            </div>
            <div class="progress-container">
                <div class="progress-circle" data-progress="88">
                    <span class="progress-value">88%</span>
                </div>
                <div class="score-label">History</div>
            </div>
        </div>
    </div>
<script>
    document.querySelectorAll('.progress-circle').forEach(circle => {
    const progress = circle.getAttribute('data-progress');
    circle.style.setProperty('--progress', progress);
});
</script>