<?php $this->title = "Problem 6. Modify String" ?>
<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h1><?=htmlspecialchars($this->title)?></h1>
                    <div class="row">
                        <div class="col-lg-7">
                            <p>Write a PHP which receives a string from an input form and
                                modifies it according to the selected option (radio button). You should support
                                the following operations: palindrome check, reverse string,
                                split to extract leters only, hash the string with the default PHP hashing algorithm,
                                shuffle the string characters randomly. The result should be displayed right under
                                the input field. Styling the page is optional. Think about which of the modification
                                can be achieved with already built-in functions in PHP. Where necessary,
                                write your own algorithms to modify the given string. Hint:
                                Use the crypt() function for the "Hash String" modification.</p>
                        </div>
                    </div>
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-6">
                            <form role="form" method="post">
                                <div class="form-group">
                                    <label>Enter some text:</label>
                                    <input class="form-control" type="text" name="inputstr"
                                           placeholder="<?=trim($_POST['inputstr'])?>" autofocus="autofocus" >
                                    <label>Options</label>
                                    <label class="radio-inline">
                                        <input type="radio" name="option" value="palindrome" checked>Check Palindrome
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="option" value="reverse">Reverse string
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="option" value="split">Split
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="option" value="hash">Hash string
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="option" value="shuffle">Shuffle string
                                    </label>
                                </div>
                                <button type="submit" class="btn btn-default">Submit Button</button>
                                <button type="reset" class="btn btn-default">Reset Button</button>
                            </form>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <p><b>Input </b></p>
                                    <?php
                                    if ($this->isPost){
                                        ?>
                                        <li> <?=htmlspecialchars($_POST['inputstr'])?></li>
                                        <?php
                                    }
                                    ?>
                                    <b>Examples:</b>
                                </div>
                                <div class="panel-body">
                                    <ul>
                                        <li>Palindrome : bob ;  Radar ; Refer ; Top spot ; No lemon, no melon ; </li>
                                        <li>Reverse : ipsum, dolor, sit, amet, consectetur, adipisicing, elit</li>
                                        <li>Split : Lorem, sit, amet, consectetur, adipisicing, elit</li>
                                        <li>Hash : Lorem, ipsum, adipisicing, elit</li>
                                        <li>Shuffle : Lorem, ipsum, dolor, sit, amet</li>
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
                                            <div class="well">
                                                <p>
                                                    <?= $this->result?>
                                                </p>
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