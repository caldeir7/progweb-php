</main>


    <footer>
        <p>Site Desenvolvido como exemplo</p>
        <?php 
            $hora = new DateTime();
            $hora->setTimezone(new DateTimeZone('America/Bahia') );
            $DateAndTime = $hora->format("d-m-y H:i")
            //date_default_timezone_set("America/Sao Paulo)
            //$data = date("d-m-y H:i")
            
        ?>
            <p><?=$DateAndTime?></p>
    </footer>
    

</body>
</html>