<?php

class DepartmentInfo {

   public $departmentName;
   public $chairman;

   public $classRoom;
   public $numberOfStudents;

   public function __construct($departmentName, $chairman, $classRoom, $numberOfStudents) {
       $this->departmentName = $departmentName;
       $this->chairman = $chairman;
       $this->classRoom = $classRoom;
       $this->numberOfStudents = $numberOfStudents;
   }


   public function departmentActivity(){
       echo "Department of " . $this->departmentName . "arrange a tour in every year". "<br>";
   }
}

class TeacherInfo {
    public $teacherName;

    public function __construct($teacherName) {
        $this->teacherName = $teacherName;
    }

    public function getTeacherName(DepartmentInfo $dept) {
        echo $this->teacherName . " is a teacher of " . $dept->departmentName . "<br>";
    }

     public function getTeacherInfo($dept){

            if($dept instanceof DepartmentInfo){
                echo $this->teacherName ." is a teacher " . $dept->departmentName . "<br>";
            }else {
                die("Sorry, you don't have permission to access this page");
            }
     }
}

$dept = new DepartmentInfo("Computer Science & Engineering", "Chairman", "502", "202");
$dept->departmentActivity();
$tinfo = new TeacherInfo("Engr Mejba Ahmed");
$tinfo->getTeacherName($dept);
$tinfo->getTeacherInfo($dept);