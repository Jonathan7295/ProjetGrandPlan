<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_6b840b20aec1211a2cfc732ebf3d183a21ef38169dffda4d0e09910dee3b23ba extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
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
        $__internal_d0d44f0b64b54c09c58d5883940df89da2310ee6c7cd0d6617d17dc04c4b9879 = $this->env->getExtension("native_profiler");
        $__internal_d0d44f0b64b54c09c58d5883940df89da2310ee6c7cd0d6617d17dc04c4b9879->enter($__internal_d0d44f0b64b54c09c58d5883940df89da2310ee6c7cd0d6617d17dc04c4b9879_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d0d44f0b64b54c09c58d5883940df89da2310ee6c7cd0d6617d17dc04c4b9879->leave($__internal_d0d44f0b64b54c09c58d5883940df89da2310ee6c7cd0d6617d17dc04c4b9879_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_d8eaf8e145a74727b133eb84f8a714276f5a547ec56b1782baf7a001aa5198ce = $this->env->getExtension("native_profiler");
        $__internal_d8eaf8e145a74727b133eb84f8a714276f5a547ec56b1782baf7a001aa5198ce->enter($__internal_d8eaf8e145a74727b133eb84f8a714276f5a547ec56b1782baf7a001aa5198ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_d8eaf8e145a74727b133eb84f8a714276f5a547ec56b1782baf7a001aa5198ce->leave($__internal_d8eaf8e145a74727b133eb84f8a714276f5a547ec56b1782baf7a001aa5198ce_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_13b51f986cf04f0baaea86c82ed0e2527176410b3abe772c45548a911081d53c = $this->env->getExtension("native_profiler");
        $__internal_13b51f986cf04f0baaea86c82ed0e2527176410b3abe772c45548a911081d53c->enter($__internal_13b51f986cf04f0baaea86c82ed0e2527176410b3abe772c45548a911081d53c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_13b51f986cf04f0baaea86c82ed0e2527176410b3abe772c45548a911081d53c->leave($__internal_13b51f986cf04f0baaea86c82ed0e2527176410b3abe772c45548a911081d53c_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_0ab08e74fe4e897f7efb8dfba216fcef731c0ae9a02fdfa83356195fd5459989 = $this->env->getExtension("native_profiler");
        $__internal_0ab08e74fe4e897f7efb8dfba216fcef731c0ae9a02fdfa83356195fd5459989->enter($__internal_0ab08e74fe4e897f7efb8dfba216fcef731c0ae9a02fdfa83356195fd5459989_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_0ab08e74fe4e897f7efb8dfba216fcef731c0ae9a02fdfa83356195fd5459989->leave($__internal_0ab08e74fe4e897f7efb8dfba216fcef731c0ae9a02fdfa83356195fd5459989_prof);

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
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
