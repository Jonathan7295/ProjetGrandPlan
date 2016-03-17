<?php

/* WebProfilerBundle:Collector:exception.html.twig */
class __TwigTemplate_a6669b24a18b5441addd5b78b43babdce0244d2e04b1d598b56b29360f026c69 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9f7be0c5e635bb7d1c2999042400f10a7f314fa87944de3459a6af3ee96b8424 = $this->env->getExtension("native_profiler");
        $__internal_9f7be0c5e635bb7d1c2999042400f10a7f314fa87944de3459a6af3ee96b8424->enter($__internal_9f7be0c5e635bb7d1c2999042400f10a7f314fa87944de3459a6af3ee96b8424_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9f7be0c5e635bb7d1c2999042400f10a7f314fa87944de3459a6af3ee96b8424->leave($__internal_9f7be0c5e635bb7d1c2999042400f10a7f314fa87944de3459a6af3ee96b8424_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_082e10e9b53c7ed14bb0b92c43669d3986b250d33cf89d86d0ef8cbd4994c31a = $this->env->getExtension("native_profiler");
        $__internal_082e10e9b53c7ed14bb0b92c43669d3986b250d33cf89d86d0ef8cbd4994c31a->enter($__internal_082e10e9b53c7ed14bb0b92c43669d3986b250d33cf89d86d0ef8cbd4994c31a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_082e10e9b53c7ed14bb0b92c43669d3986b250d33cf89d86d0ef8cbd4994c31a->leave($__internal_082e10e9b53c7ed14bb0b92c43669d3986b250d33cf89d86d0ef8cbd4994c31a_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_d4e7cb9bb6bdbbe2b5fd74822a9c9eb298ec47dd1a3480389b9d07e591d5cc60 = $this->env->getExtension("native_profiler");
        $__internal_d4e7cb9bb6bdbbe2b5fd74822a9c9eb298ec47dd1a3480389b9d07e591d5cc60->enter($__internal_d4e7cb9bb6bdbbe2b5fd74822a9c9eb298ec47dd1a3480389b9d07e591d5cc60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_d4e7cb9bb6bdbbe2b5fd74822a9c9eb298ec47dd1a3480389b9d07e591d5cc60->leave($__internal_d4e7cb9bb6bdbbe2b5fd74822a9c9eb298ec47dd1a3480389b9d07e591d5cc60_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_47408d83e4671707c75bdd14e03705a1f07d5f287de3451ffe847edc56acd7c4 = $this->env->getExtension("native_profiler");
        $__internal_47408d83e4671707c75bdd14e03705a1f07d5f287de3451ffe847edc56acd7c4->enter($__internal_47408d83e4671707c75bdd14e03705a1f07d5f287de3451ffe847edc56acd7c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_47408d83e4671707c75bdd14e03705a1f07d5f287de3451ffe847edc56acd7c4->leave($__internal_47408d83e4671707c75bdd14e03705a1f07d5f287de3451ffe847edc56acd7c4_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 33,  114 => 32,  108 => 28,  106 => 27,  102 => 25,  96 => 24,  88 => 21,  82 => 17,  80 => 16,  75 => 14,  70 => 13,  64 => 12,  54 => 9,  48 => 6,  45 => 5,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     {% if collector.hasexception %}*/
/*         <style>*/
/*             {{ render(path('_profiler_exception_css', { token: token })) }}*/
/*         </style>*/
/*     {% endif %}*/
/*     {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block menu %}*/
/*     <span class="label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}">*/
/*         <span class="icon">{{ include('@WebProfiler/Icon/exception.svg') }}</span>*/
/*         <strong>Exception</strong>*/
/*         {% if collector.hasexception %}*/
/*             <span class="count">*/
/*                 <span>1</span>*/
/*             </span>*/
/*         {% endif %}*/
/*     </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     <h2>Exceptions</h2>*/
/* */
/*     {% if not collector.hasexception %}*/
/*         <div class="empty">*/
/*             <p>No exception was thrown and caught during the request.</p>*/
/*         </div>*/
/*     {% else %}*/
/*         <div class="sf-reset">*/
/*             {{ render(path('_profiler_exception', { token: token })) }}*/
/*         </div>*/
/*     {% endif %}*/
/* {% endblock %}*/
/* */
