<?php session_start();?>
<!doctype html>
<html lang="ru">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">

    <title>Личный кабинет</title>
    <style>
      p {
        font-size: 1.5rem;
      }
      .edit-btn {
        color: green;
        cursor: pointer;
      }
      .save-btn {
        color: blue;
        cursor: pointer;
      }
      .cancel-btn {
        color: red;
        cursor: pointer;
      }
    </style>
  </head>
  <body>
    <div class="container mt-5">
      <h1 class="text-center">Личный кабинет</h1>
      <div class="row mt-3">
        <div class="col-12">
          <p>Имя: <span><?php echo $_SESSION["name"]; ?></span>
          <span class="edit-btn">&nbsp;[Изменить]</span>
          <span class="save-btn" hidden>[Сохранить]</span>
          <span class="cancel-btn" hidden>[Отменить]</span>
        </p>

          <p>Фамилия: <span><?php echo $_SESSION["lastname"]; ?></span>
          <span class="edit-btn">&nbsp;[Изменить]</span>
          <span class="save-btn" hidden>[Сохранить]</span>
          <span class="cancel-btn" hidden>[Отменить]</span>
        </p>

          <p>E-mail: <?php echo $_SESSION["email"]; ?></p>
          <p>Id: <?php echo $_SESSION["id"]; ?></p>
        </div>
      </div>
    </div>
    <script>
      let edit_buttons = document.querySelectorAll(".edit-btn");
      let save_buttons = document.querySelectorAll(".save-btn");
      let cancel_buttons = document.querySelectorAll(".cancel-btn");

      for (let i = 0; i < edit_buttons.length; i++) {
          let inputValue = edit_buttons[i].previousElementSibling.innerText;

        edit_buttons[i].addEventListener("click", ()=>{

          edit_buttons[i].previousElementSibling.innerHTML = `<input type="text" value="${inputValue}">`;
          save_buttons[i].hidden = false;
          cancel_buttons[i].hidden = false;
          edit_buttons[i].hidden = true;
        })
        cancel_buttons[i].addEventListener("click", () => {
          edit_buttons[i].previousElementSibling.innerText = inputValue;
          save_buttons[i].hidden = true;
          cancel_buttons[i].hidden = true;
          edit_buttons[i].hidden = false;
        })

        save_buttons[i].addEventListener("click", () => {
          edit_buttons[i].previousElementSibling.innerText = edit_buttons[i].previousElementSibling.firstElementChild.value;
          save_buttons[i].hidden = true;
          cancel_buttons[i].hidden = true;
          edit_buttons[i].hidden = false;
        });

      }
    </script>

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>

  </body>
</html>