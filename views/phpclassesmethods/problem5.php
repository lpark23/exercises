<?php $this->title = "*Speed Racing" ?>
<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h1><?=htmlspecialchars($this->title)?></h1>
                    <div class="row">
                        <div class="col-lg-10">
                            <p>Your task is to implement a program that keeps track of cars and their fuel
                                and supports methods for moving the cars. Define a class Car that keeps
                                track of a car’s Model, fuel amount, fuel cost for 1 kilometer and distance
                                traveled. A Car’s Model is unique - there will never be 2 cars with the same model.
                            </p>
                            <p> On the first line of the input you will receive a number N – the number of cars
                                you need to track, on each of the next N lines you will receive information
                                for a car in the following format “<b>Model FuelAmount FuelCostFor1km</b>”,
                                            all cars start at 0 kilometers traveled.
                            </p>
                            <p>After the N lines until the command “End” is received, you will receive a commands
                                in the following format “Drive <b>CarModel amountOfKm</b>>”, implement a method in the
                                Car class to calculate whether or not a car can move that distance, if it
                                can the car’s fuel amount should be reduced by the amount of used fuel and
                                its distance traveled should be increased by the amount of kilometers traveled,
                                otherwise the car should not move (Its fuel amount and distance traveled should
                                stay the same) and you should print on the console “Insufficient fuel for the drive”.
                                After the “End” command is received, print each car and its current fuel amount and
                                distance traveled in the format “<b>Model fuelAmount distanceTraveled</b>>”,
                                where the fuel amount should be printed to two decimal places after the separator.
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
                                        <p class="col-lg-4">2, <br>
                                            AudiA4 20 0.1, <br>
                                            BMW-M2 10 0.1, <br>
                                            Drive BMW-M2 150, <br>
                                            Drive BMW-M2 100, <br>
                                            Drive BMW-M2 50, <br>
                                            Drive AudiA4 100, <br>
                                            Drive AudiA4 200, <br>
                                            Drive AudiA4 300, <br>
                                            End
                                        </p>
                                        <p class="col-lg-4">3, <br>
                                            AudiA4 18 0.34, <br>
                                            BMW-M2 33 0.41, <br>
                                            Ferrari-488Spider 50 0.47, <br>
                                            Drive Ferrari-488Spider 97, <br>
                                            Drive Ferrari-488Spider 35, <br>
                                            Drive AudiA4 85, <br>
                                            Drive AudiA4 50, <br>
                                            End
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
                                                            <td class="col-lg-4">
                                                                <?php
                                                                foreach ($this->result as $item):
                                                                    foreach ($item as $value):
                                                                        ?>
                                                                        <?= $value . "<br>"?>
                                                                        <?php
                                                                    endforeach;
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