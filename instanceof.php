<?php


class TypeHinting {

    public $departName;
    public $chairman;
    public $classRoom;
    public $numberOfStudent;

    public function __construct($dept, $chair, $room, $stdNumber) {
        $this->departName = $dept;
        $this->chairman = $chair;
        $this->classRoom = $room;
        $this->numberOfStudent = $stdNumber;
    }

    public function departmentActivity() {
        echo "Department of " . $this->departName . " arrange a tour in every year". "<br>";
    }
}

Class TypeHintingChild {
    public $teacherName;

    public function __construct($tName) {
        $this->teacherName = $tName;
    }

    public function TeacherActivity($TypeHinting) {
        if($TypeHinting instanceof TypeHinting) {
            echo "Teacher name is " . $this->teacherName . ". He is chairman of " . $TypeHinting->departName  ." Department "."<br>";
        }else{
            echo "Sorry \$TypeHinting is not an instance of TypeHinting";
        }

    }
}

$TypeHinting = new TypeHinting('Ethical Hacking','Engr Mejba Ahmed','200',500);
$TypeHinting->departmentActivity();

$TypeHintingChild = new TypeHintingChild('Maha Ahmed');
$TypeHintingChild->teacherActivity($TypeHinting);