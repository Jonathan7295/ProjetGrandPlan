<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_3d8d2eda71b975f68477ffb4a93549dcc6aed5d04ffb24d6c294f6e16ef2f515 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
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
        $__internal_1b80863511e2d9f08059cbd1d0c84e4e8f84b1a31d32c16c248241d1106be87e = $this->env->getExtension("native_profiler");
        $__internal_1b80863511e2d9f08059cbd1d0c84e4e8f84b1a31d32c16c248241d1106be87e->enter($__internal_1b80863511e2d9f08059cbd1d0c84e4e8f84b1a31d32c16c248241d1106be87e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1b80863511e2d9f08059cbd1d0c84e4e8f84b1a31d32c16c248241d1106be87e->leave($__internal_1b80863511e2d9f08059cbd1d0c84e4e8f84b1a31d32c16c248241d1106be87e_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_991daa79b48e27945d44481b28b23d10825dc0836069f7d93e7c9c3cfb888019 = $this->env->getExtension("native_profiler");
        $__internal_991daa79b48e27945d44481b28b23d10825dc0836069f7d93e7c9c3cfb888019->enter($__internal_991daa79b48e27945d44481b28b23d10825dc0836069f7d93e7c9c3cfb888019_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_991daa79b48e27945d44481b28b23d10825dc0836069f7d93e7c9c3cfb888019->leave($__internal_991daa79b48e27945d44481b28b23d10825dc0836069f7d93e7c9c3cfb888019_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_c8ea9b43c4cc79027b4a2ab80e3c352bf30a247ba4d9f853a4b5375f77a163c5 = $this->env->getExtension("native_profiler");
        $__internal_c8ea9b43c4cc79027b4a2ab80e3c352bf30a247ba4d9f853a4b5375f77a163c5->enter($__internal_c8ea9b43c4cc79027b4a2ab80e3c352bf30a247ba4d9f853a4b5375f77a163c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_c8ea9b43c4cc79027b4a2ab80e3c352bf30a247ba4d9f853a4b5375f77a163c5->leave($__internal_c8ea9b43c4cc79027b4a2ab80e3c352bf30a247ba4d9f853a4b5375f77a163c5_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_62975dfa8e74c7e59304d6e82d1b6a6331dedd90f85fca1dd67a390c1c7711fc = $this->env->getExtension("native_profiler");
        $__internal_62975dfa8e74c7e59304d6e82d1b6a6331dedd90f85fca1dd67a390c1c7711fc->enter($__internal_62975dfa8e74c7e59304d6e82d1b6a6331dedd90f85fca1dd67a390c1c7711fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_62975dfa8e74c7e59304d6e82d1b6a6331dedd90f85fca1dd67a390c1c7711fc->leave($__internal_62975dfa8e74c7e59304d6e82d1b6a6331dedd90f85fca1dd67a390c1c7711fc_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
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
