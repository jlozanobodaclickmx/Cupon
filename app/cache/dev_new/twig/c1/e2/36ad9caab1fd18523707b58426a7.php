<?php

/* WebProfilerBundle:Collector:memory.html.twig */
class __TwigTemplate_c1e236ad9caab1fd18523707b58426a7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("WebProfilerBundle:Profiler:layout.html.twig");

        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
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
        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        <span>
            <img width=\"13\" height=\"28\" alt=\"Memory Usage\" src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAA0AAAAcBAMAAABITyhxAAAAJ1BMVEXNzc3///////////////////////8/Pz////////////+NjY0/Pz9lMO+OAAAADHRSTlMAABAgMDhAWXCvv9e8JUuyAAAAQ0lEQVQI12MQBAMBBmLpMwoMDAw6BxjOOABpHyCdAKRzsNDp5eXl1KBh5oHBAYY9YHoDQ+cqIFjZwGCaBgSpBrjcCwCZgkUHKKvX+wAAAABJRU5ErkJggg==\"/>
            <span>";
        // line 7
        echo twig_escape_filter($this->env, sprintf("%.1f", (($this->getAttribute($this->getContext($context, "collector"), "memory") / 1024) / 1024)), "html", null, true);
        echo " MB</span>
        </span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 10
        echo "    ";
        ob_start();
        // line 11
        echo "        <div class=\"sf-toolbar-info-piece\">
            <b>Memory usage</b>
            <span>";
        // line 13
        echo twig_escape_filter($this->env, sprintf("%.1f", (($this->getAttribute($this->getContext($context, "collector"), "memory") / 1024) / 1024)), "html", null, true);
        echo " MB</span>
        </div>
    ";
        $context["text"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 16
        echo "    ";
        $this->env->loadTemplate("WebProfilerBundle:Profiler:toolbar_item.html.twig")->display(array_merge($context, array("link" => false)));
    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:memory.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  188 => 69,  185 => 68,  174 => 67,  164 => 63,  134 => 54,  110 => 42,  790 => 469,  787 => 468,  776 => 466,  772 => 465,  768 => 463,  755 => 462,  729 => 457,  726 => 456,  707 => 454,  690 => 453,  686 => 451,  682 => 450,  678 => 449,  674 => 448,  670 => 447,  666 => 446,  663 => 445,  661 => 444,  644 => 443,  633 => 442,  618 => 437,  613 => 435,  609 => 434,  606 => 433,  604 => 432,  590 => 431,  558 => 401,  540 => 398,  523 => 397,  520 => 396,  518 => 395,  513 => 393,  508 => 391,  252 => 138,  204 => 71,  190 => 89,  173 => 85,  166 => 82,  161 => 80,  156 => 77,  150 => 75,  148 => 74,  112 => 52,  87 => 34,  62 => 27,  276 => 248,  262 => 236,  260 => 235,  238 => 218,  56 => 39,  20 => 1,  53 => 38,  117 => 44,  113 => 43,  40 => 8,  140 => 61,  86 => 39,  82 => 37,  77 => 18,  65 => 23,  23 => 3,  49 => 13,  167 => 64,  97 => 45,  90 => 41,  479 => 162,  473 => 161,  468 => 158,  460 => 155,  456 => 153,  452 => 151,  443 => 149,  439 => 148,  436 => 147,  434 => 146,  429 => 144,  426 => 143,  422 => 142,  412 => 134,  408 => 132,  406 => 131,  401 => 130,  397 => 129,  392 => 126,  386 => 122,  383 => 121,  380 => 120,  378 => 119,  373 => 116,  367 => 112,  364 => 111,  361 => 110,  359 => 109,  354 => 106,  340 => 105,  336 => 103,  321 => 101,  313 => 99,  311 => 98,  308 => 97,  304 => 95,  297 => 91,  293 => 90,  284 => 89,  282 => 88,  277 => 86,  267 => 85,  263 => 84,  257 => 234,  251 => 80,  246 => 78,  240 => 219,  234 => 74,  228 => 73,  223 => 71,  219 => 70,  213 => 69,  207 => 95,  198 => 67,  181 => 87,  176 => 65,  170 => 61,  168 => 60,  146 => 58,  142 => 56,  128 => 50,  125 => 44,  107 => 36,  38 => 7,  144 => 73,  141 => 51,  135 => 66,  126 => 61,  109 => 51,  103 => 37,  67 => 23,  61 => 18,  47 => 11,  225 => 96,  216 => 90,  212 => 88,  205 => 84,  201 => 83,  196 => 92,  194 => 79,  191 => 70,  189 => 77,  186 => 76,  180 => 72,  172 => 67,  159 => 81,  154 => 59,  147 => 58,  132 => 48,  127 => 52,  121 => 45,  118 => 29,  114 => 53,  104 => 39,  100 => 34,  78 => 26,  75 => 24,  71 => 23,  34 => 5,  91 => 35,  84 => 33,  44 => 10,  25 => 29,  28 => 3,  105 => 41,  93 => 42,  76 => 34,  72 => 14,  68 => 30,  58 => 16,  27 => 3,  94 => 33,  88 => 41,  79 => 35,  59 => 21,  31 => 4,  26 => 3,  21 => 2,  24 => 3,  19 => 1,  70 => 24,  63 => 21,  46 => 12,  22 => 2,  163 => 81,  155 => 80,  152 => 49,  149 => 48,  145 => 46,  139 => 71,  131 => 51,  123 => 33,  120 => 50,  115 => 28,  106 => 50,  101 => 45,  96 => 21,  83 => 39,  80 => 32,  74 => 25,  66 => 15,  55 => 24,  52 => 14,  50 => 22,  43 => 7,  41 => 19,  37 => 6,  35 => 6,  32 => 5,  29 => 3,  184 => 88,  178 => 86,  171 => 66,  165 => 58,  162 => 57,  157 => 60,  153 => 62,  151 => 79,  143 => 40,  138 => 55,  136 => 50,  133 => 31,  130 => 53,  122 => 51,  119 => 57,  116 => 35,  111 => 37,  108 => 41,  102 => 47,  98 => 31,  95 => 36,  92 => 43,  89 => 28,  85 => 29,  81 => 40,  73 => 33,  64 => 11,  60 => 23,  57 => 16,  54 => 19,  51 => 13,  48 => 9,  45 => 13,  42 => 15,  39 => 9,  36 => 7,  33 => 6,  30 => 5,);
    }
}
