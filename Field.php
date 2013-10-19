<?php

class Field {

	static $field_prefix = "dealer_";

	public static function getHTML ( array $params ) {

		if ( ! isset($params[2]) )
			$params[2] = "text";
		if ( ! isset($params[3]) )
			$params[3] = false;

		list( $label, $field_name, $type, $values ) = $params; //array("Show", "show_id", "dropdown", $shows)

		switch($type) {
			case "text":
				return "<tr>" . Field::label($label, $field_name) . Field::Text($field_name, $values) . "</tr>";
				break;
			case "dropdown":
				return "<tr>" . Field::label($label, $field_name) . Field::Dropdown($field_name, $values) . "</tr>";
				break;
			case "textarea":
				return 
					"<tr>" . Field::label($label, $field_name, 2) . "</tr><tr>" . Field::Textarea($field_name, $values, 2) . "</tr>";
				break;
			default:
				die("unsupported field type");

		}


	}

	public static function label ( $label, $field_name, $colspan=false ) {
		$prefix = self::$field_prefix;
		if ( $colspan )
			$colspan = " colspan='$colspan'";
		return "<td$colspan><label for='$prefix$field_name'>$label</label></td>";
	}

	public static function Text ($field_name, $values=false, $colspan=false) {
		$prefix = self::$field_prefix;
		if ( $colspan )
			$colspan = " colspan='$colspan'";
		if ( ! $values )
			$values = '';
		return "<td$colspan><input type='text' name='$prefix$field_name' id='$prefix$field_name' value='$values' /></td>";
	}

	public static function Textarea ($field_name, $values=false, $colspan=false) {
		$prefix = self::$field_prefix;
		if ( $colspan )
			$colspan = " colspan='$colspan'";
		if ( ! $values )
			$values = '';
		return "<td$colspan><textarea name='$prefix$field_name' id='$prefix$field_name'>$values</textarea></td>";

	}

	public static function Dropdown ($field_name, array $values, $colspan=false) {
		$prefix = self::$field_prefix;
		if ( $colspan )
			$colspan = " colspan='$colspan'";
		$out = "<td$colspan><select name='$prefix$field_name' id='$prefix$field_name'>";
		foreach($values as $value => $display) {
			$out .= "<option value='$value'>$display</option>";
		}
		return $out . "</select></td>";
	}
}