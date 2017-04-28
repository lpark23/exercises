<?php $this->title = "Form Data" ?>
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
                                <div class="form-group" >
                                    <label>First name</label>
                                    <input class="form-control" name="fname" placeholder="Enter your first name" autofocus="autofocus">
                                    <label>Second name</label>
                                    <input class="form-control" name="lname" placeholder="Enter your second name">
                                    <label>Age</label>
                                    <input class="form-control" name="age" placeholder="Enter your age">
                                    <label>Gender</label>
                                    <label class="radio-inline">
                                        <input type="radio" name="gender" id="optionsRadiosInline1" value="1" checked>Male
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="gender" id="optionsRadiosInline2" value="2">Female
                                    </label>
                                </div>
                                <button type="submit" class="btn btn-default">Submit Button</button>
                                <button type="reset" class="btn btn-default">Reset Button</button>
                            </form>
                        </div>
                        <?php if (($this->isPost)){ ?>
                            <div class="col-lg-6">
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        Form Data
                                    </div>
                                    <?php if (isset($_SESSION['messages'])) { ?>
                                        <div class="panel-body">
                                            <p>Error! Look envelope top right </p>
                                        </div>
                                        <?php
                                    }else{
                                        ?>
                                        <div class="panel-body">
                                            <div class="col-lg-10">
                                                <div class="well">
                                                    <p>My name is <?=$this->fullname?> and I am <?=$this->age?> years old.I am <?=$this->gender?>.</p>
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