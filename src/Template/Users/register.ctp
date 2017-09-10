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
    <?= $this->Flash->render() ?>
    <div >
    </div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card mx-4">
                    <div class="card-body p-3">  </div>
                        <?= $this->Form->create() ?>
                        <h1>Register</h1>
                        <p class="text-muted">Create your account</p>

                        <div class="input-group mb-3">
                            <span class="input-group-addon"><i class="icon-user"></i>
                            </span>
                            <?= $this->Form->text('first_name',
                                [
                                    'class' => 'form-control',
                                    'placeholder' => 'First Name'
                                ]) ?>
                        </div>


                        <div class="input-group mb-3">
                            <span class="input-group-addon"><i class="icon-user"></i>
                            </span>
                            <?= $this->Form->text('last_name',
                                [
                                    'class' => 'form-control',
                                    'placeholder' => 'Last Name'
                                ]) ?>
                        </div>

                    <div class="input-group mb-3">
                            <span class="input-group-addon"><i class="icon-user"></i>
                            </span>
                        <?= $this->Form->text('dob',
                            [
                                'class' => 'form-control',
                                'placeholder' => 'Date of Birth'

                            ]) ?>
                    </div>
                    <div class="input-group mb-3">
                            <span class="input-group-addon"><i class="icon-user"></i>
                            </span>
                        <?= $this->Form->text('school',
                            [
                                'class' => 'form-control',
                                'placeholder' => 'School Institution'
                            ]) ?>
                    </div>



                        <div class="input-group mb-3">
                            <span class="input-group-addon">@</span>
                            <?= $this->Form->text('email',
                                [
                                    'class' => 'form-control',
                                    'placeholder' => 'Email'
                                ]) ?>
                        </div>
                    <div class="input-group mb-3">
                        <span class="input-group-addon">@</span>
                        <?= $this->Form->text('house_no',
                            [
                                'class' => 'form-control',
                                'placeholder' => 'House No.'
                            ]) ?>
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-addon">@</span>
                        <?= $this->Form->text('street',
                            [
                                'class' => 'form-control',
                                'placeholder' => 'Street'
                            ]) ?>
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-addon">@</span>
                        <?= $this->Form->text('suburb',
                            [
                                'class' => 'form-control',
                                'placeholder' => 'Suburb'
                            ]) ?>
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-addon">@</span>
                        <?= $this->Form->text('postcode',
                            [
                                'class' => 'form-control',
                                'placeholder' => 'Post Code'
                            ]) ?>
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-addon">@</span>
                        <?= $this->Form->text('state',
                            [
                                'class' => 'form-control',
                                'placeholder' => 'State'
                            ]) ?>
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-addon">@</span>
                        <?= $this->Form->text('country',
                            [
                                'class' => 'form-control',
                                'placeholder' => 'Country'
                            ]) ?>
                    </div>

                        <div class="input-group mb-3">
                            <span class="input-group-addon"><i class="icon-lock"></i>
                            </span>
                            <?= $this->Form->text('password',
                                [
                                    'class' => 'form-control',
                                    'placeholder' => 'Password',
                                    'type'=>'password'
                                ]) ?>
                        </div>

                        <div class="input-group mb-4">
                            <span class="input-group-addon"><i class="icon-lock"></i>
                            </span>
                            <input type="password" class="form-control" placeholder="Repeat password">
                        </div>
                        <?= $this->Form->submit('Create Account',
                            [
                                'class'=>'btn btn-block btn-success'

                            ]) ?>
                        <?= $this->Form->end() ?>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>