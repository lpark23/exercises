<?php $this->title = "Car" ?>
<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h1><?=htmlspecialchars($this->title)?></h1>
                    <div class="row">
                        <div class="col-lg-10">
                            <p>Create a class Car. Every car has a speed, fuel and fuel economy
                                (given in the same order on the first line). They should be stored in the class.
                                Your task is to create a program which executes one of the commands:
                            </p>
                            <ul>
                                <li>
                                    <b>Travel distance</b> – makes the car travel the specified distance
                                    If you are given a distance which you don't have enough fuel to travel,
                                    just go as far as you can.
                                </li>
                                <li>
                                    Refuel <b>liters</b> – refuels the car with the specified fuel
                                </li>
                                <li>
                                    Distance – gets the total travel distance
                                </li>
                                <li>
                                    Time – get the total travel time
                                </li>
                                <li>
                                    Fuel – gets the remaining fuel
                                </li>
                                <li>
                                    END – stops the program
                                </li>
                            </ul>
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
                                        <p class="col-lg-4">
                                            100 20 20, <br>
                                            Travel 100, <br>
                                            Distance, <br>
                                            Time, <br>
                                            Fuel, <br>
                                            END
                                        </p>
                                        <p class="col-lg-4">
                                            200 45 22, <br>
                                            Travel 136, <br>
                                            Distance, <br>
                                            Time, <br>
                                            Fuel, <br>
                                            END
                                        </p>
                                        <p class="col-lg-4">
                                            120 80 13, <br>
                                            Travel 240, <br>
                                            Distance, <br>
                                            Time, <br>
                                            Fuel, <br>
                                            END
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
                                                                <?=$this->result?>
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