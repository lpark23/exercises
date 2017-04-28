<?php $this->title = "Word Mapping" ?>
<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h1><?=htmlspecialchars($this->title)?></h1>
                    <div class="row">
                        <div class="col-lg-7">
                            <p>Write a program that takes a text and prints each word and the number of times
                                it occurs in the text. The search should be case-insensitive.
                                The result should be printed as an HTML table.
                                The table should be with border = “2” attribute.</p>
                        </div>
                    </div>
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-6">
                            <form role="form" method="post">
                                <div class="form-group">
                                    <label>Enter some text</label>
                                    <input class="form-control" type="text" name="inputtext" placeholder=""
                                           autofocus="autofocus">
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
                                        <li><span> Ex. Input : Lorem ipsum dolor sit amet, ..// ipsum dolor!! 
                                                adipisicing elit sit sit sit.</span>
                                        </li>
                                        <li><span> Ex. Input : Fugiat esse debitis optio, tempore. ..\n 
                                                .Fugiat esse officia * '' alias, officia.</span>
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
                                                                <div class="col-lg-12">
                                                                    <div class="table-responsive table-bordered">
                                                                        <table class="table">
                                                                            <thead>
                                                                            <tr>
                                                                                <th>word</th>
                                                                                <th>time</th>
                                                                            </tr>
                                                                            </thead>
                                                                            <tbody>
                                                                            <?php
                                                                            foreach ($this->output as $k => $time):
                                                                                ?>
                                                                                <tr>
                                                                                    <td><?=$k?></td>
                                                                                    <td><?=$time?></td>
                                                                                </tr>
                                                                                <?php
                                                                            endforeach;
                                                                            ?>
                                                                            </tbody
                                                                        </table>
                                                                    </div>
                                                                </div>
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