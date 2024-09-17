<?php


class  MethodOverride
{
    public $CompanyName;
    public $CeoName;
    public function __construct($CompanyName, $CeoName){
        $this->CompanyName = $CompanyName;
        $this->CeoName = $CeoName;
    }

    public function CompanyActivity()
    {
        echo "Company". $this->CompanyName . "is growing up" . "<br/>";
    }

    public function __destruct(){
    }
}

class MethodOverrideChild extends MethodOverride {

   public function CompanyActivity()
   {
       parent::CompanyActivity();
       echo "Company". $this->CompanyName . "is going down" . "<br/>";
   }

}

$MethodOverride = new MethodOverride("Ramlit Hospital", "John Doe");
echo $MethodOverride->CompanyActivity();

$MethodOverrideChild = new MethodOverrideChild("Ramlit Hospital", "Jeffery way");
echo $MethodOverrideChild->CompanyActivity();