<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

include('config.php');

$result = $mysqli->query("SELECT * FROM blogs WHERE status = 1");
while ($response = $result->fetch_array()) { 
        if($response['status']==1){
            $row['status'] = 'Enable';
        } else{
            $row['status'] = 'Disable';
        }
        $row['id'] = $response['id'];
        $row['title'] = $response['title'];
        $row['created_at'] = $response['created_at'];
        $data[] = $row;
    }
$json_data['data'] =  $data;
echo json_encode($json_data);