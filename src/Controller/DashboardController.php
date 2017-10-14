<?php
/**
 * Created by PhpStorm.
 * User: Xili Chen
 * Date: 15/10/17
 * Time: 10:40 AM
 */
namespace App\Controller;

use Cake\Core\Configure;
use Cake\Network\Exception\ForbiddenException;
use Cake\Network\Exception\NotFoundException;
use Cake\View\Exception\MissingTemplateException;
use App\Model;

/**
 * Static content controller
 *
 * This controller will render views from Template/Pages/
 *
 * @link http://book.cakephp.org/3.0/en/controllers/pages-controller.html
 */
class DashboardController extends AppController
{
    public function index(){
        if($this->isAdmin()){
            $this->viewBuilder()->setLayout('admin');
        }else{
            $this->viewBuilder()->setLayout('user');
        }
    }

    public function details(){
        if(isAdmin()) {
            $info = $this->loadModel('Information');
            $information = $info->find('all')->toArray();
            $this->set(compact('information'));
            $this->viewBuilder()->setLayout('admin');
        }
    }

    public function isAdmin(){
        $user = $this->Auth->user();
        $uid = $user['id'];
        if ($uid == 53){
            return true;
        }else{
            return false;
        }
    }
}