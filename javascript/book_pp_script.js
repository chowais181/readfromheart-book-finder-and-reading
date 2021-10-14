$(document).ready(function(){
 
    fetch_data();
   
    function fetch_data()
    {
     var action = "fetch";
     $.ajax({
      url:"book_action.php",
      method:"POST",
      data:{action:action},
      success:function(data)
      {
       $('#image_data').html(data);
      }
     })
    }
    $('#add').click(function(){
     $('#imageModal').modal('show');
     $('#image_form')[0].reset();
     $('.modal-title').text("Add new book");
     $('#image_id').val('');
     $('#action').val('insert');
     $('#insert').val("Insert");
    });
    $('#image_form').submit(function(event){
     event.preventDefault();
     var image_name = $('#image').val();
     if(image_name == '')
     {
      alert("Please Select file");
      return false;
     }
     else
     {
      var extension = $('#image').val().split('.').pop().toLowerCase();
      if(jQuery.inArray(extension, ['pdf']) == -1)
      {
       alert("Invalid! file must be in .pdf extension");
       $('#image').val('');
       return false;
      }
      else
      {
       $.ajax({
        url:"book_action.php",
        method:"POST",
        data:new FormData(this),
        contentType:false,
        processData:false,
        success:function(data)
        {
         alert(data);
         fetch_data();
         $('#image_form')[0].reset();
         $('#imageModal').modal('hide');
        }
       });
      }
     }
    });
 
}); 