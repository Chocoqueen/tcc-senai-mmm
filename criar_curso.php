<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8" />  
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />  
    <title>Formulário de Cadastro</title>
    <link rel="stylesheet" href="css/bootstrap.css" />
    <link rel="stylesheet" href="css/styles.css" />
    <!-- Fonte -->
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;600&display=swap" rel="stylesheet" />
  </head>
  <body>
    <?php include "navbar.php" ?>
    <h1>Novo Curso</h1>

    <form>
      <fieldset>
        <legend>Preencha corretamente</legend>

        <div class="g-3 mb-3">
          <label for="nome" class="form-label">Nome</label>
          <div class="col">
            <input type="text" class="form-control" placeholder="Nome" aria-label="Nome" />
          </div>
        </div>

        <div class="row g-3 mb-3">
          <div class="col">
            <label for="turno" class="form-label">Turno</label>
            <select id="turno" class="form-select">
              <option selected>Selecione</option>
              <option>Manhã</option>
              <option>Tarde</option>
              <option>Noite</option>
            </select>
          </div>
        </div>

        <div class="container mt-5">
          <table class="table table-bordered table-striped text-center align-middle">
            <thead class="table-primary">
            </thead>
            <tbody>
              <tr>
                <th scope="row">Manhã</th>
               <th><button type="button" class="btn btn-white" onclick="toggleBlue(this)">Seg</button></th>
                <th><button type="button" class="btn btn-white" onclick="toggleBlue(this)">Terç</button></th>
                <th><button type="button" class="btn btn-white" onclick="toggleBlue(this)">Qua</button></th>
                <th><button type="button" class="btn btn-white" onclick="toggleBlue(this)">Qui</button></th>
                <th><button type="button" class="btn btn-white" onclick="toggleBlue(this)">Sex</button></th>
                <th><button type="button" class="btn btn-white" onclick="toggleBlue(this)">Sáb</button></th>
              </tr>
              <tr>
                <th scope="row">Tarde</th>
               <th><button type="button" class="btn btn-white" onclick="toggleBlue(this)">Seg</button></th>
                <th><button type="button" class="btn btn-white" onclick="toggleBlue(this)">Terç</button></th>
                <th><button type="button" class="btn btn-white" onclick="toggleBlue(this)">Qua</button></th>
                <th><button type="button" class="btn btn-white" onclick="toggleBlue(this)">Qui</button></th>
                <th><button type="button" class="btn btn-white" onclick="toggleBlue(this)">Sex</button></th>
                <th><button type="button" class="btn btn-white" onclick="toggleBlue(this)">Sáb</button></th>
              </tr>
              <tr>
                <th scope="row">Noite</th>
                <th><button type="button" class="btn btn-white" onclick="toggleBlue(this)">Seg</button></th>
                <th><button type="button" class="btn btn-white"  onclick="toggleBlue(this)">Terç</button></th>
                <th><button type="button" class="btn btn-white"  onclick="toggleBlue(this)">Qua</button></th>
                <th><button type="button" class="btn btn-white"  onclick="toggleBlue(this)">Qui</button></th>
                <th><button type="button" class="btn btn-white"  onclick="toggleBlue(this)">Sex</button></th>
                <th><button type="button" class="btn btn-white"  onclick="toggleBlue(this)">Sáb</button></th>
              </tr>
            </tbody>
          </table>
        </div>

      </fieldset>

      <button style="margin-left: 105px" id="bt-primary" type="button" class="btn btn-primary" onclick="window.location.href='criar_disciplinas.php'">Adicionar Disciplinas</button>

    </form>

    <script>
      function toggleBlue(button) {
        if (button.classList.contains('btn-blue')) {
          button.classList.remove('btn-blue');
          button.classList.add('btn-white');
        } else {
          button.classList.add('btn-blue');
          button.classList.remove('btn-white');
        }
      }
    </script>

    

    <!-- Incluindo o Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

  </body>
</html>
