<?php
// TopController
namespace App\Controller;

use App\Controller\AppController;
use Cake\Log\Log;
use Cake\ORM\TableRegistry;

class ConfigController extends AppController
{
  private $Config = '';
  private $Controller = 'config';

  public function initialize()
  {
    // レイアウトを指定
    $this->viewBuilder()->layout('config');
    // Modelの取得
    // $this->loadModel('ConfigsTable');
  }
  public function index()
  {
    // 格納用 配列
    // 特に何か入れることは考えていない
    $results = [];
    $this->set('results',$results);
  }

}
