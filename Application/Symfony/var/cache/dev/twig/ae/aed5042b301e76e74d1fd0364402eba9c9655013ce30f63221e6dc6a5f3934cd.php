<?php

/* FOSUserBundle:Resetting:request.html.twig */
class __TwigTemplate_06459803bb1f26bf9a9f3fd61c37803b6559c8158373767288efd012d739bb2d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:request.html.twig", 1);
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
        $__internal_dc25d75c26587a949932ec19a69def50a23beee0c2ddffdc708e2d36326c9353 = $this->env->getExtension("native_profiler");
        $__internal_dc25d75c26587a949932ec19a69def50a23beee0c2ddffdc708e2d36326c9353->enter($__internal_dc25d75c26587a949932ec19a69def50a23beee0c2ddffdc708e2d36326c9353_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dc25d75c26587a949932ec19a69def50a23beee0c2ddffdc708e2d36326c9353->leave($__internal_dc25d75c26587a949932ec19a69def50a23beee0c2ddffdc708e2d36326c9353_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_1b485a30cabd2453b518236dafcc54e8d171ab79c122e38869f8cfbd97ea728e = $this->env->getExtension("native_profiler");
        $__internal_1b485a30cabd2453b518236dafcc54e8d171ab79c122e38869f8cfbd97ea728e->enter($__internal_1b485a30cabd2453b518236dafcc54e8d171ab79c122e38869f8cfbd97ea728e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:request_content.html.twig", "FOSUserBundle:Resetting:request.html.twig", 4)->display($context);
        
        $__internal_1b485a30cabd2453b518236dafcc54e8d171ab79c122e38869f8cfbd97ea728e->leave($__internal_1b485a30cabd2453b518236dafcc54e8d171ab79c122e38869f8cfbd97ea728e_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:request.html.twig";
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
