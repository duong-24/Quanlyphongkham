<?php
class data
{
    function connect()
    {
        //select
        $conn = new mysqli('localhost', 'root', '', 'quanlyphongkham');
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        $conn->set_charset('utf8');
        return $conn;
    }

    function executeLesult($sql)
    {
        $conn = $this->connect();
        $result = mysqli_query($conn, $sql);
        $list = [];
        while ($row = mysqli_fetch_array($result, 1)) {
            $list[] = $row;
        }
        mysqli_close($conn);
        return $list;
    }
    function execute($sql)
    {
        //cap nhat chen
        $conn = $this->connect();
        mysqli_query($conn, $sql);
        mysqli_close($conn);
    }
    function executeSingLesult($sql)
    {
        //select 1 row
        $conn = $this->connect();
        $result = mysqli_query($conn, $sql);
        $row = null;
        if ($result != null) {
            $row = mysqli_fetch_array($result, 1);
        }


        //     mysqli_close($conn);
        return $row;
    }
}
