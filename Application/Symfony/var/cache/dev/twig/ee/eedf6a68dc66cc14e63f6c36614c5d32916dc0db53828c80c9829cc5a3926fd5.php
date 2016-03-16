<?php

/* @FOSUser/Resetting/checkEmail.html.twig */
class __TwigTemplate_4e0ce6558090d11ecc8fa18696081d7c86269621a33f0d96be00892d8ccbc7cd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Resetting/checkEmail.html.twig", 1);
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
        $__internal_d6a5c82f61593f38a14a02bbb387c1284efb2ec612fc7c21532ec818364dded7 = $this->env->getExtension("native_profiler");
        $__internal_d6a5c82f61593f38a14a02bbb387c1284efb2ec612fc7c21532ec818364dded7->enter($__internal_d6a5c82f61593f38a14a02bbb387c1284efb2ec612fc7c21532ec818364dded7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d6a5c82f61593f38a14a02bbb387c1284efb2ec612fc7c21532ec818364dded7->leave($__internal_d6a5c82f61593f38a14a02bbb387c1284efb2ec612fc7c21532ec818364dded7_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_5e4af6a55e6fc268ed52f649f682b55a7ebc635ecc887ef2d473b06cb9fcd6d1 = $this->env->getExtension("native_profiler");
        $__internal_5e4af6a55e6fc268ed52f649f682b55a7ebc635ecc887ef2d473b06cb9fcd6d1->enter($__internal_5e4af6a55e6fc268ed52f649f682b55a7ebc635ecc887ef2d473b06cb9fcd6d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.check_email", array("%email%" => (isset($context["email"]) ? $context["email"] : $this->getContext($context, "email"))), "FOSUserBundle"), "html", null, true);
        echo "
</p>
";
        
        $__internal_5e4af6a55e6fc268ed52f649f682b55a7ebc635ecc887ef2d473b06cb9fcd6d1->leave($__internal_5e4af6a55e6fc268ed52f649f682b55a7ebc635ecc887ef2d473b06cb9fcd6d1_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/checkEmail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 7,  40 => 6,  34 => 5,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block fos_user_content %}*/
/* <p>*/
/* {{ 'resetting.check_email'|trans({'%email%': email}) }}*/
/* </p>*/
/* {% endblock %}*/
/* */
