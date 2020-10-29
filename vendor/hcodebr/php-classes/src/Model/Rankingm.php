<?php

namespace Hcalloffe\Model;

use \Hcalloffe\DB\Sql;
use \Hcalloffe\Model;

class Rankingm extends Model {

  public static function listAll() {

    $sql = new Sql();

    return $sql->select("SELECT * FROM ranking ORDER BY vlposicao");

  }

  public function save() {
    
    $sql = new Sql();

    $results = $sql->select("CALL rankingmj_save(:idrankingmj, :vlposicao, 
    :desrankingmj, :vlpontuacao)", array(
      ":idrankingmj"=>$this->getidrankingmj(),
      ":vlposicao"=>$this->getvlposicao(),
      ":desrankingmj"=>$this->getdesrankingmj(),
      ":vlpontuacao"=>$this->getvlpontuacao()
    ));

    $this->setData($results[0]);

  }

  public function get($idrankingmj) {

    $sql = new Sql();

    $sql->select("SELECT * FROM ranking WHERE idrankingmj = :idrankingmj", [
      ':idrankingmj'=>$idrankingmj
    ]);

    $this->setData($results[0]);

  }

  public function delete() {

    $sql = new Sql();

    $sql->select("DELETE FROM ranking WHERE idrankingmj = :idrankingmj", [
      ':idrankingmj'=>$this->getidrankingmj()
    ]);

  }

 /*  public static function updateFile() {

    $rankingmjRegister = Rankingm::listAll();

    $html = [];

    foreach ($rankingmjRegister as $row) {
      array_push($html, '<tr>
      <th>'.$row['vlposicao'].'</th>
      <th>'.['desrankingmj'].'</th>
      <th>'.['vlpontuacao'].'</th>
    </tr>' );
  }
    

    file_put_contents($_SERVER['DOCUMENT_ROOT'] . DIRECTORY_SEPARATOR . "views" . DIRECTORY_SEPARATOR . "rankingmjPontos.html", implode('', $html) );

  } */

}

?>