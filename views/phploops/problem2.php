<?php $this->title = "Problem 2. Rich People’s Problems" ?>
<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h1><?=htmlspecialchars($this->title)?></h1>
                    <div class="row">
                        <div class="col-lg-7">
                            <p>You are a very rich billionaire with an unhidden passion for cars. You like certain
                                car manufacturers but you don’t really care about anything else, and that’s why you
                                need your own randomizing algorithm that helps you decide how many and what color
                                cars you should buy.
                                Write a PHP script that receives a string of cars from an input HTML form, separated
                                by a comma and space (“, “). It then prints each car, a random color and a random
                                quantity in a table like the one shown below. Use colors by your choice.
                                Use as quantity a random number in range [1...5]. Styling the page is optional.</p>
                        </div>
                    </div>
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-6">
                            <form role="form" method="post">
                                <div class="form-group">
                                    <label>Enter Cars:</label>
                                    <input class="form-control" name="cars" placeholder="" autofocus="autofocus">
                                </div>
                                <button type="submit" class="btn btn-default">Submit Button</button>
                                <button type="reset" class="btn btn-default">Reset Button</button>
                            </form>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <p><b>Input </b>
                                        <?php
                                        if ($this->isPost){
                                        ?>
                                    <li> <?=htmlspecialchars($_POST['cars'])?></li>
                                    <?php
                                    }
                                    ?>
                                    </p>
                                    <p><b>Examples:</b></p>
                                </div>
                                <div class="panel-body">
                                    <p>Lamborghini, Tesla, Ferrari, Infinity</p>
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
                                            <div class="col-md-6">
                                                <div class="table-responsive table-bordered">
                                                    <table class="table">
                                                        <thead>
                                                        <tr>
                                                            <th>Cars</th>
                                                            <th>Color</th>
                                                            <th>Count</th>
                                                        </tr>
                                                        </thead>
                                                        <tbody>
                                                        <?php
                                                        foreach ($this->cars as $car) :
                                                            ?>
                                                            <tr>
                                                                <td>
                                                                    <?= ucwords(strtolower($car))?>
                                                                </td>
                                                                <td>
                                                                    <?= ucwords($this->model->getRandomColor())?>
                                                                </td>
                                                                <td>
                                                                    <?= mt_rand(1,5)?>
                                                                </td>
                                                            </tr>
                                                            <?php
                                                        endforeach;
                                                        ?>
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