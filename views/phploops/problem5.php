<?php $this->title = "Problem 5. Sum of Digits" ?>
<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h1><?=htmlspecialchars($this->title)?></h1>
                    <div class="row">
                        <div class="col-lg-7">
                            <p>Write a PHP script which receives a comma-separated list of integers from
                                an input form and creates a two-column table. The first column should contain
                                each of the values from the input. The second column should contain the sum of
                                the digits of each value. If the value is not an integer number,
                                print "I cannot sum that".</p>
                        </div>
                    </div>
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-6">
                            <form role="form" method="post">
                                <div class="form-group">
                                    <label>Enter some numbers:</label>
                                    <?php
                                    $numbers = '';
                                    $numbers  = isset($this->numbers ) ? $this->numbers : $numbers;
                                    ?>
                                    <input class="form-control" name="numbers" placeholder="<?=$numbers?>" autofocus="autofocus" >
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
                                        <li> <?=htmlspecialchars($_POST['numbers'])?></li>
                                        <?php
                                    }
                                    ?>
                                    <b>Examples:</b>
                                </div>
                                <div class="panel-body">
                                    <ul>
                                        <li>1111, 2222, 333, asdf</li>
                                        <li>sdsa, 454, sds, ew1122, 123456</li>
                                        <li>13, a55, 555, 0</li>
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
                                                        <?php
                                                        ?>
                                                        <tr>
                                                            <th>Numbers</th>
                                                            <th>Sum</th>
                                                        </tr>
                                                        </thead>
                                                        <tbody>
                                                        <?php
                                                        foreach ($this->result as $k=> $number) :
                                                            ?>
                                                            <tr>
                                                                <td>
                                                                    <?= $k?>
                                                                </td>
                                                                <td>
                                                                    <?= $number?>
                                                                </td>
                                                            </tr>
                                                            <?php
                                                        endforeach;
                                                        ?>
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