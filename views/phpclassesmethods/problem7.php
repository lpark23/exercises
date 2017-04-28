<?php $this->title = "Car Salesman" ?>
<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h1><?=htmlspecialchars($this->title)?></h1>
                    <div class="row">
                        <div class="col-lg-10">
                            <p>Define two classes <b>Car</b> and <b>Engine</b>. A Car has a <b>model, engine,
                                    weight</b> and <b>color</b> .An Engine has <b>model, power, displacement</b> and
                                <b>efficiency</b> . A Car’s <u>weight and color</u> and its Engine’s
                                <u>displacements and efficiency </u> are optional.
                            </p>
                            <p>
                                On the first line you will read a number N which will specify how many lines of engines
                                you will receive, on each of the next N lines you will receive information about an
                                Engine in the following format “<b>Model Power Displacement Efficiency</b>”. After
                                the lines with engines, on the next line you will receive a number <b>M </b> –
                                specifying the number of Cars that will follow, on each of the next M lines information
                                about a Car will follow in the following format “<b>Model Engine Weight Color</b>”,
                                where the engine in the format will be the model of an existing Engine.
                                When creating the object for a Car, you should keep a reference to the real engine in it,
                                instead of just the engine’s model, note that the optional properties
                                might be missing from the formats.
                            </p>
                            <p>Your task is to print each car (in the order you received them) and its information
                                in the format defined bellow, if any of the optional fields has not been
                                given print “n/a” in its place instead:
                                <b>CarModel</b>:
                                <b>EngineModel</b>:
                                Power: <b>EnginePower</b>
                                Displacement: <b>EngineDisplacement</b>
                                Efficiency: <b>EngineEfficiency</b>
                                Weight: <b>CarWeight</b>
                                Color: <b>CarColor</b>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-6">
                            <form role="form" method="post">
                                <div class="form-group">
                                    <label>Informations for:</label>
                                    <textarea class="form-control" name="info" rows="6" autofocus></textarea>
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
                                    <div class="row">
                                        <p class="col-lg-6">
                                            2, <br>
                                            V8-101 220 50, <br>
                                            V4-33 140 28 B, <br>
                                            3, <br>
                                            FordFocus V4-33 1300 Silver, <br>
                                            FordMustang V8-101, <br>
                                            VolkswagenGolf V4-33 Orange
                                        </p>
                                        <p class="col-lg-6">
                                            4, <br>
                                            DSL-10 280 B, <br>
                                            V7-55 200 35, <br>
                                            DSL-13 305 55 A+, <br>
                                            V7-54 190 30 D, <br>
                                            4, <br>
                                            FordMondeo DSL-13 Purple, <br>
                                            VolkswagenPolo V7-54 1200 Yellow, <br>
                                            VolkswagenPassat DSL-10 1375 Blue, <br>
                                            FordFusion DSL-13
                                        </p>
                                    </div>
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
                                                        </tr>
                                                        </thead>
                                                        <tbody>
                                                        <tr>
                                                            <td class="col-lg-6">
                                                                <?php
                                                                foreach ($this->input as $value):
                                                                    ?>
                                                                    <?=$value."<br>"?>
                                                                    <?php
                                                                endforeach;
                                                                ?>
                                                            </td>
                                                            <td class="col-lg-6">
                                                                <?php
                                                                foreach ($this->result as $k => $item):
                                                                    ?>
                                                                    <?= $item . "<br>"?>
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
                        }
                        ?>
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