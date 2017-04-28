<?php $this->title = "HTML Tags Counter" ?>
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
                                    <label>Enter HTML tag:</label>
                                    <input class="form-control" name="tags" placeholder="Enter some HTML tag" autofocus="autofocus">
                                </div>
                                <button type="submit" class="btn btn-default">Submit Button</button>
                                <button type="reset" class="btn btn-default">Reset Button</button>
                            </form>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <b>Input Examples:</b>
                                </div>
                                <div class="panel-body">
                                    <p>
                                        <?php foreach ($this->exampletags as $htmltags) : ?>
                                            <?=htmlspecialchars($htmltags)?> ,
                                        <?php  endforeach; ?>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <?php if (($this->isPost)){ ?>
                            <div class="col-lg-6">
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <p><?=htmlspecialchars($this->title)?> / <b>Output</b></p>
                                    </div>
                                    <?php if (isset($_SESSION['messages'])) { ?>
                                        <div class="panel-body">
                                            <p>Error! Look envelope top right </p>
                                        </div>
                                        <?php
                                    }else{
                                        ?>
                                        <div class="panel-body">
                                            <form role="form" method="post" action="">
                                                <input type="hidden" name="hidden" >
                                                <button type="submit" class="btn btn-danger">Reset Session</button>
                                            </form>
                                            <p>
                                                <b>
                                                    <?php
                                                    if (isset($_SESSION['validhtml'])){
                                                        ?>
                                                        <?=$_SESSION['validhtml']?>
                                                        <?php
                                                    }
                                                    ?>
                                                </b>
                                            </p>
                                            <p>Score :
                                                <?php
                                                $count = $_SESSION['counthtmltag'] == 0 ? "n/a" : $_SESSION['counthtmltag'];
                                                ?>
                                                <?=htmlspecialchars($count)?>
                                            </p>
                                        </div>
                                        <?php
                                    } ?>
                                </div>
                                <!-- /.col-lg-6 -->
                            </div>
                            <?php
                        } ?>
                    </div>
                    <!-- /.row (nested) -->
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