<?php

/* @FOSUser/Group/new.html.twig */
class __TwigTemplate_d492f1102ce700f802b9da1f04b36561a9960ca15fd85ec1b2db0fa271f8ac84 extends Twig_Template
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
        $__internal_6d582d10e2e2872739d819cc13f588b156c62ff34a4b2f9d1010c7186f9bede6 = $this->env->getExtension("native_profiler");
        $__internal_6d582d10e2e2872739d819cc13f588b156c62ff34a4b2f9d1010c7186f9bede6->enter($__internal_6d582d10e2e2872739d819cc13f588b156c62ff34a4b2f9d1010c7186f9bede6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6d582d10e2e2872739d819cc13f588b156c62ff34a4b2f9d1010c7186f9bede6->leave($__internal_6d582d10e2e2872739d819cc13f588b156c62ff34a4b2f9d1010c7186f9bede6_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_cf634d643a37238a85865014f89ee85d073dd9ec90b3989ff5e178e7246aafb6 = $this->env->getExtension("native_profiler");
        $__internal_cf634d643a37238a85865014f89ee85d073dd9ec90b3989ff5e178e7246aafb6->enter($__internal_cf634d643a37238a85865014f89ee85d073dd9ec90b3989ff5e178e7246aafb6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:new_content.html.twig", "@FOSUser/Group/new.html.twig", 4)->display($context);
        
        $__internal_cf634d643a37238a85865014f89ee85d073dd9ec90b3989ff5e178e7246aafb6->leave($__internal_cf634d643a37238a85865014f89ee85d073dd9ec90b3989ff5e178e7246aafb6_prof);

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
