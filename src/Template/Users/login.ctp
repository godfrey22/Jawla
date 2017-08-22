<body class="app flex-row align-items-center">
<style>
    .bg-primary {
        background-color: #d8a72b !important;
    }
    .card.bg-primary {
        border-color: #d8a925;
    }
    .btn-primary:active, .btn-primary.active, .show > .btn-primary.dropdown-toggle {
        background-color: #af8613;
        background-image: none;
        border-color: #af8613;
    }
    .btn-primary {
        color: #fff;
        background-color: #af8613;
        border-color: #af8613;
    }
    .btn-primary:hover {
        color: #fff;
        background-color: #c79915;
        border-color: #c79915;
    }
</style>
<div class="container clearfix">
<div class="container">
    <div class="row justify-content-center">
        <img src="img/jalwa_logo_home.png" alt="Logo">
    </div>
</div>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card-group mb-0">
                <div class="card p-4">
                    <div class="card-body">
                        <h1>Login</h1>
                        <p class="text-muted">Sign In to your account</p>
                        <div class="input-group mb-3">
                            <span class="input-group-addon"><i class="icon-user"></i>
                            </span>
                            <input type="text" class="form-control" placeholder="Username">
                        </div>
                        <div class="input-group mb-4">
                            <span class="input-group-addon"><i class="icon-lock"></i>
                            </span>
                            <input type="password" class="form-control" placeholder="Password">
                        </div>
                        <div class="row">
                            <div class="col-6">
                                <?php
                                echo $this->Html->link("Login",
                                    array('controller' => 'Admin', 'action' => 'home'),
                                    array('class' => 'btn btn-primary px-4'));
                                ?>

                            </div>
                            <div class="col-6 text-right">
                                <button type="button" class="btn btn-link px-0">Forgot password?</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card text-white bg-primary py-5 d-md-down-none" style="width:44%">
                    <div class="card-body text-center">
                        <div>
                            <h2>Sign up</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                incididunt ut labore et dolore magna aliqua.</p>
                            <?php
                                echo $this->Html->link("Register Now!",
                                    array('controller' => 'Users', 'action' => 'register'),
                                    array('class' => 'btn btn-primary active mt-3'));
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</body>