<?php $this->title = "Navigation Builder" ?>
<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h1><?=htmlspecialchars($this->title)?></h1>
                    <div class="row">
                        <div class="col-lg-7">
                            <p>Write a PHP program that builds 3 sidebars. The input fields are categories,
                                tags and months. The first sidebar should contain a list of the categories,
                                the second sidebar – a list of the tags and the third should contain the months.
                                The entries in the input strings will be separated by a comma and space ", ".
                                Styling the page is optional. Semantic HTML is required.  Categories, Tags
                                and Months should be printed with h2 tag.</p>
                        </div>
                    </div>
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-6">
                            <form role="form" method="post">
                                <div class="form-group">
                                    <label>Categories
                                        <input class="form-control" name="categories" autofocus="autofocus">
                                    </label>
                                    <label>Tags
                                        <input class="form-control" name="tags">
                                    </label>
                                    <label>Months
                                        <input class="form-control" name="months" >
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
                                    <p> Ex. Input ... </p>
                                    <ul>
                                        <li>Categories : Knitting, Cycling, Swimming, Dancing</li>
                                        <li>Tags : person, free time, love, peace, protes</li>
                                        <li>Months : April, May, June, July</li>
                                    </ul>
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
                                                            <td class="col-lg-6">
                                                                <ul>
                                                                    <li>
                                                                        <?=$this->inputcat?>
                                                                    </li>
                                                                    <li>
                                                                        <?=$this->inputtags?>
                                                                    </li>
                                                                    <li>
                                                                        <?=$this->inputm?>
                                                                    </li>
                                                                </ul>
                                                            </td>
                                                            <td class="col-lg-6">
                                                                <?php
                                                                foreach ($this->output as $k => $value) :
                                                                    ?>
                                                                    <div class="col-lg-12">
                                                                        <div class="panel panel-default">
                                                                            <div class="panel-heading">
                                                                                <?=$k?>
                                                                            </div>
                                                                            <div class="panel-body">
                                                                                <ul>
                                                                                    <?php foreach ($value as $cat){?>
                                                                                        <li><?=$cat?></li>
                                                                                    <?php }?>
                                                                                </ul>
                                                                            </div>
                                                                        </div>
                                                                    </div>
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