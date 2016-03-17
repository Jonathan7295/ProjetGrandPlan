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
        $__internal_d4f3975385d6a695882176240ed2d756c2a5394a8ce7543618e4ef1f3c44ad9d = $this->env->getExtension("native_profiler");
        $__internal_d4f3975385d6a695882176240ed2d756c2a5394a8ce7543618e4ef1f3c44ad9d->enter($__internal_d4f3975385d6a695882176240ed2d756c2a5394a8ce7543618e4ef1f3c44ad9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d4f3975385d6a695882176240ed2d756c2a5394a8ce7543618e4ef1f3c44ad9d->leave($__internal_d4f3975385d6a695882176240ed2d756c2a5394a8ce7543618e4ef1f3c44ad9d_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_4b24b225cb101ac467fa8caf62df2317f7580637bcfb384891d3cc4448d0a836 = $this->env->getExtension("native_profiler");
        $__internal_4b24b225cb101ac467fa8caf62df2317f7580637bcfb384891d3cc4448d0a836->enter($__internal_4b24b225cb101ac467fa8caf62df2317f7580637bcfb384891d3cc4448d0a836_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_4b24b225cb101ac467fa8caf62df2317f7580637bcfb384891d3cc4448d0a836->leave($__internal_4b24b225cb101ac467fa8caf62df2317f7580637bcfb384891d3cc4448d0a836_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_26dac5c241929f7c37f6655eafddefa1d6bf668cfd477ac7e45ea86faa4b2c15 = $this->env->getExtension("native_profiler");
        $__internal_26dac5c241929f7c37f6655eafddefa1d6bf668cfd477ac7e45ea86faa4b2c15->enter($__internal_26dac5c241929f7c37f6655eafddefa1d6bf668cfd477ac7e45ea86faa4b2c15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_26dac5c241929f7c37f6655eafddefa1d6bf668cfd477ac7e45ea86faa4b2c15->leave($__internal_26dac5c241929f7c37f6655eafddefa1d6bf668cfd477ac7e45ea86faa4b2c15_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_a8de8dd7b806bc7ebce18088adba5872fc3f2867720ea291929c5ad3ec623c0b = $this->env->getExtension("native_profiler");
        $__internal_a8de8dd7b806bc7ebce18088adba5872fc3f2867720ea291929c5ad3ec623c0b->enter($__internal_a8de8dd7b806bc7ebce18088adba5872fc3f2867720ea291929c5ad3ec623c0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_a8de8dd7b806bc7ebce18088adba5872fc3f2867720ea291929c5ad3ec623c0b->leave($__internal_a8de8dd7b806bc7ebce18088adba5872fc3f2867720ea291929c5ad3ec623c0b_prof);

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
