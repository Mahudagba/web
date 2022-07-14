<?php
    require 'vendor/autoload.php';

    use GuzzleHttp\Client;

    if(isset($_POST['name']) and isset($_POST['surname']) and isset($_POST['email']) and isset($_POST['message']))
    {
        $httpClient = new Client();
        $response =  $httpClient->post('https://apioliini.herokuapp.com/accounts/users/auth/send_email/', [
            'form_params' => [
                'nom' => $_POST['name'],
                'prenom' => $_POST['surname'],
                'email' => $_POST['email'],
                'message' => $_POST['message']
            ]
        ]);

        if($response->getStatusCode() == 200) {
            return json_encode(['return' => 'Message envoyé avec succès !']);
            //header('Location: index.php');

        }else{
            return json_encode(['return' => 'Erreur d\'envoi !']);
        }
        
    }else{
        return json_encode(['return' => 'Erreur d\'envoi !']);
        //echo 'Erreur';
    }

        
?>