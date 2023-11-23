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
                    <h1> modifie Bien </h1>

                    <form role="form">

                        <div class="form-group">
                            <label for="nom" class="iconic user" >  <span class="required">*</span></label>
                            <input type="text" class="form-control" name="username" id="username" value="{{$bien->nomBien}}"  required="required" placeholder="Hi friend, how may I call you ?">
                        </div>
                        <div class="form-group">
                            <div class="form-group">
                                <label for="exampleSelect1" class="form-label mt-4"></label>
                                <select class="form-control" id="exampleSelect1" value="{{$bien->categorie}}">
                                  <option>luxe</option>
                                  <option>moyen</option>
                                </select>
                              </div>
                        </div>
                        <div class="form-group">
                            <label for="image" class="iconic quote-alt"></label>
                            <input type="file" class="form-control" name="image" id="image" value="{{ asset('template/img/'.$bien->image) }}"alt="" required="required" placeholder="What would you like to talk about?">
                        </div>
                        <div class="form-group">
                            <label for="message" class="iconic comment"></label>
                            <textarea name="description" id="description"  class="form-control" rows="3" placeholder="la description"  required="required">{{$bien->description}}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="adresse" class="iconic quote-alt"></label>
                            <input type="text" class="form-control" name="adresse" value="{{$bien->adresse}}" id="adresse"  required="required" placeholder="l'adresse">
                        </div>
                        <div class="form-group">
                            <label for="exampleSelect1" class="form-label mt-4"></label>
                            <select class="form-control" id="exampleSelect1" value="{{$bien->statu}}">
                              <option>disponible</option>
                              <option>occupe</option>
                            </select>
                          </div>
                          <div class="form-group">
                            <label for="date" class="iconic quote-alt"></label>
                            <input type="date" class="form-control" name="date" value=" {{$bien->date}}" id="date"  required="required" placeholder="What would you like to talk about?">
                        </div>
                        <a href="/pageAdmin">
                        <input type="submit" value=" ★ modifer👍" />
                    </a>
                    </form>
                </div>
            </div>

        </div>
    </body>
</html>
