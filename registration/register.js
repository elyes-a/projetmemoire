/*un prob pour alert avec ajax
<script type="text/javascript">
  $(function(){
    $('#create').click(function(e){

      var valid = this.form.checkValidity();
      if(valid){
      var name      = $('#name').val();
      var email     = $('#email').val();
      var password  = $('#password').val();
        e.preventDefault(); 
        $.ajax({
          type: 'POST',
          url: 'process.php',
          data: {name: name,email: email,password: password},
          success: function(data){
          Swal.fire({
                'title': 'Successful',
                'text': data,
                'type': 'success'})
          },
          error: function(data){
            Swal.fire({
                'title': 'Errors',
                'text': 'There were errors while saving the data.',
                'type': 'error'})
          }
        });
      }
    });
  });
</script>*/
/*un problem avec cet animation lors d'affichage des alert
$('.message a').click(function(){
   $('form').animate({height: "toggle", opacity: "toggle"}, "slow");*/