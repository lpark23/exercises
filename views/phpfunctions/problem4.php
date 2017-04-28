<?php $this->title = "Cooking by Numbers" ?>
<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h1><?=htmlspecialchars($this->title)?></h1>
                    <div class="row">
                        <div class="col-lg-7">
                            <p>Write a program that receives a number and a list of five operations. Perform
                                the operations in sequence by starting with the input number and using the
                                result of every operation as starting point for the next. Print the result of
                                every operation in order. The operations can be one of the following:</p>
                            <div class="col-lg-5">
                                <ul>
                                    <li><b>chop</b> – divide the number by two</li>
                                    <li><b>dice</b> – square root of number</li>
                                    <li><b>spice</b> – add 1 to number</li>
                                    <li><b>bake</b> – multiply number by 3</li>
                                    <li><b>fillet</b> – subtract 20% from number</li>
                                </ul>
                            </div>
                            <div class="col-lg-7">
                                <p>The input comes in 2 lines. On the first line you will receive your starting point
                                    and must be parsed to a number. On the second line you will receive 5 commands
                                    separated by “, “ each one will be the name of the operation to be performed.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-6">
                            <form role="form" method="post">
                                <div class="form-group">
                                    <label>Number</label>
                                    <input class="form-control" name="number" autofocus="autofocus">
                                    <label>Operations</label>
                                    <input class="form-control" name="operations">
                                </div>
                                <button type="submit" class="btn btn-default">Submit Button</button>
                                <button type="reset" class="btn btn-default">Reset Button</button>
                            </form>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <b>Examples:</b>
                                </div>
                                <div class="panel-body">
                                    <ul>
                                        <li>
                                            Number = 32 , Operations = chop, chop, chop, chop, chop
                                        </li>
                                        <li>
                                            Number = 9 , Operations = dice, spice, chop, bake, fillet
                                        </li>
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
                                                <div class="table-responsive table-bordered">
                                                    <table class="table">
                                                        <thead>
                                                        <tr>
                                                            <th>Input</th>
                                                            <th>Output</th>
                                                        </tr>
                                                        </thead>
                                                        <tbody>
                                                        <tr>
                                                            <td>
                                                                <?php
                                                                foreach ($this->input as $k => $item):
                                                                    ?>
                                                                    <?="Number ".$k."<br>Operations : ".$item?>
                                                                    <?php
                                                                endforeach;
                                                                ?>
                                                            </td>
                                                            <td>
                                                                <?php
                                                                foreach ($this->result as $k => $item):
                                                                    ?>
                                                                    <?=$item?>
                                                                    <?php
                                                                endforeach;
                                                                ?>
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