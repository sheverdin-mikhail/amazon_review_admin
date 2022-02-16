<? if(isset($route_lang)){                  
    $form_link='/'.$reviewer['opinion'].'-'.$route_lang.'/form/';
    $url='/'.$reviewer['opinion'].'-'.$route_lang;
    }else{
        $form_link = '/'.$reviewer['opinion'].'/form/';
        $url = '/'.$reviewer['opinion'];
    }
    ?>
    <div id="full-page">
    <header id="header">
            <img class="fluid-img header-img1 header-img-extra" src='<?=$baseURL."/img/1.png"?>' alt="image">
            <div class="header-container">
                <div class="container">
                    <a href="<?=$index_url?>" class="logo">
                        <img src='<?=$baseURL."/img/logo.svg"?>' class="fluid-img" alt="Logo">
                    </a>
                </div>
            </div>
        </header>
        <div class="container">
            <div class="main main444">
                <h1 class="main-title main-title-first">¿Qué producto has comprado?</h1>
                <p class="main-desc main-desc444">¿No compró este artículo? <a href="#">Contáctenos
                        support@eurodo.es</a></p>
            </div>
        </div>
        <section class="products products444">
            <div class="container">
            <div class="row prods">
            <?foreach($products as $product): ?>
                        <div class="product-item">
                        <img src="<?=$product['img']?>" class="fluid-img product-img" alt="product">
                        <div class="d-flex product-colors">
                            <?foreach($prodvars as $prodvar):?>
                                <? if($prodvar['parent_ASIN'] == $product['asin']):?>
                                    <span style="background-color: <?print(preg_replace('%^\s+|\s+$%u', '', $prodvar['color']))?>;"></span>
                                <? endif; ?>
                            <? endforeach; ?>
                        </div>
                        <div class="d-flex">
                                <?foreach($prodvars as $prodvar):?>
                                    <? if($prodvar['parent_ASIN'] == $product['asin']):?>
                                        <? if(!empty(trim($prodvar['weight']))): ?>
                                            <span class="product-kg"><?=trim($prodvar['weight'])?></span>
                                        <?endif;?>         
                                    <? endif; ?>
                                <? endforeach; ?>
                            </div>
                            <div class="d-flex">
                                <?foreach($prodvars as $prodvar):?>
                                    <? if($prodvar['parent_ASIN'] == $product['asin']):?>
                                        <?if(!empty(trim($prodvar['size']))):?> 
                                            <span class="product-kg"><?=trim($prodvar['size'])?></span>
                                        <?endif;?>         
                                    <? endif; ?>
                                <? endforeach; ?>
                            </div>
                       
                        <a href="<?=$form_link?>" data-value="<?=$product['id']?>" data-url="<?=$url?>" class="product-btn" ><?=$product['name']?></a>
                    </div>
                    <? endforeach; ?>
                </div>
            </div>
        </section>
        <div class="container">
            <h3 class="content-title content-title-main">Envío Gratis | Sin comisiones | No se requiere tarjeta bancaria
            </h3>
            <div class="content-desc">
                <p class="content-desc-txt">* Las condiciones se aplican:</p>
                <p class="content-desc-txt">
                    Limitado a un producto gratuito por cuenta de Amazon por hogar. Oferta válida solo para clientes que hayan comprado nuestro artículo a precio completo en nuestro minorista oficial de Amazon.com. Para calificar, los participantes deben aceptar enviarnos su experiencia con un producto comprado previamente y que han usado durante al menos 14 días.
                </p>
            </div>
        </div>
        <footer id="footer" class="d-flex">
            <div class="container">
                <p class="footer-txt">Copyright © 2020 EURODO - Todos los derechos reservados</p>
            </div>
            <div class="select">
                <? if(isset($langs_cut)): ?>
                    <select class="lang">
                        <? if(in_array('ru', $langs_cut)): ?> <option <? if($lang=='ru'): echo 'selected'; endif; ?> value="-ru">Русский</option><? endif;?>
                        <? if(in_array('en', $langs_cut)): ?> <option <? if($lang=='en'): echo 'selected'; endif; ?> value="-en">English</option><? endif;?>
                        <? if(in_array('es', $langs_cut)): ?> <option <? if($lang=='es'): echo 'selected'; endif; ?> value="-es">Español</option><? endif;?>
                        <? if(in_array('it', $langs_cut)): ?> <option <? if($lang=='it'): echo 'selected'; endif; ?> value="-it">Italiano</option><? endif;?>
                        <? if(in_array('de', $langs_cut)): ?> <option <? if($lang=='de'): echo 'selected'; endif; ?> value="-de">Deutsch</option><? endif;?>
                        <? if(in_array('fr', $langs_cut)): ?> <option <? if($lang=='fr'): echo 'selected'; endif; ?> value="-fr">Français</option><? endif;?>
                    </select>
                <?endif;?>
            </div>
        </footer>
    </div>