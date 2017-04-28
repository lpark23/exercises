<?php $this->title = "Road Radar" ?>
<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h1><?=htmlspecialchars($this->title)?></h1>
                    <div class="row">
                        <div class="col-lg-7">
                            <p>Write a function that determines whether a driver is within the speed limit.
                                You will receive his speed and the area where he’s driving. Each area
                                has a different limit: on the <b>motorway the limit is 130 km/h</b>, on the
                                <b>interstate the limit is 90</b>, inside a <b>city the limit is 50 </b> and within a
                                <b>residential area the limit is 20 km/h</b> . If the driver is within the limits,
                                your function prints "No infraction".
                                If he’s over the limit however, your function prints the severity
                                of the infraction. For <u>speeds up to 20 km/h over the limit</u> ,he’s <u>speeding</u>
                                for <u>speeds up to 40 over the limit</u>, the infraction is <u>excessive speeding</u>
                                and for <u>anything else, reckless driving</u> .
                            </p>
                            <p>The input comes in two rows. On the first row you will receive the current speed
                                as a string and needs to be parsed as a number. On the second row
                                you will begiven the second element which is  the area.
                            </p>
                            <p>The output should be printed to the console.
                                Note in certain cases there will be no output.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-6">
                            <form role="form" method="post">
                                <div class="form-group">
                                    <label>Speed</label>
                                    <input class="form-control" name="speed" autofocus="autofocus">
                                    <label>Area</label>
                                    <input class="form-control" name="area">
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
                                        <li><span> Ex. Input : Speed = 40 , Area = city ;</span>
                                        </li>
                                        <li><span> Ex. Input : Speed = 20 , Area = residential ;</span>
                                        </li>
                                        <li><span> Ex. Input : Speed = 120 , Area = interstate ;</span>
                                        </li>
                                        <li><span> Ex. Input : Speed = 200 , Area = motorway ;</span>
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
                                                                    <?="Speed ".$k." => Area ".$item." ;"?>
                                                                    <?php
                                                                endforeach;
                                                                ?>
                                                            </td>
                                                            <td>
                                                                <?= $this->result?>
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