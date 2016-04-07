<?php

/* FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig */
class __TwigTemplate_02173f7221d3f5877738a1c45e32e585e9f66bd112a3aa48592a23ccf96cbd43 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig", 1);
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
        $__internal_13f703205a7a7be21a720ea890af499cacf57e054ca22d1cf26ca2512a2d96c5 = $this->env->getExtension("native_profiler");
        $__internal_13f703205a7a7be21a720ea890af499cacf57e054ca22d1cf26ca2512a2d96c5->enter($__internal_13f703205a7a7be21a720ea890af499cacf57e054ca22d1cf26ca2512a2d96c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_13f703205a7a7be21a720ea890af499cacf57e054ca22d1cf26ca2512a2d96c5->leave($__internal_13f703205a7a7be21a720ea890af499cacf57e054ca22d1cf26ca2512a2d96c5_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_eb82b6e6f26553e7a879ad46fabb578cc6e495bec1eceee04175c966b757ec09 = $this->env->getExtension("native_profiler");
        $__internal_eb82b6e6f26553e7a879ad46fabb578cc6e495bec1eceee04175c966b757ec09->enter($__internal_eb82b6e6f26553e7a879ad46fabb578cc6e495bec1eceee04175c966b757ec09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.password_already_requested", array(), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_eb82b6e6f26553e7a879ad46fabb578cc6e495bec1eceee04175c966b757ec09->leave($__internal_eb82b6e6f26553e7a879ad46fabb578cc6e495bec1eceee04175c966b757ec09_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig";
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
