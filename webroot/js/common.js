$(function(){
    
// Load a list of players when a club is selected
    $('#club-id').change(function (e) {
       e.preventDefault();
       var options;
       
       // Clear current list
       $('#players-ids').html(null);
       
       $.get('/players/players_by_club.json', {'club_id': $(this).val()},
            function (data, status) {
                for (var prop in data.players) {
                    options += "<option value='" + prop + "'>" + data.players[prop] + "</option>";
                }
                $('#players-ids').html(options);
       }, 'json');
    });
    
})