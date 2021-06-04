<?php
/* Smarty version 3.1.39, created on 2021-06-04 12:05:49
  from 'C:\xampp\htdocs\scoring_system\smarty\app\templates\registration.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60b9fafdc49005_68771735',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6f3129270936b616b89c6bbf9fb5eb963af56ac0' => 
    array (
      0 => 'C:\\xampp\\htdocs\\scoring_system\\smarty\\app\\templates\\registration.tpl',
      1 => 1622801146,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60b9fafdc49005_68771735 (Smarty_Internal_Template $_smarty_tpl) {
?><!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="../styles/main.css"/>

    <title>Register</title>
</head>
<style>
    table {
        margin-top: 4em;
    }
</style>
<body>
<div class="container">
    <!-- Main Scoreboard -->
    <?php if ($_smarty_tpl->tpl_vars['scores']->value) {?>
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <table class="table table-bordered table-striped table-hover text-center">
                    <thead>
                    <tr class="bg-secondary text-light">
                        <th>Teams</th>
                        <th>Participants</th>
                        <th>Event 1</th>
                        <th>Event 2</th>
                        <th>Event 3</th>
                        <th>Event 4</th>
                        <th>Event 5</th>
                        <th>Total Scores</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['scores']->value, 'score');
$_smarty_tpl->tpl_vars['score']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['score']->value) {
$_smarty_tpl->tpl_vars['score']->do_else = false;
?>
                        <tr><td><?php echo $_smarty_tpl->tpl_vars['score']->value['team'];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['score']->value['name_of_participant'];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['score']->value['first_event_scores'];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['score']->value['second_event_scores'];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['score']->value['third_event_scores'];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['score']->value['fourth_event_scores'];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['score']->value['fifth_event_scores'];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['score']->value['first_event_scores']+$_smarty_tpl->tpl_vars['score']->value['second_event_scores']+$_smarty_tpl->tpl_vars['score']->value['third_event_scores']+$_smarty_tpl->tpl_vars['score']->value['fourth_event_scores'];?>
</td></tr>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </tbody>
                </table>
            </div>
        </div>
    <?php }?>

    <!-- Registration-->
    <?php if ($_smarty_tpl->tpl_vars['hide']->value) {?>
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <div id="main-body">
                    <div class="alert alert-info alert-dismissible text-center">
                        <button type="button" class="close" data-dismiss="alert">&times;</button>
                        <strong>Please make sure you register all teams and their members today!</strong>
                    </div>

                    <h4 class="text-center">Register teams and their members</h4>

                    <form class="mt-3" id="register">
                        <div class="form-group">
                            <label for="teamName">Name of Team:</label>
                            <input type="text" class="form-control" placeholder="Enter name of team" id="teamName"
                                   name="teamName">
                        </div>
                        <div class="form-group">
                            <label for="memberName">Member name:</label>
                            <input type="text" class="form-control" placeholder="Enter member name" id="memberName"
                                   name="memberName">
                        </div>

                        <button type="submit" class="btn btn-primary mb-5">Register</button>
                    </form>
                </div>
            </div>
        </div>
    <?php }?>

    <!-- Event 1-->
    <?php if ($_smarty_tpl->tpl_vars['hideEvent1']->value) {?>
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <table class="table table-bordered table-striped table-hover text-center">
                    <thead>
                    <tr>
                        <th colspan="7" class="bg-secondary text-light">
                            Enter Scores
                        </th>
                    </tr>
                    <tr class="bg-secondary text-light">
                        <th>Teams</th>
                        <th>Participants</th>
                        <th>Event 1</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['scores']->value, 'score');
$_smarty_tpl->tpl_vars['score']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['score']->value) {
$_smarty_tpl->tpl_vars['score']->do_else = false;
?>
                        <tr><td><?php echo $_smarty_tpl->tpl_vars['score']->value['team'];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['score']->value['name_of_participant'];?>
</td><td><input type="number" class="form-control" id="<?php echo $_smarty_tpl->tpl_vars['score']->value['id'];?>
"/></td></tr>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </tbody>
                </table>
                <button class="btn btn-secondary btn-block mb-4" id="event-one">
                    Enter Scores for First Event
                </button>
            </div>
        </div>
    <?php }?>

    <!-- Event 2 -->
    <?php if ($_smarty_tpl->tpl_vars['hideEvent2']->value) {?>
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <table class="table table-bordered table-striped table-hover text-center">
                    <thead>
                    <tr>
                        <th colspan="7" class="bg-secondary text-light">
                            Enter Scores
                        </th>
                    </tr>
                    <tr class="bg-secondary text-light">
                        <th>Teams</th>
                        <th>Participants</th>
                        <th>Event 2</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['scores']->value, 'score');
$_smarty_tpl->tpl_vars['score']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['score']->value) {
$_smarty_tpl->tpl_vars['score']->do_else = false;
?>
                        <tr><td><?php echo $_smarty_tpl->tpl_vars['score']->value['team'];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['score']->value['name_of_participant'];?>
</td><td><input type="number" class="form-control" id="<?php echo $_smarty_tpl->tpl_vars['score']->value['id'];?>
"/></td></tr>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </tbody>
                </table>
                <button class="btn btn-secondary btn-block mb-4" id="event-two">
                    Enter Scores for Second Event
                </button>
            </div>
        </div>
    <?php }?>

    <!-- Event 3 -->
    <?php if ($_smarty_tpl->tpl_vars['hideEvent3']->value) {?>
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <table class="table table-bordered table-striped table-hover text-center">
                    <thead>
                    <tr>
                        <th colspan="7" class="bg-secondary text-light">
                            Enter Scores
                        </th>
                    </tr>
                    <tr class="bg-secondary text-light">
                        <th>Teams</th>
                        <th>Participants</th>
                        <th>Event 3</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['scores']->value, 'score');
$_smarty_tpl->tpl_vars['score']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['score']->value) {
$_smarty_tpl->tpl_vars['score']->do_else = false;
?>
                        <tr><td><?php echo $_smarty_tpl->tpl_vars['score']->value['team'];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['score']->value['name_of_participant'];?>
</td><td><input type="number" class="form-control" id="<?php echo $_smarty_tpl->tpl_vars['score']->value['id'];?>
"/></td></tr>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </tbody>
                </table>
                <button class="btn btn-secondary btn-block mb-4" id="event-three">
                    Enter Scores for Third Event
                </button>
            </div>
        </div>
    <?php }?>

    <!-- Event 4 -->
    <?php if ($_smarty_tpl->tpl_vars['hideEvent4']->value) {?>
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <table class="table table-bordered table-striped table-hover text-center">
                    <thead>
                    <tr>
                        <th colspan="7" class="bg-secondary text-light">
                            Enter Scores
                        </th>
                    </tr>
                    <tr class="bg-secondary text-light">
                        <th>Teams</th>
                        <th>Participants</th>
                        <th>Event 4</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['scores']->value, 'score');
$_smarty_tpl->tpl_vars['score']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['score']->value) {
$_smarty_tpl->tpl_vars['score']->do_else = false;
?>
                        <tr><td><?php echo $_smarty_tpl->tpl_vars['score']->value['team'];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['score']->value['name_of_participant'];?>
</td><td><input type="number" class="form-control" id="<?php echo $_smarty_tpl->tpl_vars['score']->value['id'];?>
"/></td></tr>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </tbody>
                </table>
                <button class="btn btn-secondary btn-block mb-4" id="event-four">
                    Enter Scores for Fourth Event
                </button>
            </div>
        </div>
    <?php }?>

    <!-- Event 5 -->
    <?php if ($_smarty_tpl->tpl_vars['hideEvent5']->value) {?>
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <table class="table table-bordered table-striped table-hover text-center">
                    <thead>
                    <tr>
                        <th colspan="7" class="bg-secondary text-light">
                            Enter Scores
                        </th>
                    </tr>
                    <tr class="bg-secondary text-light">
                        <th>Teams</th>
                        <th>Participants</th>
                        <th>Event 5</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['scores']->value, 'score');
$_smarty_tpl->tpl_vars['score']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['score']->value) {
$_smarty_tpl->tpl_vars['score']->do_else = false;
?>
                        <tr><td><?php echo $_smarty_tpl->tpl_vars['score']->value['team'];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['score']->value['name_of_participant'];?>
</td><td><input type="number" class="form-control" id="<?php echo $_smarty_tpl->tpl_vars['score']->value['id'];?>
"/></td></tr>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </tbody>
                </table>
                <button class="btn btn-secondary btn-block mb-4" id="event-five">
                    Enter Scores for Fifth Event
                </button>
            </div>
        </div>
    <?php }?>

</div>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<?php echo '<script'; ?>
 src="https://code.jquery.com/jquery-3.2.1.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
>
    // Register team members
    $('#register').submit(function (event) {
        event.preventDefault();

        let teamName = $('#teamName').val();
        let memberName = $('#memberName').val();

        const formData = {
            teamName: teamName,
            memberName: memberName
        }

        $.ajax({
            type: 'POST',
            url: '../validations/process_registrations.php',
            data: formData,
            dataType: 'json',
            encode: true
        }).done(function (data) {
            if (data.success) {
                alert('Details have been saved successfully');
                location.reload();
            }
        });

    });

    // Enter scores for event one
    $('#event-one').click(function () {
        let participant1 = $('#1').val();
        let participant2 = $('#2').val();
        let participant3 = $('#3').val();
        let participant4 = $('#4').val();
        let participant5 = $('#5').val();
        let participant6 = $('#6').val();
        let participant7 = $('#7').val();
        let participant8 = $('#8').val();
        let participant9 = $('#9').val();
        let participant10 = $('#10').val();

        let participant11 = $('#11').val();
        let participant12 = $('#12').val();
        let participant13 = $('#13').val();
        let participant14 = $('#14').val();
        let participant15 = $('#15').val();
        let participant16 = $('#16').val();
        let participant17 = $('#17').val();
        let participant18 = $('#18').val();
        let participant19 = $('#19').val();
        let participant20 = $('#20').val();

        const formData = {
            scores : [
                participant1,
                participant2,
                participant3,
                participant4,
                participant5,
                participant6,
                participant7,
                participant8,
                participant9,
                participant10,
                participant11,
                participant12,
                participant13,
                participant14,
                participant15,
                participant16,
                participant17,
                participant18,
                participant19,
                participant20
            ]
        }

        $.ajax({
            type: 'POST',
            url: '../validations/event1.php',
            data: formData,
            dataType: 'json',
            encode: true
        }).done(function (data) {
            if (data.success) {
                alert('Details have been saved successfully');
                location.reload();
            }
        });
    });

    // Enter scores for event two
    $('#event-two').click(function () {
        let participant1 = $('#1').val();
        let participant2 = $('#2').val();
        let participant3 = $('#3').val();
        let participant4 = $('#4').val();
        let participant5 = $('#5').val();
        let participant6 = $('#6').val();
        let participant7 = $('#7').val();
        let participant8 = $('#8').val();
        let participant9 = $('#9').val();
        let participant10 = $('#10').val();

        let participant11 = $('#11').val();
        let participant12 = $('#12').val();
        let participant13 = $('#13').val();
        let participant14 = $('#14').val();
        let participant15 = $('#15').val();
        let participant16 = $('#16').val();
        let participant17 = $('#17').val();
        let participant18 = $('#18').val();
        let participant19 = $('#19').val();
        let participant20 = $('#20').val();

        const formData = {
            scores : [
                participant1,
                participant2,
                participant3,
                participant4,
                participant5,
                participant6,
                participant7,
                participant8,
                participant9,
                participant10,
                participant11,
                participant12,
                participant13,
                participant14,
                participant15,
                participant16,
                participant17,
                participant18,
                participant19,
                participant20
            ]
        }

        $.ajax({
            type: 'POST',
            url: '../validations/event2.php',
            data: formData,
            dataType: 'json',
            encode: true
        }).done(function (data) {
            if (data.success) {
                alert('Details have been saved successfully');
                location.reload();
            }
        });
    });

    // Enter scores for event three
    $('#event-three').click(function () {
        let participant1 = $('#1').val();
        let participant2 = $('#2').val();
        let participant3 = $('#3').val();
        let participant4 = $('#4').val();
        let participant5 = $('#5').val();
        let participant6 = $('#6').val();
        let participant7 = $('#7').val();
        let participant8 = $('#8').val();
        let participant9 = $('#9').val();
        let participant10 = $('#10').val();

        let participant11 = $('#11').val();
        let participant12 = $('#12').val();
        let participant13 = $('#13').val();
        let participant14 = $('#14').val();
        let participant15 = $('#15').val();
        let participant16 = $('#16').val();
        let participant17 = $('#17').val();
        let participant18 = $('#18').val();
        let participant19 = $('#19').val();
        let participant20 = $('#20').val();

        const formData = {
            scores : [
                participant1,
                participant2,
                participant3,
                participant4,
                participant5,
                participant6,
                participant7,
                participant8,
                participant9,
                participant10,
                participant11,
                participant12,
                participant13,
                participant14,
                participant15,
                participant16,
                participant17,
                participant18,
                participant19,
                participant20
            ]
        }

        $.ajax({
            type: 'POST',
            url: '../validations/event3.php',
            data: formData,
            dataType: 'json',
            encode: true
        }).done(function (data) {
            if (data.success) {
                alert('Details have been saved successfully');
                location.reload();
            }
        });
    });

    // Enter scores for event four
    $('#event-four').click(function () {
        let participant1 = $('#1').val();
        let participant2 = $('#2').val();
        let participant3 = $('#3').val();
        let participant4 = $('#4').val();
        let participant5 = $('#5').val();
        let participant6 = $('#6').val();
        let participant7 = $('#7').val();
        let participant8 = $('#8').val();
        let participant9 = $('#9').val();
        let participant10 = $('#10').val();

        let participant11 = $('#11').val();
        let participant12 = $('#12').val();
        let participant13 = $('#13').val();
        let participant14 = $('#14').val();
        let participant15 = $('#15').val();
        let participant16 = $('#16').val();
        let participant17 = $('#17').val();
        let participant18 = $('#18').val();
        let participant19 = $('#19').val();
        let participant20 = $('#20').val();

        const formData = {
            scores : [
                participant1,
                participant2,
                participant3,
                participant4,
                participant5,
                participant6,
                participant7,
                participant8,
                participant9,
                participant10,
                participant11,
                participant12,
                participant13,
                participant14,
                participant15,
                participant16,
                participant17,
                participant18,
                participant19,
                participant20
            ]
        }

        $.ajax({
            type: 'POST',
            url: '../validations/event4.php',
            data: formData,
            dataType: 'json',
            encode: true
        }).done(function (data) {
            if (data.success) {
                alert('Details have been saved successfully');
                location.reload();
            }
        });
    });

    // Enter scores for event five
    $('#event-five').click(function () {
        let participant1 = $('#1').val();
        let participant2 = $('#2').val();
        let participant3 = $('#3').val();
        let participant4 = $('#4').val();
        let participant5 = $('#5').val();
        let participant6 = $('#6').val();
        let participant7 = $('#7').val();
        let participant8 = $('#8').val();
        let participant9 = $('#9').val();
        let participant10 = $('#10').val();

        let participant11 = $('#11').val();
        let participant12 = $('#12').val();
        let participant13 = $('#13').val();
        let participant14 = $('#14').val();
        let participant15 = $('#15').val();
        let participant16 = $('#16').val();
        let participant17 = $('#17').val();
        let participant18 = $('#18').val();
        let participant19 = $('#19').val();
        let participant20 = $('#20').val();

        const formData = {
            scores : [
                participant1,
                participant2,
                participant3,
                participant4,
                participant5,
                participant6,
                participant7,
                participant8,
                participant9,
                participant10,
                participant11,
                participant12,
                participant13,
                participant14,
                participant15,
                participant16,
                participant17,
                participant18,
                participant19,
                participant20
            ]
        }

        $.ajax({
            type: 'POST',
            url: '../validations/event5.php',
            data: formData,
            dataType: 'json',
            encode: true
        }).done(function (data) {
            if (data.success) {
                alert('Details have been saved successfully');
                location.reload();
            }
        });
    });
<?php echo '</script'; ?>
>
</body>
</html><?php }
}
