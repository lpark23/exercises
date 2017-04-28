<?php $this->title = "Time Until New Year" ?>
<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h1><?=htmlspecialchars($this->title)?></h1>
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="well">
                                <p>Write a PHP script. Use the built-in function getdate() to
                                    get the current date and time. Print how many hours, minutes and seconds are
                                    left until New Year and how many days, hours, minutes and seconds are left
                                    in a counter format . Look at examples below to get a better idea.The examples
                                    show the current date and time in "d-m-Y G:i:s" format. </p>
                                <form role="form" method="post">
                                    <div class="input-group" >
                                        <input type="date" class="input-sm form-control" name="startdate" />
                                        <input type="time" class="input-sm form-control" name="starttime" />
                                    </div>
                                    <button type="submit" class="btn btn-default">Submit Button</button>
                                    <button type="reset" class="btn btn-default">Reset Button</button>
                                </form>
                            </div>
                        </div>
                        <?php if (($this->isPost)){ ?>
                            <div class="col-lg-6">
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <p><?=htmlspecialchars($this->title)?>/<b> Output</b></p>
                                    </div>
                                    <?php if (isset($_SESSION['messages'])) { ?>
                                        <div class="panel-body">
                                            <p>Error! Look envelope top right </p>
                                        </div>
                                        <?php
                                    }else{
                                        ?>
                                        <div class="panel-body">
                                            <div class="col-lg-12">
                                                <div class="well">
                                                    <div class="table-responsive">
                                                        <table class="table table-striped table-bordered table-hover">
                                                            <thead>
                                                            <tr>
                                                                <th>#</th>
                                                                <th>Hours</th>
                                                                <th>Minutes</th>
                                                                <th>Seconds</th>
                                                                <th>Mixed</th>
                                                            </tr>
                                                            </thead>
                                                            <tbody>
                                                            <p><i>Time Until New Year: </i>
                                                            <p><i>Start at: <b><?=htmlspecialchars($this->startat)?></b></i>
                                                                <tr>
                                                                    <td><?=htmlspecialchars(1)?></td>
                                                                    <td><?=htmlspecialchars($this->hours)?></td>
                                                                    <td><?=htmlspecialchars($this->minutes)?></td>
                                                                    <td><?=htmlspecialchars($this->seconds)?></td>
                                                                    <td><?=htmlspecialchars($this->mixed)?></td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                    <!-- /.table-responsive -->
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