<?php $this->title = "*Raw data" ?>
<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h1><?=htmlspecialchars($this->title)?></h1>
                    <div class="row">
                        <div class="col-lg-10">
                            <p>You are the owner of a courier company and want to make a system for tracking
                                your cars and their cargo. Define a class Car that holds information about model,
                                engine, cargo and a collection of exactly 4 tires. The engine, cargo and tire
                                should be separate classes, create a constructor that receives all information about
                                the Car and creates and initializes its inner components (engine, cargo and tires).
                                On the first line of input you will receive a number N - the amount of cars you have,
                                on each of the next N lines you will receive information about a car in the format
                                “<b>Model EngineSpeed EnginePower CargoWeight CargoType Tire1Pressure Tire1Age
                                    Tire2Pressure Tire2Age Tire3Pressure Tire3Age Tire4Pressure Tire4Age</b>”
                                where the speed, power, weight and tire age are integers, tire pressure is a double.
                            </p>
                            <p>After the N lines you will receive a single line with one of 2 commands
                                “fragile” or “flamable” , if the command is “fragile” print all cars whose
                                Cargo Type is “fragile” with a tire whose pressure is  < 1, if the command is
                                “flamable” print all cars whose Cargo Type is “flamable” and have Engine Power > 250.
                                The cars should be printed in order of appearing in the input.
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
                                        <p class="col-lg-6">2, <br>
                                            ChevroletAstro 200 180 1000 fragile 1.3 1 1.5 2 1.4 2 1.7 4, <br>
                                            Citroen2CV 190 165 1200 fragile 0.9 3 0.85 2 0.95 2 1.1 1, <br>
                                            fragile
                                        </p>
                                        <p class="col-lg-6">4, <br>
                                            ChevroletExpress 215 255 1200 flamable 2.5 1 2.4 2 2.7 1 2.8 1, <br>
                                            ChevroletAstro 210 230 1000 flamable 2 1 1.9 2 1.7 3 2.1 1, <br>
                                            DaciaDokker 230 275 1400 flamable 2.2 1 2.3 1 2.4 1 2 1, <br>
                                            Citroen2CV 190 165 1200 fragile 0.8 3 0.85 2 0.7 5 0.95 2, <br>
                                            flamable
                                        </p>
                                    </div>
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
                        <?php } ?>
                    </div>
                    <!-- /.row  -->
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