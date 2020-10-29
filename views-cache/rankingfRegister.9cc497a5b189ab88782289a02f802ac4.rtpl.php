<?php if(!class_exists('Rain\Tpl')){exit;}?><style>
    p{
        color: #fff;
    }
    label{
        color: #fff;
    }
    li a{
      text-align: center;
    }
    .container {
    background: rgba(0, 0, 0, 0);
  }
  .table {
    margin: 0 auto;
    color: #ffd700;
  }
  a {
    display: block;
  }
  .textRanking > p {
    color: #ffd700;
    text-align: center;
    font-size: 1.3rem;
  }
  .textRanking > p > b {
    color: #ffd700;
  }
  .textRanking > h2 {
    color: #ffd700;
  }
  .textRanking {
    text-align: center;
    border-radius: 20px 20px 0px 0px;
  }
  .fundoM {
    height: 50%;
    width: 50%;
    display: block;
    margin-left: auto;
    margin-right: auto;
  }
  .gif {
    height: 50%;
    width: 50%;
    display: block;
    margin-left: auto;
    margin-right: auto;
  }

  th:nth-child(1) {
    width: 33.3%;
  }
  th:nth-child(2) {
    width: 33.3%;
  }
  th:nth-child(3) {
    width: 33.3%;
  }
  th {
    padding-top: 15px;
    padding-bottom: 15px;
    text-align: center;
  }

  @media screen and (max-width: 980px) {
    .gif {
      height: 95%;
      width: 95%;
    }
    .fundoM {
      height: 95%;
      width: 95%;
    }
  }
  @media screen and (max-width: 390px) {
    thead {
      display: block;
      margin-left: auto;
      margin-right: auto;
      font-size: smaller;
    }
    tbody {
      display: block;
      margin-left: auto;
      margin-right: auto;
      font-size: smaller;
    }
  }
  @media screen and (max-width: 321px) {
    thead {
      display: block;
      margin-left: auto;
      margin-right: auto;
      font-size: small;
    }
    tbody {
      display: block;
      margin-left: auto;
      margin-right: auto;
      font-size: smaller;
    }
  }
</style>

<li class="nav-item log">
  <a class="nav-link text-warning" href="/admin">INÍCIO</a>
</li> 

<div class="container">
  <table class="table table-dark">
    <thead>
      <tr style="background: #00000000;">
        <th scope="col">POSIÇÃO</th>
        <th scope="col">EQUIPE</th>
        <th scope="col">PONTUAÇÃO</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <th scope="row"><%= rankingmRegister.posicao %></th>
        <th><%= rankingmRegister.nome %></th>
        <th><%= rankingmRegister.pontuacao %></th>

        <th>
          <a href="/rankingmRegister/rankingm/<%= rankingmRegister._id %>"
            >EDITAR</a
          >
        </th>
        <th>
          <a
            class="text-danger"
            href="/admin/rankingmjRegister/delete/<%= rankingmRegister._id %>"
            >DELETAR</a
          >
        </th>
      </tr>
      
    </tbody>
    
  </table>
</div>

<div class="container">
    <div class="row">
        <div class="col-lg-2"></div>
        
        <div class="col-lg-8 my-3">
            <h1 class="text-center">Ranking</h1>
            <p class="text-center lead">Crie ou edite o Ranking Masculino</p>

            <form action="/rankingmRegister/edit/<%= rankingmRegister._id %>" method="POST">
          
                <form action="/rankingmRegister/register" method="POST">
                        
                <input type="hidden" name="_csrf" value=<%= csrfToken %>>
                
                <div class="form-group">
                    <label>Posição</label>
                    <input value="<%= rankingmRegister.posicao %>" type="number" class="form-control" name="posicao">
                </div>

                <div class="form-group">
                  <label>Nome</label>
                  <input value="<%= rankingmRegister.nome %>" type="text" class="form-control" name="nome">
                </div>

                <div class="form-group">
                    <label>Pontuação</label>
                    <input value="<%= rankingmRegister.pontuacao %>" type="number" class="form-control" name="pontuacao">
                </div>

                <button type="submit" class="btn btn-primary">Salvar</button>
              </form>

        </div>

        <div class="col-lg-2"></div>
    </div>

</div>