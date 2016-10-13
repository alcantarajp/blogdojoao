<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class BlogController extends Controller
{

    public function index($pagina)
    {

        switch ($pagina) {
            case 'mundo':

                $noticia_m1 = [
                'titulo'=>'Dezenas de migrantes africanos pulam cerca rumo à Espanha', 
                'mensagem'=>'Cerca de 300 pessoas superaram barreira de 6 m de altura em Melilla. Forças marroquinas contiveram 200, mas 100 entraram na Espanha.',
                'link'=> 'http://g1.globo.com/mundo/noticia/2016/10/dezenas-de-migrantes-africanos-pulam-cerca-para-chegar-espanha.html'];
                
                $noticia_m2 = [
                'titulo'=>'Rei da Tailândia, Bhumibol Adulyadej, morre após 70 anos no poder', 
                'mensagem'=>'Monarca de 88 anos estava internado em hospital em Bangcoc.Status quase divino do rei faz da sucessão um tabu no país.',
                'link'=>'http://g1.globo.com/mundo/noticia/2016/10/rei-da-tailandia-bhumibol-adulyadej-morre.html'];

                $mundo = ['M1'=>$noticia_m1,'M2'=>$noticia_m2];
                $noticias = ['Pagina'=> $pagina, 'Mundo'=>$mundo];
                $view = 'paginas.' . $pagina;
                return view($view, ['noticias'=>$noticias]);

                break;

            case 'politica':
                $noticia_p1 = [
                'titulo'=>'Temer recebe FHC no Jaburu e conversa sobre PEC do teto', 
                'mensagem'=>'Presidente ofereceu almoço a tucano em dia sem previsão de compromisso.
        Proposta, aprovada em 1º turno na Câmara, limita despesas públicas.',
                'link'=>'http://g1.globo.com/politica/noticia/2016/10/temer-recebe-fhc-no-jaburu-e-conversa-sobre-pec-do-teto.html'];

                $noticia_p2 = [
                'titulo'=>'Na quarta viagem internacional, Temer vai à Índia para cúpula do Brics', 
                'mensagem'=>'Presidente embarcará na madrugada desta sexta; ele também irá ao Japão.
        Primeira-dama, Marcela Temer, deve compor comitiva brasileira na viagem.',
                'link'=>'http://g1.globo.com/politica/noticia/2016/10/na-quarta-viagem-internacional-temer-vai-india-para-cupula-do-brics.html'];

                $politica = ['P1'=>$noticia_p1, 'P2'=>$noticia_p2];
                $noticias = ['Pagina'=> $pagina, 'Politica'=>$politica];
                $view = 'paginas.' . $pagina;
                return view($view, ['noticias'=>$noticias]);

                break;

            case 'carros':
                $noticia_c1 = [
                'titulo'=>'Camaro supera Mustang em vendas pela 1ª vez em 2 anos', 
                'mensagem'=>'Ford paralisa produção do Mustang. após emplacamentos caírem 32%.
                Vitória do modelo Chevrolet em setembro é atribuída a descontos maiores.',
                'link'=>'http://g1.globo.com/carros/noticia/2016/10/camaro-supera-mustang-em-vendas-pela-1-vez-em-2-anos.html'];

                $noticia_c2 = [
                'titulo'=>'BMW Série 5 chega à sétima geração mais leve e tecnológico', 
                'mensagem'=>'Sedã ficou até 100 kg mais leve que a geração anterior.
                Série 5 ganha luxo e tecnologias do irmão maior, o Série 7',
                'link'=>'http://g1.globo.com/carros/noticia/2016/10/bmw-serie-5-chega-setima-geracao-mais-leve-e-tecnologico.html'];

                $carros = ['C1'=>$noticia_c1, 'C2'=>$noticia_c2];
                $noticias = ['Pagina'=> $pagina, 'Carros' => $carros,];
                $view = 'paginas.' . $pagina;
                return view($view, ['noticias'=>$noticias]);

                break;
            default:
                return view('errors.404', ['pagina'=>$pagina]);
        }

    }

}
