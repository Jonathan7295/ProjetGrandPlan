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
        $__internal_d579fe4bc69631fb9a507636d13899816a592e82fc8c7f29dfa5c856c75180d0 = $this->env->getExtension("native_profiler");
        $__internal_d579fe4bc69631fb9a507636d13899816a592e82fc8c7f29dfa5c856c75180d0->enter($__internal_d579fe4bc69631fb9a507636d13899816a592e82fc8c7f29dfa5c856c75180d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d579fe4bc69631fb9a507636d13899816a592e82fc8c7f29dfa5c856c75180d0->leave($__internal_d579fe4bc69631fb9a507636d13899816a592e82fc8c7f29dfa5c856c75180d0_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_eb676ca6188415b4d6bae4167d9b7b2b19ccad699fb427fbca5b8d5ff23c96a4 = $this->env->getExtension("native_profiler");
        $__internal_eb676ca6188415b4d6bae4167d9b7b2b19ccad699fb427fbca5b8d5ff23c96a4->enter($__internal_eb676ca6188415b4d6bae4167d9b7b2b19ccad699fb427fbca5b8d5ff23c96a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_eb676ca6188415b4d6bae4167d9b7b2b19ccad699fb427fbca5b8d5ff23c96a4->leave($__internal_eb676ca6188415b4d6bae4167d9b7b2b19ccad699fb427fbca5b8d5ff23c96a4_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_e814ce1e92a0397799a6e9914a28861a57ce947e5c77c3ecf6b593d270e3df0b = $this->env->getExtension("native_profiler");
        $__internal_e814ce1e92a0397799a6e9914a28861a57ce947e5c77c3ecf6b593d270e3df0b->enter($__internal_e814ce1e92a0397799a6e9914a28861a57ce947e5c77c3ecf6b593d270e3df0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_e814ce1e92a0397799a6e9914a28861a57ce947e5c77c3ecf6b593d270e3df0b->leave($__internal_e814ce1e92a0397799a6e9914a28861a57ce947e5c77c3ecf6b593d270e3df0b_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_8131127fdde025cdc52a6c22ab0e9c9d26f35f511a00dac36b1ec1f49d4b6909 = $this->env->getExtension("native_profiler");
        $__internal_8131127fdde025cdc52a6c22ab0e9c9d26f35f511a00dac36b1ec1f49d4b6909->enter($__internal_8131127fdde025cdc52a6c22ab0e9c9d26f35f511a00dac36b1ec1f49d4b6909_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_8131127fdde025cdc52a6c22ab0e9c9d26f35f511a00dac36b1ec1f49d4b6909->leave($__internal_8131127fdde025cdc52a6c22ab0e9c9d26f35f511a00dac36b1ec1f49d4b6909_prof);

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
