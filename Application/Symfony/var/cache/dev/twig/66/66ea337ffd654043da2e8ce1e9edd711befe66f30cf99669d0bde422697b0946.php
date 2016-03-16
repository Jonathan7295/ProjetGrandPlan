<?php

/* @FOSUser/Resetting/passwordAlreadyRequested.html.twig */
class __TwigTemplate_84b98fac793d3bb32918e2291e635841de9891dc15e69b59ec85296c0e053115 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Resetting/passwordAlreadyRequested.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_cd8f7b42f29e4cfe3f01c4296fc2a390a66a3c012e74e900e026e3361edde775 = $this->env->getExtension("native_profiler");
        $__internal_cd8f7b42f29e4cfe3f01c4296fc2a390a66a3c012e74e900e026e3361edde775->enter($__internal_cd8f7b42f29e4cfe3f01c4296fc2a390a66a3c012e74e900e026e3361edde775_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/passwordAlreadyRequested.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cd8f7b42f29e4cfe3f01c4296fc2a390a66a3c012e74e900e026e3361edde775->leave($__internal_cd8f7b42f29e4cfe3f01c4296fc2a390a66a3c012e74e900e026e3361edde775_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_67649f2e026eb5f2377e9d5abf81deb5b490bbd463a24f428cec0ff67777bf64 = $this->env->getExtension("native_profiler");
        $__internal_67649f2e026eb5f2377e9d5abf81deb5b490bbd463a24f428cec0ff67777bf64->enter($__internal_67649f2e026eb5f2377e9d5abf81deb5b490bbd463a24f428cec0ff67777bf64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.password_already_requested", array(), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_67649f2e026eb5f2377e9d5abf81deb5b490bbd463a24f428cec0ff67777bf64->leave($__internal_67649f2e026eb5f2377e9d5abf81deb5b490bbd463a24f428cec0ff67777bf64_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/passwordAlreadyRequested.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 6,  34 => 5,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block fos_user_content %}*/
/* <p>{{ 'resetting.password_already_requested'|trans }}</p>*/
/* {% endblock fos_user_content %}*/
/* */
