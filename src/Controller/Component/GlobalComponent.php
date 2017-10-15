<?php
/**
 * Created by PhpStorm.
 * User: Xili Chen
 * Date: 15/10/17
 * Time: 1:40 PM
 */
namespace App\Controller\Component;

use Cake\Controller\Component;

class GlobalComponent extends Component
{
    public $components = ['Auth'];

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