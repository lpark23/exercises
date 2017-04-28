<?php $this->title = "Create Calendar" ?>
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
                                <p>Creates a calendar in HTML for a given year. </p>
                                <form role="form" method="post">
                                    <div class="input-group" >
                                        <input type="text" class="input-sm form-control" name="year" autofocus="autofocus" />
                                    </div>
                                    <button type="submit" class="btn btn-default">Submit Button</button>
                                    <button type="reset" class="btn btn-default">Reset Button</button>
                                </form>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <b>Input Examples:</b>
                                </div>
                                <div class="panel-body">
                                    <ul>
                                        <li><?=rand(1970,2037)."y."?></li>
                                    </ul>
                                </div>
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
                                            <p><?=htmlspecialchars($this->monthyear)?>/<b> Calendar</b></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /.row -->
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <?php
                            $curdatetmp =  $this->orgtmp;
                            $indexday = $this->indexday;
                            $j = 1;
                            for ($currr = 0; $currr <= date('n',$curdatetmp); $currr++) :
                                if ($j == 1){
                                    ?>
                                    <div class="row">
                                    <?php
                                }
                                ?>
                                <div class="col-lg-4 text-center"  style="padding-left: 10px ;font-size: medium  ;max-width: 600px ; max-height: 600px">
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <?=htmlspecialchars(date('F',$curdatetmp))?>
                                        </div>
                                        <div class="panel-body">
                                            <div class="table-responsive table-bordered">
                                                <table class="table">
                                                    <thead>
                                                    <tr>
                                                        <th>Mon</th>
                                                        <th>Tue</th>
                                                        <th>Wed</th>
                                                        <th>Thu</th>
                                                        <th>Fri</th>
                                                        <th style="color: green;">Sat</th>
                                                        <th style="color: red">Sun</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    <tr>
                                                        <?php
                                                        $dayofweek = date('D',$curdatetmp);
                                                        for ($monthday = 0; $monthday < date('t',$curdatetmp-$indexday);  $monthday++,  $curdatetmp+=$indexday) :
                                                            ?>
                                                            <?php
                                                            switch (date('D',$curdatetmp)){
                                                                case "Sun":
                                                                    if ($dayofweek == date('D',$curdatetmp)){
                                                                        ?>
                                                                        <?="<tr><td><td><td><td><td><td><td style='color: red'>".htmlspecialchars(date('d',$curdatetmp))."</td></td></td></td></td></td></tr>"?>
                                                                        <?php
                                                                        $dayofweek = "";
                                                                    }
                                                                    else{
                                                                        ?>
                                                                        <?="<td style='color: red'>".htmlspecialchars(date('d',$curdatetmp))."</td></tr>"?>
                                                                        <?php
                                                                    }
                                                                    ?>
                                                                    <?php
                                                                    break;
                                                                    ?>
                                                                    <?php
                                                                case "Sat" :
                                                                    if ($dayofweek == date('D',$curdatetmp)){
                                                                        ?>
                                                                        <?="<tr><td><td><td><td><td><td style='color: green'>".htmlspecialchars(date('d',$curdatetmp))."</td></td></td></td></td></td>"?>
                                                                        <?php
                                                                        $dayofweek = "";
                                                                    }
                                                                    else{
                                                                        ?>
                                                                        <?="<td style='color: green'>".htmlspecialchars(date('d',$curdatetmp))."</td>"?>
                                                                        <?php
                                                                    }
                                                                    ?>
                                                                    <?php
                                                                    break;
                                                                    ?>
                                                                    <?php
                                                                case "Fri":
                                                                    if ($dayofweek == date('D',$curdatetmp)){
                                                                        ?>
                                                                        <?="<tr><td><td><td><td><td>".htmlspecialchars(date('d',$curdatetmp))."</td>"?>
                                                                        <?php
                                                                        $dayofweek = "";
                                                                    }
                                                                    else{
                                                                        ?>
                                                                        <?="<td>".htmlspecialchars(date('d',$curdatetmp))."</td>"?>
                                                                        <?php
                                                                    }
                                                                    ?>
                                                                    <?php
                                                                    break;
                                                                    ?>
                                                                    <?php
                                                                case "Thu":
                                                                    if ($dayofweek == date('D',$curdatetmp)){
                                                                        ?>
                                                                        <?="<tr><td><td><td><td>".htmlspecialchars(date('d',$curdatetmp))."</td>"?>
                                                                        <?php
                                                                        $dayofweek = "";
                                                                    }
                                                                    else{
                                                                        ?>
                                                                        <?="<td>".htmlspecialchars(date('d',$curdatetmp))."</td>"?>
                                                                        <?php
                                                                    }
                                                                    ?>
                                                                    <?php
                                                                    break;
                                                                    ?>
                                                                    <?php
                                                                case "Wed":
                                                                    if ($dayofweek == date('D',$curdatetmp)){
                                                                        ?>
                                                                        <?="<tr><td><td><td>".htmlspecialchars(date('d',$curdatetmp))."</td>"?>
                                                                        <?php
                                                                        $dayofweek = "";
                                                                    }
                                                                    else{
                                                                        ?>
                                                                        <?="<td>".htmlspecialchars(date('d',$curdatetmp))."</td>"?>
                                                                        <?php
                                                                    }
                                                                    ?>
                                                                    <?php
                                                                    break;
                                                                    ?>
                                                                    <?php
                                                                case "Tue":
                                                                    if ($dayofweek == date('D',$curdatetmp)){
                                                                        ?>
                                                                        <?="<tr><td><td>".htmlspecialchars(date('d',$curdatetmp))."</td>"?>
                                                                        <?php
                                                                        $dayofweek = "";
                                                                    }
                                                                    else{
                                                                        ?>
                                                                        <?="<td>".htmlspecialchars(date('d',$curdatetmp))."</td>"?>
                                                                        <?php
                                                                    }
                                                                    ?>
                                                                    <?php
                                                                    break;
                                                                    ?>
                                                                    <?php
                                                                case "Mon":
                                                                    if ($dayofweek == date('D',$curdatetmp)){
                                                                        ?>
                                                                        <?="<tr><td>".htmlspecialchars(date('d',$curdatetmp))."</td>"?>
                                                                        <?php
                                                                        $dayofweek = "";
                                                                    }
                                                                    else{
                                                                        ?>
                                                                        <?="<td>".htmlspecialchars(date('d',$curdatetmp))."</td>"?>
                                                                        <?php
                                                                    }
                                                                    ?>
                                                                    <?php
                                                                    break;
                                                            } ?>
                                                            <?php
                                                        endfor;
                                                        ?>
                                                    </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <?php
                                if ($j == 3){
                                    ?>
                                    </div>
                                    <?php
                                    $j = 1;
                                }else{
                                    $j++;
                                }
                            endfor; ?>
                            <!-- /.col-lg-12 -->
                        </div>
                    </div>
                    <?php
                    } ?>
                </div>
                <!-- /.panel panel.default -->
            </div>
            <?php
            } ?>
        </div>
    </div>
</div>
