<?php

/* AcmeDemoBundle::layout.html.twig */
class __TwigTemplate_df7c35744ea053682dfe6cd36bc4eeaa extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content_header' => array($this, 'block_content_header'),
            'content_header_more' => array($this, 'block_content_header_more'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" sizes=\"16x16\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
        <link rel=\"stylesheet\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmedemo/css/demo.css"), "html", null, true);
        echo "\" />
    </head>
    <body>
        <div id=\"symfony-wrapper\">
            <div id=\"symfony-header\">
                <a href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_welcome"), "html", null, true);
        echo "\">
                    <img src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmedemo/images/logo.gif"), "html", null, true);
        echo "\" alt=\"Symfony logo\" />
                </a>
                <form id=\"symfony-search\" method=\"GET\" action=\"http://symfony.com/search\">
                    <label for=\"symfony-search-field\"><span>Search on Symfony Website</span></label>
                    <input name=\"q\" id=\"symfony-search-field\" type=\"search\" placeholder=\"Search on Symfony website\" class=\"medium_txt\" />
                    <input type=\"submit\" class=\"symfony-button-grey\" value=\"OK\" />
                </form>
            </div>

            ";
        // line 22
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "session"), "flashbag"), "get", array(0 => "notice"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 23
            echo "                <div class=\"flash-message\">
                    <em>Notice</em>: ";
            // line 24
            echo twig_escape_filter($this->env, $this->getContext($context, "flashMessage"), "html", null, true);
            echo "
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 27
        echo "
            ";
        // line 28
        $this->displayBlock('content_header', $context, $blocks);
        // line 37
        echo "
            <div class=\"symfony-content\">
                ";
        // line 39
        $this->displayBlock('content', $context, $blocks);
        // line 41
        echo "            </div>

            ";
        // line 43
        if (array_key_exists("code", $context)) {
            // line 44
            echo "                <h2>Code behind this page</h2>
                <div class=\"symfony-content\">";
            // line 45
            echo $this->getContext($context, "code");
            echo "</div>
            ";
        }
        // line 47
        echo "        </div>
    </body>
</html>
";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "Demo Bundle";
    }

    // line 28
    public function block_content_header($context, array $blocks = array())
    {
        // line 29
        echo "                <ul id=\"menu\">
                    ";
        // line 30
        $this->displayBlock('content_header_more', $context, $blocks);
        // line 33
        echo "                </ul>

                <div style=\"clear: both\"></div>
            ";
    }

    // line 30
    public function block_content_header_more($context, array $blocks = array())
    {
        // line 31
        echo "                        <li><a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_demo"), "html", null, true);
        echo "\">Demo Home</a></li>
                    ";
    }

    // line 39
    public function block_content($context, array $blocks = array())
    {
        // line 40
        echo "                ";
    }

    public function getTemplateName()
    {
        return "AcmeDemoBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  140 => 39,  86 => 39,  82 => 37,  77 => 27,  65 => 23,  23 => 1,  49 => 13,  167 => 83,  97 => 45,  90 => 43,  479 => 162,  473 => 161,  468 => 158,  460 => 155,  456 => 153,  452 => 151,  443 => 149,  439 => 148,  436 => 147,  434 => 146,  429 => 144,  426 => 143,  422 => 142,  412 => 134,  408 => 132,  406 => 131,  401 => 130,  397 => 129,  392 => 126,  386 => 122,  383 => 121,  380 => 120,  378 => 119,  373 => 116,  367 => 112,  364 => 111,  361 => 110,  359 => 109,  354 => 106,  340 => 105,  336 => 103,  321 => 101,  313 => 99,  311 => 98,  308 => 97,  304 => 95,  297 => 91,  293 => 90,  284 => 89,  282 => 88,  277 => 86,  267 => 85,  263 => 84,  257 => 81,  251 => 80,  246 => 78,  240 => 77,  234 => 74,  228 => 73,  223 => 71,  219 => 70,  213 => 69,  207 => 68,  198 => 67,  181 => 66,  176 => 65,  170 => 61,  168 => 60,  146 => 58,  142 => 56,  128 => 50,  125 => 44,  107 => 36,  38 => 6,  144 => 53,  141 => 51,  135 => 66,  126 => 60,  109 => 5,  103 => 37,  67 => 15,  61 => 22,  47 => 21,  225 => 96,  216 => 90,  212 => 88,  205 => 84,  201 => 83,  196 => 80,  194 => 79,  191 => 78,  189 => 77,  186 => 76,  180 => 72,  172 => 67,  159 => 81,  154 => 59,  147 => 55,  132 => 48,  127 => 46,  121 => 30,  118 => 29,  114 => 53,  104 => 49,  100 => 34,  78 => 21,  75 => 23,  71 => 19,  34 => 11,  91 => 20,  84 => 28,  44 => 12,  25 => 29,  28 => 3,  105 => 24,  93 => 28,  76 => 35,  72 => 14,  68 => 24,  58 => 17,  27 => 4,  94 => 44,  88 => 41,  79 => 17,  59 => 27,  31 => 5,  26 => 6,  21 => 2,  24 => 3,  19 => 1,  70 => 20,  63 => 28,  46 => 7,  22 => 2,  163 => 82,  155 => 80,  152 => 49,  149 => 48,  145 => 46,  139 => 55,  131 => 51,  123 => 33,  120 => 40,  115 => 28,  106 => 50,  101 => 32,  96 => 21,  83 => 39,  80 => 28,  74 => 16,  66 => 15,  55 => 15,  52 => 14,  50 => 10,  43 => 11,  41 => 10,  37 => 7,  35 => 5,  32 => 4,  29 => 5,  184 => 70,  178 => 71,  171 => 62,  165 => 58,  162 => 57,  157 => 60,  153 => 54,  151 => 79,  143 => 40,  138 => 51,  136 => 50,  133 => 31,  130 => 30,  122 => 59,  119 => 42,  116 => 35,  111 => 37,  108 => 37,  102 => 47,  98 => 31,  95 => 45,  92 => 43,  89 => 19,  85 => 25,  81 => 40,  73 => 19,  64 => 17,  60 => 23,  57 => 11,  54 => 10,  51 => 22,  48 => 13,  45 => 12,  42 => 7,  39 => 9,  36 => 13,  33 => 6,  30 => 3,);
    }
}
