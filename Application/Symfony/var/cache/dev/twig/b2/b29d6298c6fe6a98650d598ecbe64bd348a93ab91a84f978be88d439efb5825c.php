<?php

/* @FOSUser/Group/new.html.twig */
class __TwigTemplate_a22c2da49819aac1a226674f7f376ec9381c53cf3e44513d8a59cabe0926ba0b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Group/new.html.twig", 1);
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
        $__internal_fe1770810f443d63e5c85efc686d9548a78e8e5834ef1d40e3529e8ffa158734 = $this->env->getExtension("native_profiler");
        $__internal_fe1770810f443d63e5c85efc686d9548a78e8e5834ef1d40e3529e8ffa158734->enter($__internal_fe1770810f443d63e5c85efc686d9548a78e8e5834ef1d40e3529e8ffa158734_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fe1770810f443d63e5c85efc686d9548a78e8e5834ef1d40e3529e8ffa158734->leave($__internal_fe1770810f443d63e5c85efc686d9548a78e8e5834ef1d40e3529e8ffa158734_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_6450554f4e493240b8bf86a540a58e65aa4882dd56dea4cbeddf5ded4b0d4ec2 = $this->env->getExtension("native_profiler");
        $__internal_6450554f4e493240b8bf86a540a58e65aa4882dd56dea4cbeddf5ded4b0d4ec2->enter($__internal_6450554f4e493240b8bf86a540a58e65aa4882dd56dea4cbeddf5ded4b0d4ec2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:new_content.html.twig", "@FOSUser/Group/new.html.twig", 4)->display($context);
        
        $__internal_6450554f4e493240b8bf86a540a58e65aa4882dd56dea4cbeddf5ded4b0d4ec2->leave($__internal_6450554f4e493240b8bf86a540a58e65aa4882dd56dea4cbeddf5ded4b0d4ec2_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/new.html.twig";
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
/* {% include "FOSUserBundle:Group:new_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
