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
        $__internal_d5f5e76a5301683a0c9899acc504eaa60835daab20fb38f06b3d2b2ddd870b72 = $this->env->getExtension("native_profiler");
        $__internal_d5f5e76a5301683a0c9899acc504eaa60835daab20fb38f06b3d2b2ddd870b72->enter($__internal_d5f5e76a5301683a0c9899acc504eaa60835daab20fb38f06b3d2b2ddd870b72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d5f5e76a5301683a0c9899acc504eaa60835daab20fb38f06b3d2b2ddd870b72->leave($__internal_d5f5e76a5301683a0c9899acc504eaa60835daab20fb38f06b3d2b2ddd870b72_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_ecc9f8aaece67333dc3d68d22772e5e1dc7b60e1a8f5e34dbc93289409c72823 = $this->env->getExtension("native_profiler");
        $__internal_ecc9f8aaece67333dc3d68d22772e5e1dc7b60e1a8f5e34dbc93289409c72823->enter($__internal_ecc9f8aaece67333dc3d68d22772e5e1dc7b60e1a8f5e34dbc93289409c72823_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_ecc9f8aaece67333dc3d68d22772e5e1dc7b60e1a8f5e34dbc93289409c72823->leave($__internal_ecc9f8aaece67333dc3d68d22772e5e1dc7b60e1a8f5e34dbc93289409c72823_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_8a9020ed78d18e3cfe4ba34864c86202fa99ad66937059a22c35991f79c6ce48 = $this->env->getExtension("native_profiler");
        $__internal_8a9020ed78d18e3cfe4ba34864c86202fa99ad66937059a22c35991f79c6ce48->enter($__internal_8a9020ed78d18e3cfe4ba34864c86202fa99ad66937059a22c35991f79c6ce48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_8a9020ed78d18e3cfe4ba34864c86202fa99ad66937059a22c35991f79c6ce48->leave($__internal_8a9020ed78d18e3cfe4ba34864c86202fa99ad66937059a22c35991f79c6ce48_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_ce9d694583a96f8b5f19c0257c4698828559c6d9286d11cfc034d36a43b03eb0 = $this->env->getExtension("native_profiler");
        $__internal_ce9d694583a96f8b5f19c0257c4698828559c6d9286d11cfc034d36a43b03eb0->enter($__internal_ce9d694583a96f8b5f19c0257c4698828559c6d9286d11cfc034d36a43b03eb0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_ce9d694583a96f8b5f19c0257c4698828559c6d9286d11cfc034d36a43b03eb0->leave($__internal_ce9d694583a96f8b5f19c0257c4698828559c6d9286d11cfc034d36a43b03eb0_prof);

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
