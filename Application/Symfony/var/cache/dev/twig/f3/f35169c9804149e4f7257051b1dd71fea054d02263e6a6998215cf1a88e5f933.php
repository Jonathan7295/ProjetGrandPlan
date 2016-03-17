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
        $__internal_8c33611dcff6fda08c97b991e03a0f883fd49066e31511573616cb6349ba9cde = $this->env->getExtension("native_profiler");
        $__internal_8c33611dcff6fda08c97b991e03a0f883fd49066e31511573616cb6349ba9cde->enter($__internal_8c33611dcff6fda08c97b991e03a0f883fd49066e31511573616cb6349ba9cde_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8c33611dcff6fda08c97b991e03a0f883fd49066e31511573616cb6349ba9cde->leave($__internal_8c33611dcff6fda08c97b991e03a0f883fd49066e31511573616cb6349ba9cde_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_48a6cc1675c1cc5351bd2c9fcb2f13def3e37f17ebc341bfb1ad126b75b3390d = $this->env->getExtension("native_profiler");
        $__internal_48a6cc1675c1cc5351bd2c9fcb2f13def3e37f17ebc341bfb1ad126b75b3390d->enter($__internal_48a6cc1675c1cc5351bd2c9fcb2f13def3e37f17ebc341bfb1ad126b75b3390d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_48a6cc1675c1cc5351bd2c9fcb2f13def3e37f17ebc341bfb1ad126b75b3390d->leave($__internal_48a6cc1675c1cc5351bd2c9fcb2f13def3e37f17ebc341bfb1ad126b75b3390d_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_e1b702417124014bd44ab58c9dd1e6624db94d0753fb913b64ee664bec2b9789 = $this->env->getExtension("native_profiler");
        $__internal_e1b702417124014bd44ab58c9dd1e6624db94d0753fb913b64ee664bec2b9789->enter($__internal_e1b702417124014bd44ab58c9dd1e6624db94d0753fb913b64ee664bec2b9789_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_e1b702417124014bd44ab58c9dd1e6624db94d0753fb913b64ee664bec2b9789->leave($__internal_e1b702417124014bd44ab58c9dd1e6624db94d0753fb913b64ee664bec2b9789_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_7865f5acb4eddba2e9905836ccc8c98b159d0491add4bd7221c66c14aa9bc485 = $this->env->getExtension("native_profiler");
        $__internal_7865f5acb4eddba2e9905836ccc8c98b159d0491add4bd7221c66c14aa9bc485->enter($__internal_7865f5acb4eddba2e9905836ccc8c98b159d0491add4bd7221c66c14aa9bc485_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_7865f5acb4eddba2e9905836ccc8c98b159d0491add4bd7221c66c14aa9bc485->leave($__internal_7865f5acb4eddba2e9905836ccc8c98b159d0491add4bd7221c66c14aa9bc485_prof);

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
