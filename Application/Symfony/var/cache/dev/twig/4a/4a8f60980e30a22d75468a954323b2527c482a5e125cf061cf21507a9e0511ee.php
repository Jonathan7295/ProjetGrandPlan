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
        $__internal_9f6b94889e6c7c48e5ed528303c55cce0ffe86f27802c3819eb0039a0fe669a6 = $this->env->getExtension("native_profiler");
        $__internal_9f6b94889e6c7c48e5ed528303c55cce0ffe86f27802c3819eb0039a0fe669a6->enter($__internal_9f6b94889e6c7c48e5ed528303c55cce0ffe86f27802c3819eb0039a0fe669a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9f6b94889e6c7c48e5ed528303c55cce0ffe86f27802c3819eb0039a0fe669a6->leave($__internal_9f6b94889e6c7c48e5ed528303c55cce0ffe86f27802c3819eb0039a0fe669a6_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_44e1ccf0356700c7a731ac0b5e6ccd1709251d703630b6584b07eba3db5b9ca4 = $this->env->getExtension("native_profiler");
        $__internal_44e1ccf0356700c7a731ac0b5e6ccd1709251d703630b6584b07eba3db5b9ca4->enter($__internal_44e1ccf0356700c7a731ac0b5e6ccd1709251d703630b6584b07eba3db5b9ca4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_44e1ccf0356700c7a731ac0b5e6ccd1709251d703630b6584b07eba3db5b9ca4->leave($__internal_44e1ccf0356700c7a731ac0b5e6ccd1709251d703630b6584b07eba3db5b9ca4_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_bc49847362630e2ab73ae7dbcb38175ae924ca5c8e1e44828331ece4c9d71d72 = $this->env->getExtension("native_profiler");
        $__internal_bc49847362630e2ab73ae7dbcb38175ae924ca5c8e1e44828331ece4c9d71d72->enter($__internal_bc49847362630e2ab73ae7dbcb38175ae924ca5c8e1e44828331ece4c9d71d72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_bc49847362630e2ab73ae7dbcb38175ae924ca5c8e1e44828331ece4c9d71d72->leave($__internal_bc49847362630e2ab73ae7dbcb38175ae924ca5c8e1e44828331ece4c9d71d72_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_64759ae7b944b7233b6fa84894f5b974c90de4db983e72c8681613e34ff04437 = $this->env->getExtension("native_profiler");
        $__internal_64759ae7b944b7233b6fa84894f5b974c90de4db983e72c8681613e34ff04437->enter($__internal_64759ae7b944b7233b6fa84894f5b974c90de4db983e72c8681613e34ff04437_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_64759ae7b944b7233b6fa84894f5b974c90de4db983e72c8681613e34ff04437->leave($__internal_64759ae7b944b7233b6fa84894f5b974c90de4db983e72c8681613e34ff04437_prof);

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
