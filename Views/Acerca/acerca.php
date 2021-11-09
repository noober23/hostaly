<?php
require('Views/Template2/header_hotel.php');
?>
<section class="image-head-wrapper" style="background-image: url('<?=media();?>/Templates2/images/banner4.jpg');">
                <div class="inner-wrapper">
                    <h1>Contactanos</h1>
                </div>
            </section>
            <div class="clearfix"></div>


            <section class="contact-block">
                <div class="container">
                    <div class="col-md-6 contact-left-block">
                        <h3><span>Contactanos </span>Aqui</h3>
                        <p class="text-right">939 Nataniel Aguirre <i class="fa fa-map-marker fa-lg"></i></p>
                        <p class="text-right"><a href="tel:70737091"> 70737091 <i class="fa fa-phone fa-lg"></i></a></p>
                        <p class="text-right"><a href="mailto:demo@info.com"> demo@info.com <i class="fa fa-envelope"></i></a></p>
                    </div>
                    <div class="col-md-6 contact-form">
                        <h3>Envia un<span>Mensaje</span></h3>
                        <form action="#" method="post">
                            <input type="text" class="form-control" name="Nombre" placeholder="Nombre" required="">
                            <input type="email" class="form-control" name="Email" placeholder="Email" required="">
                            <textarea class="form-control" name="Message" placeholder="Mensaje aqui.." required=""></textarea>
                            <input type="submit" class="submit-btn" value="Submit">
                        </form>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </section>

            <!---map--->
            <section class="offspace-70">
                <div class="map">
                    <div class="container">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d237.95115129266486!2d-66.156126!3d-17.4013025!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x93e373f02c1fa00f%3A0x8b47314f4967a323!2sResidencial%20Tajibos!5e0!3m2!1ses!2sbo!4v1636302721710!5m2!1ses!2sbo" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                    </div>
                </div>
            </section>
<?php 
  require('Views/Template2/footer_hotel.php');
?>