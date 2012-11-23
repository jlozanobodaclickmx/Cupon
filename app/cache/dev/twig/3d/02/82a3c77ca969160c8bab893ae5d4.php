<?php

/* OfertaBundle:Default:portada.html.twig */
class __TwigTemplate_3d0282a3c77ca969160c8bab893ae5d4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
    <title>Portada | Cupon</title>
</head>

<body id=\"portada\"><div id=\"contenedor\">
        <header>
            <h1><a href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("portada"), "html", null, true);
        echo "\">CUPON</a></h1>
            <nav>
                <ul>
                    <li><a href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("portada"), "html", null, true);
        echo "\">Oferta del día</a></li>
                    <li><a href=\"#\">Ofertas recientes</a></li>
                    <li><a href=\"#\">Mis ofertas</a></li>
                </ul>
            </nav>
        </header>
        <article class=\"oferta\">
            <section class=\"descripcion\">
                <h1><a href=\"#\"> ";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "oferta"), "nombre"), "html", null, true);
        echo " </a></h1>
                ";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "oferta"), "descripcion"), "html", null, true);
        echo "
                <a class=\"boton\" href=\"#\">Comprar</a>
            </section>

            <section class=\"galeria\">
                <img alt=\"Fotografía de la oferta\" src=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(("uploads/images" . $this->getAttribute($this->getContext($context, "ofeta"), "foto"))), "html", null, true);
        echo "\">
                <p class=\"precio\"> ";
        // line 28
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "oferta"), "precio"), "html", null, true);
        echo " &euro;
                    <span>## DESCUENTO ##</span></p>
                <p><strong>Condiciones:</strong> ";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "oferta"), "condiciones"), "html", null, true);
        echo "</p>
            </section>

            <section class=\"estado\">
                <div class=\"tiempo\">
                    <strong>Faltan</strong>: ";
        // line 35
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "oferta"), "fechaExpiracion")), "html", null, true);
        echo "
                </div>

                <div class=\"compras\">
                    <strong>Compras</strong>: ";
        // line 39
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "oferta"), "compras"), "html", null, true);
        echo "
                </div>

                <div class=\"faltan\">
                    ";
        // line 43
        $context["faltan"] = ($this->getAttribute($this->getContext($context, "oferta"), "umbral") - $this->getAttribute($this->getContext($context, "oferta"), "compras"));
        // line 44
        echo "                    ";
        if (($this->getContext($context, "faltan") > 0)) {
            // line 45
            echo "                    ";
            // line 46
            echo "                        Faltan <strong> ";
            echo twig_escape_filter($this->env, $this->getContext($context, "faltan"), "html", null, true);
            echo " compras</strong> <br/>
                        para activar la oferta
                    ";
        } else {
            // line 49
            echo "                    ";
            // line 50
            echo "                        <strong>Oferta activada</strong> por superar las
                        <strong> ";
            // line 51
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "oferta"), "umbral"), "html", null, true);
            echo "</strong> compras necesarias
                    ";
        }
        // line 53
        echo "                </div>
            </section>

            <section class=\"direccion\">
                <h2>Disfruta de la oferta en</h2>
                <p>
                    <a href=\"#\"> ";
        // line 59
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "oferta"), "tienda"), "nombre"), "html", null, true);
        echo "</a>
                    ";
        // line 60
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "oferta"), "tienda"), "direccion"), "html", null, true);
        echo "
                </p>
            </section>

            <section class=\"tienda\">
                <h2>Sobre la tienda</h2>
                ";
        // line 66
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "oferta"), "tienda"), "descripcion"), "html", null, true);
        echo "
            </section>
        </article>

        <aside>
            ## FORMULARIO DE LOGIN ##
            <section id=\"nosotros\">
                <h2>Sobre nosotros</h2>
                <p>Lorem ipsum dolor sit amet...</p>
            </section>
        </aside>

        <footer>
            &copy; ";
        // line 79
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo " - Cupon
            <a href=\"";
        // line 80
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("pagina_estatica", array("pagina" => "ayuda")), "html", null, true);
        echo "\">Ayuda</a>
            <a href=\"";
        // line 81
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("pagina_estatica", array("pagina" => "contacto")), "html", null, true);
        echo "\">Contacto</a>
            <a href=\"";
        // line 82
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("pagina_estatica", array("pagina" => "privacidad")), "html", null, true);
        echo "\">Privacidad</a>
            <a href=\"";
        // line 83
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("pagina_estatica", array("pagina" => "sobre-nosotros")), "html", null, true);
        echo "\">Sobre nosotros</a>
        </footer>
    </div></body>
    </html>



















