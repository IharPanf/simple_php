<?php
/* ������ ������������� 
	parent
	self
	static
*/	
class MainClass {
    public function GetName(){
        echo "Main"."<br>";
    }
    public function PrintSelf(){
        echo "PrintSelf: ";
        self::GetName();
    }
    public function PrintStatic(){
        echo "PrintStatic: ";
        static::GetName();
    }
    public function PrintParent(){
        echo "PrintParent: ";
        parent::GetName();
    }
}

class SecondClass extends MainClass{
    public function GetName(){
        echo "Second"."<br>";
    }
    public function PrintParent2(){
        echo "PrintParent2: ";
        parent::GetName();
    }
}
$x = new SecondClass();
$x->PrintSelf(); //�����: PrintSelf: Main
$x->PrintStatic(); //�����: PrintStatic: Second
$x->PrintParent2(); //�����: PrintParent2: Main
$x->PrintParent(); //������ "Fatal error: Cannot access parent:: when current class scope has no parent"
