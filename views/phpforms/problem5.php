<?php $this->title = "CV Generator" ?>
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
                            <form role="form" method="post">
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4>Personal Information</h4>
                                    </div>
                                    <div class="panel-body">
                                        <div class="form-group">
                                            <label>First name</label>
                                            <input class="form-control" name="fname" placeholder="Enter your first name" autofocus="autofocus">
                                            <label>Last name</label>
                                            <input class="form-control" name="lname" placeholder="Enter your last name" >
                                            <label>Phone number</label>
                                            <input class="form-control" name="phone" placeholder="Enter your phone number" >
                                            <label>Email</label>
                                            <input class="form-control" name="email" placeholder="Enter your email address">
                                            <label>Day of birth</label>
                                            <input type="date" class="input-sm form-control" name="birthday" />
                                            <label>Nationality</label>
                                            <select class="form-control" name="national">
                                                <option>Bulgarian</option>
                                                <option>2</option>
                                                <option>3</option>
                                                <option>4</option>
                                                <option>5</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4>Last Work Position</h4>
                                    </div>
                                    <div class="panel-body">
                                        <label>Company Name</label>
                                        <input class="form-control" name="company" placeholder="Enter company name">
                                        <input type="date" class="input-sm form-control" name="workfrom" />
                                        <span class="input-group-addon">to</span>
                                        <input type="date" class="input-sm form-control" name="workto" />
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4>Computer skills</h4>
                                    </div>
                                    <div class="panel-body">
                                        <label for="pc-languages">Programming Languages</label><br>
                                        <input class="form-control" type="text" name="pc-lang[]" id="pc-languages"/>
                                        <select class="form-control" name="pc-level[]">
                                            <option value="Beginner">Beginner</option>
                                            <option value="Programmer">Programmer</option>
                                            <option value="Ninja">Ninja</option>
                                        </select><br/>
                                        <div  id="pclang-box">
                                            <!--            Here will appear the new fields-->
                                        </div>
                                        <button class="btn btn-default" type="button" onclick="removePcLanguage('pc-lang'+nextId)">Remove Language</button>
                                        <button class="btn btn-default" type="button" onclick="addPcLanguage()">Add Language</button>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4>Other skills</h4>
                                    </div>
                                    <div class="panel-body">
                                        <label for="languages">Languages</label><br/>
                                        <input class="form-control" type="text" name="lang[]" id="languages"/>
                                        <select class="form-control" name="con-level[]">Comprehension
                                            <option selected>-Conception-</option>
                                            <option value="Beginner">Beginner</option>
                                            <option value="Intermediate">Intermediate</option>
                                            <option value="Advanced">Advanced</option>
                                        </select>
                                        <select class="form-control" name="read-level[]">
                                            <option selected>-Reading-</option>
                                            <option value="Beginner">Beginner</option>
                                            <option value="Intermediate">Intermediate</option>
                                            <option value="Advanced">Advanced</option>
                                        </select>
                                        <select class="form-control" name="write-level[]">
                                            <option selected>-Writing-</option>
                                            <option value="Beginner">Beginner</option>
                                            <option value="Intermediate">Intermediate</option>
                                            <option value="Advanced">Advanced</option>
                                        </select><br/>
                                        <div id="lang-box">
                                            <!--            Here will appear the new fields-->
                                        </div>
                                        <button class="btn btn-default" type="button" onclick="removeLanguage('lang' + nextId2)">Remove Language</button>
                                        <button class="btn btn-default" type="button" onclick="addLanguage()">Add Language</button>
                                        <br/>
                                        <span>Driver License</span><br/>
                                        <label for="b">B</label>
                                        <input type="checkbox" name="category[]" value="B" id="b" checked/>
                                        <label for="a">A</label>
                                        <input type="checkbox" name="category[]" value="A" id="a"/>
                                        <label for="c">C</label>
                                        <input type="checkbox" name="category[]" value="C" id="c"/>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-default">Submit Button</button>
                                <button type="reset" class="btn btn-default">Reset Button</button>
                            </form>
                        </div>
                        <?php if (($this->isPost)){ ?>
                        <div class="col-lg-6">
                            <div class="panel panel-default">
                                <?php if (isset($_SESSION['messages'])) { ?>
                                    <div class="panel-heading">
                                        <p><?=htmlspecialchars($this->title)?> / <b>Output</b></p>
                                    </div>
                                    <div class="panel-body">
                                        <p>Error! Look envelope top right </p>
                                    </div>
                                    <?php
                                }else{
                                ?>
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4>Personal Information</h4>
                                    </div>
                                    <div class="panel-body">
                                        <div class="table-responsive">
                                            <table class="table table-bordered">
                                                <thead>
                                                </thead>
                                                <tbody>
                                                <tr>
                                                    <?php foreach ($this->showperson as $k => $person) : ?>
                                                    <td><?=htmlspecialchars($k)?></td>
                                                    <td><?=htmlspecialchars($person)?></td>
                                                </tr>
                                                <?php endforeach;?>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4>Last Work Position</h4>
                                    </div>
                                    <div class="panel-body">
                                        <div class="table-responsive">
                                            <table class="table table-bordered">
                                                <thead>
                                                </thead>
                                                <tbody>
                                                <tr>
                                                    <?php foreach ($this->showcompany as $k => $company) : ?>
                                                    <td><?=htmlspecialchars($k)?></td>
                                                    <td><?=htmlspecialchars($company)?></td>
                                                </tr>
                                                <?php
                                                endforeach;?>
                                                </tbody>
                                            </table>
                                        </div>
                                        <!-- /.table-responsive -->
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4>Computer skills</h4>
                                    </div>
                                    <div class="panel-body">
                                        <div class="table-responsive">
                                            <table class="table table-bordered">
                                                <thead>
                                                </thead>
                                                <tbody>
                                                <tr>
                                                    <td>Programing language</td>

                                                    <td><table class="table table-bordered">
                                                            <thead>
                                                            <tr>
                                                                <?php foreach ($this->showpclanguages as $pclang) { ?>
                                                                    <th><?=$pclang?></th>
                                                                    <?php
                                                                } ?>
                                                            </thead>
                                                            <tbody>
                                                            <tr>
                                                                <?php foreach ($this->showpclevel as $pclevel) { ?>
                                                                    <td><?=$pclevel?></td>
                                                                    <?php
                                                                } ?>
                                                            </tr>
                                                            </tbody>
                                                        </table>
                                                    </td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4>Other skills</h4>
                                </div>
                                <div class="panel-body">
                                    <div class="table-responsive">
                                        <table class="table table-bordered">
                                            <thead>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <td>Languages</td>
                                                <td><table class="table table-bordered">
                                                        <thead>
                                                        <th>Lang</th>
                                                        <th>Conception</th>
                                                        <th>Reading</th>
                                                        <th>Writing</th>
                                                        </thead>
                                                        <tbody>
                                                        <tr>
                                                            <?php
                                                            $i=0;
                                                            foreach ($this->showlanguages as $lang) { ?>
                                                            <td><?=$lang?></td>

                                                            <td><?=$this->showconceptionlevel[$i] ?></td>
                                                            <td><?=$this->showreadlevel[$i] ?></td>
                                                            <td><?=$this->showwritelevel[$i] ?></td>
                                                        </tr>
                                                        <?php
                                                        $i++;
                                                        } ?>
                                                        </tr>
                                                        </tbody>
                                                    </table>
                                                </td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <span>Driver License</span><br/>
                                    <p><b><?=htmlspecialchars($this->drivecategory)?></b></p>
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