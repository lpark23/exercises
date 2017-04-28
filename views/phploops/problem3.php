<?php $this->title = "Problem 3. Show Annual Expenses" ?>
<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h1><?=htmlspecialchars($this->title)?></h1>
                    <div class="row">
                        <div class="col-lg-7">
                            <p>Write a PHP script that receives <b>n</b> years from an input
                                HTML form and creates a table (like the one shown below) with random expenses
                                by months and the corresponding years (n years back). For example, if N is 10,
                                create a table that shows the expenses for each month for the last 10 years.
                                Add a "Total" column at the end, showing the total expenses for the same year.
                                The random expenses in the table should be in the range [0…999].</p>
                        </div>
                    </div>
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-6">
                            <form role="form" method="post">
                                <div class="form-group">
                                    <label>Enter count of years:</label>
                                    <input class="form-control" name="years" placeholder="" autofocus="autofocus">
                                </div>
                                <button type="submit" class="btn btn-default">Submit Button</button>
                                <button type="reset" class="btn btn-default">Reset Button</button>
                            </form>
                        </div>
                        <div class="col-lg-6">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <p><b>Input </b></p>
                                    <?php
                                    if ($this->isPost){
                                        ?>
                                        <li> <?=htmlspecialchars($_POST['years'])?></li>
                                        <?php
                                    }
                                    ?>
                                    <p><b>Examples:</b></p>
                                </div>
                                <div class="panel-body">
                                    <ul>
                                        <li>4 ;</li>
                                        <li>6 ;</li>
                                        <li>12 ;</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <?php if (($this->isPost)){ ?>
                            <div class="col-lg-12">
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
                                                <div class="table-responsive table-bordered">
                                                    <table class="table">
                                                        <thead>
                                                        <tr>
                                                            <th>Year</th>
                                                            <th>January</th>
                                                            <th>February</th>
                                                            <th>March</th>
                                                            <th>April</th>
                                                            <th>May</th>
                                                            <th>June</th>
                                                            <th>July</th>
                                                            <th>August</th>
                                                            <th>September</th>
                                                            <th>October</th>
                                                            <th>November</th>
                                                            <th>December</th>
                                                            <th>Total:</th>
                                                        </tr>
                                                        </thead>
                                                        <tbody>
                                                        <?php
                                                        foreach ($this->result as $currentYear => $year ) :
                                                            ?>
                                                            <tr>
                                                                <td>
                                                                    <?= $currentYear?>
                                                                </td>
                                                                <?php
                                                                foreach ($year as $currentMonth => $month) {
                                                                    foreach ($month as $currentAnnual => $annual){
                                                                        ?>
                                                                        <td>
                                                                            <?= $annual  ?>
                                                                        </td>
                                                                        <?php
                                                                    }
                                                                    ?>
                                                                    <td><?=$this->total[$currentYear]?></td>
                                                                    <?php
                                                                }
                                                                ?>
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