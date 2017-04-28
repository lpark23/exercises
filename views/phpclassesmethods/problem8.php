<?php $this->title = "Pokemon Trainer" ?>
<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h1><?=htmlspecialchars($this->title)?></h1>
                    <div class="row">
                        <div class="col-lg-10">
                            <p>You wanna be the very best pokemon trainer, like no one ever was, so you set
                                out to catch pokemon. Define a class <b>Trainer </b> and a class <b>Pokemon</b> .
                                <u>Trainers have a </u> <b>name, number of badges and a collection of pokemon</b> ,
                                <u>Pokemon have a</u> <b>name, an element and health</b> , all values are
                                <b>mandatory</b> . <u>Every Trainer </u> <b>starts with 0 badges.</b>
                            </p>
                            <p>
                                You will receive an unknown number of lines until you receive the command “Tournament”,
                                each line will carry information about a pokemon and the trainer who caught it in
                                the format “<b>TrainerName PokemonName PokemonElement PokemonHealth</b>”
                                where <u>TrainerName </u> is the name of the Trainer who caught the pokemon,
                                names are unique there cannot be 2 trainers with the same name.
                                After receiving the command “Tournament” an unknown number of lines containing one of
                                three elements <u>“Fire”, “Water”, “Electricity” </u> will follow until the command
                                <u>“End”</u> is received. For every command you must check if a trainer has atleast
                                1 pokemon with the given element, if he does he receives 1 badge, otherwise all his pokemon
                                lose 10 health, if a pokemon falls to 0 or less health he dies and must be deleted
                                from the trainer’s collection. After the command “End” is received you should print all
                                trainers sorted by the amount of badges they have in descending order
                                (if two trainers have the same amount of badges they should be sorted by order of
                                appearance in the input) in the format “<b>TrainerName Badges NumberOfPokemon</b>”.
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
                                            Pesho Charizard Fire 100, <br>
                                            Gosho Squirtle Water 38, <br>
                                            Pesho Pikachu Electricity 10, <br>
                                            Tournament, <br>
                                            Fire, <br>
                                            Electricity, <br>
                                            End
                                        </p>
                                        <p class="col-lg-6">
                                            Stamat Blastoise Water 18, <br>
                                            Nasko Pikachu Electricity 22, <br>
                                            Jicata Kadabra Psychic 90, <br>
                                            Tournament, <br>
                                            Fire, <br>
                                            Electricity, <br>
                                            Fire, <br>
                                            End
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
                                                                <?php
                                                                foreach ($this->result as $k => $item):
                                                                    ?>
                                                                    <?= $item . "<br>"?>
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
                            <?php
                        }
                        ?>
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
</div>
