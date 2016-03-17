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
        $__internal_31a2f2c92ace1bab9d051beee968caadb5750413a6ba257356721c5a063e6469 = $this->env->getExtension("native_profiler");
        $__internal_31a2f2c92ace1bab9d051beee968caadb5750413a6ba257356721c5a063e6469->enter($__internal_31a2f2c92ace1bab9d051beee968caadb5750413a6ba257356721c5a063e6469_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_31a2f2c92ace1bab9d051beee968caadb5750413a6ba257356721c5a063e6469->leave($__internal_31a2f2c92ace1bab9d051beee968caadb5750413a6ba257356721c5a063e6469_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_ba10a9835f813fafa43a2e6e51d11536de6fb9ea583f04a6b1aca4d9554b4674 = $this->env->getExtension("native_profiler");
        $__internal_ba10a9835f813fafa43a2e6e51d11536de6fb9ea583f04a6b1aca4d9554b4674->enter($__internal_ba10a9835f813fafa43a2e6e51d11536de6fb9ea583f04a6b1aca4d9554b4674_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:request_content.html.twig", "FOSUserBundle:Resetting:request.html.twig", 4)->display($context);
        
        $__internal_ba10a9835f813fafa43a2e6e51d11536de6fb9ea583f04a6b1aca4d9554b4674->leave($__internal_ba10a9835f813fafa43a2e6e51d11536de6fb9ea583f04a6b1aca4d9554b4674_prof);

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
