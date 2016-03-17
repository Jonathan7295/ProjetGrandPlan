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
        $__internal_5de89ba7804fb90fdc5fd7213d9c098e381cc5f968423d542fe9c70f001e7e13 = $this->env->getExtension("native_profiler");
        $__internal_5de89ba7804fb90fdc5fd7213d9c098e381cc5f968423d542fe9c70f001e7e13->enter($__internal_5de89ba7804fb90fdc5fd7213d9c098e381cc5f968423d542fe9c70f001e7e13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5de89ba7804fb90fdc5fd7213d9c098e381cc5f968423d542fe9c70f001e7e13->leave($__internal_5de89ba7804fb90fdc5fd7213d9c098e381cc5f968423d542fe9c70f001e7e13_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_f4563711d573691763eb76af4c5a0449393b937e31cc2f52b001d2cabc969557 = $this->env->getExtension("native_profiler");
        $__internal_f4563711d573691763eb76af4c5a0449393b937e31cc2f52b001d2cabc969557->enter($__internal_f4563711d573691763eb76af4c5a0449393b937e31cc2f52b001d2cabc969557_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_f4563711d573691763eb76af4c5a0449393b937e31cc2f52b001d2cabc969557->leave($__internal_f4563711d573691763eb76af4c5a0449393b937e31cc2f52b001d2cabc969557_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_b6796c0894c5e6c70a8f4cfb95a30508d8c71681743f2690874ee549448cfad4 = $this->env->getExtension("native_profiler");
        $__internal_b6796c0894c5e6c70a8f4cfb95a30508d8c71681743f2690874ee549448cfad4->enter($__internal_b6796c0894c5e6c70a8f4cfb95a30508d8c71681743f2690874ee549448cfad4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_b6796c0894c5e6c70a8f4cfb95a30508d8c71681743f2690874ee549448cfad4->leave($__internal_b6796c0894c5e6c70a8f4cfb95a30508d8c71681743f2690874ee549448cfad4_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_cfa21f8c2de699fba72f8501bce60297e173e461e30139362ed704454087f22a = $this->env->getExtension("native_profiler");
        $__internal_cfa21f8c2de699fba72f8501bce60297e173e461e30139362ed704454087f22a->enter($__internal_cfa21f8c2de699fba72f8501bce60297e173e461e30139362ed704454087f22a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_cfa21f8c2de699fba72f8501bce60297e173e461e30139362ed704454087f22a->leave($__internal_cfa21f8c2de699fba72f8501bce60297e173e461e30139362ed704454087f22a_prof);

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
