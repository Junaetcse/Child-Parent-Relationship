$( document ).ready(function() {
    console.log( "document loaded" );
    $( "#js-input" ).hide();
    $( "#add-folder" ).hide();

    $('#show-folder').click(function(){
        $( "#js-input" ).show();
        $( "#add-folder" ).show();
    });


   $('#add-folder').click(function () {
       var $name = $('#js-input').val();
       var $parent_id = $('#js-input').data('parent_id');
       console.log($name);
       console.log($parent_id);
           $.ajax({
               type: 'post',
               url: 'add-folder',
               data: {
                   '_token':$('meta[name="csrf-token"]').attr('content'),
                   'name': $name ,
                    'parent_id': $parent_id
               },

               success: function(data) {
                   alert('successfully added')
               },
               error:'Something wrong'
           });

   });



});




