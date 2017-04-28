<?php $this->title = "Google" ?>
<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h1><?=htmlspecialchars($this->title)?></h1>
                    <div class="row">
                        <div class="col-lg-10">
                            <p>Google is always watching you, so it should come as no surprise that they
                                know everything about you (even your pokemon collection), since you’re really
                                good at writing classes Google asked you to design a Class that can hold all
                                the information they need for people.
                                You will receive an unkown amount of lines until the command “End” is read, on each of
                                those lines there will be information about a person in one of the following formats:
                            </p>
                            <ul>
                                <li>
                                    “<b>Name</b> company <b>companyName department salary</b>”
                                </li>
                                <li>
                                    “<b>Name</b> pokemon <b>pokemonName pokemonType</b>”
                                </li>
                                <li>
                                    “<b>Name</b> parents <b>parentName parentBirthday</b>”
                                </li>
                                <li>
                                    “<b>Name</b> children <b>childName childBirthday</b>”
                                </li>
                                <li>
                                    “<b>Name</b> car <b>carModel carSpeed</b>”
                                </li>
                            </ul>
                            <p>
                                You should structure all information about a person in a class with nested subclasses.
                                People’s names are unique - there won’t be 2 people with the same name, a person can
                                also have only 1 company and car, but can have multiple parents, chidlren and pokemon.
                                After the command “End” is received on the next line you will receive a single name,
                                you should print all information about that person. Note that information can change
                                during the input, for instance if we receive multiple lines which specify a person’s
                                company, only the last one should be the one remembered. The salary must be formated
                                to two decimal places after the seperator.
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
                                            PeshoPeshev company PeshInc Management 1000.00, <br>
                                            TonchoTonchev car Trabant 30, <br>
                                            PeshoPeshev pokemon Pikachu Electricity, <br>
                                            PeshoPeshev parents PoshoPeshev 22/02/1920, <br>
                                            TonchoTonchev pokemon Electrode Electricity, <br>
                                            End, <br>
                                            TonchoTonchev
                                        </p>
                                        <p class="col-lg-6">
                                            JelioJelev pokemon Onyx Rock, <br>
                                            JelioJelev parents JeleJelev 13/03/1933, <br>
                                            GoshoGoshev pokemon Moltres Fire, <br>
                                            JelioJelev company JeleInc Jelior 777.77, <br>
                                            JelioJelev children PudingJelev 01/01/2001, <br>
                                            StamatStamatov pokemon Blastoise Water, <br>
                                            JelioJelev car AudiA4 180, <br>
                                            JelioJelev pokemon Charizard Fire, <br>
                                            End, <br>
                                            JelioJelev
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
                    <!-- /.row  -->
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