<?php $this->title = "Company Roster" ?>
<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h1><?=htmlspecialchars($this->title)?></h1>
                    <div class="row">
                        <div class="col-lg-7">
                            <p>Define a class Employee that holds the following information:
                                name, salary, position, department, email and age. The name, salary, position and
                                department are mandatory while the rest are optional.
                            </p>
                            <p>Your task is to write a program which takes N lines of employees from the console
                                and calculates the department with the highest average salary and prints
                                for each employee in that department his name, salary, email and age
                                – sorted by salary in descending order. If an employee doesn’t have an email
                                – in place of that field you should print “n/a” instead, if he doesn’t have an age
                                – print “-1” instead. The salary should be printed to two decimal places
                                after the seperator.</p>
                        </div>
                    </div>
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-6">
                            <form role="form" method="post">
                                <div class="form-group">
                                    <label>Informations for:</label>
                                    <textarea class="form-control" name="info" rows="6"></textarea>
                                </div>
                                <button type="submit" class="btn btn-default">Submit Button</button>
                                <button type="reset" class="btn btn-default">Reset Button</button>
                            </form>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <b>Examples:</b>
                                </div>
                                <div class="panel-body">
                                    <span> Ex. Input : </span>
                                    <p>Stanimir 496.37 Temp Coding stancho@yahoo.com,  <br>
                                        Yovcho 610.13 Manager Sales, <br>
                                        Toshko 609.99 Manager Sales toshko@abv.bg 44, <br>
                                        Venci 0.02 Director BeerDrinking beer@beer.br 23, <br>
                                        Andrei 700.00 Director Coding, <br>
                                        Popeye 13.3333 Sailor SpinachGroup popeye@pop.ey,  <br>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <?php if (($this->isPost)){ ?>
                            <!-- /.col-lg-6 (nested) -->
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
                                                <div class="table-responsive table-bordered">
                                                    <table class="table">
                                                        <?php
                                                        $bestPaidDepartment = $this->result;
                                                        $emp = explode("! ",$bestPaidDepartment);
                                                        ?>
                                                        <thead>
                                                        <tr>
                                                            <th>Input</th>
                                                            <th>Output</th>
                                                        </tr>
                                                        </thead>
                                                        <tbody>
                                                        <tr>
                                                            <td>
                                                                <?=$this->input?>
                                                            </td>
                                                            <td><p>
                                                                    <?=$bestPaidDepartment->getName()?>
                                                                </p>
                                                                <p>
                                                                    <?php
                                                                    foreach ($emp as $item):
                                                                        ?>
                                                                        <?=$item."<br>"?>
                                                                        <?php
                                                                    endforeach;
                                                                    ?>
                                                                </p>
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
                        <?php } ?>
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