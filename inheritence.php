<?php

class DepartmentInfo {
    public $departmentName;
    public $Chairman;
    public $classRoom;
    public $numberofStudents;

    public function __construct($dept, $chair, $room, $stdNumber) {
        $this->departmentName = $dept;
        $this->Chairman = $chair;
        $this->classRoom = $room;
        $this->numberofStudents = $stdNumber;
    }

    public function departmentActivity() {
        echo "Department of " . $this->departmentName . " arrange a tour in every year " . "<br>";
    }
}

class StatisticsDept extends DepartmentInfo {
    public $labsNumber;
}

class CseDept extends DepartmentInfo {
   public $labsNumber;
    public function programActivity() {
        echo "Department of " . $this->departmentName . " should arrange programming contest like other university " . "<br>";
    }
}

$StatisticsDept  = new StatisticsDept ('Statistics', 'Manik', '6', '600');
echo "Department of " . $StatisticsDept->departmentName . "<br>";
echo "Charman of " . $StatisticsDept->Chairman . "<br>";
echo "Room of " . $StatisticsDept->classRoom . "<br>";
echo "Student of " . $StatisticsDept->numberofStudents . "<br>";
$StatisticsDept->departmentActivity();

$cseDept  = new CseDept ('Computer Science and Engineering', 'Dr.Jugal Krishna Das', '5', '500');
$cseDept->programActivity();

echo "Department of " . $cseDept->departmentName . "<br>";
echo "Charman of " . $cseDept->Chairman . "<br>";
echo "Room of " . $cseDept->classRoom . "<br>";
echo "Student of " . $cseDept->numberofStudents . "<br>";