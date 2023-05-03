<?php
class Form
{
    public $fields = array();
    public $action;
    public $submit = "Submit Form";
    public $jumlahField = 0;

    function __construct($action, $submit)
    {
        $this->$action = $action;
        $this->$submit = $submit;
    }
    function displayForm()
    {
        echo "<form action='" . $this->action . "' method='POST'>";
        echo "<table width='100%'>";
        for ($j = 0; $j < count($this->fields); $j++) {
            echo "<tr><td align='right'>" . $this->fields[$j]['label'] . "</td>";
            echo "<td><input type='text' name='" . $this->fields[$j]['name'] . "'></td></tr>";
        }
        echo "<tr><td colspan='2'>";
        echo "<input type='submit' value='" . $this->submit . "'></td></tr>";
        echo "</table>";
    }
    function addFields($name, $label)
    {
        $this->fields[$this->jumlahField]['name'] = $name;
        $this->fields[$this->jumlahField]['label'] = $label;
        $this->jumlahField++;
    }
}
