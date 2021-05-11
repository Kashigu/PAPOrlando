<?php
include_once("includes/body.inc.php");

$nome=addslashes($_POST['nome']);
$email=$_POST['email'];
$password=addslashes($_POST['password']);
echo $sql="select * from perfis where perfilEmail='$email' and perfilNome='$nome' and perfilPassword='$password'";
$result=mysqli_query($con,$sql);

if ($nome === 'admin' AND $password ==='admin'){
    header("location:admin/index.php");
}else{
    while ($dados=mysqli_fetch_array($result)){
        if ($nome === $dados['perfilNome'] AND $password === $dados['perfilPassword'] AND $email === $dados['perfilEmail'] AND $dados['perfilEstado'] == 'ativo' and $dados['perfilAdmin']=='admin') {
            session_start();
            $_SESSION['id'] = $dados['perfilId'];
            $_SESSION['nome'] = $dados['perfilNome'];
            $_SESSION['email'] = $dados['perfilEmail'];
            header("location:admin/index.php");
        }else if($nome === $dados['perfilNome'] AND $password === $dados['perfilPassword'] AND $email === $dados['perfilEmail'] AND $dados['perfilEstado'] == 'ativo' and $dados['perfilAdmin']=='utilizador') {
            session_start();
            $_SESSION['id'] = $dados['perfilId'];
            $_SESSION['nome'] = $dados['perfilNome'];
            $_SESSION['email'] = $dados['perfilEmail'];
            header("location:index.php");

        } else if($nome === $dados['perfilNome'] AND $password === $dados['perfilPassword'] AND $dados['perfilEstado'] == 'inativo' and $dados['perfilAdmin']=='admin'){
            $verificacao='sim';
            header("location:index.php?message");
        }else if ($nome === $dados['perfilNome'] AND $password === $dados['perfilPassword'] AND $dados['perfilEstado'] == 'inativo' and $dados['perfilAdmin']=='utilizador'){
            $verificacao='sim';
            header("location:index.php?message");
        }
    }}

?>
