<?php $this->title = "Rotate and Sum" ?>



<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h1><?=htmlspecialchars($this->title)?></h1>
                    <div class="row">
                        <div class="col-lg-7">
                            <p>To “rotate an array on the right” means to move its last element
                                first: {1, 2, 3}  {3, 1, 2}.Write a program to read an array of n integers
                                and an integer k, rotate the array right k times and sum the
                                obtained arrays after each rotation as shown below.</p>
                        </div>
                    </div>
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-6">
                            <form role="form" method="post">
                                <div class="form-group">
                                    <label>Array:</label>
                                    <input class="form-control" name="inputarray" placeholder="Enter n integers"
                                           autofocus="autofocus">
                                    <label>K times:</label>
                                    <input class="form-control" name="k" placeholder="Enter rotating times">
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
                                        <li><span> Numbers : 3 2 4 -5</span>
                                            <p>K Times : 2</p>
                                        </li>
                                        <li><span> Numbers : 1 -4 7 1</span>
                                            <p>K Times : 1</p>
                                        </li>
                                        <li><span> Numbers : 3 -2 4 1</span>
                                            <p>K Times : 4</p>
                                        </li>
                                    </ul>
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
                                                        <thead>
                                                        <tr>
                                                            <th>Input</th>
                                                            <th>Output</th>
                                                            <th>Comments</th>
                                                        </tr>
                                                        </thead>
                                                        <tbody>
                                                        <tr>
                                                            <td>
                                                                <ul>
                                                                    <li>
                                                                        <?=$this->inputarray?>
                                                                    </li>
                                                                    <li>
                                                                        <?= $this->k?>
                                                                    </li>
                                                                </ul>
                                                            </td>
                                                            <td><b>
                                                                    <?=$this->sum?>
                                                                </b>
                                                            </td>
                                                            <td>
                                                                <?php
                                                                foreach ($this->results as $k => $result) :
                                                                    $line = implode(" ",$result)."<br>";
                                                                    ?>
                                                                    <?= "rotated".++$k."[] = "?>
                                                                    <?= $line?>
                                                                    <?php
                                                                endforeach;
                                                                ?>
                                                                <?="sum[]= ".$this->sum?>
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