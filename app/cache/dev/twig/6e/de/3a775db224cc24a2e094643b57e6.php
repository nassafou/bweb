<?php

/* WebProfilerBundle:Profiler:toolbar_item.html.twig */
class __TwigTemplate_6ede3a775db224cc24a2e094643b57e6 extends Twig_Template
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
        if ((isset($context["link"]) ? $context["link"] : $this->getContext($context, "link"))) {
            // line 2
            echo "    ";
            ob_start();
            // line 3
            echo "        <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_profiler", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "panel" => (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, (isset($context["icon"]) ? $context["icon"] : $this->getContext($context, "icon")), "html", null, true);
            echo "</a>
    ";
            $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        }
        // line 6
        echo "<div class=\"sf-toolbar-block\">
     <div class=\"sf-toolbar-icon\">";
        // line 7
        echo twig_escape_filter($this->env, ((array_key_exists("icon", $context)) ? (_twig_default_filter((isset($context["icon"]) ? $context["icon"] : $this->getContext($context, "icon")), "")) : ("")), "html", null, true);
        echo "</div>
     <div class=\"sf-toolbar-info\">";
        // line 8
        echo twig_escape_filter($this->env, ((array_key_exists("text", $context)) ? (_twig_default_filter((isset($context["text"]) ? $context["text"] : $this->getContext($context, "text")), "")) : ("")), "html", null, true);
        echo "</div>
</div>
";
    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_item.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  356 => 328,  344 => 318,  342 => 317,  339 => 316,  297 => 276,  295 => 275,  81 => 29,  70 => 24,  113 => 40,  104 => 37,  100 => 36,  77 => 28,  65 => 11,  97 => 41,  58 => 18,  127 => 60,  110 => 22,  90 => 32,  84 => 27,  76 => 27,  53 => 15,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 55,  132 => 51,  128 => 49,  107 => 36,  61 => 12,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 56,  135 => 62,  119 => 42,  102 => 33,  71 => 23,  67 => 22,  63 => 21,  59 => 13,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 62,  158 => 79,  156 => 66,  151 => 63,  142 => 59,  138 => 54,  136 => 56,  121 => 46,  117 => 19,  105 => 18,  91 => 35,  62 => 24,  49 => 14,  93 => 28,  88 => 31,  78 => 18,  28 => 3,  38 => 12,  26 => 6,  94 => 38,  89 => 30,  85 => 23,  75 => 24,  68 => 12,  56 => 16,  24 => 3,  27 => 7,  87 => 32,  46 => 13,  44 => 11,  31 => 4,  21 => 2,  25 => 35,  19 => 1,  79 => 29,  72 => 16,  69 => 25,  47 => 15,  40 => 8,  37 => 7,  22 => 2,  246 => 90,  157 => 56,  145 => 46,  139 => 63,  131 => 61,  123 => 59,  120 => 20,  115 => 43,  111 => 37,  108 => 19,  101 => 43,  98 => 34,  96 => 30,  83 => 31,  74 => 27,  66 => 25,  55 => 38,  52 => 14,  50 => 18,  43 => 11,  41 => 10,  35 => 9,  32 => 4,  29 => 3,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 65,  168 => 72,  164 => 59,  162 => 57,  154 => 58,  149 => 51,  147 => 58,  144 => 49,  141 => 48,  133 => 55,  130 => 41,  125 => 44,  122 => 43,  116 => 41,  112 => 42,  109 => 47,  106 => 45,  103 => 32,  99 => 31,  95 => 34,  92 => 28,  86 => 28,  82 => 28,  80 => 30,  73 => 27,  64 => 21,  60 => 20,  57 => 20,  54 => 19,  51 => 37,  48 => 16,  45 => 14,  42 => 11,  39 => 10,  36 => 7,  33 => 6,  30 => 5,);
    }
}
