  <!DOCTYPE html>
  <html>
  <head>
    <title>Append Demo</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <style type="text/css">
      .row{
        border: 1px solid;
      }
      i{
        font-size: 24px;
      }
    </style>
  </head>
  <body>
    <p></p>
    <p></p>
    <div class="container">
      <div class="row">
        <div class="col-sm">
          One of three columns
        </div>
        <div class="col-sm">
          One of three columns
        </div>
        <div class="col-sm">
          One of three columns
        </div>
        <div class="col-sm">
          <i class="fa fa-plus" aria-hidden="true"></i>
          <i class="fa fa-trash" aria-hidden="true"></i>
        </div>
      </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script type="text/javascript">

      var newDivAppend = '<div class="row">\
      <div class="col-sm">\
      One of three columns\
      </div>\
      <div class="col-sm">\
      One of three columns\
      </div>\
      <div class="col-sm">\
      One of three columns\
      </div>\
      <div class="col-sm">\
      <i class="fa fa-plus" aria-hidden="true"></i>\
      <i class="fa fa-trash" aria-hidden="true"></i>\
      </div>\
      </div>';

      var x = 0;
      $('.container').on('click', '.fa-plus', function() {
        $(newDivAppend+'<div class="col-sm"><b>'+x+'</b><div>').insertAfter($(this).closest('.row'));
        x++;

      });

      $('.container').on('click', '.fa-trash', function() {
        $(this).closest('.row').remove();
      });
    </script>
  </body>
  </html>
