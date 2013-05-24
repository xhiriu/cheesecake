<script src="lightbox/js/jquery-1.7.2.min.js"></script>
<script src="lightbox/js/jquery-ui-1.8.18.custom.min.js"></script>
<script src="lightbox/js/jquery.smooth-scroll.min.js"></script>
<script src="lightbox/js/lightbox.js"></script>

<script>
  jQuery(document).ready(function($) {
      $('a').smoothScroll({
        speed: 1000,
        easing: 'easeInOutCubic'
      });

      $('.showOlderChanges').on('click', function(e){
        $('.changelog .old').slideDown('slow');
        $(this).fadeOut();
        e.preventDefault();
      })
  });

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-2196019-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>




        <div id="foot">
            <div id="foot_align" class="center_align">
            	<div id="endereco_foot">
                	<p>
                    	Rua: Muniz Freire - Cariacica <br />
                        Espirito Santo , 29156-070
                    </p>
                </div>
            
                <div id="info_carta">
                    <table width="400" border="0">
                        <tbody>
                            <tr>
                            <th scope="col" colspan="2">
                            	<span style="font-size:40px;">Cheff`s CheeseCake</span>
                            </th>
                            </tr>
                            <tr>
                            <td align="right">
                            	<img class="photo_perfil" alt="Acsa Brito" src="imgs/photo/perfil/acsa.jpg">
                            </td>
                            <td align="left">
                            	<p>Acsa Brito</p>
                                <div id="info_cheff">
                                    <div id="face_ico"><span style="margin-left:30px;">acsa.brito</span></div>
                                    <br />
                                    <div id="mail_ico"><span style="margin-left:30px;">acsa_brito@cheesecake.com.br</span></div>
                                </div>
                            </td>
                            </tr>
                            <tr>
                            <td align="right">
                            	<img class="photo_perfil" alt="Dhaianny Ribeiro" src="imgs/photo/perfil/dhai.jpg">
                            </td>
                            <td align="left">
                            	<p>Dhaianny Ribeiro</p>
                                <div id="info_cheff">
                                    <div id="face_ico"><span style="margin-left:30px;">dhaianny.ribeiro</span></div>
                                    <br />
                                    <div id="mail_ico"><span style="margin-left:30px;">dhaianny_ribeiro@cheesecake.com.br</span></div>
                                </div>
                            </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                </div>
            </div>
        <div id="denv_for_foot">
            Desenvolvido por:
            <strong>Pedro Hymino</strong>
        </div>
    </body>
</html>