//object1 = JSON.stringify(localStorage);

//console.log(object1.toString());

/*
//for(var i=0;i<localStorage.length; i++) {
   // var key = localStorage.key( i );
    var item = JSON.parse( localStorage.getItem( "example.pdf/annotations") );
    console.log(item);
//}
*/


$(document).ready(function () {
    $('#save').on('click', function (e) {
        var item = JSON.parse(localStorage.getItem("./pdfs/example.pdf/annotations"));
        //console.log(item);
        $.ajax({
            type: 'POST',
            url: '../../ajax/pdfViewerAnnotation.php',
            dataType: "json",
            data: {action: 'test', item: item },
            success: function (data) {
                if (data.status == 'ok') {
                    console.log(data.msg);
                } else {

                    alert("Upssss, something was wrong...");
                }
            }
        });
        e.preventDefault();
    });
});
