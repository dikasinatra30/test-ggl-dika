<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
      <div class="container my-5">
        <form action="{{ route('question-3.store') }}" method="POST">
            @csrf
            <div class="row">
                <div class="col-md-2">
                    <label for="exampleInputEmail1">Input Number</label>
                </div>

                <div class="col-md-8">
                    <div class="form-group">
                        <input type="number" class="form-control" name="total" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                </div>

                <div class="col-md-2">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </form>

        <div class="my-3">
            <div class="row">
                <div class="col-md-2">
                    <h3>Result :</h3>
                </div>
                <div class="col-md-10 text-left">
                    <?php
                        for($a=1; $a<=$total; $a++){
                            for($b=$total; $b>=$a; $b-=1){
                                print('&nbsp');
                            }
                            for($c=1; $c<=$a; $c++){
                                echo '*';
                            }
                            echo "<br/>";
                        }
                        for($a=1; $a<=$total; $a++){
                            for($b=1; $b<=$a; $b++){
                                echo '&nbsp';
                            }
                            for($c=$total; $c>=$a; $c-=1){
                                echo '*';
                            }
                            echo "<br/>";
                        }
                    ?>
                </div>
            </div>
        </div>

      </div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>
