<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_3d7f17f694e94bd4fbf040e6968a63ed4988f7189fd813e436065f7ba39c0043 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
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
        $__internal_219d38ad2414a6bdb77c507fc5a726e37b14966868bada83aef59d6d1a0aad7a = $this->env->getExtension("native_profiler");
        $__internal_219d38ad2414a6bdb77c507fc5a726e37b14966868bada83aef59d6d1a0aad7a->enter($__internal_219d38ad2414a6bdb77c507fc5a726e37b14966868bada83aef59d6d1a0aad7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_219d38ad2414a6bdb77c507fc5a726e37b14966868bada83aef59d6d1a0aad7a->leave($__internal_219d38ad2414a6bdb77c507fc5a726e37b14966868bada83aef59d6d1a0aad7a_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_ea80b345c021dd4428b0a3e5fe7c34dd7e5c8fb5bae39d70e43b1a6cdfc6d52b = $this->env->getExtension("native_profiler");
        $__internal_ea80b345c021dd4428b0a3e5fe7c34dd7e5c8fb5bae39d70e43b1a6cdfc6d52b->enter($__internal_ea80b345c021dd4428b0a3e5fe7c34dd7e5c8fb5bae39d70e43b1a6cdfc6d52b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_ea80b345c021dd4428b0a3e5fe7c34dd7e5c8fb5bae39d70e43b1a6cdfc6d52b->leave($__internal_ea80b345c021dd4428b0a3e5fe7c34dd7e5c8fb5bae39d70e43b1a6cdfc6d52b_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_0aa6db33752d008c46bbb25d0e1a9dede60bad186d576781b4e51df6ef399d8f = $this->env->getExtension("native_profiler");
        $__internal_0aa6db33752d008c46bbb25d0e1a9dede60bad186d576781b4e51df6ef399d8f->enter($__internal_0aa6db33752d008c46bbb25d0e1a9dede60bad186d576781b4e51df6ef399d8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_0aa6db33752d008c46bbb25d0e1a9dede60bad186d576781b4e51df6ef399d8f->leave($__internal_0aa6db33752d008c46bbb25d0e1a9dede60bad186d576781b4e51df6ef399d8f_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_797d360c7cc1173f74e2aab04b7341bbe4702664fecf00d67bc8f374ec3d8738 = $this->env->getExtension("native_profiler");
        $__internal_797d360c7cc1173f74e2aab04b7341bbe4702664fecf00d67bc8f374ec3d8738->enter($__internal_797d360c7cc1173f74e2aab04b7341bbe4702664fecf00d67bc8f374ec3d8738_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_797d360c7cc1173f74e2aab04b7341bbe4702664fecf00d67bc8f374ec3d8738->leave($__internal_797d360c7cc1173f74e2aab04b7341bbe4702664fecf00d67bc8f374ec3d8738_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
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
