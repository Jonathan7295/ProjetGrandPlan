<?php

/* FOSUserBundle:ChangePassword:changePassword.html.twig */
class __TwigTemplate_fa394973f00f1af1fd983199844040c406a50f490cbf29841e612f9dda235ded extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:ChangePassword:changePassword.html.twig", 1);
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
        $__internal_e731c95636f85aa49444ff4aecd0ed6e7a1857c626f040adddbca596598d5636 = $this->env->getExtension("native_profiler");
        $__internal_e731c95636f85aa49444ff4aecd0ed6e7a1857c626f040adddbca596598d5636->enter($__internal_e731c95636f85aa49444ff4aecd0ed6e7a1857c626f040adddbca596598d5636_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:changePassword.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e731c95636f85aa49444ff4aecd0ed6e7a1857c626f040adddbca596598d5636->leave($__internal_e731c95636f85aa49444ff4aecd0ed6e7a1857c626f040adddbca596598d5636_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_4256c659fbb3ef8848ca097a4eeee8d7d583f494a68c11cb761b86e05ab421a5 = $this->env->getExtension("native_profiler");
        $__internal_4256c659fbb3ef8848ca097a4eeee8d7d583f494a68c11cb761b86e05ab421a5->enter($__internal_4256c659fbb3ef8848ca097a4eeee8d7d583f494a68c11cb761b86e05ab421a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:ChangePassword:changePassword_content.html.twig", "FOSUserBundle:ChangePassword:changePassword.html.twig", 4)->display($context);
        
        $__internal_4256c659fbb3ef8848ca097a4eeee8d7d583f494a68c11cb761b86e05ab421a5->leave($__internal_4256c659fbb3ef8848ca097a4eeee8d7d583f494a68c11cb761b86e05ab421a5_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:ChangePassword:changePassword.html.twig";
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
/* {% include "FOSUserBundle:ChangePassword:changePassword_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
