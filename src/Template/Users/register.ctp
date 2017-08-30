<body class="app flex-row align-items-center">
<style>
    .btn-success {
        color: #fff;
        background-color: #af8613;
        border-color: #af8613;
    }

    .btn-success:hover {
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
            <div class="col-md-6">
                <div class="card mx-4">
                    <div class="card-body p-4">
                        <?= $this->Form->create() ?>
                        <h1>Register</h1>
                        <p class="text-muted">Create your account</p>
                        <div class="input-group mb-3">
                            <span class="input-group-addon"><i class="icon-user"></i>
                            </span>
                            <input type="text" class="form-control" placeholder="Username">
                        </div>

                        <div class="input-group mb-3">
                            <span class="input-group-addon">@</span>
                            <?= $this->Form->control('email') ?>
                        </div>

                        <div class="input-group mb-3">
                            <span class="input-group-addon"><i class="icon-lock"></i>
                            </span>
                            <?= $this->Form->control('password') ?>
                        </div>

                        <div class="input-group mb-4">
                            <span class="input-group-addon"><i class="icon-lock"></i>
                            </span>
                            <input type="password" class="form-control" placeholder="Repeat password">
                        </div>
                        <?= $this->Form->submit('Create Account') ?>
                        <?= $this->Form->end() ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>