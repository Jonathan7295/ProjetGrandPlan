<?php

/* FOSUserBundle:Resetting:request.html.twig */
class __TwigTemplate_ed994e3366e68ebc566442a7ba24878ccd4921fad5b1968a1add9e2ca37223f4 extends Twig_Template
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
        $__internal_673193967cd0541e3439c0a728912d40e630c218802828d5b9fd58df6d85600e = $this->env->getExtension("native_profiler");
        $__internal_673193967cd0541e3439c0a728912d40e630c218802828d5b9fd58df6d85600e->enter($__internal_673193967cd0541e3439c0a728912d40e630c218802828d5b9fd58df6d85600e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_673193967cd0541e3439c0a728912d40e630c218802828d5b9fd58df6d85600e->leave($__internal_673193967cd0541e3439c0a728912d40e630c218802828d5b9fd58df6d85600e_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_ffc5601639c31d434999dd519579460a85dee7160cbfd56c8f69a6fe775b476d = $this->env->getExtension("native_profiler");
        $__internal_ffc5601639c31d434999dd519579460a85dee7160cbfd56c8f69a6fe775b476d->enter($__internal_ffc5601639c31d434999dd519579460a85dee7160cbfd56c8f69a6fe775b476d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:request_content.html.twig", "FOSUserBundle:Resetting:request.html.twig", 4)->display($context);
        
        $__internal_ffc5601639c31d434999dd519579460a85dee7160cbfd56c8f69a6fe775b476d->leave($__internal_ffc5601639c31d434999dd519579460a85dee7160cbfd56c8f69a6fe775b476d_prof);

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
