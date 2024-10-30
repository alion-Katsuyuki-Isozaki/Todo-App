$(function(){
    $(document).ready(function(){
        $('#deleteButton').on("click", function(){
            return confirm('本当に削除しますか？');
        })
    })

    /*$('#check-display-all').on('change',function(){
        if ($(this).val() == '') {
            $(this).val('show');
        }

        $(`#display-all-task`).submit();

    });*/

    /*$('#check-display-all').on('change',function(){
        $(`.complete`).toggle();
    });*/

   $('#check-display-all').on('change',function(){
        if($(this).prop('checked')){
            $(`.complete`).hide();
        }else{
            $(`.complete`).show();
        }



    });

})
