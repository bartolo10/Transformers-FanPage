


<footer class="darkfooter  mt-5 ">
        <div class="container-fluid separacion ">
            <div class="row mx-3">
                <div class="col-md-6">
                    <div  class="copyright">
                        <p>Copyright © 2022 Transformers Theme Demo. Theme by Bastian Oteiza.</p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="social">
                        <a target="_blank" href="https://www.facebook.com/TransformersLatam"><i class="fab fa-facebook-f fa-2x"></i></a>
                        <a target="_blank" href="https://twitter.com/transformers"> <i class="fab fa-twitter fa-2x"></i></a>
                        <a target="_blank" href="https://vimeo.com/94101046"> <i class="fab fa-vimeo-v fa-2x"></i></a> 
                        <a target="_blank" href="https://www.behance.net/search/projects/?search=transformer"><i class="fab fa-behance fa-2x"></i></a> 
                        <a target="_blank" href="https://www.google.com/search?q=transformers+&tbm=isch&ved=2ahUKEwiblru897_4AhV3SrgEHUr3BfcQ2-cCegQIABAA&oq=transformers+&gs_lcp=CgNpbWcQAzIECCMQJzIECCMQJzILCAAQgAQQsQMQgwEyCAgAEIAEELEDMgUIABCABDIFCAAQgAQyBQgAEIAEMgUIABCABDILCAAQgAQQsQMQgwEyBQgAEIAEUK4KWK4KYIIMaABwAHgAgAH3AYgBtQKSAQUxLjAuMZgBAKABAaoBC2d3cy13aXotaW1nwAEB&sclient=img&ei=znOyYpv3EveU4dUPyu6XuA8&bih=625&biw=1360"><i class="fab fa-google-plus-g fa-2x"></i></a>
                        
                    </div>
                </div>
            </div>
        </div>
    </footer>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
    integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
    integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous">
</script>
<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>


<script src="<?php echo get_template_directory_uri(); ?>/js/plugins/aos-master/dist/aos.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/script.js"></script>

<script >

/* ajax (no funcionó)

function ajax() {
const http= new XMLHttpRequest();
const url = <?php bloginfo('http://localhost/transformers/card.php'); ?>
http.onreadystatechange = function (){
    if (this.readyState  == 4 && this.status == 200) {
        console.log (this.responseText);
        document.getElementById ("llamado").innerHTML = this.responseText;

    }
}
http.open("GET", url);
http.send();
}
document.getElementById("boton").addEventListener("click", function(){
ajax();
});

*/




     var modalBootstrap = document.getElementById('exampleModal')

modalBootstrap.addEventListener('show.bs.modal', function(){

    botonauto = event.relatedTarget
    
    cambio = botonauto.getAttribute ('data-bs-auto')
    cambiodeTexto = botonauto.getAttribute ('data-bs-texto' )

    tituloModal = modalBootstrap.querySelector('.modal-title')
    
    textoModal = modalBootstrap.querySelector('.modal-body')

    tituloModal.textContent = cambio
   
    textoModal.innerHTML = cambiodeTexto

});




</script>

<?php wp_footer(); ?>
</body>

</html>