<?php $this->title = "Non-Repeating Digits" ?>
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
                            <div class="well">
                                <p>Write a PHP script that declares an integer variable N,
                                    and then finds all 3-digit numbers that are less or equal than N (<= N)
                                    and consist of unique digits. Print "no" if no such numbers exist. </p>
                            </div>
                            <form role="form" method="post">
                                <div class="form-group">
                                    <label>Enter N </label>
                                    <input class="form-control" name="number" placeholder="Enter some number" autofocus="autofocus">
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
                                        <li><?=rand(0,100)?></li>
                                        <li><?=rand(100,400)?></li>
                                        <li><?=rand(360,600)?></li>
                                        <li><?=rand(550,800)?></li>
                                        <li><?=rand(750,1000)?></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <?php if (($this->isPost)){ ?>
                            <div class="col-lg-6">
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <p>Non-Repeating Digits/<b> Output</b></p>
                                    </div>
                                    <?php if (isset($_SESSION['messages'])) { ?>
                                        <div class="panel-body">
                                            <p>Error! Look envelope top right </p>
                                        </div>
                                        <?php
                                    }else{
                                        ?>
                                        <div class="panel-body">
                                            <p> <i>Variable: </i> <b><?=$this->number?></b></p>
                                            <div class="col-lg-12">
                                                <div class="well">
                                                    <p> <i>All numbers: </i> <b><?=$this->result?></b></p>
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