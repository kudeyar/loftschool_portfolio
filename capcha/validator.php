<?
session_start();
if($_POST['capcha'] != $_SESSION['capcha']) 
	echo "����� � �������� ������ �� �����!";
else
	echo "��� ����� ������!";