<?php

/* @FOSUser/Resetting/request.html.twig */
class __TwigTemplate_bf08ad16f4018ae9de66cddea77bda03ac3c993ea05fb891cb37902acc8151a1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Resetting/request.html.twig", 1);
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
        $__internal_ed5d11d76cea9f45627e64520ac8df6442a8345b5c4f38f767e72c2ceb3f7361 = $this->env->getExtension("native_profiler");
        $__internal_ed5d11d76cea9f45627e64520ac8df6442a8345b5c4f38f767e72c2ceb3f7361->enter($__internal_ed5d11d76cea9f45627e64520ac8df6442a8345b5c4f38f767e72c2ceb3f7361_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ed5d11d76cea9f45627e64520ac8df6442a8345b5c4f38f767e72c2ceb3f7361->leave($__internal_ed5d11d76cea9f45627e64520ac8df6442a8345b5c4f38f767e72c2ceb3f7361_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_920309286792255e0f784a79d65d422f6372a13b56e4403120c4be210afe6b49 = $this->env->getExtension("native_profiler");
        $__internal_920309286792255e0f784a79d65d422f6372a13b56e4403120c4be210afe6b49->enter($__internal_920309286792255e0f784a79d65d422f6372a13b56e4403120c4be210afe6b49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:request_content.html.twig", "@FOSUser/Resetting/request.html.twig", 4)->display($context);
        
        $__internal_920309286792255e0f784a79d65d422f6372a13b56e4403120c4be210afe6b49->leave($__internal_920309286792255e0f784a79d65d422f6372a13b56e4403120c4be210afe6b49_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/request.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% block fos_user_content %}*/
/* {% include "FOSUserBundle:Resetting:request_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
