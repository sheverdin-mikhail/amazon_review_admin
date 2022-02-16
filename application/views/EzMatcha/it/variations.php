<? if(isset($route_lang)){                       
    $link='/'.$reviewer['opinion'].'-'.$route_lang.'/product';
    }else{
        $link ='/'.$reviewer['opinion'].'/product';
    }
?>
<? if(isset($route_lang)){                       
    $url='/'.$reviewer['opinion'].'-'.$route_lang.'/variate';
    }else{
        $url ='/'.$reviewer['opinion'].'/variate';
    }
?>

   <div class="full-page">
        <header id="header">
            <div class="container">
                <div class="logo text-center">
                    <a href="<?=$index_url?>"><img src='<?=$baseURL."/img/logo.svg"?>' alt="Logo" class="logo-img img-fluid"></a>
                </div>
            </div>
        </header>
        <div class="content content--color">
            <div class="container text-center">
                <h2 class="content-title">SCEGLI IL COLORE CHE HAI ACQUISTATO PER AVERE IL TUO PRODOTTO GRATUITO</h2>
                <div class="content-subtitle">
                    <p>Per ricevere il tuo REGALO speciale, abbiamo bisogno del tuo onesto feedback sui nostri prodotti in modo da poterli migliorare in futuro. </p>
                    <p>Se non vedi il colore del tuo prodotto o riscontri alcuni problemi, per favore contattaci al <a href="mailto:support@eurodo.es">support@eurodo.es</a> </p>
                </div>
                <div class="content-nofees"> *Nessun costo, Non è richiesta nessuna informazione sulla tua carta di credito.</div>
            </div>
            <div class="product-container product-container--pt35">
                <div class="container">
                    <div class="row">
                    <? foreach($prodvars as $prodvar):?>
                        <div class="product-item">
                            <img src="<?=$prodvar['img']?>" class="img-fluid" alt="product"><br/>
                            <a href="<?=$link?>" class="product-btn dumbbell-btn" data-href="<?=$link?>"  data-url="<?=$url?>" data-value="<?=$prodvar['id']?>"><?=$prodvar['name']?></a>
                        </div>
                         <? endforeach; ?>
                    </div>
                </div>
            </div>
        </div>

        <footer id="footer">
            <div class="container d-flex">
                <p class="footer-txt text-center">Copyright © 2020 EURODO - tutti i diritti riservati</p>
            </div>

        </footer>
    </div>
