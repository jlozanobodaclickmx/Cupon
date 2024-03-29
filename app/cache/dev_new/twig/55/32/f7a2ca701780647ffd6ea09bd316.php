<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_5532f7a2ca701780647ffd6ea09bd316 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("WebProfilerBundle:Profiler:layout.html.twig");

        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "WebProfilerBundle:Profiler:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
    }

    // line 6
    public function block_menu($context, array $blocks = array())
    {
        // line 7
        echo "<span class=\"label\">
    <span class=\"icon\"><img src=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/webprofiler/images/profiler/routing.png"), "html", null, true);
        echo "\" alt=\"Routing\" /></span>
    <strong>Routing</strong>
</span>
";
    }

    // line 13
    public function block_panel($context, array $blocks = array())
    {
        // line 14
        echo "    ";
        echo $this->env->getExtension('actions')->renderAction("WebProfilerBundle:Router:panel", array("token" => $this->getContext($context, "token")), array());
    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  356 => 163,  347 => 160,  343 => 159,  335 => 157,  333 => 156,  325 => 150,  323 => 149,  316 => 145,  309 => 141,  302 => 137,  295 => 133,  288 => 129,  281 => 125,  274 => 121,  259 => 109,  245 => 101,  217 => 83,  214 => 82,  211 => 81,  206 => 78,  203 => 77,  192 => 72,  158 => 56,  69 => 20,  209 => 73,  182 => 69,  160 => 59,  188 => 67,  185 => 68,  174 => 67,  164 => 63,  134 => 54,  110 => 39,  790 => 469,  787 => 468,  776 => 466,  772 => 465,  768 => 463,  755 => 462,  729 => 457,  726 => 456,  707 => 454,  690 => 453,  686 => 451,  682 => 450,  678 => 449,  674 => 448,  670 => 447,  666 => 446,  663 => 445,  661 => 444,  644 => 443,  633 => 442,  618 => 437,  613 => 435,  609 => 434,  606 => 433,  604 => 432,  590 => 431,  558 => 401,  540 => 398,  523 => 397,  520 => 396,  518 => 395,  513 => 393,  508 => 391,  252 => 105,  204 => 71,  190 => 89,  173 => 85,  166 => 82,  161 => 80,  156 => 77,  150 => 75,  148 => 52,  112 => 52,  87 => 34,  62 => 27,  276 => 248,  262 => 236,  260 => 235,  238 => 97,  56 => 39,  20 => 1,  53 => 38,  117 => 44,  113 => 40,  40 => 8,  140 => 49,  86 => 28,  82 => 37,  77 => 18,  65 => 23,  23 => 3,  49 => 13,  167 => 64,  97 => 45,  90 => 28,  479 => 162,  473 => 161,  468 => 158,  460 => 155,  456 => 153,  452 => 151,  443 => 149,  439 => 148,  436 => 147,  434 => 146,  429 => 144,  426 => 143,  422 => 142,  412 => 134,  408 => 132,  406 => 131,  401 => 130,  397 => 129,  392 => 126,  386 => 122,  383 => 121,  380 => 120,  378 => 119,  373 => 116,  367 => 112,  364 => 111,  361 => 110,  359 => 109,  354 => 106,  340 => 158,  336 => 103,  321 => 101,  313 => 99,  311 => 98,  308 => 97,  304 => 95,  297 => 91,  293 => 90,  284 => 89,  282 => 88,  277 => 86,  267 => 85,  263 => 84,  257 => 234,  251 => 80,  246 => 78,  240 => 219,  234 => 74,  228 => 89,  223 => 71,  219 => 70,  213 => 69,  207 => 95,  198 => 74,  181 => 87,  176 => 61,  170 => 60,  168 => 60,  146 => 58,  142 => 56,  128 => 45,  125 => 44,  107 => 36,  38 => 7,  144 => 73,  141 => 51,  135 => 47,  126 => 61,  109 => 51,  103 => 37,  67 => 23,  61 => 18,  47 => 9,  225 => 88,  216 => 90,  212 => 88,  205 => 71,  201 => 83,  196 => 92,  194 => 79,  191 => 70,  189 => 77,  186 => 76,  180 => 72,  172 => 64,  159 => 81,  154 => 54,  147 => 58,  132 => 47,  127 => 52,  121 => 45,  118 => 29,  114 => 53,  104 => 36,  100 => 35,  78 => 26,  75 => 23,  71 => 20,  34 => 5,  91 => 35,  84 => 25,  44 => 10,  25 => 29,  28 => 3,  105 => 41,  93 => 31,  76 => 34,  72 => 22,  68 => 19,  58 => 16,  27 => 3,  94 => 33,  88 => 41,  79 => 23,  59 => 21,  31 => 4,  26 => 3,  21 => 2,  24 => 3,  19 => 1,  70 => 24,  63 => 16,  46 => 12,  22 => 2,  163 => 81,  155 => 80,  152 => 49,  149 => 48,  145 => 57,  139 => 71,  131 => 46,  123 => 33,  120 => 50,  115 => 44,  106 => 50,  101 => 45,  96 => 21,  83 => 27,  80 => 32,  74 => 21,  66 => 19,  55 => 24,  52 => 14,  50 => 10,  43 => 7,  41 => 8,  37 => 6,  35 => 6,  32 => 5,  29 => 3,  184 => 70,  178 => 62,  171 => 66,  165 => 60,  162 => 57,  157 => 60,  153 => 62,  151 => 53,  143 => 56,  138 => 55,  136 => 50,  133 => 31,  130 => 53,  122 => 51,  119 => 43,  116 => 41,  111 => 37,  108 => 41,  102 => 34,  98 => 32,  95 => 31,  92 => 43,  89 => 29,  85 => 29,  81 => 24,  73 => 33,  64 => 11,  60 => 16,  57 => 16,  54 => 13,  51 => 12,  48 => 11,  45 => 13,  42 => 8,  39 => 6,  36 => 5,  33 => 4,  30 => 3,);
    }
}
