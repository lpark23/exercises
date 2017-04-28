<?php $this->title = "Inside Volume" ?>
<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h1><?=htmlspecialchars($this->title)?></h1>
                    <div class="row">
                        <div class="col-lg-7">
                            <p>Write a function that determines whether a point is inside
                                the volume, defined by the box, shown on the right.</p>
                            <p>The input comes as a string representing the coordinates that
                                needs to be split and parsed as numbers. Each set of 3 elements
                                are the x, y and z coordinates of a point.</p>
                            <p>The output should be printed to the console on a new line for
                                each point. Print inside if the point lies
                                inside the volume and outisde otherwise.</p>
                        </div>
                    </div>
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-6">
                            <form role="form" method="post">
                                <div class="form-group">
                                    <label>X , Y , Z</label>
                                    <input class="form-control" type="text" name="coordinates" placeholder=""
                                           autofocus="autofocus">
                                </div>
                                <button type="submit" class="btn btn-default">Submit Button</button>
                                <button type="reset" class="btn btn-default">Reset Button</button>
                            </form>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <p><b>Box Coordinates:</b></p>
                                    <ul>
                                        <li>X1 = 10, X2 = 50; </li>
                                        <li>Y1 = 20, Y2 = 80;</li>
                                        <li>Z1 = 15, Z2 = 50;</li>
                                    </ul>
                                    <b>Examples:</b>
                                </div>
                                <div class="panel-body">
                                    <ul><li><span> Ex. Input : 8, 20, 22</span>
                                        </li>
                                        <li><span> Ex. Input : 13.1, 50, 31.5,50, 80, 50,-5, 18, 43</span>
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
                                                                    <?=$item.", "?>
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