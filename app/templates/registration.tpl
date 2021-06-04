<!doctype html>
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
    {if $scores}
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
                    {foreach $scores as $score}
                        {strip}
                            <tr>
                                <td>{$score['team']}</td>
                                <td>{$score['name_of_participant']}</td>
                                <td>{$score['first_event_scores']}</td>
                                <td>{$score['second_event_scores']}</td>
                                <td>{$score['third_event_scores']}</td>
                                <td>{$score['fourth_event_scores']}</td>
                                <td>{$score['fifth_event_scores']}</td>
                                <td>{$score['first_event_scores'] + $score['second_event_scores'] + $score['third_event_scores'] + $score['fourth_event_scores']}</td>
                            </tr>
                        {/strip}
                    {/foreach}
                    </tbody>
                </table>
            </div>
        </div>
    {/if}

    <!-- Registration-->
    {if $hide}
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
    {/if}

    <!-- Event 1-->
    {if $hideEvent1}
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
                    {foreach $scores as $score}
                        {strip}
                            <tr>
                                <td>{$score['team']}</td>
                                <td>{$score['name_of_participant']}</td>
                                <td>
                                    <input type="number" class="form-control" id="{$score['id']}"/>
                                </td>
                            </tr>
                        {/strip}
                    {/foreach}
                    </tbody>
                </table>
                <button class="btn btn-secondary btn-block mb-4" id="event-one">
                    Enter Scores for First Event
                </button>
            </div>
        </div>
    {/if}

    <!-- Event 2 -->
    {if $hideEvent2}
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
                    {foreach $scores as $score}
                        {strip}
                            <tr>
                                <td>{$score['team']}</td>
                                <td>{$score['name_of_participant']}</td>
                                <td>
                                    <input type="number" class="form-control" id="{$score['id']}"/>
                                </td>
                            </tr>
                        {/strip}
                    {/foreach}
                    </tbody>
                </table>
                <button class="btn btn-secondary btn-block mb-4" id="event-two">
                    Enter Scores for Second Event
                </button>
            </div>
        </div>
    {/if}

    <!-- Event 3 -->
    {if $hideEvent3}
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
                    {foreach $scores as $score}
                        {strip}
                            <tr>
                                <td>{$score['team']}</td>
                                <td>{$score['name_of_participant']}</td>
                                <td>
                                    <input type="number" class="form-control" id="{$score['id']}"/>
                                </td>
                            </tr>
                        {/strip}
                    {/foreach}
                    </tbody>
                </table>
                <button class="btn btn-secondary btn-block mb-4" id="event-three">
                    Enter Scores for Third Event
                </button>
            </div>
        </div>
    {/if}

    <!-- Event 4 -->
    {if $hideEvent4}
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
                    {foreach $scores as $score}
                        {strip}
                            <tr>
                                <td>{$score['team']}</td>
                                <td>{$score['name_of_participant']}</td>
                                <td>
                                    <input type="number" class="form-control" id="{$score['id']}"/>
                                </td>
                            </tr>
                        {/strip}
                    {/foreach}
                    </tbody>
                </table>
                <button class="btn btn-secondary btn-block mb-4" id="event-four">
                    Enter Scores for Fourth Event
                </button>
            </div>
        </div>
    {/if}

    <!-- Event 5 -->
    {if $hideEvent5}
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
                    {foreach $scores as $score}
                        {strip}
                            <tr>
                                <td>{$score['team']}</td>
                                <td>{$score['name_of_participant']}</td>
                                <td>
                                    <input type="number" class="form-control" id="{$score['id']}"/>
                                </td>
                            </tr>
                        {/strip}
                    {/foreach}
                    </tbody>
                </table>
                <button class="btn btn-secondary btn-block mb-4" id="event-five">
                    Enter Scores for Fifth Event
                </button>
            </div>
        </div>
    {/if}

</div>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
<script>
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
</script>
</body>
</html>