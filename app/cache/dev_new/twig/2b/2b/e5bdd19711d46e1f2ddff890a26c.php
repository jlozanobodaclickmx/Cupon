<?php

/* WebProfilerBundle:Profiler:table.html.twig */
class __TwigTemplate_2b2be5bdd19711d46e1f2ddff890a26c extends Twig_Template
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
        echo "<table ";
        if (array_key_exists("class", $context)) {
            echo "class='";
            echo twig_escape_filter($this->env, $this->getContext($context, "class"), "html", null, true);
            echo "'";
        }
        echo " >
    <thead>
        <tr>
            <th scope=\"col\">Key</th>
            <th scope=\"col\">Value</th>
        </tr>
    </thead>
    <tbody>
        ";
        // line 9
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(twig_sort_filter(twig_get_array_keys_filter($this->getContext($context, "data"))));
        foreach ($context['_seq'] as $context["_key"] => $context["key"]) {
            // line 10
            echo "            <tr>
                <th>";
            // line 11
            echo twig_escape_filter($this->env, $this->getContext($context, "key"), "html", null, true);
            echo "</th>
                <td>";
            // line 12
            echo twig_escape_filter($this->env, $this->env->getExtension('yaml')->dump($this->getAttribute($this->getContext($context, "data"), $this->getContext($context, "key"), array(), "array")), "html", null, true);
            echo "</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['key'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 15
        echo "    </tbody>
</table>
";
    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:table.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 11,  117 => 44,  113 => 43,  40 => 6,  140 => 61,  86 => 39,  82 => 37,  77 => 27,  65 => 23,  23 => 1,  49 => 10,  167 => 83,  97 => 45,  90 => 43,  479 => 162,  473 => 161,  468 => 158,  460 => 155,  456 => 153,  452 => 151,  443 => 149,  439 => 148,  436 => 147,  434 => 146,  429 => 144,  426 => 143,  422 => 142,  412 => 134,  408 => 132,  406 => 131,  401 => 130,  397 => 129,  392 => 126,  386 => 122,  383 => 121,  380 => 120,  378 => 119,  373 => 116,  367 => 112,  364 => 111,  361 => 110,  359 => 109,  354 => 106,  340 => 105,  336 => 103,  321 => 101,  313 => 99,  311 => 98,  308 => 97,  304 => 95,  297 => 91,  293 => 90,  284 => 89,  282 => 88,  277 => 86,  267 => 85,  263 => 84,  257 => 81,  251 => 80,  246 => 78,  240 => 77,  234 => 74,  228 => 73,  223 => 71,  219 => 70,  213 => 69,  207 => 68,  198 => 67,  181 => 66,  176 => 65,  170 => 61,  168 => 60,  146 => 58,  142 => 56,  128 => 50,  125 => 44,  107 => 36,  38 => 6,  144 => 53,  141 => 51,  135 => 66,  126 => 60,  109 => 42,  103 => 37,  67 => 15,  61 => 22,  47 => 21,  225 => 96,  216 => 90,  212 => 88,  205 => 84,  201 => 83,  196 => 80,  194 => 79,  191 => 78,  189 => 77,  186 => 76,  180 => 72,  172 => 67,  159 => 81,  154 => 59,  147 => 55,  132 => 48,  127 => 46,  121 => 45,  118 => 29,  114 => 53,  104 => 49,  100 => 34,  78 => 21,  75 => 23,  71 => 19,  34 => 11,  91 => 20,  84 => 28,  44 => 12,  25 => 29,  28 => 3,  105 => 41,  93 => 28,  76 => 35,  72 => 14,  68 => 21,  58 => 17,  27 => 4,  94 => 33,  88 => 41,  79 => 26,  59 => 13,  31 => 3,  26 => 9,  21 => 2,  24 => 3,  19 => 1,  70 => 22,  63 => 19,  46 => 12,  22 => 2,  163 => 82,  155 => 80,  152 => 49,  149 => 48,  145 => 46,  139 => 55,  131 => 51,  123 => 33,  120 => 40,  115 => 28,  106 => 50,  101 => 32,  96 => 21,  83 => 39,  80 => 28,  74 => 24,  66 => 15,  55 => 15,  52 => 10,  50 => 10,  43 => 7,  41 => 10,  37 => 5,  35 => 9,  32 => 4,  29 => 3,  184 => 70,  178 => 71,  171 => 62,  165 => 58,  162 => 57,  157 => 60,  153 => 54,  151 => 79,  143 => 40,  138 => 51,  136 => 50,  133 => 31,  130 => 30,  122 => 59,  119 => 42,  116 => 35,  111 => 37,  108 => 37,  102 => 47,  98 => 31,  95 => 45,  92 => 43,  89 => 31,  85 => 29,  81 => 40,  73 => 19,  64 => 17,  60 => 23,  57 => 12,  54 => 10,  51 => 22,  48 => 9,  45 => 8,  42 => 11,  39 => 10,  36 => 5,  33 => 6,  30 => 3,);
    }
}
