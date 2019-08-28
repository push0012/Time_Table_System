$(document).ready(function() {
    console.log('comes here');
var t = $('#example').DataTable({
    paging: false,
    searching: false,
    ordering:  false,
    info: false
});
var counter = 1;
var clicks = -1;
  $("#addRow").click(function(){ clicks++;});

var nextid=1;
$('#addRow').on( 'click', function () {
    nextid = nextid + clicks;
    console.log('comes here');
    t.row.add( [
        '<input type=\"text\" id=\"'+nextid+'\" name=\"subject_id\" size=\"8\"/>',
        '<input type=\"text\" id=\"'+nextid+'\" name=\"subject_title\" size=\"45\"/>',
        '<input type=\"text\" id=\"'+nextid+'\" name=\"method\" size=\"5\"/>',
        '<input type=\"text\" id=\"'+nextid+'\" name=\"needs\" size=\"5\"/>',
        '<input type=\"text\" id=\"'+nextid+'\" name=\"credits\" size=\"5\"/>'
        
    ] ).node().id = 'nextid';
    
    t.draw( false );
    
    counter++;
} );

// Automatically add a first row of data
$('#addRow').click();
} );