<div id="content-footer">
<div class="container">
    <div class="col-sm-4">
    <a href="<?php echo esc_url( home_url( '/' )); ?>">
            <img class="logo d-none d-sm-none d-md-none d-lg-block d-xl-block" 
            src="<?php echo get_template_directory_uri(). "/img/logo_footer.png"; ?>" 
            alt="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?>">
          </a>
    </div>
    <div class="col-sm-5 endereco">
    <address>
        <h4><strong>LAW FIRM</strong></h4>
        <p>Rua Padre Roma, 482 - Centro <br>
        Florianópolis - Santa Catarina<br></p>
        <p>(48) 3344 9944<br>
        (48) 3564 9944</p> 
        <p>oi@lawfirm.com</p>
        </address>

        <address>
            <h4><strong>REDES SOCIAIS</strong></h4>
            <ul class="list-inline redes">
                <li><a href="#" title="Facebook"><img class="img-responsive"  src="<?php echo get_template_directory_uri(). "/img/icon-facebook.png"; ?>" alt="Facebook"></a></li>
                <li><a href="#" title="Twitter"><img class="img-responsive"  src="<?php echo get_template_directory_uri(). "/img/icon-twitter.png"; ?>" alt="Twitter"></a></li>
                <li><a href="#" title="Linkedin"><img class="img-responsive"  src="<?php echo get_template_directory_uri(). "/img/icon-linkedin.png"; ?>" alt="Linkedin"></a></li>
            
            </ul>   
        </address>
    </div>
    <div class="col-sm-5 col-sm-offset-1 form-footer">
        <h4 >ENTRE EM CONTATO</h4>
        <form>
            <div class="form-group">
                <input type="text" class="form-control" placeholder="Nome">
                
            </div>
            <div class="form-group">
                <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
            </div>
            <div class="form-group">
                <input type="text" class="form-control" placeholder="Telefone">
            </div>
            <div class="form-group">
            <textarea class="form-control" rows="3" placeholder="Mensagem"></textarea>
            </div>
            
            <button type="submit"  class="btn btn-primary pull-right col-sm-6 ">Enviar</button>
            </form>
    </div>
</div>
</div>