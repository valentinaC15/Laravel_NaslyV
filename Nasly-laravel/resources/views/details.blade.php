<!DOCTYPE html>
<html data-whatinput="keyboard" data-whatintent="keyboard" class=" whatinput-types-initial whatinput-types-keyboard"><head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
        <meta charset="UTF-8">
        <title>PHP MVC Frameworks</title>
            <link rel="icon" type="image/x-icon" href="favicon.ico" />
            <link rel="stylesheet" href="{{asset('/html/assets/css/app.css')}}">
            <link rel="stylesheet" href="{{asset('/html/assets/css/Foundation.css')}}">
    <meta class="foundation-mq"></head>
    <body>

        <!-- Start Top Bar -->
    <div class="top-bar">
      <div class="row">
        <div class="top-bar-left">
          <ul class="dropdown menu" data-dropdown-menu="tckp8q-dropdown-menu" role="menubar">
            <li role="menuitem">PHP MVC Frameworks</li>
          </ul>
        </div>
      </div>
    </div>
    <!-- End Top Bar -->

    <br>
    
    
    <div class="row">
      <div class="medium-12 large-12 columns">
        <h4>Details</h4>
        <table>
          <tr>
            <th>Name</th>
            <th>Last Name</th>
            <th>Email</th>
            <th width="200">Action</th>
          </tr>
          <tr>
              <td>{{ $Clientes['name'] }}</td>
              <td>{{ $Clientes['last_name'] }}</td>
              <td>{{ $Clientes['email'] }}</td>
          </tr>
        </table>
        <form method="POST">
          <div class="medium-4  columns">
            <label>Name</label>
            <input type="text" name="name">
          </div>
          <div class="medium-4  columns">
            <label>Last Name</label>
            <input type="text" name="last_name">
          </div>
          <div class="medium-4  columns">
            <label>Email</label>
            <input type="text" name="email">
          </div>
          <div class="medium-12  columns">
            <input value="SEND" class="button success hollow" type="submit">
          </div>
        </form>
      </div>
    </div>


    <div class="row column">
      <hr>
      <ul class="menu">
        <li class="float-right">Copyright Footer</li>
      </ul>
    </div>

      <script src="{{asset('/html/assets/js/vendor/jquery.js')}}"></script>
        <script src="{{asset('/html/js/vendor/what-input.js')}}"></script>
        <script src="{{asset('/html/js/vendor/foundation.js')}}"></script>
        <script src="{{asset('/html/js/app.js')}}"></script>    </body>
</html>