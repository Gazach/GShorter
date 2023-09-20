<?php 
    session_start();
    if(isset($_SESSION['ID']) && isset($_SESSION['username'])){
    
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shorter</title>
    <link rel="stylesheet" href="../css/system.css">
    <link rel="icon" href="../Icon.PNG">
</head>
<body>
<header>
        <nav>
            <h4 class="usernames">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspYou Login As : <?php echo $_SESSION['username']?></h4>
        </nav>
    </header>
<section class="main">
    <h1 class="Title">G|Shorter</h1>
    <section class="S-System">
        <h3>Short Your Link Here</h3>
        <section class="mainS">
            <form action="POST">
            <input type="text" placeholder="Paste Your link here">
            <button >></button>
            </form>
</section>
    </section>
    <section class="info">
        <div>
            <img src="../img/fasst.png" alt="" height="110" width="110">
            <h4>Fast To Use</h4>
            <p>You don't have to wait long to shorten your link</p>
        </div>
        <div>
            <img src="../img/easy.png" alt="" height="110" width="110">
            <h4>Easy To Use</h4>
            <p>It's very easy to use, just copy and paste the link you want to shorten then press the ">" button.</p>
        </div>
        <div>
            <img src="../img/like.png" alt="" height="110" width="110">
            <h4>Secure</h4>
            <p>For security, it is guaranteed safe</p>
        </div>
    </section>
    </section>
    
    <footer>
        <p>This website is only a result of learning from <a href="https://github.com/Gazach">@Gazach</a>, and you can see the Source Code at this link: <a href="https://github.com/Gazach/GShorter">Click Here</a><br>Phone and Small Screen are Not recommended to run this website</p>
    </footer>

</body>
</html>
<?php  } else {

header("Location: ../index.php?error=You Should Login First");
exit();
} ?>