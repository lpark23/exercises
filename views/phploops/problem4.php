<?php $this->title = "Problem 4. *Find Primes in Range" ?>
<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h1><?=htmlspecialchars($this->title)?></h1>
                    <div class="row">
                        <div class="col-lg-7">
                            <p>Write a PHP script that receives two numbers – start and end – from
                                an input field and displays all numbers in that
                                range as a comma-separated list. Prime numbers should be bolded.</p>
                        </div>
                    </div>
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-6">
                            <form role="form" method="post">
                                <div class="form-group">
                                    <label>Enter starting index:</label>
                                    <input class="form-control" name="start" placeholder="<?=$this->start?>" autofocus="autofocus" >
                                    <label>Enter ending index:</label>
                                    <input class="form-control" name="end" placeholder="<?=$this->end?>">
                                </div>
                                <button type="submit" class="btn btn-default">Submit Button</button>
                                <button type="reset" class="btn btn-default">Reset Button</button>
                            </form>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <p><b>Input </b></p>
                                    <?php
                                    if ($this->isPost){
                                        ?>
                                        <li> <?=htmlspecialchars($_POST['start'])?></li>
                                        <li> <?=htmlspecialchars($_POST['end'])?></li>
                                        <?php
                                    }
                                    ?>
                                    <b>Examples:</b>
                                </div>
                                <div class="panel-body">
                                    <ul>
                                        <li>start =   2; end = 44;</li>
                                        <li>start =  33; end =  77;</li>
                                        <li>start = 100; end =  200;</li>
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
                                            <div class="col-md-12">
                                                <div class="well">
                                                    <p>
                                                        <?php
                                                        foreach ($this->result as $k => $res) :
                                                            ?>
                                                            <?= $res;?>
                                                            <?php
                                                        endforeach;
                                                        ?>
                                                    </p>
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