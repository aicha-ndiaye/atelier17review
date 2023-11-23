@include('cssBien')

<!------ Include the above in your HEAD tag ---------->

<!DOCTYPE html>

<html lang="en">
    <head>
        <meta charset="UTF-8">

        <title></title>
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
        <link href='http://fonts.googleapis.com/css?family=Questrial|Droid+Sans|Alice' rel='stylesheet' type='text/css'>
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div></div>
                <img id="postcard" src="{{ asset('template/img/header.jpg') }}" alt="postcard" class="img-responsive move">
                <div id="content" >
                    <h1> Ajout Bien </h1>

                    <form role="form" action="/ajoutBiens" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="nom" class="iconic user" > Nom <span class="required">*</span></label>
                            <input type="text" class="form-control" name="nomBien" id="username"  required="required" placeholder="Hi friend, how may I call you ?">
                        </div>
                        <div class="form-group">
                            <div class="form-group">
                                <label for="exampleSelect1" class="form-label mt-4">categorie</label>
                                <select class="form-control" id="exampleSelect1" name="categorie">
                                  <option>luxe</option>
                                  <option>moyen</option>
                                </select>
                              </div>
                        </div>
                        <div class="form-group">
                            <label for="image" class="iconic quote-alt"> image </label>
                            <input type="file" class="form-control" name="image" id="image"  required="required" placeholder="What would you like to talk about?">
                        </div>
                        <div class="form-group">
                            <label for="message" class="iconic comment"> description </label>
                            <textarea name="description" id="description"  class="form-control" rows="3" placeholder="Don't be shy, live me a friendly message and I'll answer as soon as possible"  required="required"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="adresse" class="iconic quote-alt"> adresse </label>
                            <input type="text" class="form-control" name="adresse" id="adresse"  required="required" placeholder="What would you like to talk about?">
                        </div>
                        <div class="form-group">
                            <label for="exampleSelect1" class="form-label mt-4">statut</label>
                            <select class="form-control" id="exampleSelect1 "name="statut">
                              <option>disponible</option>
                              <option>occupe</option>
                            </select>
                          </div>
                          <div class="form-group">
                            <label for="date" class="iconic quote-alt">date</label>
                            <input type="date" class="form-control" name="date" id="date"  required="required" placeholder="What would you like to talk about?">
                        </div>
                        <input type="submit" value=" ★ ajouter👍" />
                    </form>
                </div>
            </div>

        </div>
    </body>
</html>
