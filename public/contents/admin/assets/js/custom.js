$(document).ready(function(){
    $(document).on("click", "#softDelete", function () {
           var deleteID = $(this).data('id');
           $(".modal_body #modal_id").val( deleteID );
      });
    $(document).on("click", "#restore", function () {
           var restoreID = $(this).data('id');
           $(".modal_body #modal_id").val( restoreID );
      });
    $(document).on("click", "#delete", function () {
           var deleteID = $(this).data('id');
           $(".modal_body #modal_id").val( deleteID );
      });
  });

  