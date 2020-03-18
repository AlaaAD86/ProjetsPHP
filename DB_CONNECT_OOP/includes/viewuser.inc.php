<?php

class ViewUser extends User {

    public function showAllUsers(){
       $datas = $this->getAllUsers();
       foreach($datas as $data){
           echo "UserID is " . $data['id']."<br>";
           echo "UserID is " . $data['uid']."<br>";
       }
    }
}