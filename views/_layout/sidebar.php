<ul class="nav" id="side-menu">
    <li>
        <a href="<?=APP_ROOT?>"><i class="fa fa-dashboard fa-fw"></i> Home Page</a>
    </li>
    <?php
    foreach ($this->sideBar as $res => $value):
        ?>
        <li>
            <a href="#"><i class="fa fa-book fa-fw"></i> Homework: <?=$res?><span class="fa arrow"></span></a>
            <ul class="nav nav-second-level">
                <?php
                $res = str_replace(" ","",trim($res));
                foreach ($value as $key => $item):
                    $rrr = explode(" !",$item);
                    ?>
                    <li>
                        <a href="<?=APP_ROOT?>/<?=$res?>/<?=trim($rrr[0])?>" class="fa fa-paw"> <?=$rrr[1]?></a>
                    </li>
                    <?php
                endforeach;
                ?>
            </ul>
            <!-- /.nav-second-level -->
        </li>
        <?php
    endforeach;
    ?>
</ul>
