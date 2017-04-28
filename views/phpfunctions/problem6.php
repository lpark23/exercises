<?php $this->title = "Validity Checker" ?>
<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h1><?=htmlspecialchars($this->title)?></h1>
                    <div class="row">
                        <div class="col-lg-10">
                            <p>Write a program that receives two points in the format x1, y1, x2, y2 and checks
                                if the distances between each point and the start of the cartesian
                                coordinate system (0, 0) and between the points themselves is valid. A distance
                                between two points is considered valid, if it is an integer value. In case a
                                distance is valid write "{x1, y1} to {x2, y2} is valid", in case the distance
                                is invalid write "{x1, y1} to {x2, y2} is invalid".
                            </p>
                            <p>The order of comparisons should always be first {x1, y1} to {0, 0},
                                then {x2, y2} to {0, 0} and finally {x1, y1} to {x2, y2}.
                            </p>
                            <p>The input consists of one string in which the coordinates are separated by “, “</p>
                            <p>For each comparison print on the output either "{x1, y1} to {x2, y2} is valid" if the
                                distance between them is valid, or "{x1, y1} to {x2, y2} is invalid"- if it’s invalid.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-6">
                            <form role="form" method="post">
                                <div class="form-group">
                                    <label>Coordinates</label>
                                    <input class="form-control" name="coordinates" autofocus="autofocus">
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
                                            X1, Y1, X2, Y2 = 3, 0, 0, 4 ;
                                        </li>
                                        <li>X1, Y1, X2, Y2 = 2, 1, 1, 1 ;
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
                                                                <?="Coordinates ".$this->input?>
                                                            </td>
                                                            <td>
                                                                <?php
                                                                foreach ($this->result as $k => $item):
                                                                    $coor = explode(", ",$k);
                                                                    ?>
                                                                    <?="{"."$coor[0]".", "."$coor[1]"."} to {"."$coor[2]".", "."$coor[3]"."} "?>
                                                                    <?=" => ".$item."<br>"?>
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