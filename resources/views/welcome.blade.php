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
                 echo "connected sucessfully to database ".DB::connection()->getDatabaseName()."</br>";
                 echo trans('messages.New', array('count' => $newMessages)); 
               }
                ?>
            </div>
             <form class="form-horizontal" action="{{ url('/email') }}" method="get">
              <div class="form-group">  
                <button type="button" class="btn btn-default">English</button>
                <button type="button" class="btn btn-default">Indonesia</button> 
              </div>
             </form>
             <form class="form-horizontal" action="{{ url('/email') }}" method="get">
              <div class="form-group">
                <label class="control-label col-sm-2" for="email">{{ trans('messages.To') }}:</label>
                <div class="col-sm-10">
                  <input type="email" class="form-control" id="to" name="to" placeholder="Enter to">
                </div>
              </div>
                <div class="form-group">
                <label class="control-label col-sm-2" for="email">Cc:</label>
                <div class="col-sm-10">
                  <input type="email" class="form-control" id="cc" name="cc" placeholder="Enter cc">
                </div>
              </div>
                <div class="form-group">
                <label class="control-label col-sm-2" for="email">Bcc:</label>
                <div class="col-sm-10">
                  <input type="email" class="form-control" id="bcc" name="bcc" placeholder="Enter bcc">
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-sm-2" for="subject">{{ trans('messages.Subject') }}:</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="subject" name="subject" placeholder="Enter Subject">
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-sm-2" for="content">{{ trans('messages.Content') }}:</label>
                <div class="col-sm-10">
                  <textarea rows="10" cols="150" id="content" name="content" placeholder="Describe yourself here..."></textarea>
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
