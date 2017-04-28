<?php $this->title = "Define a class Person" ?>
<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h1><?=htmlspecialchars($this->title)?></h1>
                    <div class="row">
                        <div class="col-lg-7">
                            <p>Define a class Person with fields for name and age.</p>
                            <p>Add constructor to the Person class from the last task:
                                1. It should accept a string for the name and an integer for
                                the age and should produce a person with the given name and age.</p>
                            <p>The input comes in two rows. On the first row you will receive the name.
                                On the second row you will be given the age.
                                The output should be printed to the console as single line - name and age
                                separated with one space
                            </p>
                        </div>
                    </div>
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-6">
                            <form role="form" method="post">
                                <div class="form-group">
                                    <label>Name
                                        <input class="form-control" name="fname" placeholder=""
                                               autofocus="autofocus">
                                    </label>
                                    <label>Age
                                        <input class="form-control" name="age">
                                    </label>
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
                                    <ul>
                                        <li>Name : Georgi
                                        </li>
                                        <li>Age : 27
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
                                                        </tr>
                                                        </thead>
                                                        <tbody>
                                                        <tr>
                                                            <td>
                                                                <?=$this->input?>

                                                            </td>
                                                            <td>
                                                                <?php
                                                                foreach ($this->result as $person):
                                                                    ?>
                                                                    <?=$person?>
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
                                    }
                                    ?>
                                </div>
                                <!-- /.col-lg-6 -->
                            </div>
                        <?php } ?>
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
</div>
