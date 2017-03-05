foreach($result->result() as $row){
    $infos = array(
        'username' => $row->UserNickname,
        'email' => $row->UserEmail,
    );
}

