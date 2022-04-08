<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>PDO Update</title>
  </head>
  <body>
      <h1>Update</h1>

<div class="container mt-5">
    <form action="./update_script" method="post">
      <p>Bodemformaat</p>
                    <select name="formaat" class="form-select" aria-label="Default select example">
                        <option selected value="20">20 centimeter</option>
                        <option value="25">25 centimeter</option>
                        <option value="30">30 centimeter</option>
                    </select>
                    <br>
                    <p>Saus</p>
                    <select name="saus" id="saus" class="form-select" aria-label="Default select example">
                        <option selected value="crudo">salsa crudo</option>
                        <option value="verde">salsa verde</option>
                        <option value="roja">salsaroja</option>
                        <option value="creme">creme fraiche</option>                                                       
                    </select>
                    <br>                                                
                    <p>Bonen</p>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" value="kidneybonen" name="bonen" id="flexRadioDefault1">
                        <label class="form-check-label" for="flexRadioDefault1">
                            kidneybonen
                        </label>
                        </div>

                        <br>
                        <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" value="zwartebonen" name="bonen" id="flexRadioDefault2" checked>
                        <label class="form-check-label" for="flexRadioDefault2">
                            zwartebonen
                        </label>
                    </div>

                    <br>
                        <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" value="bruinebonen" name="bonen" id="flexRadioDefault3" checked>
                        <label class="form-check-label" for="flexRadioDefault3">
                            Bruinebonen
                        </label>
                    </div>
                    <p>Rijst</p>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" value="witte" name="rijst" id="flexRadioDefault1">
                        <label class="form-check-label" for="flexRadioDefault1">
                            witte
                        </label>
                        </div>

                        <br>
                        <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" value="zwarte" name="rijst" id="flexRadioDefault2" checked>
                        <label class="form-check-label" for="flexRadioDefault2">
                            zwarte
                        </label>
                    </div>

                    <br>
                        <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" value="bruine" name="rijst" id="flexRadioDefault3" checked>
                        <label class="form-check-label" for="flexRadioDefault3">
                            bruine
                        </label>
                    </div>


                    <div class="d-grid gap-2">
                      <td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
                      <button type="submit" name="submit" class="btn btn-primary">Verstuur</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

<footer>
    <h1><a href="./read.php">User tables</a></h1>
</footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>