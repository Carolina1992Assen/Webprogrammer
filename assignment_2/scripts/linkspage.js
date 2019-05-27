$("#form-alert").hide();

function fade () {
    $("#button").click(function () {
        $('#linklist').fadeToggle();
    });
}

function input () {
    $("#add-button").click(function () {

        var link = $('#link').val();
        var url = $('#url').val();
        let input = [link, url];

        let fields = 0;
        $.each(input, function (index, value) {
            if (value.length === 0) {
                fields = fields + 1;
            }
        });

        if (fields > 0) {
            alert("Please fill in all the fields!");

        } else {
            alert("good!");
            var a = document.createElement('a');
            $(a).attr('href', url);
            $(a).text(link);
            $('#linklist').append('<li></li>');
            $('#linklist li:last-child').append(a).wrap('<h3></h3>');



        }
    });
}





    $("#remove").click(function () {
        $("body").click(function (event) {
            $(event.target.nodeName).remove();
            $("#remove").click(function () {
                event.stopImmediatePropagation();
            });
        });
    });







$(document).ready(function() {
   fade();
   input();
   handler();

});