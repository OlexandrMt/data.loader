<!DOCTYPE html>
<html lang='en'>
<head>
  <meta charset='UTF-8'>
  <meta http-equiv='X-UA-Compatible' content='IE=edge'>
  <meta name='viewport' content='width=device-width, initial-scale=1.0'>
  <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css' rel='stylesheet' integrity='sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC' crossorigin='anonymous'>
  <link rel="shortcut icon" href="img/file-earmark-person.svg" type="image/x-icon">
  <link rel="stylesheet" href="style.css">
  <title>Data loader</title>
</head>
<body>
<!-- Header -->
<nav class='navbar sticky-top navbar-light bg-dark'>
  <div class='container-fluid'>
    <a class='navbar-brand'>
      <span class='text-light'>Data.</span>
      <span class='text-warning'>loader</span>
    </a>
  </div>
</nav>
<!-- End of header -->

<!-- Form -->
<div class="content-block container mb-5">
  <div class="col-12 mt-3 mt-lg-5 profile-part-name">
    <h4>
    <svg xmlns="http://www.w3.org/2000/svg" width="27" height="27" fill="currentColor" class="bi bi-person-lines-fill" viewBox="0 0 16 16">
      <path d="M6 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm-5 6s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zM11 3.5a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1h-4a.5.5 0 0 1-.5-.5zm.5 2.5a.5.5 0 0 0 0 1h4a.5.5 0 0 0 0-1h-4zm2 3a.5.5 0 0 0 0 1h2a.5.5 0 0 0 0-1h-2zm0 3a.5.5 0 0 0 0 1h2a.5.5 0 0 0 0-1h-2z"/>
    </svg>
      Персональні дані
    </h4>
  </div>
  <form id="personal-form" action="post.php" method="POST" enctype="multipart/form-data">
    <div class="profile-form">
      <div class="row">
        <div class="mb-3 mt-2 col-12 col-lg-4">
          <label for="surname" class="form-label">Прізвище</label>
          <input id="surname" class="form-control" type="text" name="surname" value="" minlength="3" maxlength="20" required>
        </div>
        <div class="mb-3 mt-2 col-12 col-lg-4">
          <label for="name" class="form-label">Ім'я</label>
          <input id="name" class="form-control" type="text" name="name" value="" minlength="3" maxlength="20" required>
        </div>
        <div class="mb-3 mt-2 col-12 col-lg-4">
          <label for="birthday" class="form-label">Дата народження</label>
          <input id="birthday" class="form-control" type="date" name="birthday" value="" minlength="3" maxlength="20" required>
        </div>
      </div>
      <div class="row">
      <div class="mb-3 mt-2 col-12 col-lg-4">
          <label for="phone" class="form-label">Телефон</label>
          <input id="phone" class="form-control" type="text" name="phone" value="" minlength="3" maxlength="20" required>
          <span class="input-info">Приклад: +38(0XX)XXX-XX-XX</span>
        </div>
      </div>
    </div>
    <div class="mt-3 d-flex">
      <div class="">
        <h4>
        <svg xmlns="http://www.w3.org/2000/svg" width="27" height="27" fill="currentColor" class="bi bi-person-bounding-box" viewBox="0 0 16 16">
            <path d="M1.5 1a.5.5 0 0 0-.5.5v3a.5.5 0 0 1-1 0v-3A1.5 1.5 0 0 1 1.5 0h3a.5.5 0 0 1 0 1h-3zM11 .5a.5.5 0 0 1 .5-.5h3A1.5 1.5 0 0 1 16 1.5v3a.5.5 0 0 1-1 0v-3a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 1-.5-.5zM.5 11a.5.5 0 0 1 .5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 1 0 1h-3A1.5 1.5 0 0 1 0 14.5v-3a.5.5 0 0 1 .5-.5zm15 0a.5.5 0 0 1 .5.5v3a1.5 1.5 0 0 1-1.5 1.5h-3a.5.5 0 0 1 0-1h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 1 .5-.5z"/>
            <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm8-9a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
        </svg>
            Аватар
        </h4>
      </div>
      <div class="btn-group mx-5" role="group" aria-label="Basic radio toggle button group">
        <input type="radio" class="btn-check" name="btnradio" id="btnradio1">
        <label class="btn btn-outline-warning" for="btnradio1" onclick="showAvatar();">завантажити фото</label>

        <input type="radio" class="btn-check" name="btnradio" id="btnradio2" checked>
        <label class="btn btn-outline-warning" for="btnradio2" onclick="hideAvatar();">не завантажувати фото</label>
      </div>
    </div>
    <div id="avatar" class="mt-4 text-center">
      <label class="lable" for="photo">
        <img id="output" width="260" height="260" src="img/add_photo.png" alt="Обрати фото">
      </label>
      <input name="photo" id="photo" type="file" accept="image/*" onchange="document.getElementById('output').src = window.URL.createObjectURL(this.files[0])">             
    </div>
    <div class="mt-3 px-5 d-flex flex-row-reverse">
      <button type="submit" class="btn btn-lg btn-outline-warning">Зберегти</button>
    </div>
  </form>
</div>
<script src="main.js"></script>
<script src="https://unpkg.com/imask"></script>
<script>
  var phoneMask = IMask(
  document.getElementById('phone'), {
    mask: '+{38}(000)000-00-00'
  });
</script>
<!-- End of form -->
<hr>
<!-- Table with data feom database -->
<table class='table table-hover'>
  <thead>
    <tr>
      <th scope='col'>#</th>
      <th scope='col'>Прізвище</th>
      <th scope='col'>Ім'я</th>
      <th scope='col'>Дата народження</th>
      <th scope='col'>Телефон</th>
      <th scope='col'>Аватар</th>
      <th scope='col'>Дата створення</th>
      <th scope='col'>Видалити</th>
    </tr>
  </thead>
  <?php
    $servername = "db";
    $username = "user";
    $password = "test";
    $dbname = 'myDb';

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }

    $sql = "SELECT id,surname, name, birthday_date, phone_number, avatar, created_at FROM Person";
    $result = $conn->query($sql);

    if($result->num_rows > 0) {
      while($row = $result->fetch_assoc()) {
        echo "
        <tbody>
          <tr>
            <th scope='row'>".$row['id']."</th>
            <td>".$row['surname']."</td>
            <td>".$row['name']."</td>
            <td>".$row['birthday_date']."</td>
            <td>".$row['phone_number']."</td>
            <td><img class='rounded-circle' src='".$row['avatar']."' alt='photo' width='30' height='30'></td>
            <td>".$row['created_at']."</td>
            <td>
              <form action='destroy.php' method='post'>
                <input type='hidden' name='id' value='".$row['id']."'>
                <button type='submit' class='btn btn-outline-warning btn-sm'>Видалити</button>
              </form>
            </td>
          </tr>
        </tbody> 
        ";
      }
    } else {
      echo "Відсутні записи";
    }
  ?>
</table>
<!-- End of table -->
</body>
</html>