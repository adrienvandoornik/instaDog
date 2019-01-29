<!DOCTYPE html>
<html lang="en">

<head>
    <title>InstaDog</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="article.css">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
        integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
</head>

<body>

    <!-- ////HEADER////////////////////////////////////////////////////////////////////////////////////////////////////////// -->

    <?php
    include 'header.php';
    ?>

    <!-- ////Photo Article////////////////////////////////////////////////////////////////////////////////////////////////// -->

    <div class="container">
        <div class="d-flex justify-content-center">
            <div class="card mt-5" style="width:750px">
                <img class="card-img-top"
                    src="https://proxy.duckduckgo.com/iu/?u=http%3A%2F%2Fkimsulli.files.wordpress.com%2F2011%2F06%2Fdog3.jpg&f=1"
                    alt="Lights" style="width:100%" alt="Card image">

                <div class="card-body">
                    <h4 class="card-title">Feioso</h4>
                    <p class="card-text">Some example text some example text. John Doe is an architect and engineer sdsd
                        dffd wewefefref gergergerg ergergerg ergerg gf a we t ree rger eg</p>
                </div>
            </div>
        </div>
    </div>



    <div class="container">
        <div class="container mt-5">
            <h3>Commentaires</h3>
            <div class="media border p-3 bg-white">
                <img src="https://proxy.duckduckgo.com/iu/?u=https%3A%2F%2Fcdn3.iconfinder.com%2Fdata%2Ficons%2Fbusiness-round-flat-vol-1-1%2F36%2Fuser_account_profile_avatar_person_student_male-512.png&f=1"
                    alt="John Doe" class="mr-3 mt-3 rounded-circle" style="width:60px;">
                <div class="media-body">
                    <h4>John Doe <small><i>Posted on February 19, 2016</i></small></h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                        labore et dolore magna aliqua swded tzh j8 8k89k9 l0l k nh n gbt rtve rvx rre.</p>
                </div>
            </div>
        </div>
    </div>
    <!--
///Inserer Commentaires///////////////////////////////////////////////////////////////////////////////////////////////////////// -->

    <div class="container mt-3">
        <form action="/action_page.php">
            <div class="form-group">
                <label for="comment">Comment:</label>
                <textarea class="form-control" rows="5" id="comment" name="text"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

    <!-- ///Autres Articles///////////////////////////////////////////////////////////////////////////////////////////////////// -->

    <div class="container">
        <h3 class="text-center mt-3 text-decoration">Autres Articles</h3>
        <div class="d-flex justify-content-center align-items-center">

            <div class="card mt-5 mr-4" style="width:100px">
                <img class="card-img-top"
                    src="https://proxy.duckduckgo.com/iu/?u=http%3A%2F%2Fkimsulli.files.wordpress.com%2F2011%2F06%2Fdog3.jpg&f=1"
                    alt="Lights" style="width:100%" alt="Card image">
            </div>

            <div class="card mt-5" style="width:100px">
                <img class="card-img-top"
                    src="https://proxy.duckduckgo.com/iu/?u=http%3A%2F%2Fkimsulli.files.wordpress.com%2F2011%2F06%2Fdog3.jpg&f=1"
                    alt="Lights" style="width:100%" alt="Card image">
            </div>

            <div class="card mt-5 ml-4" style="width:100px">
                <img class="card-img-top"
                    src="https://proxy.duckduckgo.com/iu/?u=http%3A%2F%2Fkimsulli.files.wordpress.com%2F2011%2F06%2Fdog3.jpg&f=1"
                    alt="Lights" style="width:100%" alt="Card image">
            </div>

        </div>
    </div>



    <!-- /////Footer////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
    <?php
    include 'footer.php';

    ?>
</body>

</html>