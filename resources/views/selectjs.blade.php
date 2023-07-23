<script src="https://code.jquery.com/jquery-1.11.0.min.js"></script>
<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
<script>
   
        $(document).ready(function(){    
      $("#s1").on('change', function(){
            var category = $(this).val();
            // alert(category);
             $.ajax({
              type: 'get',
              dataType: 'html',
              url: '{{url('/product_details')}}',
              data: {'category':category},
              success:function(data){
                // console.log(data);
                $("#courses").html(data);
             }
            });
        });
       
    });
</script>
      
<script>
  $(document).ready(function(){
     $('#showvideo').click(function(){
        $('#myModal').show();
     });
  });       
</script>




