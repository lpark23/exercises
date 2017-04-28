<?php $this->title = "Dump Variable" ?>
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
                                    <label>Enter some varialble from type sting, int, double, array or object </label>
                                    <input class="form-control" name="var" placeholder="Enter some variable" autofocus="autofocus">
                                </div>
                                <button type="submit" class="btn btn-default">Submit Button</button>
                                <button type="reset" class="btn btn-default">Reset Button</button>
                            </form>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <b>Input Examples:</b>
                                </div>
                                <div class="panel-body">
                                    <ul>
                                        <li>"hello"</li>
                                        <li>15</li>
                                        <li>1.234</li>
                                        <li>array(1,2,3)</li>
                                        <li>(object)[2,34]</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <?php if (($this->isPost)){ ?>
                            <div class="col-lg-6">
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        Dump Variable
                                    </div>
                                    <?php if (isset($_SESSION['messages'])) { ?>
                                        <div class="panel-body">
                                            <p>Error! Look envelope top right </p>
                                        </div>
                                        <?php
                                    }else{
                                        ?>
                                        <div class="panel-body">
                                            <p> <i>Variable: </i> <b><?=$this->var?></b></p>

                                            <div class="col-lg-6">
                                                <div class="well">
                                                    <p> <i>Message for int: </i> <b><?=$this->inttype?></b></p>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="well">
                                                    <p><i>Message for double: </i> <b><?=$this->checkdouble?></b></p>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="well">
                                                    <p><i>Message for string: </i> <b><?=$this->checkstring?></b></p>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="well">
                                                    <p><i>Message for array: </i> <b><?=$this->checkarray?></b></p>
                                                </div>
                                            </div>
                                            <div class="col-lg-8; text-center">
                                                <div class="well">
                                                    <p><i>Message for object: </i> <b><?=$this->checkobject?></b></p>
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