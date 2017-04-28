<?php $this->title = "Coloring Texts" ?>
<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h1><?=htmlspecialchars($this->title)?></h1>
                    <div class="row">
                        <div class="col-lg-7">
                            <p>Write a PHP program that takes a text. Colors each character
                                according to its ASCII value and prints the result.
                                If the ASCII value of a character is odd, the character should be
                                printed in blue. If it’s even, it should be printed in red.</p>
                        </div>
                    </div>
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-6">
                            <form role="form" method="post">
                                <div class="form-group">
                                    <label>Enter some text</label>
                                    <input class="form-control" name="text" autofocus="autofocus">
                                </div>
                                <button type="submit" class="btn btn-default">Submit Button</button>
                                <button type="reset" class="btn btn-default">Reset Button</button>
                            </form>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <b>Examples:</b>
                                </div>
                                <div class="panel-body">
                                    <p> Ex. Input : Lorem ipsum dolor sit amet,
                                            consectetur adipisicing elit. Autem dolorem quibusdam, tenetur commodi
                                            provident cumque magni voluptatem libero, quis rerum.
                                            Fugiat esse debitis optio, tempore.
                                            Animi officiis alias, officia repellendus.</p>
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
                                                            <td>
                                                                <?=$this->input?>
                                                            </td>
                                                            <td>
                                                                <?php
                                                                $output = $this->output;
                                                                for ($i = 0 ; $i < strlen($output); $i++){
                                                                    $color = ord($output[$i]) % 2 == 0 ? "red" : "blue";
                                                                    ?>
                                                                    <span style="color: <?=$color?>"><?=$output[$i]?></span>
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