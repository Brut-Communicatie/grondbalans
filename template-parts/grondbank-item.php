<div class="grondbank__item" id="<?php echo $args['plaats'];?>">
    <div class="grondbank__image">
        <img src="<?php echo $args['foto'];?>" alt="Foto van <?php echo $args['title'];?>" width="150px"/>
    </div>

    <div class="grondbank__details">

        <div class="grondbank__details--top">
            <h3><?php echo $args['title'];?></php></h3>
            <p><?php echo $args['adres'];?></p>
            <p><?php echo $args['postcode'];?></p>
        </div>

        <div class="grondbank__details--mid">
            <p>Contactpersoon:</p>
            <p><strong><?php echo $args['contactpersoon'];?></strong></p>
            <p><?php echo $args['telefoon'];?></p>
            <a href="mailto:<?php echo $args['email'];?>"><?php echo $args['email'];?></a>
        </div>

        <div class="grondbank__details--onder">
            <h4>Samenwerkingsverband met:</h4>
            <img src="<?php echo $args['logo'];?>" alt="Logo van partner"/>
        </div>

    </div>
</div>