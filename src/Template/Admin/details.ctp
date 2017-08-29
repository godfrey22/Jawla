<!-- BODY options, add following classes to body to change options

// Header options
1. '.header-fixed'					- Fixed Header

// Sidebar options
1. '.sidebar-fixed'					- Fixed Sidebar
2. '.sidebar-hidden'				- Hidden Sidebar
3. '.sidebar-off-canvas'		- Off Canvas Sidebar
4. '.sidebar-minimized'			- Minimized Sidebar (Only icons)
5. '.sidebar-compact'			  - Compact Sidebar

// Aside options
1. '.aside-menu-fixed'			- Fixed Aside Menu
2. '.aside-menu-hidden'			- Hidden Aside Menu
3. '.aside-menu-off-canvas'	- Off Canvas Aside Menu

// Breadcrumb options
1. '.breadcrumb-fixed'			- Fixed Breadcrumb

// Footer options
1. '.footer-fixed'					- Fixed footer

-->


    <!-- Main content -->



        <div class="container-fluid">
            <div class="animated fadeIn">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <i class="fa fa-align-justify"></i> Company Information
                            </div>
                            <div class="card-body">
                                <table class="table table-bordered table-striped table-sm">
                    <tr>
                        <th>Field</th>
                        <th>Value</th>
                        <th>Action</th>
                    </tr>
                    <tr>
                        <th>Contact Number</th>
                        <th>
                            <?= h($information[0]->value) ?>
                        </th>
                        <th>
                            <?=
                            $this->Html->link(
                                'Edit',
                                ['controller' => 'Information', 'action' => 'edit/1', '_full' => true]
                            ); ?>
                        </th>
                    </tr>
                    <tr>
                        <th>Company Name</th>
                        <th><?= h($information[1]->value) ?></th>
                        <th>            <?=
                            $this->Html->link(
                                'Edit',
                                ['controller' => 'Information', 'action' => 'edit/2', '_full' => true]
                            ); ?></th>
                    </tr>
                    <tr>
                        <th>ABN</th>
                        <th><?= h($information[2]->value) ?></th>
                        <th>            <?=
                            $this->Html->link(
                                'Edit',
                                ['controller' => 'Information', 'action' => 'edit/3', '_full' => true]
                            ); ?></th>
                    </tr>
                    <tr>
                        <th>Address - Road</th>
                        <th><?= h($information[3]->value) ?></th>
                        <th>            <?=
                            $this->Html->link(
                                'Edit',
                                ['controller' => 'Information', 'action' => 'edit/5', '_full' => true]
                            ); ?></th>
                    </tr>
                    <tr>
                        <th>Address - Suburb</th>
                        <th><?= h($information[4]->value) ?></th>
                        <th>            <?=
                            $this->Html->link(
                                'Edit',
                                ['controller' => 'Information', 'action' => 'edit/6', '_full' => true]
                            ); ?></th>
                    </tr>
                    <tr>
                        <th>Background Image</th>
                        <th><?= h($information[5]->value) ?></th>
                        <th>            <?=
                            $this->Html->link(
                                'Edit',
                                ['controller' => 'Information', 'action' => 'edit/7', '_full' => true]
                            ); ?></th>
                    </tr>
                    <tr>
                        <th>Logo Image</th>
                        <th><?= h($information[6]->value) ?></th>
                        <th>            <?=
                            $this->Html->link(
                                'Edit',
                                ['controller' => 'Information', 'action' => 'edit/8', '_full' => true]
                            ); ?></th>
                    </tr>


                </table>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        <!-- /.conainer-fluid -->




