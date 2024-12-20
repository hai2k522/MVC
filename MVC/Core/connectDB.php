<?php 
class connectDB{
    public $con;
    function __construct(){ 
       $this->con = mysql_connect("localhost","root","","74DCHT21_Qltv");
}
?>