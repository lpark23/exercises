<?php $this->title = "Largest Common End" ?>
<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h1><?=htmlspecialchars($this->title)?></h1>
                    <div class="row">
                        <div class="col-lg-7">
                            <p>Read two arrays of words and find the length
                                of the largest common end (left or right). </p>
                        </div>
                    </div>
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-6">
                            <form role="form" method="post">
                                <div class="form-group">
                                    <label>Enter Words:</label>
                                    <input class="form-control" name="first" placeholder="Enter some words"
                                           autofocus="autofocus">
                                    <label>Enter Words:</label>
                                    <input class="form-control" name="second" placeholder="Enter some words">
                                </div>
                                <button type="submit" class="btn btn-default">Submit Button</button>
                                <button type="reset" class="btn btn-default">Reset Button</button>
                            </form>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <p><b>Input </b></p>
                                    <b>Examples:</b>
                                </div>
                                <div class="panel-body">
                                    <ul>
                                        <li><span>Lorem ipsum dolor sit amet, consectetur  adipisicing  elit</span>
                                            <p>Lorem ipsum dolor sit Libero laboriosam perspiciatis </p>
                                        </li>
                                        <li><span>Lorem ipsum dolor sit amet, consectetur  adipisicing  elit</span>
                                            <p>laboriosam perspiciatis consectetur  adipisicing  elit</p>
                                        </li>
                                        <li><span>Lorem ipsum dolor sit amet, consectetur  adipisicing  elit</span>
                                            <p>Beatae, officia pariatur? Est cum veniam excepturi.</p>
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
                                                            <th>Input words</th>
                                                            <th>Count</th>
                                                            <th>Comments</th>
                                                        </tr>
                                                        </thead>
                                                        <tbody>
                                                        <tr>
                                                            <td>
                                                                <ul>
                                                                    <li>
                                                                        <?=$this->firstwords?>
                                                                    </li>
                                                                    <li>
                                                                        <?= $this->secondwords ?>
                                                                    </li>
                                                                </ul>
                                                            </td>
                                                            <td><b>
                                                                    <?=$this->count?>
                                                                </b>
                                                            </td>
                                                            <td>
                                                                <?php
                                                                if ($this->count == 0){
                                                                    ?>
                                                                    No common words at the left and right
                                                                    <?php
                                                                }
                                                                else {
                                                                    ?>
                                                                    <?=$this->comments?>
                                                                    <?php
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
                        <?php } ?>
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
</div>
