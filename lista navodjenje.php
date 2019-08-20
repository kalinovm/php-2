<?php
require "http.php";
$cars = array(
	"mercedes","bmw","audi","honda","audi1","audi2"
);
$trucks = array(
	"scania","mercedes","man","kamaz"
);

class FormHelper
{
	public $method = "POST";
	public $action = "";
	
	public function __construct($method,$action){
		$this->$method = $method;
		$this->$action = $action;
	}
function open_tag(){
echo "<form method='{$this->method}' action='{$this->action}' >";
	
}
function close_tag(){
	
	echo"</form>";
}

function input($type,$name,$value=''){
	echo "<input type='{$type}' name='{$name}' value='{$value}'/>";
	
}

function select($list,$select_name,$selected_item){
	echo "<select name='{$select_name}'>";
	foreach($list as $list_item_key=>$list_item_value){
		echo "<option value='{$list_item_key}'";
		if($selected_item==$list_item_key){
		echo "selected";
		}
		echo "+{$list_item_value}</option>";
}
echo "</select>";
}
}
$form = new FormHelper("POST","vezbe.php?some_other_page=1");
$form->open_tag();
$form->close_tag();
$form->select($cars,"cars","mercedes");
$form->select($trucks,"trucks","man");
$form->input('text','my_text');
$form->input('checkbox','my_checkbox');
$form->input('submit','my_button','My button');
?>