<?php
include_once("includes/body.inc.php");

$nome=addslashes($_POST['nome']);
$nome= ucfirst($nome);
$email=$_POST['email'];
$email= lcfirst($email);
$password= addslashes($_POST['password']);
$password=md5($password);

            $sql="select perfilId from perfis where perfilNome='$nome' AND perfilEstado='ativo'";
            $res=mysqli_query($con,$sql);
            $dados=mysqli_fetch_array($res);
            $id=$dados['perfilId'];



            $sql2="select * from perfis where perfilId='$id'";
            // buscar dados
            $res2=mysqli_query($con,$sql2);
            $dados2=mysqli_fetch_array($res2);



            if($nome == $dados2['perfilNome'] AND $password == $dados2['perfilPassword'] AND $email == $dados2['perfilEmail'] and $dados2['perfilAdmin']=='utilizador' ) {
                session_start();
                $_SESSION['id'] = $dados['perfilId'];
                $_SESSION['nome'] = $dados['perfilNome'];
                $_SESSION['email'] = $dados['perfilEmail'];
                header("location:index.php");


            }elseif($nome == $dados2['perfilNome'] AND $password == $dados2['perfilPassword'] AND $email == $dados2['perfilEmail'] and $dados2['perfilAdmin']=='admin' ) {
                session_start();
                $_SESSION['id'] = $dados['perfilId'];
                $_SESSION['nome'] = $dados['perfilNome'];
                $_SESSION['email'] = $dados['perfilEmail'];
                header("location:admin/index.php");
            }
?>
