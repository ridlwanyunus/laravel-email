<!DOCTYPE html>
<html>
    <head>
        <title>Laravel</title>

 <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    </head>
    <body>
        <div class="container">
            <div class="alert alert-success">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                <?php
                if(DB::connection()->getDatabaseName())
               {
                 echo "conncted sucessfully to database ".DB::connection()->getDatabaseName();
               }
                ?>
            </div>
             <form class="form-horizontal" action="{{ url('/email') }}" method="get">
              <div class="form-group">
                <label class="control-label col-sm-2" for="email">From:</label>
                <div class="col-sm-10">
                  <input type="email" class="form-control" id="from" name="from" placeholder="Enter source email">
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-sm-2" for="email">to:</label>
                <div class="col-sm-10">
                  <input type="email" class="form-control" id="to" name="to" placeholder="Enter goal email">
                </div>
              </div>
              <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                  <div class="checkbox">
                    <label><input type="checkbox"> Remember me</label>
                  </div>
                </div>
              </div>
              <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                  <button type="submit" class="btn btn-default">Submit</button>
                </div>
              </div>
            </form>
        </div>
    </body>
</html>
