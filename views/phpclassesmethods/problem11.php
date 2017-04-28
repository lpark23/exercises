<?php $this->title = "Oldest Family Member" ?>
<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h1><?=htmlspecialchars($this->title)?></h1>
                    <div class="row">
                        <div class="col-lg-10">
                            <p>Create class Person with fields name and age.
                                Create a class Family. The class should have list of people, method for
                                adding members (void addMember(Person member)) and a method returning
                                the oldest family member (Person getOldestMember()). Write a program that reads
                                name and age for N people and adds them to the family.
                                Then print the name and age of the oldest member.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-6">
                            <form role="form" method="post">
                                <div class="form-group">
                                    <label>Informations for:</label>
                                    <textarea class="form-control" name="info" rows="6" autofocus></textarea>
                                </div>
                                <button type="submit" class="btn btn-default">Submit Button</button>
                                <button type="reset" class="btn btn-default">Reset Button</button>
                            </form>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <b>Examples:</b>
                                </div>
                                <div class="panel-body">
                                    <span> Ex. Input : </span>
                                    <div class="row">
                                        <p class="col-lg-6">
                                            3, <br>
                                            Pesho 20, <br>
                                            Toncho 30, <br>
                                            Gosho 40
                                        </p>
                                        <p class="col-lg-6">
                                            4, <br>
                                            Petyr 70, <br>
                                            Ivan 55, <br>
                                            Pepo 64, <br>
                                            Dicho 44
                                        </p>
                                    </div>
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
                                                                <?php
                                                                foreach ($this->input as $value):
                                                                    ?>
                                                                    <?=$value."<br>"?>
                                                                    <?php
                                                                endforeach;
                                                                ?>
                                                            </td>
                                                            <td class="col-lg-6">
                                                                <?=$this->result?>
                                                            </td>
                                                        </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                        <?php
                                    }
                                    ?>
                                </div>
                                <!-- /.col-lg-6 -->
                            </div>
                            <?php
                        }
                        ?>
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