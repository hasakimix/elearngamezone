<div class="sidenav">
    <div class="login-main-text">
        <h2>Conflict Check<br> Admin Access</h2>
        <p>If you don't have admin access please reach out to your supperiors so they could give you your admin credentials.</p>
    </div>
</div>
<div class="main">
    <div class="col-md-6 col-sm-12">
        <div class="login-form">
            <form action="<?= base_url("admin/authentication/login") ?>" method="POST">
                <div class="form-group">
                    <label>Email</label>
                    <input type="text" class="form-control" name="email" placeholder="Your Email Address..">
                </div>
                <div class="form-group">
                    <label>Password</label>
                    <input type="password" class="form-control" name="password" placeholder="Your Password..">
                </div>
                <button type="submit" class="btn btn-black">Login</button>
            </form>
        </div>
    </div>
</div>