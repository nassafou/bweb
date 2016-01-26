<?php

/* WebProfilerBundle:Collector:memory.html.twig */
class __TwigTemplate_596eb7346f9c0b2bbf3de8012a1ad8c3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("@WebProfiler/Profiler/layout.html.twig");

        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
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
            <img width=\"13\" height=\"28\" alt=\"Memory Usage\" src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAA0AAAAcBAMAAABITyhxAAAAJ1BMVEXNzc3///////////////////////8/Pz////////////+NjY0/Pz9lMO+OAAAADHRSTlMAABAgMDhAWXCvv9e8JUuyAAAAQ0lEQVQI12MQBAMBBmLpMwoMDAw6BxjOOABpHyCdAKRzsNDp5eXl1KBh5oHBAYY9YHoDQ+cqIFjZwGCaBgSpBrjcCwCZgkUHKKvX+wAAAABJRU5ErkJggg==\">
            <span>";
        // line 7
        echo twig_escape_filter($this->env, sprintf("%.1f", (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "memory") / 1024) / 1024)), "html", null, true);
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
        echo twig_escape_filter($this->env, sprintf("%.1f", (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "memory") / 1024) / 1024)), "html", null, true);
        echo " / ";
        echo ((($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "memoryLimit") == (-1))) ? ("&infin;") : (twig_escape_filter($this->env, sprintf("%.1f", (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "memoryLimit") / 1024) / 1024)))));
        echo " MB</span>
        </div>
    ";
        $context["text"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 16
        echo "    ";
        $this->env->loadTemplate("@WebProfiler/Profiler/toolbar_item.html.twig")->display(array_merge($context, array("link" => false)));
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
        return array (  34 => 5,  462 => 202,  449 => 198,  446 => 197,  441 => 196,  439 => 195,  431 => 189,  429 => 188,  422 => 184,  415 => 180,  408 => 176,  401 => 172,  394 => 168,  380 => 160,  373 => 156,  361 => 146,  351 => 141,  348 => 140,  338 => 135,  335 => 134,  329 => 131,  325 => 129,  323 => 128,  320 => 127,  315 => 125,  303 => 122,  300 => 121,  289 => 113,  286 => 112,  275 => 105,  270 => 102,  267 => 101,  262 => 98,  256 => 96,  248 => 94,  233 => 87,  226 => 84,  216 => 79,  213 => 78,  207 => 75,  200 => 72,  197 => 71,  194 => 70,  191 => 69,  185 => 66,  181 => 65,  178 => 64,  172 => 62,  165 => 60,  153 => 56,  150 => 55,  134 => 47,  20 => 1,  356 => 328,  344 => 318,  342 => 137,  339 => 316,  297 => 276,  295 => 275,  81 => 23,  70 => 19,  113 => 38,  104 => 37,  100 => 36,  77 => 28,  65 => 11,  97 => 41,  58 => 18,  127 => 60,  110 => 22,  90 => 27,  84 => 24,  76 => 27,  53 => 12,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 199,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 164,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 143,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 124,  309 => 97,  305 => 95,  298 => 120,  294 => 90,  285 => 89,  283 => 88,  278 => 106,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 90,  229 => 85,  220 => 81,  214 => 69,  177 => 65,  169 => 60,  140 => 55,  132 => 51,  128 => 49,  107 => 36,  61 => 12,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 56,  135 => 62,  119 => 40,  102 => 33,  71 => 23,  67 => 18,  63 => 21,  59 => 16,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 62,  158 => 79,  156 => 58,  151 => 63,  142 => 59,  138 => 54,  136 => 56,  121 => 46,  117 => 19,  105 => 34,  91 => 35,  62 => 24,  49 => 14,  93 => 28,  88 => 31,  78 => 18,  28 => 3,  38 => 7,  26 => 6,  94 => 38,  89 => 30,  85 => 23,  75 => 24,  68 => 12,  56 => 16,  24 => 3,  27 => 7,  87 => 32,  46 => 13,  44 => 10,  31 => 4,  21 => 2,  25 => 35,  19 => 1,  79 => 29,  72 => 16,  69 => 25,  47 => 11,  40 => 8,  37 => 7,  22 => 2,  246 => 93,  157 => 56,  145 => 46,  139 => 63,  131 => 61,  123 => 42,  120 => 20,  115 => 43,  111 => 37,  108 => 19,  101 => 43,  98 => 34,  96 => 30,  83 => 31,  74 => 27,  66 => 25,  55 => 38,  52 => 14,  50 => 18,  43 => 9,  41 => 10,  35 => 5,  32 => 4,  29 => 3,  209 => 82,  203 => 73,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 63,  173 => 65,  168 => 61,  164 => 59,  162 => 59,  154 => 58,  149 => 51,  147 => 54,  144 => 49,  141 => 51,  133 => 55,  130 => 46,  125 => 44,  122 => 43,  116 => 39,  112 => 42,  109 => 47,  106 => 45,  103 => 32,  99 => 31,  95 => 34,  92 => 28,  86 => 28,  82 => 28,  80 => 30,  73 => 20,  64 => 17,  60 => 20,  57 => 20,  54 => 19,  51 => 13,  48 => 16,  45 => 10,  42 => 11,  39 => 10,  36 => 7,  33 => 4,  30 => 3,);
    }
}
