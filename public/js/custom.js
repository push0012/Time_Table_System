$(document).ready(function() {

    //Define DataTable
    var t = $('#example').DataTable({
    paging: false,
    searching: false,
    ordering:  false,
    info: false,
    select: 'os'
});

//Call Lecturer Name List
$.ajax({
    type: "GET",
    url: '/lecturer',
    //data: data,
    success: function( msg ) {
        $.each(msg, function(value,key) {   
            $("#lecturer_id").append($("<option>").attr("value", key.lecturer_id).text(key.title+" "+key.last_name+" "+key.initial));
        });
    },
    error: function(msg) {
        console.log(msg);
       
    }
});

//Create rows when click the button and create form input fields
$('#addRow').on( 'click', function () {
    t.row.add( [
        '<input type=\"text\" id=\"subject_id\" name=\"subject_id\" size=\"8\" required/>',

        '<input type=\"text\" id=\"subject_title\" name=\"subject_title\" size=\"33\" required/>',

        '<select class=\"form-control\" name=\"method\" id=\"method\">'+
            '<option value=\"Lecture\" selected>Lecture</option>'+
            '<option value=\"Practical\">Practical</option>'+
        '</select>',

        '<select class=\"form-control\" name=\"needs\" id=\"needs\">'+
            '<option value=\"C/GPA\" selected>C/GPA</option>'+
            '<option value=\"C/NGPA\">C/NGPA</option>'+
            '<option value=\"O/NGPA\">O/NGPA</option>'+
            '</select>',

        '<select class=\"form-control\" name=\"lecturer_id\" id=\"lecturer_id\">'+
            '</select>',

        '<input type=\"text\" id=\"credits\" name=\"credits\" size=\"5\" required/>'
        
    ] ).draw( false );
} );

// Automatically add a first row of data
$('#addRow').click();

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

//save data through input fields
$('#reddit').on('click', function() {
    //select each rows
    $('#example > tbody  > tr').each(function() {
        //attached to var as one array

        var postData = {
            'subject_id':$(this).find('#subject_id').val(),
            'subject_title':$(this).find('#subject_title').val(),
            'method':$(this).find('#method').val(),
            'needs':$(this).find('#needs').val(),
            'lecturer_id':$(this).find('#lecturer_id').val(),
            'credits':$(this).find('#credits').val(),
            'course_code' :$('#course_code').val(),
            'ac_year' :$('#ac_year').val(),
            'semester' :$('#semester').val()
        };
        //send data to laravel controller through post and resource route
        $.ajax({
            type: "POST",
            url: '/subject',
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
});

