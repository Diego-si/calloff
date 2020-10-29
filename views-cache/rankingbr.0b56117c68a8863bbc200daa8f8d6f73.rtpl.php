<?php if(!class_exists('Rain\Tpl')){exit;}?><style>
  .container {
    background: rgba(0, 0, 0, 0);
  }
  .table {
    margin: 0 auto;
    background: #00000000;
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

<div class="gif">
  <img
    src="https://cdn.discordapp.com/attachments/642859069257941002/745050365480665168/brmisto.gif"
    alt="Chicago"
    style="width: 100%;"
  />
</div>

<div class="textRanking">
  <h2>Call Of Duty Mobile</h2>
  <p>
    Aqui estão os times que conseguiram a maior quantidade de pontos ao
    participarem e vencerem nos torneios oficiais de Call Of Duty Mobile
    (Ranking S.A) em batalhas Batlleroyale.
  </p>
  <p>Esteja preparado para a batalha !</p>
</div>

<div class="container">
  <table
    class="table table-dark"
    style="
      background: url(https://cdn.discordapp.com/attachments/642859069257941002/744574643691716689/20200816_120543.png)
        top;
    "
  >
    <thead>
      <tr style="background: #00000000;">
        <th scope="col">POSIÇÃO</th>
        <th scope="col">EQUIPE</th>
        <th scope="col">PONTUAÇÃO</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <th scope="row"><%= rankingbrRegister.posicao %></th>
        <th><%= rankingbrRegister.nome %></th>
        <th><%= rankingbrRegister.pontuacao %></th>
        
      </tr>
      
    </tbody>
  </table>
</div>
