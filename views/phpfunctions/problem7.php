<?php $this->title = "Treasure Locator" ?>
<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-7">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h1><?=htmlspecialchars($this->title)?></h1>
                    <div class="row">
                        <div class="col-lg-12">
                            <p>You will be given a series of coordinates, leading to a buried treasure. Use the map
                                to write a program that locates on which island it is. After you find where all
                                the treasure chests are, compose a list and print it. If a chest is not on any
                                of the islands, print “On the bottom of the ocean” to inform your treasure-hunting
                                team to bring diving gear. If the location is on the shore (border) of the island,
                                it’s still considered to lie inside.
                            </p>
                            <p>The input comes as a string of variable number of elements separated by “, “ that must
                                be parsed to numbers. Each pair is the coordinates to a buried treasure chest.
                            </p>
                            <p>The output is a list of the locations of every treasure chest, either the name of
                                an island or “On the bottom of the ocean”, printed on the console.</p>
                        </div>
                    </div>
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-5">
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
                                        <li style="color: darkblue;">
                                            1, 1, 3, 7.4, 10, 9 ;
                                        </li>
                                        <li style="color: darkred">2, 2, 8.2, 3.99 , 4, 9, 12.5, 11.5 ;
                                        </li>
                                        <li style="color: darkmagenta">6, 6, 8, 8 ;
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <?php if (($this->isPost)){ ?>
                            <div class="col-lg-7">
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
                                                                <?="Coordinates <br>".$this->input?>
                                                            </td>
                                                            <td>
                                                                <?php
                                                                if (isset($this->result)){
                                                                    foreach ($this->result as $k => $item):
                                                                        $coor = explode(", ", $k);
                                                                        ?>
                                                                        <?="x = ".$coor[0]." y = ".$coor[1]." Place : ".$item."<br>"?>
                                                                        <?php
                                                                    endforeach;
                                                                }
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
        <!-- /.col-lg-7 -->
        <div class="col-lg-5">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <p>Map/ <b>Islands</b></p>
                </div>
                <div  class="panel-body">
                    <a href="<?= APP_ROOT ?>/content/images/map.png">
                        <img id="map" src="<?= APP_ROOT ?>/content/images/map.png"
                             class="img-rounded" alt="" style="width: 97%; height: 97%">
                    </a>
                </div>
            </div>
            <!-- /.col-lg-5 -->
        </div>
    </div>
    <!-- /.row -->
</div>
<!-- /#page-wrapper -->