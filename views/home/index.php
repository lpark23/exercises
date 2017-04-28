<?php $this->title = "Home page"; ?>

<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header"></h1>
            <?php
            foreach ($this->sideBar as $res => $value):
                ?>
                <div class="col-lg-7">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <?=$res?>
                        </div>
                        <div class="panel-body">
                            <ul class="nav nav-tabs">
                                <?php
                                $res = str_replace(" ","",trim($res));
                                foreach ($value as $key => $item):
                                    $rrr = explode(" !",$item);
                                    ?>
                                    <li><a href="#<?=$res.trim($rrr[0])?>" data-toggle="tab"><?=$rrr[1]?></a>
                                    </li>
                                    <?php
                                endforeach;
                                ?>
                            </ul>
                            <div class="tab-content">
                                <?php
                                foreach ($value as $key => $item):
                                    $rrr = explode(" !",$item);
                                    ?>
                                    <div class="tab-pane" id="<?=$res.trim($rrr[0])?>">
                                        <h4><?=$rrr[1]?></h4>
                                        <p>
                                            <?php
                                            $cuttext = (strlen($rrr[2]) > 250) ? substr($rrr[2], 0, 200) . '...' : $rrr[2];
                                            ?>
                                            <?=$cuttext?>
                                            <a href="<?=APP_ROOT?>/<?=str_replace(" ","",$res)?>/<?=$rrr[0]?>" > Go</a>
                                        </p>
                                    </div>
                                    <?php
                                endforeach;
                                ?>
                            </div>
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-7 -->
                <?php
            endforeach;
            ?>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
</div>
<!-- /#page-wrapper -->
