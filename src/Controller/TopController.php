<?php
// TopController
namespace App\Controller;

use App\Controller\AppController;
use Cake\Log\Log;
use Cake\ORM\TableRegistry;

class TopController extends AppController
{
  private $Top = '';
  private $Controller = 'top';

  public function initialize()
  {
    // レイアウトを指定
    $this->viewBuilder()->layout('top');
    // Modelの取得
    $this->loadModel('TopsTable');
  }
  public function index()
  {
    //変数teststrをセット
    $this->set('teststr', 'testだよー');

    //DBのデータを受け取りたい
    $this->Top = TableRegistry::get('test');
    $top = $this->Top->find()->all();

    // 格納用 配列
    $results = [];

    foreach ($top as $value => $val) {
      $results = $val;
    }

    $this->set('results',$results);
  }
}
