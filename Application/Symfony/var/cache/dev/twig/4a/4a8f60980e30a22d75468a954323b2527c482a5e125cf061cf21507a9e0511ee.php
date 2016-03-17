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
        $__internal_dc98799f442c101e011bfdd3b107a8f90139ef020214b69a71c9e275c509ed13 = $this->env->getExtension("native_profiler");
        $__internal_dc98799f442c101e011bfdd3b107a8f90139ef020214b69a71c9e275c509ed13->enter($__internal_dc98799f442c101e011bfdd3b107a8f90139ef020214b69a71c9e275c509ed13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dc98799f442c101e011bfdd3b107a8f90139ef020214b69a71c9e275c509ed13->leave($__internal_dc98799f442c101e011bfdd3b107a8f90139ef020214b69a71c9e275c509ed13_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_eab6664b9075c29121607f416566cd7eb75f08a40f0f26c867f6323f4fa16918 = $this->env->getExtension("native_profiler");
        $__internal_eab6664b9075c29121607f416566cd7eb75f08a40f0f26c867f6323f4fa16918->enter($__internal_eab6664b9075c29121607f416566cd7eb75f08a40f0f26c867f6323f4fa16918_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_eab6664b9075c29121607f416566cd7eb75f08a40f0f26c867f6323f4fa16918->leave($__internal_eab6664b9075c29121607f416566cd7eb75f08a40f0f26c867f6323f4fa16918_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_2b20b6a47343eebcd3935b4bce8e10254798cc78d2e6530885b5c288ef83f4ec = $this->env->getExtension("native_profiler");
        $__internal_2b20b6a47343eebcd3935b4bce8e10254798cc78d2e6530885b5c288ef83f4ec->enter($__internal_2b20b6a47343eebcd3935b4bce8e10254798cc78d2e6530885b5c288ef83f4ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_2b20b6a47343eebcd3935b4bce8e10254798cc78d2e6530885b5c288ef83f4ec->leave($__internal_2b20b6a47343eebcd3935b4bce8e10254798cc78d2e6530885b5c288ef83f4ec_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_92e7fba11dc5eed49635ff67f4c73244176d9f3b8c8f1b778e2824d6e58b44d8 = $this->env->getExtension("native_profiler");
        $__internal_92e7fba11dc5eed49635ff67f4c73244176d9f3b8c8f1b778e2824d6e58b44d8->enter($__internal_92e7fba11dc5eed49635ff67f4c73244176d9f3b8c8f1b778e2824d6e58b44d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_92e7fba11dc5eed49635ff67f4c73244176d9f3b8c8f1b778e2824d6e58b44d8->leave($__internal_92e7fba11dc5eed49635ff67f4c73244176d9f3b8c8f1b778e2824d6e58b44d8_prof);

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
