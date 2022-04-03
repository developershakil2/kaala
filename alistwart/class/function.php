<?php
 
 class nftClass {
    private $conn;


    public function __construct(){
        $dbhost = "localhost";
        $dbuser = "root";
        $dbpass = "";
        $dbname = "colony_data";


        $this->conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
        if(! $this->conn){
            die("connect error");
        }
 

    }
        
    public function admin_info($data){
        $admin_email = $data["admin_email"];
        $admin_pass = md5($data["admin_pass"]);
        $qurr = "SELECT * FROM admin_datas WHERE ali_email='$admin_email' && ali_pass='$admin_pass'";
    
        if(mysqli_query($this->conn, $qurr)){
    
        $alldone = mysqli_query($this->conn, $qurr);
             $admin_data = mysqli_fetch_assoc($alldone);
        if($admin_data){
            session_start();
            $_SESSION['adminID'] = $admin_data["ali_email"];
            header("location:dashboard.php");
        }else{
            header("index.php");
        }
    
        }
    }

  public function adminLogout(){
      unset($_SESSION['adminID'] );
      
  }
    public function explor_function($data){
        $explor_p = $data["explor_price"];
        $explor_i = $_FILES['explor_img']['name'];
        $extmp = $_FILES['explor_img']['tmp_name'];
        
        $qur = "INSERT INTO explor(explor_price, explor_img) VALUE ($explor_p,'$explor_i')";
        if(mysqli_query($this->conn, $qur)){
            move_uploaded_file($extmp, 'explor/'.$explor_i);
            return "you have added your explor NFT";
        }


    }

    public function explor_manage(){
        $qurr = "SELECT * FROM explor";
        if(mysqli_query($this->conn, $qurr)){
            $ex_data = mysqli_query($this->conn, $qurr);
            return $ex_data;
        }
    }
   public function explordelete($id){
       $qur = "DELETE FROM explor WHERE id=$id";
       if(mysqli_query($this->conn, $qur)){
           return "you have successfully deleted your NFT from the list";
       }
   }

public function select_explor($id){
    $qurr = "SELECT * FROM explor WHERE id=$id";
    if(mysqli_query($this->conn, $qurr)){
       $exsel = mysqli_query($this->conn, $qurr);
       $exfetch = mysqli_fetch_assoc($exsel);
       return $exfetch;
    }

}
public function explor_function1($data){
    $explor_p1 = $data["explor_price1"];
    $exid = $data["explorid"];
    $explor_i1 = $_FILES['explor_img1']['name'];
    $extmp1 = $_FILES['explor_img1']['tmp_name'];
    $qur = "UPDATE explor SET explor_price=$explor_p1, explor_img=$explor_i1 WHERE id=$exid";
    if(mysqli_query($this->conn, $qur)){
        move_uploaded_file($extmp1, 'explor/'.$explor_i1);
        return "you have updated your explor NFT";
    }


}









    }
?>