";
    }

    public function getTemplateName()
    {
        return "OfertaBundle:Default:portada.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  167 => 83,  97 => 46,  90 => 43,  479 => 162,  473 => 161,  468 => 158,  460 => 155,  456 => 153,  452 => 151,  443 => 149,  439 => 148,  436 => 147,  434 => 146,  429 => 144,  426 => 143,  422 => 142,  412 => 134,  408 => 132,  406 => 131,  401 => 130,  397 => 129,  392 => 126,  386 => 122,  383 => 121,  380 => 120,  378 => 119,  373 => 116,  367 => 112,  364 => 111,  361 => 110,  359 => 109,  354 => 106,  340 => 105,  336 => 103,  321 => 101,  313 => 99,  311 => 98,  308 => 97,  304 => 95,  297 => 91,  293 => 90,  284 => 89,  282 => 88,  277 => 86,  267 => 85,  263 => 84,  257 => 81,  251 => 80,  246 => 78,  240 => 77,  234 => 74,  228 => 73,  223 => 71,  219 => 70,  213 => 69,  207 => 68,  198 => 67,  181 => 66,  176 => 65,  170 => 61,  168 => 60,  146 => 58,  142 => 56,  128 => 50,  125 => 44,  107 => 36,  38 => 6,  144 => 53,  141 => 51,  135 => 66,  126 => 60,  109 => 51,  103 => 37,  67 => 15,  61 => 13,  47 => 21,  225 => 96,  216 => 90,  212 => 88,  205 => 84,  201 => 83,  196 => 80,  194 => 79,  191 => 78,  189 => 77,  186 => 76,  180 => 72,  172 => 67,  159 => 81,  154 => 59,  147 => 55,  132 => 48,  127 => 46,  121 => 45,  118 => 44,  114 => 53,  104 => 49,  100 => 34,  78 => 21,  75 => 23,  71 => 19,  34 => 11,  91 => 20,  84 => 28,  44 => 12,  25 => 5,  28 => 3,  105 => 24,  93 => 28,  76 => 35,  72 => 14,  68 => 30,  58 => 22,  27 => 4,  94 => 39,  88 => 6,  79 => 17,  59 => 27,  31 => 5,  26 => 6,  21 => 2,  24 => 3,  19 => 1,  70 => 20,  63 => 28,  46 => 7,  22 => 2,  163 => 82,  155 => 80,  152 => 49,  149 => 48,  145 => 46,  139 => 55,  131 => 51,  123 => 41,  120 => 40,  115 => 39,  106 => 50,  101 => 32,  96 => 21,  83 => 39,  80 => 24,  74 => 16,  66 => 15,  55 => 15,  52 => 15,  50 => 10,  43 => 6,  41 => 15,  37 => 8,  35 => 5,  32 => 4,  29 => 3,  184 => 70,  178 => 71,  171 => 62,  165 => 58,  162 => 57,  157 => 60,  153 => 54,  151 => 79,  143 => 54,  138 => 51,  136 => 50,  133 => 43,  130 => 47,  122 => 59,  119 => 42,  116 => 35,  111 => 37,  108 => 37,  102 => 30,  98 => 31,  95 => 45,  92 => 44,  89 => 19,  85 => 25,  81 => 40,  73 => 19,  64 => 17,  60 => 23,  57 => 11,  54 => 10,  51 => 22,  48 => 13,  45 => 8,  42 => 7,  39 => 9,  36 => 13,  33 => 4,  30 => 10,);
    }
}
