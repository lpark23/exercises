<?php $this->title = "Personal Information" ?>
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
                                    <input class="form-control" name="fname"
                                        <?php
                                        if ($this->isPost){
                                            ?>
                                            value="<?=htmlspecialchars($_POST['fname'])?>"
                                            <?php
                                        }
                                        ?>
                                           autofocus="autofocus">
                                </div>
                                <div class="form-group">
                                    <label>Second name</label>
                                    <input class="form-control" name="lname"
                                        <?php
                                        if ($this->isPost){
                                            ?>
                                            value="<?=htmlspecialchars($_POST['lname'])?>"
                                            <?php
                                        }
                                        ?>
                                    >
                                </div>
                                <div class="form-group">
                                    <label>Age</label>
                                    <input class="form-control" name="age"
                                        <?php
                                        if ($this->isPost){
                                            ?>
                                            value="<?=htmlspecialchars($_POST['age'])?>"
                                            <?php
                                        }
                                        ?>
                                    >
                                </div>
                                <button type="submit" class="btn btn-default">Submit</button>
                            </form>
                        </div>
                        <?php if (($this->isPost)){ ?>
                            <div class="col-lg-6">
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        Your Personal Information
                                    </div>
                                    <?php if (isset($_SESSION['messages'])) { ?>
                                        <div class="panel-body">
                                            <p>Error! Look envelope top right </p>
                                        </div>
                                        <?php
                                    }else{
                                        ?>
                                        <div class="panel-body">
                                            <p>My name is <?=$this->fullname?> and I am <?=$this->age?> years old.</p>
                                        </div>
                                        <?php
                                    } ?>
                                </div>
                                <!-- /.col-lg-6 -->
                            </div>
                        <?php } ?>
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