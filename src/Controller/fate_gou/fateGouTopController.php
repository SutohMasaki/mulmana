<?php
// fateGouTopController
namespace App\Controller;

use App\Controller\AppController;
use Cake\Log\Log;
use Cake\ORM\TableRegistry;

class TopController extends AppController
{
  private $Top = '';
  private $Controller = 'fate_gou_top';

  public function initialize()
  {
    // レイアウトを指定
    $this->viewBuilder()->layout('fate_gou/top');
    // Modelの取得
    $this->loadModel('TopsTable');
  }
  public function index()
  {
    // 格納用 配列
    $results = [];
    //DBのデータを取得
    $this->Top = TableRegistry::get('application');
    $top = $this->Top->find()->all();

    foreach ($top as $value => $val) {
      $results[] = $val;
    }

    $this->set('results',$results);
  }

}
