<?php

class MasteryOOPContructor {

    public $instituteName ;
    public $StdID;
    public $StdName;
    public $DepartName;

    public function __construct($SchoolName, $StdID, $StdName, $DepartName) {
        $this->instituteName = $SchoolName;
        $this->StdID = $StdID;
        $this->StdName = $StdName;
        $this->DepartName = $DepartName;
    }

    public function studentDataSet() {
        echo "The Student Data Set for $this->instituteName $this->StdID $this->StdName $this->DepartName" ."<br>";
    }

}

$mejba = new MasteryOOPContructor('Daffodil International University','142154092','Engr Mejba Ahmed','Computer Science & Engineering');
$mejba->studentDataSet();
$maha = new MasteryOOPContructor('Averroes Internal School','MB24010','Maha Ahmed','English Medium');
$maha->studentDataSet();
$meskat = new MasteryOOPContructor('Dhaka International Univeristy','142154092','Meskat Ahmed','Computer Science & Engineering');
$meskat->studentDataSet();
