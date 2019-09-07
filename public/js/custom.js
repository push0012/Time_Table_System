$(document).ready(function() {

//Define Course Subject DataTable
var t = $('#example').DataTable({
    paging: false,
    searching: false,
    ordering:  false,
    info: false,
    select: 'os'
});

$('#classTable').DataTable();
$('#courseTable').DataTable();
$('#lecturerTable').DataTable();
$('#subjectsTable').DataTable();
$('#planningTable').DataTable();

//Define Subject Datatable
var s = $('#subjectTable').DataTable({
    paging: false,
    searching: false,
    ordering:  false,
    info: false,
    select: 'os'
});

//automattically create lecturer dropdown 
$.ajax({
    type: "GET",
    url: '/lecturers',
    success: function( msg ) {
        $.each(msg, function(value,key) {  
            $("#lecturer_id").append($("<option>").attr("value", key.lecturer_id).text(key.title+" "+key.last_name+" "+key.initial));   
        });
    },
    error: function(msg) {
        console.log(msg);
    }
});
//generate first row
t.row.add( [
    '<input type=\"text\" id=\"subject_id\" name=\"subject_id\" size=\"8\" required/>',
    '<input type=\"text\" id=\"credits\" name=\"credits\" size=\"8\" required/>',
    '<select class=\"form-control\" name=\"lecturer_id\" id=\"lecturer_id\">'+
    '</select>',
] ).draw( false );


//clone first generated row and generate second row
function getloder(){
    var $tableBody = $('#example').find("tbody"),
    $trLast = $tableBody.find("tr:last"),
    $trNew = $trLast.clone();
    $trLast.after($trNew);
}

//call to clone and generate tr with input fields
$('#addRow').on( 'click', function () {
    getloder();
} );

// Automatically add a first row of data
$('#addRows').click();

//Subject Table
//Create rows when click the button and create form input fields only for Subject table
$('#addSubject').on( 'click', function () {
    s.row.add( [
        '<input type=\"text\" id=\"subject_id\" name=\"subject_id\" size=\"8\" required/>',

        '<input type=\"text\" id=\"subject_title\" name=\"subject_title\" size=\"33\" required/>',

        '<select class=\"form-control\" name=\"method\" id=\"method\">'+
            '<option value=\"L\" selected>Lecture</option>'+
            '<option value=\"P\">Practical</option>'+
            '<option value=\"C\">Confirence</option>'+
        '</select>',

        '<select class=\"form-control\" name=\"needs\" id=\"needs\">'+
            '<option value=\"C/GPA\" selected>C/GPA</option>'+
            '<option value=\"C/NGPA\">C/NGPA</option>'+
            '<option value=\"O/NGPA\">O/NGPA</option>'+
            '</select>',

        '<input type=\"text\" id=\"credits\" name=\"credits\" size=\"5\" required/>'
        
    ] ).draw( false );
} );

// Automatically add a first row of data
$('#addSubject').click();

//Course_Subject Table
//select specific rows when click on row
$('#example tbody').on( 'click', 'tr', function () {
    if ( $(this).hasClass('selected') ) {
        $(this).removeClass('selected');
    }
    else {
        t.$('tr.selected').removeClass('selected');
        $(this).addClass('selected');
    }
} );
//remove selected row when click on remove button
$('#remove').click( function () {
    t.row('.selected').remove().draw( false );
} );

//Subject Table
$('#subjectTable tbody').on( 'click', 'tr', function () {
    if ( $(this).hasClass('selected') ) {
        $(this).removeClass('selected');
    }
    else {
        s.$('tr.selected').removeClass('selected');
        $(this).addClass('selected');
    }
} );
//remove selected row when click on remove button
$('#removeSubject').click( function () {
    s.row('.selected').remove().draw( false );
} );


//Course_Subject Table
//save data through input fields
$('#reddit').on('click', function() {
    //select each rows
    $('#example > tbody  > tr').each(function() {
        //attached to var as one array

        var postData = {
            'subject_id':$(this).find('#subject_id').val(),
            'credits':$(this).find('#credits').val(),
            'lecturer_id':$(this).find('#lecturer_id').val(),
            'course_code' :$('#course_code').val(),
            'ac_year' :$('#ac_year').val(),
            'semester' :$('#semester').val(),
            'start_date' :$('#start_date').val(),
            'end_date' :$('#end_date').val()
        };

        console.log(postData);
        //send data to laravel controller through post and resource route
        $.ajax({
            type: "POST",
            url: '/course_subject',
            data: postData,
            success: function( msg ) {
                console.log( msg);
            },
            error: function(msg) {
                console.log(msg);
               
            }
        });
    });

});

//Subject Table
//save data through input fields
$('#redditSubject').on('click', function() {
    //select each rows
    $('#subjectTable > tbody  > tr').each(function() {
        //attached to var as one array

        var postDataSubject = {
            'subject_id':$(this).find('#subject_id').val(),
            'subject_title':$(this).find('#subject_title').val(),
            'method':$(this).find('#method').val(),
            'needs':$(this).find('#needs').val(),
            'credits':$(this).find('#credits').val()
        };
        //send data to laravel controller through post and resource route
        $.ajax({
            type: "POST",
            url: '/subject',
            data: postDataSubject,
            success: function( msg ) {
                console.log( msg);
            },
            error: function(msg) {
                console.log(msg);
               
            }
        });
    });

});

});

