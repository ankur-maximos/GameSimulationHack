<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Simulation Admin</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- custom styles -->
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/derived.css">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
	<?php
	    //session_start();
        if (session_status() !== PHP_SESSION_ACTIVE) {
            header('Location: login.php');
        }
    ?>
</head>
<body>
    <nav class="navbar navbar-default navbar-fixed-top header">
        <div class="container-fluid">
            <div class="col-lg-2">
                <img src="http://placehold.it/50x50">
            </div>
            <div class="col-lg-9">
                <h2>LEADERSHIP AND TEAM SIMULATION</h2>
            </div>
            <div class="col-lg-1">
                <button type="button">
                    <span class="glyphicon glyphicon-cog"></span>logout
                </button>
            </div>

        </div>
    </nav>
    <div class="container-fluid">
        <div class="row admin-content">
            <nav class="navbar navbar-default header">
                <div class="container-fluid">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav nav-tabs navbar-nav">
                            <li class="active"><a href="#profile" class="admin-nav-links" aria-controls="profile" data-toggle="tab">CLASS SUMMARY</a></li>
                            <li><a href="#analyze" class="admin-nav-links" data-toggle="tab">TEAM RESULTS</a></li>
                            <li><a href="#profile" class="admin-nav-links" aria-controls="profile" role="tab" data-toggle="tab">SIMULATION SETUP</a></li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane fade in active" id="analyze">
                                <div class="tab-contents">
                                    <div class="container-fluid">
                                        <div class="tab-row-contents">
                                            Bacon ipsum dolor sit amet pastrami ribeye sausage, sirloin short ribs pork belly strip steak tenderloin boudin. Landjaeger beef ham hock, doner bacon pork belly filet mignon tenderloin short loin beef ribs tongue. Bresaola salami short ribs venison, pastrami jerky landjaeger. Hamburger meatball cow pork loin ham. Sirloin tail venison jerky kevin. Turducken ribeye sirloin fatback tenderloin short loin. Boudin sirloin tail venison filet mignon rump leberkas landjaeger bacon shank beef ribs ground round. Tail boudin landjaeger rump, chuck shankle leberkas pork belly pork tongue brisket short ribs ground round. Strip steak jowl pork loin beef ribs, ribeye tail spare ribs rump
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="profile">
                                <div class="tab-contents">
                                    <div class="container-fluid">
                                        <div class="tab-row-contents row">
                                            <div id="admin-welcome" class="col-md-12">
                                                <div class="control-group">
                                                    <div class="controls">
                                                        <button id="create-btn" class="btn btn-success">
                                                            Create a new simulation
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div id="create-form" class="col-md-0">
                                                <form class="form-horizontal content-right" action="admin/sim_model_handler.php" method="post">
                                                    <fieldset>
                                                        <div class="row">
                                                            <div id="init-form" class="col-md-12">

                                                                <div id="legend" class="">
                                                                    <div style="height: 40px"></div>
                                                                    <legend class="">Simulation Name</legend>
                                                                </div>

                                                                <div class="control-group">
                                                                    <div class="controls">
                                                                        <input type="text" name="name-field" placeholder="" class="input-xlarge">
                                                                    </div>
                                                                </div>


                                                                <div id="Div1" class="">
                                                                    <div style="height: 40px"></div>
                                                                    <legend class="">How Many Players</legend>
                                                                </div>

                                                                <div class="control-group">
                                                                    <div class="controls">
                                                                        <input type="number" name="people-field" placeholder="" class="input-xlarge">
                                                                    </div>
                                                                </div>

                                                                <div class="control-group">
                                                                    <div style="height: 40px"></div>
                                                                    <div class="controls">
                                                                        <button class="btn btn-success next-btn">
                                                                            Next Step
                                                                        </button>
                                                                    </div>
                                                                </div>

                                                            </div>

                                                            <div id="basic-form" class="col-md-0 invisible">
                                                                <div id="Div2" class="">
                                                                    <div style="height: 40px"></div>
                                                                    <legend class="">Model</legend>
                                                                </div>
                                                                <div class="control-group">

                                                                    <label class="control-label" for="input01">Start Time</label>
                                                                    <div class="controls">
                                                                        <input type="number" name="start-field" placeholder="" class="input-xlarge">
                                                                        <div style="height: 20px"></div>
                                                                    </div>
                                                                </div>
                                                                <div class="control-group">

                                                                    <label class="control-label" for="input01">End Time</label>
                                                                    <div class="controls">
                                                                        <input type="number" name="end-field" placeholder="" class="input-xlarge">
                                                                        <div style="height: 20px"></div>
                                                                    </div>
                                                                </div>

                                                                <div class="control-group">

                                                                    <label class="control-label" for="input01">Initial Step</label>
                                                                    <div class="controls">
                                                                        <input type="number" name="step-field" placeholder="" class="input-xlarge">
                                                                        <div style="height: 20px"></div>
                                                                    </div>
                                                                </div>

                                                                <div class="control-group">
                                                                    <div style="height: 40px"></div>
                                                                    <div class="controls">
                                                                        <button class="btn btn-success next-btn">
                                                                            Next Step
                                                                        </button>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div id="decision-form" class="col-md-0 invisible">
                                                                <div class="">
                                                                    <div style="height: 40px"></div>
                                                                    <legend class="">Decisions</legend>
                                                                </div>


                                                                <div class="control-group">
                                                                    <div class="controls">
                                                                        <button class="btn btn-success add-btn decision-add">
                                                                            <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>Add
                                                                        </button>
                                                                        <button class="btn btn-danger delete-btn decision-delete">
                                                                            <span class="glyphicon glyphicon-minus" aria-hidden="true"></span>Delete
                                                                        </button>
                                                                        <button class="btn btn-success next-btn">
                                                                            Next Step
                                                                        </button>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div id="variable-form" class="col-md-0 invisible">
                                                                <div class="">
                                                                    <div style="height: 40px"></div>
                                                                    <legend class="">Variables</legend>
                                                                </div>


                                                                <div class="control-group">
                                                                    <div class="controls">
                                                                        <button class="btn btn-success add-btn variable-add">
                                                                            <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>Add
                                                                        </button>
                                                                        <button class="btn btn-danger delete-btn variable-delete">
                                                                            <span class="glyphicon glyphicon-minus" aria-hidden="true"></span>Delete
                                                                        </button>
                                                                        <button class="btn btn-success confirm-btn">
                                                                            Confirm
                                                                        </button>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div id="confirm-table" class="col-md-0 invisible">
                                                                <div class="">
                                                                    <div style="height: 40px"></div>
                                                                    <legend class="">Confirmation</legend>
                                                                </div>
                                                                <div class="control-group">
                                                                    <label class="control-label" id="name-confirm"></label>
                                                                </div>
                                                                <div class="control-group">
                                                                    <label class="control-label" id="people-confirm"></label>
                                                                </div>
                                                                <div class="control-group">
                                                                    <label class="control-label" id="start-confirm"></label>
                                                                </div>
                                                                <div class="control-group">
                                                                    <label class="control-label" id="end-confirm"></label>
                                                                </div>
                                                                <div class="control-group">
                                                                    <label class="control-label" id="step-confirm"></label>

                                                                </div>
                                                                <div style="height: 30px"></div>
                                                                <table class="table table-bordered" id="decision-confirm">
                                                                    <caption>Decisions</caption>
                                                                    <thead>
                                                                        <tr>
                                                                            <th>Name</th>
                                                                            <th>Type</th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                    </tbody>
                                                                </table>
                                                                <div style="height: 30px"></div>
                                                                <table class="table table-bordered" id="variable-confirm">
                                                                    <caption>Variables</caption>
                                                                    <thead>
                                                                        <tr>
                                                                            <th>Name</th>
                                                                            <th>Equation</th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                    </tbody>
                                                                </table>
                                                                <div class="control-group">
                                                                    <div class="controls">
                                                                        <button class="btn btn-success submit-btn" type="submit">
                                                                            Submit
                                                                        </button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </fieldset>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.navbar-collapse -->
                </div>
                <!-- /.container-fluid -->
            </nav>
        </div>
    </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/admin.js"></script>
</body>
</html>
