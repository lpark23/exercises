<?php $this->title = "Square Root Sum" ?>
<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h1><?=htmlspecialchars($this->title)?></h1>
                    <div class="row">
                        <div class="col-lg-7">
                            <p>Write a PHP script that displays a table in your browser with 2 columns.
                                The first column should contain a number (some even numbers) and the
                                second column should contain the square root of that number,
                                rounded to the second digit after the decimal point.
                                The last row of the table should contain the sum of
                                all values in the Square column. </p>
                        </div>
                    </div>
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-6">
                            <form role="form" method="post">
                                <div class="form-group">
                                    <label>Enter Number:</label>
                                    <input class="form-control" name="start" placeholder="Enter start number"
                                           autofocus="autofocus">
                                    <label>Enter Number:</label>
                                    <input class="form-control" name="end" placeholder="Enter end number">
                                </div>
                                <button type="submit" class="btn btn-default">Submit Button</button>
                                <button type="reset" class="btn btn-default">Reset Button</button>
                            </form>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <p><b>Input </b>
                                        <?php
                                        if ($this->isPost){
                                        ?>
                                    <li> <?=htmlspecialchars($_POST['start'])?></li>
                                    <li> <?=htmlspecialchars($_POST['end'])?></li></p>
                                    <?php
                                    }
                                    ?>
                                    <p><b>Examples:</b></p>
                                </div>
                                <div class="panel-body">
                                    <ul>
                                        <li>start =   2; end = 12;</li>
                                        <li>start =  33; end =  9;</li>
                                        <li>start = -12; end =  3;</li>
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
                                            <div class="col-md-4">
                                                <div class="table-responsive table-bordered">
                                                    <table class="table">
                                                        <thead>
                                                        <tr>
                                                            <th>Number</th>
                                                            <th>Squera</th>
                                                        </tr>
                                                        </thead>
                                                        <tbody>
                                                        <?php
                                                        foreach ($this->result as $k=> $tag) :
                                                            ?>
                                                            <tr>
                                                                <td>
                                                                    <b><?=htmlspecialchars($k)?></b>
                                                                </td>
                                                                <td>
                                                                    <?=htmlspecialchars($tag)?>
                                                                </td>
                                                            </tr>
                                                            <?php
                                                        endforeach;
                                                        ?>
                                                        <tr>
                                                            <td>
                                                                <b>Total:</b>
                                                            </td>
                                                            <td>
                                                                <?=htmlspecialchars($this->totalsum)?>
                                                            </td>
                                                        </tr>
                                                        </tbody>
                                                    </table>
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