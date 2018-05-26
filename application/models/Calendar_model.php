<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Calendar_model extends CI_Model {


	/*Read the data from DB */
	Public function getEvents()
	{
		
		$sql = "SELECT * FROM events WHERE events.start BETWEEN ? AND ? ORDER BY events.start ASC";
		return $test = $this->db->query($sql, array($_GET['start'], $_GET['end']))->result();

	}
	/*Create new events */
	/*Create new events for supervisor */
	Public function AddEvent()
	{

		$sql = "INSERT INTO events (title,events.start,events.end,description, color,email,userEmail,password) VALUES (?,?,?,?,?,?,?,?)";
		$this->db->query($sql, array($_POST['title'], $_POST['start'],$_POST['end'], $_POST['description'], $_POST['color'],$_POST['email'],$_POST['userEmail'],$_POST['password']));
		return ($this->db->affected_rows()!=1)?false:true; 
	}
	/*Update  event */
	Public function updateEvent()
	{

		$sql = "UPDATE events SET title = ?, description = ?, color = ?, email = ? WHERE id = ?";
		$this->db->query($sql, array($_POST['title'],$_POST['description'], $_POST['color'],$_POST['email'],$_POST['id']));
		return ($this->db->affected_rows()!=1)?false:true;
	}

	Public function supdateEvent()
	{

		$sql = "UPDATE events SET title = ?, description = ?, color = ?, email = ?, userEmail = ?, password = ? WHERE id = ?";
		$this->db->query($sql, array($_POST['title'],$_POST['description'], $_POST['color'],$_POST['email'], $_POST['userEmail'], $_POST['password'], $_POST['id']));
		return ($this->db->affected_rows()!=1)?false:true;
	}

	/*Delete event */

	Public function deleteEvent()
	{

		$sql = "DELETE FROM events WHERE id = ?";
		$this->db->query($sql, array($_GET['id']));
		return ($this->db->affected_rows()!=1)?false:true;
	}

	/*Update  event */

	Public function dragUpdateEvent()
	{

		$sql = "UPDATE events SET  events.start = ? ,events.end = ?  WHERE id = ?";
		$this->db->query($sql, array($_POST['start'],$_POST['end'], $_POST['id']));
		return ($this->db->affected_rows()!=1)?false:true;

	}
}