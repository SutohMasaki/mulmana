<?php
// TopController
namespace App\Controller;

use App\Controller\AppController;

class TopController extends AppController
{
  public function initialize()
  {
    //testレイアウトを指定
    $this->viewBuilder()->layout('top');
  }
  public function index()
  {
    //変数teststrをセット
    $this->set('teststr', 'テスト文章てすてすてす！');
  }
}
