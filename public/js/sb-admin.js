$(function() {

    $('#side-menu').metisMenu();

});

//Loads the correct sidebar on window load,
//collapses the sidebar on window resize.
$(function() {
    $(window).bind("load resize", function() {
        width = (this.window.innerWidth > 0) ? this.window.innerWidth : this.screen.width;
        if (width < 768) {
            $('div.sidebar-collapse').addClass('collapse');
        } else {
            $('div.sidebar-collapse').removeClass('collapse');
        }
    });
});

$(function () {
    $(document).on('click', '.btn-delete', function () {
        var id = $(this).closest('tr').find('.user-id').html();
        deleteAjax('user', id);
    });

    $(document).on('click', '.btn-watch-delete', function () {
        var id = $(this).closest('tr').find('.watch-id').html();
        deleteAjax('watch', id);
    });

    function deleteAjax(typeDelete, id){
        $.ajaxSetup({

            headers: {

                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')

            }

        });
        var url;
        if(typeDelete == 'watch'){
            url = typeDelete +'es/'+id;
        }
        else{
            url = typeDelete +'s/'+id;
        }
        $.ajax({
            type: "DELETE",
            url: url,
            success: function (data) {
                $("#"+typeDelete+"-"+id).remove();
            },
            error: function (data) {
                console.log('ERR');
            }
        });
    }
});
