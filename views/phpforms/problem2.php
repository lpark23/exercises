<?php $this->title = "Most Frequent Tag" ?>
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
                                    <label>Enter tags:</label>
                                    <input class="form-control" name="tags" placeholder="Enter some tags separated by a comma and a space" autofocus="autofocus">
                                </div>
                                <button type="submit" class="btn btn-default">Submit Button</button>
                                <button type="reset" class="btn btn-default">Reset Button</button>
                            </form>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <p><b>Input </b> <i>
                                            <?php
                                            if ($this->isPost){
                                                ?>
                                                <?=htmlspecialchars($_POST['tags'])?>
                                                <?php
                                            }
                                            ?>
                                        </i></p>
                                    <p><b>Examples:</b></p>
                                </div>
                                <div class="panel-body">
                                    <ul>
                                        <li>Lorem, ipsum, dolor, sit, sit, sit, amet, lorem, ipsum, consectetur, adipisicing, elit</li>
                                        <li>Lorem, ipsum, ipsum, dolor, sit, sit, sit, amet, lorem, ipsum, consectetur, adipisicing, elit</li>
                                        <li>dolor, ipsum, ipsum, dolor, dolor, sit, sit, sit, amet, lorem, ipsum, adipisicing, elit</li>
                                    </ul>
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
                                            <?php
                                            $i = 0;
                                            foreach ($this->arraytags as $k => $tag) :
                                                ?>
                                                <p><b><?=htmlspecialchars($i+=1 )?> </b> :<?=htmlspecialchars($k)?> <i><?=htmlspecialchars($tag)?> times</i> </p>
                                                <?php
                                            endforeach;
                                            ?>
                                            <p><b>Most Frequent Tag is :</b> <i>
                                                    <?php
                                                    foreach ($this->maxfrequent as $freq) :
                                                        ?>
                                                        <?=htmlspecialchars($freq)?>
                                                        <?php
                                                    endforeach;
                                                    ?>
                                                </i></p>
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