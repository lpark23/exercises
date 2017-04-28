<?php $this->title = "*Template format" ?>
<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h1><?=htmlspecialchars($this->title)?></h1>
                    <div class="row">
                        <div class="col-lg-7">
                            <p>Write a program that receives data about a quiz and prints it
                                formatted as an XML document. The data comes as pairs of question-answer entries.
                                The format of the document should be as follows:</p>
                            <p>The input comes as a string in which the questions and
                                answers will be separated by “, “.</p>
                        </div>
                    </div>
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-6">
                            <form role="form" method="post">
                                <div class="form-group">
                                    <label>Question?, Answer. </label>
                                    <input class="form-control" name="quiz" autofocus="autofocus">
                                </div>
                                <button type="submit" class="btn btn-default">Submit Button</button>
                                <button type="reset" class="btn btn-default">Reset Button</button>
                            </form>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <?php
                                    $xml = '<?xml version="1.0" encoding="UTF-8"?>';
                                    ?>
                                    <textarea style="text-align: left" cols="60" rows="10"><?=$xml?><quiz>
                                            <question>
                                                {question text}
                                            </question>
                                            <answer>
                                                {answer text}
                                            </answer>
                                        </quiz></textarea>
                                    
                                    <b>Examples:</b>
                                </div>
                                <div class="panel-body">
                                    <ul>
                                        <li>
                                            Who was the forty-second president of the U.S.A.?, William Jefferson Clinton
                                        </li>
                                        <li>
                                            Dry ice is a frozen form of which gas?, Carbon Dioxide,
                                            What is the brightest star in the night sky?, Sirius
                                        </li>
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
                                                            <td>
                                                                <?php
                                                                foreach ($this->input as $k => $item):
                                                                    ?>
                                                                    <?="Question : ".$k."<br> Answer : ".$item.".<br>"?>
                                                                    <?php
                                                                endforeach;
                                                                ?>
                                                            </td>
                                                            <td>
                                                            </td>
                                                        </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                                <div class="well">
                                                    <textarea class="XML" style="text-align: left" cols="60" rows="10"><?=$this->result?>
                                                    </textarea>
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