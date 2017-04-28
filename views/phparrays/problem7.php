<?php $this->title = "Equal Sums" ?>
<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h1><?=htmlspecialchars($this->title)?></h1>
                    <div class="row">
                        <div class="col-lg-7">
                            <p>Write a program that determines if there exists an element in the array
                                such that the sum of the elements on its left is equal to the sum of
                                the elements on its right. If there are no elements to the left / right,
                                their sum is considered to be 0. Print the index that satisfies
                                the required condition or “no” if there is no such index.</p>
                        </div>
                    </div>
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-6">
                            <form role="form" method="post">
                                <div class="form-group">
                                    <label> Arrays: </label>
                                    <input class="form-control" name="inputarray" autofocus="autofocus">
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
                                            <span> Ex. Input : 1 2 2 3</span>
                                        </li>
                                        <li>
                                            <span> Ex. Input : 1 2</span>
                                        </li>
                                        <li>
                                            <span> Ex. Input : 1</span>
                                        </li>
                                        <li>
                                            <span> Ex. Input : 1 2 3</span>
                                        </li>
                                        <li>
                                            <span> Ex. Input : 10 5 5 99 3 4 2 5 1 1 4 </span>
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
                                                            <th>Comments</th>
                                                        </tr>
                                                        </thead>
                                                        <tbody>
                                                        <?php
                                                        if ($this->input) {
                                                            ?>
                                                            <tr>
                                                                <td>
                                                                    <?=$this->input?>
                                                                </td>
                                                                <td>
                                                                    <?php
                                                                    if ($this->output <= 0){
                                                                        ?>
                                                                        <p>no</p>
                                                                        <?php
                                                                    }else {
                                                                        ?>
                                                                        <?=$this->output?>
                                                                        <?php
                                                                    }
                                                                    ?>
                                                                </td>
                                                                <td>
                                                                    <?=$this->comments?>
                                                                </td>
                                                            </tr>
                                                            <?php
                                                        }
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
                        <?php } ?>
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