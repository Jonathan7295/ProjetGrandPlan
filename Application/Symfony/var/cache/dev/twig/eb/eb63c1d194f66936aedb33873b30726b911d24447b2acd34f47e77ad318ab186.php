<?php

/* FOSUserBundle:Group:show.html.twig */
class __TwigTemplate_c176c0503cfb15a01e7c54947390d460ceda786e7ca7a9d6bd7e6317383ea2fd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:show.html.twig", 1);
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
        $__internal_756d1e93d0d1c2d4656df53cb8ea4ec2042a5601dbf08bc3b095c0ef61b88b42 = $this->env->getExtension("native_profiler");
        $__internal_756d1e93d0d1c2d4656df53cb8ea4ec2042a5601dbf08bc3b095c0ef61b88b42->enter($__internal_756d1e93d0d1c2d4656df53cb8ea4ec2042a5601dbf08bc3b095c0ef61b88b42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_756d1e93d0d1c2d4656df53cb8ea4ec2042a5601dbf08bc3b095c0ef61b88b42->leave($__internal_756d1e93d0d1c2d4656df53cb8ea4ec2042a5601dbf08bc3b095c0ef61b88b42_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_8f53dcdfe30c12ec82d9d1225a662039816d213ec8149d2b219451a9622cb217 = $this->env->getExtension("native_profiler");
        $__internal_8f53dcdfe30c12ec82d9d1225a662039816d213ec8149d2b219451a9622cb217->enter($__internal_8f53dcdfe30c12ec82d9d1225a662039816d213ec8149d2b219451a9622cb217_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:show_content.html.twig", "FOSUserBundle:Group:show.html.twig", 4)->display($context);
        
        $__internal_8f53dcdfe30c12ec82d9d1225a662039816d213ec8149d2b219451a9622cb217->leave($__internal_8f53dcdfe30c12ec82d9d1225a662039816d213ec8149d2b219451a9622cb217_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show.html.twig";
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
/* {% include "FOSUserBundle:Group:show_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
