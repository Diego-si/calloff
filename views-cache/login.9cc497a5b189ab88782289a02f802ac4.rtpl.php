<?php if(!class_exists('Rain\Tpl')){exit;}?><style>
  p {
    color: #ffffff;
  }
  label {
    color: #ffffff;
  }
  .container {
    background-color: rgba(0, 255, 55, 0.192);
  }
  .container-fluid {
    background-image: linear-gradient(to bottom, orange, black);
    border-radius: 20px 20px 20px 20px;
  }
  .container-fluid .col-md-6 {
    border-color: rgba(0, 0, 0, 0.125);
    box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
    border: 30px;
    border-radius: 30px;
    margin: 5px;
    overflow: hidden;
  }
  .container-fluid .col-md-8 {
    border-color: rgba(0, 0, 0, 0.125);
    box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
    border: 30px;
    border-radius: 30px;
    margin: 5px;
    overflow: hidden;
  }

  .container-fluid p {
    color: #ffffff;
    text-align: center;
    padding: 5px;
  }
</style>

<div class="container">
  <div class="row">
    <div class="col lg-8 my-3">

<!-- login logado -->
      <div class="row justify-content-md-center" style="margin: 5px;">
        <div class="col-lg">
          <h1 class="text-center">Login</h1>

          <p>Já que chegou aqui, entâo faça login...</p>
      
          <form class="form-login" action="/admin/login" method="post">
            <!-- <input type="hidden" name="_csrf" value=<%= csrfToken %>> -->
            <div class="form-group">
              <label>Seu e-mail</label>
              <input type="text" class="form-control" name="login">
            </div>
            <div class="form-group">
              <label>Sua senha</label>
              <input type="password" class="form-control" name="password">
            </div>
            <button type="submit" class="btn btn-primary">Entrar</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>