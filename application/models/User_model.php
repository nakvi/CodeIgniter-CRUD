<?php
class User_model extends CI_model
 {
   // Here We Write query for inserting
     function create($formArray)
     {
        $this->db->insert("users",$formArray);//insert data into user table
     }
        // Here We Write query for fetching all instance

     function list()
     {
      return $users = $this->db->get('users')->result_array(); //Select * user to fetch all user

     }
        // Here We Write query for fecting single instance
     function getUser($userId)
     {
        $this->db->where('user_id',$userId);
      return $user = $this->db->get("users")->row_array();//insert data into user table
     }
        // Here We Write query for updataing instance
     function updateUser($userId,$formArray)
     {
        $this->db->where('user_id',$userId);
        $this->db->update('users',$formArray);//Update data

     }
        // Here We Write query for deleteing instance
     function deleteUser($userId)
     {
      $this->db->where('user_id',$userId);
      $this->db->delete('users');
     }
 }
?>