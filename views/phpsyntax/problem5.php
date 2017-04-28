<?php $this->title = "Lazy Sundays" ?>
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
                                <p>Write a PHP script which prints
                                    the dates of all Sundays between two dates. </p>
                                <form role="form" method="post">
                                    <div class="input-daterange input-group" id="datepicker">
                                        <input type="date" class="input-sm form-control" name="start" />
                                        <span class="input-group-addon">to</span>
                                        <input type="date" class="input-sm form-control" name="end" />
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
                                                                <th>Day</th>
                                                                <th>Mounth</th>
                                                                <th>Year</th>
                                                            </tr>
                                                            </thead>
                                                            <tbody>
                                                            <p> <i>Lazy Sundays: </i>
                                                                <?php
                                                                if (isset($this->curdate)){
                                                                    $i=1;
                                                                    foreach ($this->curdate as $date){
                                                                        if (date('w',$date) == 0){ ?>
                                                                            <tr>
                                                                                <td><?=htmlspecialchars($i++)?></td>
                                                                                <td><?=htmlspecialchars(date('j l',$date))?></td>
                                                                                <td><?=htmlspecialchars(date('M',$date))?></td>
                                                                                <td><?=htmlspecialchars(date('Y',$date))?></td>
                                                                            </tr>
                                                                            <?php
                                                                        }
                                                                    }
                                                                }
                                                                ?>
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