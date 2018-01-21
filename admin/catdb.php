<?php
class catdatabase
{
    private static $conn=NULL;
    private static function connection()
    {
        self::$conn=mysqli_connect("localhost","root","","project");
        return self::$conn;
    }
    private static function disconnect()
    {
        self::$conn=mysqli_close();
        self::$conn=null;
    }
    public function catgetdata()
    {
        $conn=catdatabase::connection();
        $sql="select * from cat_tbl";
         $res=$conn->query($sql);
         return $res;
    }
    public function catinsert($_id,$_name)
    {
        $conn=catdatabase::connection();
        $sql="insert into cat_tbl values('". $_id ."','". $_name ."')";
         $res=$conn->query($sql);
         return $res;
    }
    public function getcat($_catid)
    {
        $conn=catdatabase::connection();
        $sql="select * from cat_tbl where pk_cat_id=".$_catid;
         $res=$conn->query($sql);
         return $res;

    }
    public function catupdate($_catname,$_catid)
    {
        $conn=catdatabase::connection();
        $sql="update cat_tbl set cat_name='". $_catname ."' where pk_cat_id='". $_catid ."'";
         $res=$conn->query($sql);
         catdatabase::disconnect();
         return $res;
    }
    public function catdelete($_id)
    {
        $conn=catdatabase::connection();
        $sql="delete from cat_tbl where pk_cat_id=".$_id;
         $res=$conn->query($sql);
         return $res;
    }
    public function catdeleteall($x)
    {
         $conn=catdatabase::connection();
        $sql="delete from cat_tbl where pk_cat_id In ($x)";
         $res=$conn->query($sql);
         return $res;
    }
}