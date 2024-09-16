<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Pertemuan 1</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body class="bg-success-subtle">
  <div class="container my-5 bg-success rounded px-3 pt-3 pb-5 text-white">
    <h1>Pertemuan 1</h1>
    <form action="kirim.php" method="post">
      <!-- Nama -->
      <div class="mb-3">
        <label for="nama" class="form-label">Nama : </label>
        <input type="text" class="form-control" id="nama">
      </div>
      <!-- Password -->
      <div class="mb-3">
        <label for="pass" class="form-label">Password : </label>
        <input type="password" class="form-control" id="pass">
      </div>
      <!-- Select -->
      <div class="mb-3">
        <label for="age">Age Range : </label>
        <select class="form-select" aria-label="Default select example" id="age">
          <option value="16-30" selected>16-30</option>
          <option value="30-40">30-40</option>
          <option value="40-50">40-50</option>
        </select>
      </div>
      <!-- Life Story -->
      <div class="mb-3">
        <label for="life">Life Story : </label>
        <textarea class="form-control" placeholder="Enter your life story" id="life"></textarea>
      </div>
      <!-- Fav -->
      <div class="mb-3">
        <label for="life">Yout Favorite sport : </label>
        <div class="d-flex gap-3">
          <div class="form-check">
            <input class="form-check-input" type="radio" name="fav" id="a">
            <label class="form-check-label" for="a">
              Tenis
            </label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="radio" name="fav" id="b">
            <label class="form-check-label" for="b">
              Cricket
            </label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="radio" name="fav" id="c">
            <label class="form-check-label" for="c">
              Baseball
            </label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="radio" name="fav" id="d">
            <label class="form-check-label" for="d">
              Polo
            </label>
          </div>
        </div>
      </div>
      <!-- Language -->
      <div class="mb-3">
        <label for="life">Language you choose : </label>
        <div class="d-flex gap-3">
          <div class="form-check">
            <input class="form-check-input" type="checkbox" name="lang" id="a1">
            <label class="form-check-label" for="a1">
              PHP
            </label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="checkbox" name="lang" id="b1">
            <label class="form-check-label" for="b1">
              C++
            </label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="checkbox" name="lang" id="c1">
            <label class="form-check-label" for="c1">
              Delphi
            </label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="checkbox" name="lang" id="d1">
            <label class="form-check-label" for="d1">
              Java
            </label>
          </div>
        </div>
      </div>
      <!-- button -->
      <input class="btn btn-light w-100" type="submit"></input>
    </form>
  </div>



  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>