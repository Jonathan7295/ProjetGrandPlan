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
        $__internal_0d709b28b6d9e40ca9323c91993291a2619f7f894cc1238017baca807700117d = $this->env->getExtension("native_profiler");
        $__internal_0d709b28b6d9e40ca9323c91993291a2619f7f894cc1238017baca807700117d->enter($__internal_0d709b28b6d9e40ca9323c91993291a2619f7f894cc1238017baca807700117d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0d709b28b6d9e40ca9323c91993291a2619f7f894cc1238017baca807700117d->leave($__internal_0d709b28b6d9e40ca9323c91993291a2619f7f894cc1238017baca807700117d_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_a68bd9de3671600733233514ee701e97f06d744ebf3237bd299f910716c76c9f = $this->env->getExtension("native_profiler");
        $__internal_a68bd9de3671600733233514ee701e97f06d744ebf3237bd299f910716c76c9f->enter($__internal_a68bd9de3671600733233514ee701e97f06d744ebf3237bd299f910716c76c9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_a68bd9de3671600733233514ee701e97f06d744ebf3237bd299f910716c76c9f->leave($__internal_a68bd9de3671600733233514ee701e97f06d744ebf3237bd299f910716c76c9f_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_21a953018271ef1f1f2a37229928e2ca832413db9749306f30aa94ce42fbcf55 = $this->env->getExtension("native_profiler");
        $__internal_21a953018271ef1f1f2a37229928e2ca832413db9749306f30aa94ce42fbcf55->enter($__internal_21a953018271ef1f1f2a37229928e2ca832413db9749306f30aa94ce42fbcf55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_21a953018271ef1f1f2a37229928e2ca832413db9749306f30aa94ce42fbcf55->leave($__internal_21a953018271ef1f1f2a37229928e2ca832413db9749306f30aa94ce42fbcf55_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_51cdf3ae0b50fe05130428aa1693acc3c027f8f2540aaa50a06b4fda4c096bc4 = $this->env->getExtension("native_profiler");
        $__internal_51cdf3ae0b50fe05130428aa1693acc3c027f8f2540aaa50a06b4fda4c096bc4->enter($__internal_51cdf3ae0b50fe05130428aa1693acc3c027f8f2540aaa50a06b4fda4c096bc4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_51cdf3ae0b50fe05130428aa1693acc3c027f8f2540aaa50a06b4fda4c096bc4->leave($__internal_51cdf3ae0b50fe05130428aa1693acc3c027f8f2540aaa50a06b4fda4c096bc4_prof);

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
