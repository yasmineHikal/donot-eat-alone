@if(Session::has('flash_message'))
<div class="container">
<br>
<div class="alert alert-danger" id="mes">
{{Session::get('flash_message')}}

</div>

</div>

      <script>
      swal({   title: "{{Session::get('flash_message')}} .",   text: " ",   timer: 2000,   showConfirmButton: false });
      </script>


@endif