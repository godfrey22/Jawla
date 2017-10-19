
<?= $this->Html->css("bootsnip.css") ?>
<?= $this->Html->script("bootsnip.js") ?>



<div class="container">
    <?= $this->Flash->render() ?>
    <div class="stepwizard">
        <div class="stepwizard-row setup-panel">
            <div class="stepwizard-step">
                <a href="#step-1" type="button" class="btn btn-primary btn-circle">1</a>
                <p>Step 1</p>
            </div>
            <div class="stepwizard-step">
                <a href="#step-2" type="button" class="btn btn-default btn-circle" disabled="disabled">2</a>
                <p>Step 2</p>
            </div>
            <div class="stepwizard-step">
                <a href="#step-3" type="button" class="btn btn-default btn-circle" disabled="disabled">3</a>
                <p>Step 3</p>
            </div>
            <div class="stepwizard-step">
                <a href="#step-4" type="button" class="btn btn-default btn-circle" disabled="disabled">4</a>
                <p>Step 4</p>
            </div>
        </div>
    </div>

        <?= $this->Form->create() ?>
        <div class="row setup-content" id="step-1">
            <div class="col-xs-12">
                <div class="col-md-12">
                    <h3> Step 1</h3>
                    <div class="form-group">
                        <label class="control-label">First Name</label>
                        <?= $this->Form->text('first_name',
                            ['required'=>'required',
                                'type'=>'text',
                                'class' => 'form-control',
                                'placeholder' => 'First Name',
                            ]) ?>

                    </div>
                    <div class="form-group">
                        <label class="control-label">Last Name</label>
                        <?= $this->Form->text('last_name',
                            ['required'=>'required',
                                'type'=>'text',
                                'class' => 'form-control',
                                'placeholder' => 'Last Name'
                            ]) ?>
                    </div>
                    <div class="form-group">
                        <?= $this->Form->control('dob', array(
                            'class' => 'form-control',
                            'required'=>'required',
                            'templates'=>['dateWidget' => '<div class="clearfix">{{day}}{{month}}{{year}}</div>',],

                            'type'  => 'date',
                            'label' => 'Date Of Birth',
                            'empty' => TRUE,
                            'minYear' => 1900,
                            'dateFormat' => '',
                            'maxYear' => date('Y'),
                            'minYear' => date('Y') - 100

                        ));
                        ?>
                    </div>

                    <div class="form-group">
                        <label class="control-label">Mobile</label>
                        <?= $this->Form->text('mobile',
                            ['required'=>'required',
                                'class' => 'form-control',
                                'placeholder' => 'Mobile '
                            ]) ?>
                    </div><div class="form-group">
                        <label class="control-label">School</label>

                        <?= $this->Form->text('school',

                            [ 'required'=>'required',
                                'class' => 'form-control',
                                'placeholder' => 'School institution'
                            ]) ?>

                    </div>
                    <div class="form-group">
                        <label class="control-label">Medical</label>

                        <?= $this->Form->text('medical',

                            [ 'required'=>'required',
                                'class' => 'form-control',
                                'placeholder' => 'Medical Issues/Allergies'
                            ]) ?>

                    </div>
                    <div class="form-group">
                    <label class="control-label"></label>

                    <?= $this->Form->control('p_consent',
                        [ 'label' => 'Photo/Video Consent (Y/N)',
                                'required'=>'required',
                            'class' => 'form-control',
                            'empty' => TRUE,
                                'options' => [
                            'Y' => 'Y',
                            'N' => 'N',


                        ]]) ?>
                    </div>


                    <button class="btn btn-primary nextBtn btn-lg pull-right" type="button" >Next</button>
                </div>
            </div>
        </div>
        <div class="row setup-content" id="step-2">
            <div class="col-xs-12">
                <div class="col-md-12">
                    <h3> Step 2</h3>
                    <div class="form-group">
                    <label class="control-label">House No.</label>
                    <?= $this->Form->text('house_no',
                        ['required'=>'required',
                            'class' => 'form-control',
                            'placeholder' => 'House No.'
                        ]) ?>
                        <div class="form-group">
                    <label class="control-label">Street</label>
                    <?= $this->Form->text('street',
                        ['required'=>'required',
                            'class' => 'form-control',
                            'placeholder' => 'Street'
                        ]) ?></div>
                            <div class="form-group">
                    <label class="control-label">Suburb</label>
                    <?= $this->Form->text('suburb',
                        ['required'=>'required',
                            'class' => 'form-control',
                            'placeholder' => 'Suburb'
                        ]) ?></div>
                                <div class="form-group">
                    <label class="control-label">Postcode</label>
                    <?= $this->Form->text('postcode',
                        ['required'=>'required',
                            'class' => 'form-control',
                            'placeholder' => 'Post Code'
                        ]) ?></div>
                                    <div class="form-group">
                    <label class="control-label">State</label>
                    <?= $this->Form->text('state',
                        ['required'=>'required',
                            'class' => 'form-control',
                            'placeholder' => 'State'
                        ]) ?></div>
                                        <div class="form-group">
                    <label class="control-label">Country</label>
                    <?= $this->Form->text('country',
                        ['required'=>'required',
                            'class' => 'form-control',
                            'placeholder' => 'Country'
                        ]) ?></div>


                </div>
                    <button class="btn btn-primary nextBtn btn-lg pull-right" type="button" >Next</button>
                </div>
            </div>
        </div>

        <div class="row setup-content" id="step-3">
            <div class="col-xs-12">
                <div class="col-md-12">
                    <h3> Step 3</h3>
                    <div class="form-group">
                        <label class="control-label">First Name</label>
                        <?= $this->Form->text('g_fname',
                            ['required'=>'required',
                                'class' => 'form-control',
                                'placeholder' => 'First Name'
                            ]) ?>
                    </div>
                        <div class="form-group">
                        <label class="control-label">Last Name</label>
                        <?= $this->Form->text('g_lname',
                            ['required'=>'required',
                                'class' => 'form-control',
                                'placeholder' => 'Last Name'
                            ]) ?>
                    </div>

                    <div class="form-group">
                    <label class="control-label">Mobile no.</label>
                    <?= $this->Form->text('g_mobile',
                        ['required'=>'required',
                            'class' => 'form-control',
                            'placeholder' => 'Mobile No.'
                        ]) ?>

                </div>
                        <div class="form-group">
                 <label class="control-label">Email</label>
                <?= $this->Form->text('g_email',
                    ['required'=>'required',
                        'class' => 'form-control',
                        'placeholder' => 'Email'
                    ]) ?>
            </div>


        </div>
                    </div>
                    <button class="btn btn-primary nextBtn btn-lg pull-right" type="button" >Next</button>
                </div>
            </div>
        </div>
        <div class="row setup-content" id="step-4">
            <div class="col-xs-12">
                <div class="col-md-12">
                    <h3> Step 4</h3>
                </div>
                <div class="form-group">
                    <label class="control-label">Email</label>
                    <?= $this->Form->text('email',
                        [
                            'class' => 'form-control',
                            'placeholder' => 'Email'
                        ]) ?>
                </div>
                    <div class="form-group">
                        <label class="control-label">Password</label>
                        <?= $this->Form->text('password',
                            [
                                'class' => 'form-control',
                                'placeholder' => 'Password',
                                'type'=>'password'
                            ]) ?>
                    </div>

                    <div class="form-group">
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
</html>
