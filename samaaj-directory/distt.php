<?php
$data=$_GET['datavalue'];
$andhra_pardesh=array('East Godavari','West Godavari','Krishna','Guntur','Prakasam','Sri Potti Sri Ramulu Nellore','Srikakulam','Vizianagaram','Visakhapatnam','Kurnool','Chittoor','YSR Kadapa','Anantapur');
$arunachal_pardesh=array('Anjaw','Changlang','East Kameng','East Siang','Kamle','Kra Daadi','Kurung Kumey','Lepa Rada','Lohit','Longding','Lower Dibang Valley','Lower Siang','Lower Subansiri','Namsai','Pakke-Kessang','Papum Pare','Shi Yomi','Siang','Tawang','Tirap','Upper Dibang Valley','Upper Siang','Upper Subansiri','West Kameng','West Siang');
//$assam=array('Tinskia','Dibrugarh','Dhemaji','Charaideo','Sivasagar','Lakhimpur','Majuli','Jorhat','Biswanath','Golaghat','Karbi Anglong','Sonitpur','Nagaon','Hojai','Karbi Anglong West','Dima Hasao','Cachar','Hailakandi','Karimganj','Morigaon','Udalguri','Darrang','Kamrup Metro,''Baksa','Nalbari','Kamrup','Barpeta','Chirang','Bongaigaon','Goalpara','Kokrajhar','Dhubri','South Salmara Mankachar','Bajali');
//$bihar=array();
//$chhattisgarh=array();

if($data=="Andhra Pardesh"){
    foreach($andhra_pardesh as $val){
    echo "<option>$val</option>";
    }
}
if($data=="Arunachal Pardesh")
{
    foreach($arunachal_pardesh as $val)
    {
        echo "<option>$val</option>";
    }
}
if($data=="Assam")
{
    foreach($assam as $val)
    {
        echo "<option>$val</option>";
    }
}
/*if($data=="Bihar")
{
    foreach($bihar as $val)
    {
        echo "<option>$val</option>";
    }
}
if($data=="Chhattisgarh")
{
    foreach($chhattisgarh as $val)
    {
        echo "<option>$val</option>";
    }
}*/

?>