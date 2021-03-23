<?php
namespace Phppot;

class Student
{

    private $ds;

    function __construct()
    {
        require_once __DIR__ . '/../lib/DataSource.php';
        $this->ds = new DataSource();
    }

  

      public function isEmailExists($email)
    {
        $query = 'SELECT * FROM students where email = ?';
        $paramType = 's';
        $paramValue = array(
            $email
        );
        $resultArray = $this->ds->select($query, $paramType, $paramValue);
        $count = 0;
        if (is_array($resultArray)) {
            $count = count($resultArray);
        }
        if ($count > 0) {
            $result = true;
        } else {
            $result = false;
        }
        return $result;
    }




     public function isnameExists($name)
    {
        $query = 'SELECT * FROM students where name = ?';
        $paramType = 's';
        $paramValue = array(
            $name
        );
        $resultArray = $this->ds->select($query, $paramType, $paramValue);
        $count = 0;
        if (is_array($resultArray)) {
            $count = count($resultArray);
        }
        if ($count > 0) {
            $result = true;
        } else {
            $result = false;
        }
        return $result;
    }


     public function isphonenoExists($phoneno)
    {
        $query = 'SELECT * FROM students where phoneno = ?';
        $paramType = 's';
        $paramValue = array(
            $email
        );
        $resultArray = $this->ds->select($query, $paramType, $paramValue);
        $count = 0;
        if (is_array($resultArray)) {
            $count = count($resultArray);
        }
        if ($count > 0) {
            $result = true;
        } else {
            $result = false;
        }
        return $result;
    }


 public function isageExists($age)
    {
        $query = 'SELECT * FROM students where age = ?';
        $paramType = 's';
        $paramValue = array(
            $age
        );
        $resultArray = $this->ds->select($query, $paramType, $paramValue);
        $count = 0;
        if (is_array($resultArray)) {
            $count = count($resultArray);
        }
        if ($count > 0) {
            $result = true;
        } else {
            $result = false;
        }
        return $result;
    }



 public function isgenderExists($gender)
    {
        $query = 'SELECT * FROM students where gender = ?';
        $paramType = 's';
        $paramValue = array(
            $gender
        );
        $resultArray = $this->ds->select($query, $paramType, $paramValue);
        $count = 0;
        if (is_array($resultArray)) {
            $count = count($resultArray);
        }
        if ($count > 0) {
            $result = true;
        } else {
            $result = false;
        }
        return $result;
    }



     public function isstudentimageExists($studentimage)
    {
        $query = 'SELECT * FROM students where studentimage = ?';
        $paramType = 's';
        $paramValue = array(
            $studentimage
        );
        $resultArray = $this->ds->select($query, $paramType, $paramValue);
        $count = 0;
        if (is_array($resultArray)) {
            $count = count($resultArray);
        }
        if ($count > 0) {
            $result = true;
        } else {
            $result = false;
        }
        return $result;
    }


 public function isreg_dayExists($reg_day)
    {
        $query = 'SELECT * FROM students where reg_day = ?';
        $paramType = 's';
        $paramValue = array(
            $reg_day
        );
        $resultArray = $this->ds->select($query, $paramType, $paramValue);
        $count = 0;
        if (is_array($resultArray)) {
            $count = count($resultArray);
        }
        if ($count > 0) {
            $result = true;
        } else {
            $result = false;
        }
        return $result;
    }

 public function registerStudent()
    {
        $isameExists = $this->isnameExists($_POST["name"]);
        $isEmailExists = $this->isEmailExists($_POST["email"]);
         $isphonenoExists = $this->isphonenoExists($_POST["phoneno"]);
          $isageExists = $this->isageExists($_POST["age"]);
           $isgenderExists = $this->isgenderExists($_POST["gender"]);
            $isstudentimagelExists = $this->isstudentimageExists($_POST["studentimage"]);
             $isreg_dayExists = $this->isreg_dayExists($_POST["reg_day"]);


 $query = 'INSERT INTO tbl_member (username, password, email) VALUES (?, ?, ?)';
            $paramType = 'sss';
            $paramValue = array(
                $_POST["username"],
                $hashedPassword,
                $_POST["email"]);

       
    }


public function getStudent($name)
    {
        $query = 'SELECT * FROM students where name = ?';
        $paramType = 's';
        $paramValue = array(
            $ame
        );
        $memberRecord = $this->ds->select($query, $paramType, $paramValue);
        return $memberRecord;
    }


 public function getStuden($email)
    {
        $query = 'SELECT * FROM students where email = ?';
        $paramType = 's';
        $paramValue = array(
            $email
        );
        $memberRecord = $this->ds->select($query, $paramType, $paramValue);
        return $memberRecord;
    }


 public function getStude($phoneno)
    {
        $query = 'SELECT * FROM students where phoneno = ?';
        $paramType = 's';
        $paramValue = array(
            $phoneno
        );
        $memberRecord = $this->ds->select($query, $paramType, $paramValue);
        return $memberRecord;
    }



     public function getStu($gender)
    {
        $query = 'SELECT * FROM students where gender = ?';
        $paramType = 's';
        $paramValue = array(
            $gender
        );
        $memberRecord = $this->ds->select($query, $paramType, $paramValue);
        return $memberRecord;
    }


     public function getSt($age)
    {
        $query = 'SELECT * FROM students where age = ?';
        $paramType = 's';
        $paramValue = array(
            $age
        );
        $memberRecord = $this->ds->select($query, $paramType, $paramValue);
        return $memberRecord;
    }


     public function getS($studentimage)
    {
        $query = 'SELECT * FROM students where studentimage = ?';
        $paramType = 's';
        $paramValue = array(
            $studentimage
        );
        $memberRecord = $this->ds->select($query, $paramType, $paramValue);
        return $memberRecord;
    }


     public function getStudents($reg_day)
    {
        $query = 'SELECT * FROM students where reg_day = ?';
        $paramType = 's';
        $paramValue = array(
            $reg_day
        );
        $memberRecord = $this->ds->select($query, $paramType, $paramValue);
        return $memberRecord;
    }
}