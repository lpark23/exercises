<?php $this->title = "Information HTML table" ?>
<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h1><?=htmlspecialchars($this->title)?></h1>
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-6">
                            <form role="form" method="post">
                                <div class="form-group">
                                    <label>First name</label>
                                    <input class="form-control" name="fname" placeholder="Enter your first name" autofocus="autofocus">
                                    <label>Last name</label>
                                    <input class="form-control" name="lname" placeholder="Enter your last name" >
                                    <label>Phone number</label>
                                    <input class="form-control" name="phone" placeholder="Enter your phone number" >
                                    <label>Age</label>
                                    <input class="form-control" name="age" placeholder="Enter your age" >
                                    <label>Address</label>
                                    <input class="form-control" name="address" placeholder="Enter your address">
                                </div>
                                <button type="submit" class="btn btn-default" >Submit Button</button>
                                <button type="reset" class="btn btn-default">Reset Button</button>
                            </form>
                        </div>
                        <?php if (($this->isPost)){ ?>
                        <!-- /.col-lg-6 (nested) -->
                        <div class="col-lg-6">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    Output
                                </div>
                                <?php if (isset($_SESSION['messages'])) { ?>
                                    <div class="panel-body">
                                        <p>Error! Look envelope top right </p>
                                    </div>
                                    <?php
                                }else{
                                ?>

                                <div class="panel-body">
                                    <div class="well">
                                        <div class="table-responsive">
                                            <table class="table table-striped table-bordered table-hover">
                                                <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Name</th>
                                                    <th>Phone</th>
                                                    <th>Years</th>
                                                    <th>Address</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <p> <i>Information HTML table: </i>
                                                    <tr>
                                                        <td><?=htmlspecialchars(1)?></td>
                                                        <td><?=htmlspecialchars($this->fullname)?></td>
                                                        <td><?=htmlspecialchars($this->phone)?></td>
                                                        <td><?=htmlspecialchars($this->age)?></td>
                                                        <td><?=htmlspecialchars($this->address)?></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <!-- /.table-responsive -->
                                    </div>
                                </div>
                            </div>
                            <?php
                            } ?>
                        </div>
                        <!-- /.col-lg-6 -->
                    </div>
                    <?php
                    } ?>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.panel-body -->
        </div>
        <!-- /.panel -->
    </div>
    <!-- /.col-lg-12 -->
</div>
<!-- /.row -->
</div>
<!-- /#page-wrapper -->