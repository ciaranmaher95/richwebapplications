$(document).on('click','#submit',function(e) {
  var data = $("#form").serialize();
  $.ajax({
         data: data,
         type: "post",
         url: "includes/addmembers.php",
         success: function(data){
             
         }
});
 });
     
