<?php $this->title = "Calculate Interest" ?>
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
                                    <label>Enter Amount:</label>
                                    <input class="form-control" name="amount" placeholder="Enter some amount" autofocus="autofocus">
                                    <div class="checkbox">
                                        <label class="checkbox-inline">
                                            <input type="checkbox" name="currency" value="USD">USD
                                        </label>
                                        <label class="checkbox-inline">
                                            <input type="checkbox" name="currency" value="EUR">EUR
                                        </label>
                                        <label class="checkbox-inline">
                                            <input type="checkbox" name="currency" value="BGN">BGN
                                        </label>
                                    </div>
                                    <label>Compound Interest Amount:</label>
                                    <input class="form-control" name="compound" placeholder="One Year, without percent %" >
                                    <div class="form-group col-md-3" >
                                        <label>Period of time
                                            <select class="form-control" name="period">
                                                <?php foreach ($this->periodavbl as $k => $month) : ?>
                                                    <option value="<?=$k ?>"><?=htmlspecialchars($month) ?></option>
                                                    <?php
                                                endforeach;?>
                                            </select>
                                        </label>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-default">Submit Button</button>
                                <button type="reset" class="btn btn-default">Reset Button</button>
                            </form>

                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <b>Input Examples:</b>
                                </div>
                                <div class="panel-body">
                                    <ul><li>Amount: 2500</li>
                                        <li>Compound Interest Amount: 12</li>
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
                                            <p><?=htmlspecialchars($this->currency)?> <?=htmlspecialchars($this->result)?> </p>
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